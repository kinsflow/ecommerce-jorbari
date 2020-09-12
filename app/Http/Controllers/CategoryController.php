<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Request $request)
    {
        $category_id = decrypt($request->route("category_id"));
        $all_product = Product::whereCategoryId($category_id)->paginate(config("app.paginator_count"));
        $all_categories = Category::all();
        return view("shop-product", ["products" => $all_product, "categories" => $all_categories]);
    }
}
