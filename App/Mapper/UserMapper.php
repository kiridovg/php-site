<?php

namespace App\Mapper;


use Framework\Core\Controller;
use PDO;

class UserMapper
{

    public function getUser($email)
    {
        return parent::findOne(array('email' => $email));
    }

    public function checkUser($email): bool
    {
        $statement = Controller::$db->prepare("SELECT COUNT(1) FROM user WHERE email = :email");
        $statement->bindParam(':email', $email);
        $statement->execute();
        $res = $statement->fetchAll(PDO::FETCH_COLUMN);
        if ($res[0] == 1) {
            return true;
        }
        return false;
    }

}