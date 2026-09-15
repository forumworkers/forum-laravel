<?php

namespace App\Repository\PostFree;


interface PostFreeInterface
{
  public function getAllPosts($options);

  public function getLastPosts($options);
}