<?php
session_start();
require 'vendor/autoload.php';
require 'connection.php';
$app = new \atk4\ui\App('Money');
$app->initLayout('Centered');
$crud=$app->add('Crud');
$crud->setModel(new Client ($db));
$crud=$app->add('Crud')
$crud->setModel(new Friend ($db));
