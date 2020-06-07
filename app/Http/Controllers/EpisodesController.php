<?php

namespace App\Http\Controllers;

use App\Episodes;
use App\Series;
use App\EpisodesLike;
use App\SeriesSubsecription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EpisodesController extends Controller
{


  public function __construct()
  {
    $this->middleware('auth');

  }



  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function show($series)
    {

      $user_id = Auth::user()->id;
      $is_subsecriped =  SeriesSubsecription::where('series_id',$series)->where('user_id',$user_id)->first();

      if($is_subsecriped){
        return view('episode',['series'=>$series]);
      }else{
        session(['alert'=> 'warning','alertmsg'=>'You Need To Subsecripe First']);

        return redirect('/home');
      }


    }


    public function showepisode(Request $request)
    {
      $serise_id = $request->input('series_id');
      $episode = Episodes::where('series_id',$serise_id)->get();


      $data = json_encode(['episode'=> $episode], JSON_NUMERIC_CHECK);

      return $data;
    }

    public function likeepisode(Request $request){

      $episode_id = $request->input('episodeid');
      $user_id = Auth::user()->id;

      if ($user_id && $episode_id){
        $like = new EpisodesLike();
        $like->episode_id = $episode_id;
        $like->user_id = $user_id ;
        $like->save();


        $data = json_encode(['success'=> 'Success'], JSON_NUMERIC_CHECK);

        return $data;

      }

    }

    public function getlike(Request $request){

      $episode_id = $request->input('episodeid');
      $user_id = Auth::user()->id;
      $user_like_result = false;
      $user_like = EpisodesLike::where('episode_id',$episode_id)->where('user_id',$user_id)->first();
      $episodelike = EpisodesLike::where('episode_id',$episode_id)->count();
      if ($user_like){
        $user_like_result = true;
      }

      $data = json_encode(['user_like'=> $user_like_result,'episodelike'=>$episodelike], JSON_NUMERIC_CHECK);

      return $data;

    }


    public function unlike(Request $request){
      $episode_id = $request->input('episodeid');
      $user_id = Auth::user()->id;

      $result = EpisodesLike::where('episode_id',$episode_id)->where('user_id',$user_id)->delete();

      $data = json_encode(['result'=> $result], JSON_NUMERIC_CHECK);

      return $data;

    }



    public function random(){


      $epi = Episodes::inRandomOrder()->limit(5)->get();

      return view('random',['episode'=>$epi]);


    }


}
