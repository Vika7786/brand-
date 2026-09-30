<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\OpenGraph;

class BaseComposer{
    public function compose (View $view){
        $url = $_SERVER['REQUEST_URI'];
        $og = OpenGraph::where('url', $url)->first();
        $og_type = $og->og_type??'website';
        $og_url = $og->og_url??env('APP_URL','http://localhost:8000');
        $og_image = $og->og_image??'/media/no_photo.jpg';
        $og_description = $og->og_description??'Defauilt text for description';
        $og_title = $og->og_title??'Defauilt title';
 

      $view->with('url',$url)
        ->with('og_type',$og_type)
        ->with('og_url',$og_url)
        ->with('og_image',$og_image)
        ->with('og_title',$og_title)
        ->with('og_description',$og_description);
    }
}