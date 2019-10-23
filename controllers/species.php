<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 22/10/19
 * Time: 19:56
 */
namespace controllers;
require_once '../vendor/autoload.php';
use models\View;
use models\PokeAPI;
use models\RequestTypes;

$pokeAPI = new PokeAPI(RequestTypes::$SPECIES);

switch($_SERVER['REQUEST_METHOD'])
{


    case 'GET':

        try{

            $next = isset($_GET['next']) ? $_GET['next'] : null;

            $res = $pokeAPI->unNamedList($next);

            echo $res->getResult();

        }catch (PokeAPIException $e){

            echo json_encode(['empty'=> true]);
        }


        break;

    case 'POST':

        try{

            $val = isset($_POST['val']) ? $_POST['val'] : null;

            $res = $pokeAPI->getResourceByIdORName($val);

            echo $res->getResult();

        }catch (PokeAPIException $e){

            echo json_encode(['empty'=> true]);
        }


        break;

    default:

        echo json_encode(['empty'=> true]);

        break;
}