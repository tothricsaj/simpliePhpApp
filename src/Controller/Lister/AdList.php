<?php
namespace Sa\Lister\adLister;

use listInterface\SaList;
use Sa\Model\dbh\DbHandler;

class AdList implements SaList
{
    private $adverList;
    private $dbHandler;

    public function __construct()
    {
        $this->dbHandler = DbHandler::getInstance();
    }

    public function setData()
    {

        $this->adverList = $this->dbHandler->getAQuery('SELECT * FROM Advertisments');
    }

    public function showList()
    {
        $adDOM = '';

        foreach ($this->adverList as $ad) {
            $usrName = $this->dbHandler->getOne('SELECT name FROM Users WHERE ID='.$ad[1]);
            $adDOM = $adDOM.'<div><p>'.$ad[2].'</p>'.'<p>'.$usrName[name].'</p>'.'</div>';
        }

        echo '<div class=adList><div id="adHead"><p>Advert</p><p>Owner</p></div>'.  $adDOM;
    }
}
