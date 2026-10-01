<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OpenGraph;

class OpenGraphController extends Controller
{
    public function postIndex(Request $request){

        $data = [
            'og_title' => $request->og_title,
            'og_plural_title' => $request->og_title,
            'og_image' => $request->og_image,
            'og_description' => $request->og_description,
            'og_url' => $request->og_url,
            'url' => $request->og_url,
            'og_type' => $request->og_type,
        ];

        OpenGraph::updateOrCreate([
        'url' => $request->og_url, 
        ], $data);
        return redirect()->back();
    }
}
