@extends('layouts.app')
<style>
  div.cards {
    margin: 80px auto;
    max-width: 960px;
    text-align: center;
  }
  div.card {
    background: #ffffff;
    display: inline-block;
    margin: 8px;
    max-width: 300px;
    -webkit-perspective: 1000;
    perspective: 1000;
    position: relative;
    text-align: left;
    -webkit-transition: all 0.3s 0s ease-in;
    transition: all 0.3s 0s ease-in;
    width: 300px;
    z-index: 1;
  }
  div.card img {
    max-width: 300px;
  }
  div.card .card__image-holder {
    background: rgba(0, 0, 0, 0.1);
    height: 0;
    padding-bottom: 75%;
  }
  div.card div.card-title {
    background: #ffffff;
    padding: 6px 15px 10px;
    position: relative;
    z-index: 0;
  }
  div.card div.card-title a.toggle-info {
    border-radius: 32px;
    height: 32px;
    padding: 0;
    position: absolute;
    right: 15px;
    top: 10px;
    width: 32px;
  }
  div.card div.card-title a.toggle-info span {
    background: #ffffff;
    display: block;
    height: 2px;
    position: absolute;
    top: 16px;
    -webkit-transition: all 0.15s 0s ease-out;
    transition: all 0.15s 0s ease-out;
    width: 12px;
  }
  div.card div.card-title a.toggle-info span.left {
    right: 14px;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
  }
  div.card div.card-title a.toggle-info span.right {
    left: 14px;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }
  div.card div.card-title h2 {
    font-size: 24px;
    font-weight: 700;
    letter-spacing: -0.05em;
    margin: 0;
    padding: 0;
  }
  div.card div.card-title h2 small {
    display: block;
    font-size: 18px;
    font-weight: 600;
    letter-spacing: -0.025em;
  }
  div.card div.card-description {
    padding: 0 15px 10px;
    position: relative;
    font-size: 14px;
  }
  div.card div.card-actions {
    box-shadow: 0 2px 0px 0 rgba(0, 0, 0, 0.075);
    padding: 10px 15px 20px;
    text-align: center;
  }
  div.card div.card-flap {
    background: #d9d9d9;
    position: absolute;
    width: 100%;
    -webkit-transform-origin: top;
    transform-origin: top;
    -webkit-transform: rotateX(-90deg);
    transform: rotateX(-90deg);
  }
  div.card div.flap1 {
    -webkit-transition: all 0.3s 0.3s ease-out;
    transition: all 0.3s 0.3s ease-out;
    z-index: -1;
  }
  div.card div.flap2 {
    -webkit-transition: all 0.3s 0s ease-out;
    transition: all 0.3s 0s ease-out;
    z-index: -2;
  }
  div.cards.showing div.card {
    cursor: pointer;
    opacity: 0.6;
    -webkit-transform: scale(0.88);
    transform: scale(0.88);
  }
  .no-touch div.cards.showing div.card:hover {
    opacity: 0.94;
    -webkit-transform: scale(0.92);
    transform: scale(0.92);
  }
  div.card.show {
    opacity: 1 !important;
    -webkit-transform: scale(1) !important;
    transform: scale(1) !important;
  }
  div.card.show div.card-title a.toggle-info {
    background: #ff6666 !important;
  }
  div.card.show div.card-title a.toggle-info span {
    top: 15px;
  }


</style>

@section('content')

  <div class="container">

    <div class="row">
      <div class="cards">
        @if(count($episode) != 0)
        @foreach($episode as $epi)
          <div class="card">
            <div class="card__image-holder">
              <img class="card__image" src="{{ '/assets/'.$epi->thumbnail }}" alt="underwater" />
            </div>
            <div class="card-title">

              <h4> {{ $epi->title }} </h4>
              <p> {{ \Illuminate\Support\Str::limit($epi->description, 20) }}</p>
            </div>
          </div>

        @endforeach
        @else
       <p> NO RESULT FOUND TRY ANOTHER</p>
        @endif

      </div>

    </div>




  </div>

@endsection




