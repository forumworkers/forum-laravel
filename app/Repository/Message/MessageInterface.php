<?php

namespace App\Repository\Message;


interface MessageInterface
{

    public function getAllPosts($options);

    public function getLastPosts($options);
}