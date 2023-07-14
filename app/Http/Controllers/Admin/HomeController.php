<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $products_count = Product::count();

        $category_count = Category::count();

        $user_count = User::count();

        return view('admin.home.index', [
            'products_count' => $products_count,
            'category_count' => $category_count,
            'user_count' => $user_count,
        ]);
    }
}
