<?php

namespace App\Http\Controllers;
use App\Episodes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Series;
use Illuminate\Http\Request;

class SearchController extends Controller
{



  public function search(Request $request){


    $val = $request->input('title');



    $episode =  DB::table('episodes')
      ->select('episodes.*')->where('episodes.title', 'like', ''.$val.'%')
      ->get();



    return view('search',['episode'=>$episode]);





  }

}

