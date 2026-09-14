<?php

namespace App\Repository\Post;


interface PostInterface
{


    public function getAll();


    public function find($id);


    public function delete($id);

    public function getLastPosts($options);
}