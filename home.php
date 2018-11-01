<?php
session_start();
require 'vendor/autoload.php';
require 'connection.php';
$app = new \atk4\ui\App('Money');
$app->initLayout('Centered');
$client=new Client($db);
$client->load($_SESSION['id']);
$friend=$client->ref('Friends');
$crud=$app->add('Crud');
$crud->setModel($friend,['name','phone','email']);