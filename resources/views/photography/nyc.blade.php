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

            <img src={{url('/images/my_images/photos/nyc/tower4.JPG')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/nyc/cube.JPG')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/nyc/museum.JPG')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/nyc/tower.JPG')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/nyc/tower2.JPG')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/nyc/tower3.JPG')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/nyc/soho.JPG')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/nyc/shrine.JPG')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/nyc/park.JPG')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/nyc/columbia_uni.JPG')}} alt="Photo" />




            {{-- <img src="/assets/images/photos/nyc/tower4.JPG" alt="Photo" />
            <img src="/assets/images/photos/nyc/cube.JPG" alt="Photo" />
            <img src="/assets/images/photos/nyc/museum.JPG" alt="Photo" />        
            <img src="/assets/images/photos/nyc/tower.JPG" alt="Photo" />
            <img src="/assets/images/photos/nyc/tower2.JPG" alt="Photo" />
            <img src="/assets/images/photos/nyc/tower3.JPG" alt="Photo" />
            <img src="/assets/images/photos/nyc/soho.JPG" alt="Photo" />
            <img src="/assets/images/photos/nyc/shrine.JPG" alt="Photo" />
            <img src="/assets/images/photos/nyc/park.JPG" alt="Photo" />
            <img src="/assets/images/photos/nyc/columbia_uni.JPG" alt="Photo" /> --}}
            
        </div>


        <br />
        <br />
        <br />
        @include('photography-back-link')
        
    </div>
@endsection