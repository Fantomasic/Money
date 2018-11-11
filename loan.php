<?php
session_start();
require 'vendor/autoload.php';
require 'connection.php';
$app = new \atk4\ui\App('Money');
$app->initLayout('Centered');
$friend=new Friends ($db);
$friend->load($_SESSION['friends_id']);
$loan=$friend->ref('Loan');
$refund=$friend->ref('Refund');
$crud=$app->add('Crud');
$crud->setModel($loan,['amount','date']);
$crud2=$app->add('Crud');
$crud2->setModel($refund,['amount','date']);
$app->add(new ReminderBox())->setModel($friend);