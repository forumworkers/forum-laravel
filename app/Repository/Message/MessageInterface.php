<?php

namespace App\Repository\Message;


interface MessageInterface
{

    public function getAllReplysMessages($id_user);

    public function  getLimitReplysMessages($id_user);

    public function getLimitReplys($id_user);

    public function getAllReplys($id_user);

    public function getLimitMessages($id_user);
}