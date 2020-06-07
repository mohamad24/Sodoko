@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        @if (session('alert'))
          <div class="alert alert-{{ session('alert') }}" role="alert">
            {{ session('alertmsg') }}
          </div>
          @php session()->forget('alert'); @endphp
        @endif




        @if(isset($series))
          <div class="row mt-5">
          @foreach($series as $ser)

                <div class="col-md-6">

                  <div class="card-counter info">
                    @if(is_subsecriped($ser->id))
                      <a class="btn btnwatch" href="{{ url('/episode/'.$ser->id.'')}}">  Watch Now </a>
                    <a href="{{ url('/series/unsubscribe/'.$ser->id.'') }}" class="btn subbtn">UN Subscribe</a>
                    @else
                      <a href="{{ url('/series/subscribe/'.$ser->id.'') }}" class="btn subbtn">Subscribe</a>
                    @endif
                    <span class="count-numbers">{{ $ser->title }}</span>
                    <span class="count-name">{{ $ser->airingtime }}</span>
                  </div>

                </div>

          @endforeach
          </div>
        @endif


        </div>

        <div class="col-md-4">



        </div>

    </div>
</div>
@endsection


