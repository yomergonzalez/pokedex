<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 21/10/19
 * Time: 22:01
 */

namespace models;
use models\PokeAPIException;
include_once "Request.php";
include_once "PokeAPIException.php";

class  PokeAPI  {


    private $_url;
    private $_request;
    private $_type;

    /**
     * PokeAPI constructor.
     * @param $_url
     */
    public function __construct ( $type )
    {
        $this->_url = "https://pokeapi.co/api/v2/";
        $this->_request = new Request();
        $this->_type = $type;
    }

    /**
     * @param Request $request
     */
    public function setRequest ( Request $request )
    {
        $this->_request = $request;
    }

    /**
     * @return mixed
     */
    public function getType ()
    {
        return $this->_type;
    }


    public function unNamedList($lenght = 0, $offset = 40){

        $this->_request->call($this->_url."{$this->_type}/?limit={$lenght}&offset={$offset}", "GET",null);

        if($this->_request->getCode()!=200) throw  new PokeAPIException();

        return $this->_request;
    }


    public function getResourceByIdORName($idOrName){

        $name = urlencode(trim($idOrName));

        $this->_request->call($this->_url."{$this->_type}/{$name}", "GET",null);

        if($this->_request->getCode()!=200) throw  new PokeAPIException();

        return $this->_request;

    }


}