<?php
/**
 * Created by PhpStorm.
 * User: lee-pc
 * Date: 02/07/2017
 * Time: 21:17
 */

require 'Form.php';

//instantiate a Form Object
$form=new Form();
var_dump($form); // to output the vars content

echo PHP_EOL; // end of line

$anotherForm =new Form();
var_dump($anotherForm);
echo PHP_EOL;

//verify data type
echo(gettype($form));
?><h1 align="center">hello heroku im working on my code right now </h1><?php
