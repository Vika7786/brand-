<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getIndex() {
        return view('dashboard');
    }
    public function postIndex(Request $request) {
        dd($request->all());
    }
}
 