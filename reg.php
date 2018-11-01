<?php
session_start();
require 'vendor/autoload.php';
require 'connection.php';
$app = new \atk4\ui\App('Money');
$app->initLayout('Centered');
$form=$app->add('Form');
$form->setModel(new Client($db));
$form->buttonSave->set('Create an account');
$button=$app->add(['Button','Back']);
$button->link(['index']);