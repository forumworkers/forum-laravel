<?php

namespace App\Repository\Post;


interface PostInterface
{

    public function getAllPosts($options);

    public function getLastPosts($options);
}