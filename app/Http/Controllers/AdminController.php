<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function category() {
        return view('frontend/categories');
    }
    public function addCategory() {
        return view('frontend/addCategory');
    }
    public function customer() {
        return view('frontend/customer');
    }
    public function product() {
        return view('frontend/products');
    }
    public function createSale() {
        return view('frontend/createSale');
    }
    public function invoice() {
        return view('frontend/invoice');
    }

}
