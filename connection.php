<?php
require 'vendor/autoload.php';
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=money;host=localhost', 'root', '');
class Client extends \atk4\data\Model {
public $table = 'client';
function init() {
parent::init();
$this->addFields(['name','phone','username']);
$this->addField('password',['type'=>'password']);
$this->hasMany('Friends',new Friends);
}
}
class Friends extends \atk4\data\Model {
public $table = 'friends';
function init() {
parent::init();
$this->addFields(['name','phone','email']);
$this->hasOne('client_id',new Client)->addTitle();
}
}