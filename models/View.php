<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 21/10/19
 * Time: 21:39
 */
namespace models;

class  View {

    protected $_name;
    protected $_data = array();

    function __construct($name,$data = null){

        $this->_name = $name;
        $this->_data = $data;

    }

    /**
     * @return array
     */
    public function getData ()
    {
        return $this->_data;
    }


    public function render(){

        require '../views/'.$this->_name.".php";

    }




}