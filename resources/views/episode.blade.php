@extends('layouts.app')

@section('content')


  <div id="showepisode" class="container">

    <showcomponent seriesid="{{ $series}}"></showcomponent>
  </div>


@endsection
