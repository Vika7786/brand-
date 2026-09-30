<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
class CatalogController extends Controller
{
     public function getIndex() {
        return view('catalog');
    }

    public function getOneByUrl($url=null) {
        $catalog=Catalog::where('url',$url)->first();
        return view('catalog', compact('catalog'));
    }

}
