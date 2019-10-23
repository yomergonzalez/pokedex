<!doctype html>
<html lang="en">
<head>
    <title>Pokedex</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-md navbar-dark bg-danger">
    <img src="assets/img/logo-6221638601ef7fa7c835eae08ef67a16.png" width="100">
    <div class="collapse navbar-collapse" id="navbarCollapse">
    </div>
</nav>


<div class="container">

    <div class="row">

        <div class="col-md-12">


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#pokemon-tab" role="tab"
                       aria-controls="pokemon" aria-selected="true">Pokemon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#abilities-tab" role="tab"
                       aria-controls="abilities" aria-selected="false">Abilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#species-tab" role="tab"
                       aria-controls="species" aria-selected="false">Species</a>
                </li>
            </ul>
            <div class="tab-content" id="">
                <div class="tab-pane fade show active" id="pokemon-tab" role="tabpanel" aria-labelledby="home-tab">

                    <div class="card">
                        <div class="card-header bg-danger">
                            <form class="form-inline">
                                <div class="form-group md-sm-3 mb-2">
                                    <input type="text" data-type="pokemon" class="form-control search_input"
                                           placeholder="Search..">
                                </div>
                            </form>
                        </div>
                        <div class="card-body" id="pokemon"><i class="fas fa-spinner fa-spin"></i></div>
                    </div>

                </div>
                <div class="tab-pane fade" id="abilities-tab" role="tabpanel" aria-labelledby="profile-tab">


                    <div class="card">
                        <div class="card-header bg-danger">
                            <form class="form-inline">

                                <div class="form-group mx-sm-3 mb-2">
                                    <input type="text" data-type="abilities" class="form-control search_input"
                                           placeholder="Search..">
                                </div>
                            </form>
                        </div>
                        <div class="card-body" id="abilities"><i class="fas fa-spinner fa-spin"></i></div>
                    </div>

                </div>
                <div class="tab-pane fade" id="species-tab" role="tabpanel" aria-labelledby="contact-tab">

                    <div class="card">
                        <div class="card-header bg-danger">
                            <form class="form-inline">

                                <div class="form-group mx-sm-3 mb-2">
                                    <input type="text" data-type="species" class="form-control search_input"
                                           placeholder="Search..">
                                </div>
                            </form>
                        </div>
                        <div class="card-body" id="species"><i class="fas fa-spinner fa-spin"></i></div>
                    </div>

                </div>
            </div>


        </div>

    </div>

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="assets/js/poke.js"></script>
</body>
</html>