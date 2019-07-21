<?php
namespace Sa;

require '../src/Controller/Lister/SaList.php';
use Sa\Lister\usrLister as ul;

require '../src/Controller/Lister/UserList.php';
require '../src/Model/DbHandler.php';

echo 'Hey<br />';
$usr = new ul\UserList();
$usr->setData();
$usr->showList();

echo '<br />Hello RabIt';


