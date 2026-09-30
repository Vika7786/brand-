<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Auth;

class ReviewController extends Controller
{
    public function getIndex(){
        $reviews = Review::where('showhide','1')->orderBy('id','DESC')->simplePaginate(20);
return view('review', compact('reviews'));
    }
    public function postIndex(Request $request){
 $review = new Review;
 $review->message = $request->message;
 $review->name =  $request->name;
 $review->email = $request->email;
 $review->user_id = (Auth::guest())?null:Auth::user()->id;
 $review->save();
 return redirect('thankyoupage');
    }
}

