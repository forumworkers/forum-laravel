<?php

namespace App\Repository\PostFree;


interface PostFreeInterface
{


    public function getAll();


    public function find($id);


    public function delete($id);

    public function getLastPosts($options);
}