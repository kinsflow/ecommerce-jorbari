<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function search(Request $request)
    {
        if ($request->search) {
            $products = $this->handleSearch($request->search);
        } else {
            $products = [];
        }
        return view("search", ["products" => $products]);
    }

    private function handleSearch($search_value)
    {
        $search = Product::where("title", "like", "%" . $search_value . "%")
            ->orWhereHas("category", function ($q) use ($search_value) {
                $q->where("name", "like", "%" . $search_value . "%");
            })->get();
        return $search;
    }
}
