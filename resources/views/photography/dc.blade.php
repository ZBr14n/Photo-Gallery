@extends('layouts.MyHeader')
@push('styles')
    <link href="//fathomless-shore-36561.herokuapp.com/css/override_footer.css" rel="stylesheet" type="text/css">    
    {{-- <link href="{{asset('css/override_footer.css')}}" rel="stylesheet" type="text/css">     --}}
@endpush


@section('title') Washington D.C. @endsection

@section('info')

<div class="content-wrapper">
    <div class="dc-title"><h1>Washington D.C.</h1></div>

        @include('photography-back-link')
        <br />
        <br />
        <br />
        <div class="photos-wrapper">  
            <img src={{url('/images/my_images/photos/dc/cherry_blossom.jpg')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/dc/monument.jpg')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/dc/jefferson.jpg')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/dc/lincoln.jpg')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/dc/mlk.jpg')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/dc/monument2.jpg')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/dc/museum.jpg')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/dc/IMG_5028.jpg')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/dc/IMG_4975.jpg')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/dc/IMG_4974.jpg')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/dc/IMG_4907.jpg')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/dc/IMG_4980.jpg')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/dc/IMG_4661.jpg')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/dc/IMG_4758.jpg')}} alt="Photo" />
            <img src={{url('/images/my_images/photos/dc/IMG_4966.jpg')}} alt="Photo" />
            



            {{-- <img src="/assets/images/photos/dc/cherry_blossom.JPG" alt="Photo" />
            <img src="/assets/images/photos/dc/monument.JPG" alt="Photo" />
            <img src="/assets/images/photos/dc/jefferson.JPG" alt="Photo" />
            <img src="/assets/images/photos/dc/lincoln.JPG" alt="Photo" />
            <img src="/assets/images/photos/dc/mlk.JPG" alt="Photo" />            
            <img src="/assets/images/photos/dc/monument2.JPG" alt="Photo" />
            <img src="/assets/images/photos/dc/museum.JPG" alt="Photo" />
            <img src="/assets/images/photos/dc/pyramid.JPG" alt="Photo" />
            <img src="/assets/images/photos/dc/IMG_5028.JPG" alt="Photo" />
            <img src="/assets/images/photos/dc/IMG_4975.JPG" alt="Photo" />
            
            <img src="/assets/images/photos/dc/IMG_4974.JPG" alt="Photo" />
            
            <img src="/assets/images/photos/dc/IMG_4907.JPG" alt="Photo" />
            <img src="/assets/images/photos/dc/IMG_4780.JPG" alt="Photo" />
            <img src="/assets/images/photos/dc/IMG_4975.JPG" alt="Photo" />

            <img src="/assets/images/photos/dc/IMG_4661.JPG" alt="Photo" />
            <img src="/assets/images/photos/dc/IMG_4758.JPG" alt="Photo" />
            <img src="/assets/images/photos/dc/IMG_4966.JPG" alt="Photo" /> --}}
        </div>

        <br />
        <br />
        <br />
        @include('photography-back-link')

    </div>
@endsection        