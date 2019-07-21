<?php
namespace Sa;

require '../src/Controller/Lister/SaList.php';
use Sa\Lister\usrLister as ul;
use Sa\Lister\adLister as al;

require '../src/Controller/Lister/UserList.php';
require '../src/Controller/Lister/AdList.php';
require '../src/Model/DbHandler.php';

echo 'Hey<br />';

$usr = new ul\UserList();
$ad = new al\AdList();

$usr->setData();
$usr->showList();

$ad->setData();
$ad->showList();

echo '<br />Hello RabIt';
?>


