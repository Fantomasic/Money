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
$this->hasMany('Loan',new Loan)->addField('total_loan',['aggregate'=>'sum', 'field'=>'amount']);
$this->hasMany('Refund',new Refund)->addField('total_refund', ['aggregate'=>'sum', 'field'=>'amount']);
}
}
class Loan extends \atk4\data\Model {
public $table = 'loan';
function init() {
parent::init();
$this->addField('amount',['type'=>'money']);
$this->addField('date',['type'=>'date']);
$this->hasOne('friends_id',new Friends)->addTitle();
}
}
class Refund extends \atk4\data\Model {
public $table = 'refund';
function init() {
parent::init();
$this->addField('amount',['type'=>'money']);
$this->addField('date',['type'=>'date']);
$this->hasOne('friends_id',new Friends)->addTitle();
}
}
class ReminderBox extends \atk4\ui\View {
    public $ui='piled segment';
    /**
     * Specify which contact to remind about
     */
    public function setModel(\atk4\data\Model $friend) {
        $this->add('Header')->set('Please repay my loan, '.$friend['name']);
        $this->add('Text')->addParagraph('I have loaned you a total of ' . $friend['total_loan']
        . '€ from which you still owe me ' . ($friend['total_loan']-$friend['total_refund']) . '€. Please pay back!');
        $this->add('Text')->addParagraph('Thanks!');
    }
}
