$( document ).ready(function() {
    getList();

    $('a[data-toggle="tab"]').on('click', function (e) {
       getList($(e.target).attr('aria-controls'));
    });

    $('.search_input').on('keyup', function (e) {
        var val = $(this).val();
        var type = $(this).data('type');
        search(type,val);
    })

});

var timer = null;



function search(type,val) {

    if (timer) {
        clearTimeout(timer); //cancel the previous timer.
        timer = null;
    }

    if(val==""){
        getList(type);
        return;
    }

    timer = setTimeout(function () {

        var json = {};
        json.val = val;

        $.post( type, json, function( data ) {
            var data = JSON.parse(data);
            if(data.empty){
                $('#'+type).html('Not Found');
            }else{
                $('#'+type).html(armResult(data));
            }
        });

    }, 1000);



}




function getList(type = 'pokemon') {

    $.get( type, function( data ) {
        var data = JSON.parse(data);
        $('#'+type).html(armList(data.results));
    });
    
}




function armList(data){

    var ul = $('<ul>',{class : 'list-group'});
    $(data).each(function(inx,val) {
        ul.append($('<li>',{ class: "list-group-item list-group-item-primary"}).text(val.name))
    });

    return ul;
}


function armResult(val){

    var ul = $('<ul>',{class : 'list-group'});
    ul.append($('<li>',{ class: "list-group-item list-group-item-default"}).text("ID: "+val.id + " - "+val.name))


    return ul;
}