<?php

namespace App\Http\Controllers;

use App\Series;
use App\Episodes;
use App\SeriesSubsecription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


   public function subscribe($id){

     $user_id = Auth::user()->id;
     $sub = new SeriesSubsecription();

      $sub->series_id = $id;
      $sub->user_id = $user_id;
      $result =  $sub->save();


      if($result) {
        return redirect('/home');
      }
   }


  public function unsubscribe($id){

    $user_id = Auth::user()->id;

    $result = SeriesSubsecription::where('series_id',$id)->where('user_id',$user_id)->delete();

  if($result)
  {
    return redirect('/home');
  }

  }
}
