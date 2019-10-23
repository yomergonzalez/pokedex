<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 22/10/19
 * Time: 08:43
 */
namespace controllers;
require_once '../vendor/autoload.php';
use models\View;


$view = new View('index');
$view->render();