<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 22/10/19
 * Time: 23:21
 */
namespace tests;

use PHPUnit\Framework\TestCase;
use models\PokeAPI;
use models\RequestTypes;
use models\Request;
use models\PokeAPIException;

class PokeAPITest extends TestCase
{
    private $_poke;
    private $_requestMock;

    public function setUp ()
    {
        $this->_poke = new PokeAPI(RequestTypes::$POKEMON);
        $mock = $this->createMock(Request::class);
        $mock->method('getCode')
            ->willReturn(401);

        $this->_requestMock = $mock;

    }

    public function test__construct ()
    {
        $poke = new PokeAPI(RequestTypes::$SPECIES);

        $this->assertContainsOnlyInstancesOf( PokeAPI::class,[$poke]);

        $this->assertEquals(RequestTypes::$SPECIES,$poke->getType());

    }

    public function testUnNamedList ()
    {

        $request = $this->_poke->unNamedList();
        $result = $request->getResult();

        $this->assertNotEmpty($result);

        $decode = json_decode($result);

        $this->assertGreaterThan(1,$decode->results);
    }

    public function testGetResourceByName ()
    {

        $request = $this->_poke->getResourceByIdORName('pikachu');
        $result = $request->getResult();

        $this->assertNotEmpty($result);

        $decode = json_decode($result);
        $this->assertEquals('pikachu',$decode->name);

        return $decode->id;

    }

    /**
     * @param $id
     * @depends testGetResourceByName
     */
    public function testGetResourceById($id)
    {

        $request = $this->_poke->getResourceByIdORName($id);
        $result = $request->getResult();

        $this->assertNotEmpty($result);

        $decode = json_decode($result);
        $this->assertEquals($id,$decode->id);

        return $decode->id;

    }

    /**
     * @depends testGetResourceById
     * @throws PokeAPIException
     */
    public function testGetResourceByIdWithException($id){

        $this->_poke->setRequest($this->_requestMock);

        $this->expectException(PokeAPIException::class);
        $this->_poke->getResourceByIdORName($id);

    }


    /**
     * @throws PokeAPIException
     */
    public function testUnNamedListException(){

        $this->_poke->setRequest($this->_requestMock);

        $this->expectException(PokeAPIException::class);

        $this->_poke->unNamedList();

    }


}
