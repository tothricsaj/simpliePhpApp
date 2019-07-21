<?php
namespace Sa\Lister\usrLister;

use listInterface\SaList;
use Sa\Model\dbh\DbHandler;


class UserList implements SaList
{
    private $userList;

    public function setData()
    {
        $dbHandler = DbHandler::getInstance();
        $this->userList = $dbHandler->getAQuery('SELECT * FROM Users');
    }

    public function showList()
    {

        $usrDOM = '';

        foreach ($this->userList as $usr) {
            $usrDOM = $usrDOM.'<p>'.$usr[1].'</p>';
        }

        echo '<div class=userList>'.  $usrDOM;
    }

    public function test()
    {
        return 'Test function UserList';
    }
}
