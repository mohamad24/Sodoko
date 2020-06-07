<?php

if (! function_exists('is_subsecriped')) {
  function is_subsecriped($id)
  {
    $user_id = auth()->check() ? auth()->user()->id : 0;


   $result = \App\SeriesSubsecription::where('series_id',$id)->where('user_id',$user_id)->first();

   if($result){
     return true;
   }
   return false;

  }
}
