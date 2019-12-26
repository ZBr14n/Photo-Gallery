@extends('layouts.MyHeader')
@push('styles')
    <link href="//fathomless-shore-36561.herokuapp.com/css/override_footer.css" rel="stylesheet" type="text/css">    
    {{-- <link href="{{asset('css/override_footer.css')}}" rel="stylesheet" type="text/css">     --}}
@endpush


@section('title') New York City @endsection

@section('info')
        
    <div class="content-wrapper">
        <div class="nyc-title"><h1>New York City</h1></div>

        @include('photography-back-link')
        <br />
        <br />
        <br />
        <div class="photos-wrapper">      
            <img src={{asset('storage/images/photos/nyc/tower4.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/nyc/cube.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/nyc/museum.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/nyc/tower.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/nyc/tower2.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/nyc/tower3.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/nyc/soho.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/nyc/shrine.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/nyc/park.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/nyc/columbia_uni.jpg')}} alt="Photo" />




            {{-- <img src="/assets/images/photos/nyc/tower4.jpg" alt="Photo" />
            <img src="/assets/images/photos/nyc/cube.jpg" alt="Photo" />
            <img src="/assets/images/photos/nyc/museum.jpg" alt="Photo" />        
            <img src="/assets/images/photos/nyc/tower.jpg" alt="Photo" />
            <img src="/assets/images/photos/nyc/tower2.jpg" alt="Photo" />
            <img src="/assets/images/photos/nyc/tower3.jpg" alt="Photo" />
            <img src="/assets/images/photos/nyc/soho.jpg" alt="Photo" />
            <img src="/assets/images/photos/nyc/shrine.jpg" alt="Photo" />
            <img src="/assets/images/photos/nyc/park.jpg" alt="Photo" />
            <img src="/assets/images/photos/nyc/columbia_uni.jpg" alt="Photo" /> --}}
            
        </div>


        <br />
        <br />
        <br />
        @include('photography-back-link')
        
    </div>
@endsection