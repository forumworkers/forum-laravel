<?php

namespace App\Repository\Category;


use App\Models\Category;
use App\Repository\Category\CategoryInterface as CategoryInterface;



class CategoryRepository implements CategoryInterface
{
    public $category;


    function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getCategorys($options)
	{
		return Category::select('categorys.category_name','sc.subcategory_name','mc.maincategory_icon','mc.maincategory_name','mc.maincategory_url')
      ->join('subcategorys as sc', 'sc.category_id', '=', 'categorys.id')
      ->join('maincategorys as mc', 'mc.subcategory_id', '=', 'sc.id')
      ->where('mc.subcategory_id', $options)
      ->get();
      // ->paginate(10);
	}
}