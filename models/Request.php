<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 21/10/19
 * Time: 21:46
 */
namespace models;


class  Request {

    private $_url;
    private $_params;
    private $_method;
    private $_result;
    private $_code;
    private $_resultdecode;


    public function call($url,$method,$params){

        $this->_method = $method;
        $this->_url = $url;
        $this->_params = $params;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,               $this->_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,    1 );
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $this->_method);
        curl_setopt($ch, CURLOPT_POSTFIELDS,        json_encode($this->_params) );

        $head = array('Content-Type: application/json');
        curl_setopt($ch, CURLOPT_HTTPHEADER,  $head);

        $this->_result= curl_exec ($ch);
        $this->_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $this->_resultdecode = json_decode($this->_result);

    }


    /**
     * @return mixed
     */
    public function getUrl ()
    {
        return $this->_url;
    }

    /**
     * @param mixed $_url
     */
    public function setUrl ( $_url )
    {
        $this->_url = $_url;
    }

    /**
     * @return mixed
     */
    public function getParams ()
    {
        return $this->_params;
    }

    /**
     * @param mixed $_params
     */
    public function setParams ( $_params )
    {
        $this->_params = $_params;
    }

    /**
     * @return mixed
     */
    public function getResult ()
    {
        return $this->_result;
    }

    /**
     * @param mixed $_result
     */
    public function setResult ( $_result )
    {
        $this->_result = $_result;
    }

    /**
     * @return mixed
     */
    public function getCode ()
    {
        return $this->_code;
    }

    /**
     * @param mixed $_code
     */
    public function setCode ( $_code )
    {
        $this->_code = $_code;
    }




}