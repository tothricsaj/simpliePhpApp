<?php
require_once 'header.php';
use Sa\Lister\adLister as al;

require '../src/Controller/Lister/AdList.php';
require '../src/Model/DbHandler.php';

$ad = new al\AdList();
$ad->setData();
?>
<h2>Adverts</h2>
    <div>
        <?php $ad->showList(); ?>
    </div>
<a href="/">Go back</a>


