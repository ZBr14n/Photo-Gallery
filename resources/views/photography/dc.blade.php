@extends('layouts.MyHeader')
@push('styles')
    <link href="{{asset('css/override_footer.css')}}" rel="stylesheet" type="text/css">    
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
            <img src="{{asset('images/cherry_blossom.jpg')}}" alt="Photo" />
            <img src="{{asset('images/monument.jpg')}}" alt="Photo" />
            <img src="{{asset('images/jefferson.jpg')}}" alt="Photo" />
            <img src="{{asset('images/lincoln.jpg')}}" alt="Photo" />
            <img src="{{asset('images/mlk.jpg')}}" alt="Photo" />
            <img src="{{asset('images/monument2.jpg')}}" alt="Photo" />
            <img src="{{asset('images/museum.jpg')}}" alt="Photo" />
            <img src="{{asset('images/IMG_5028.jpg')}}" alt="Photo" />
            <img src="{{asset('images/IMG_4975.jpg')}}" alt="Photo" />
            <img src="{{asset('images/IMG_4974.jpg')}}" alt="Photo" />
            <img src="{{asset('images/IMG_4907.jpg')}}" alt="Photo" />
            <img src="{{asset('images/IMG_4780.jpg')}}" alt="Photo" />
            <img src="{{asset('images/IMG_4661.jpg')}}" alt="Photo" />
            <img src="{{asset('images/IMG_4758.jpg')}}" alt="Photo" />
            <img src="{{asset('images/IMG_4966.jpg')}}" alt="Photo" />




            {{-- <img src={{asset('storage/images/photos/dc/cherry_blossom.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/dc/monument.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/dc/jefferson.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/dc/lincoln.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/dc/mlk.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/dc/monument2.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/dc/museum.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/dc/pyramid.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/dc/IMG_5028.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/dc/IMG_4975.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/dc/IMG_4974.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/dc/IMG_4907.jpg')}} alt="Photo" />            
            <img src={{asset('storage/images/photos/dc/IMG_4780.jpg')}} alt="Photo" />            
            <img src={{asset('storage/images/photos/dc/IMG_4661.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/dc/IMG_4758.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/dc/IMG_4966.jpg')}} alt="Photo" /> --}}



            {{-- <img src="/assets/images/photos/dc/cherry_blossom.jpg" alt="Photo" />
            <img src="/assets/images/photos/dc/monument.jpg" alt="Photo" />

            <img src="/assets/images/photos/dc/jefferson.jpg" alt="Photo" />
            <img src="/assets/images/photos/dc/lincoln.jpg" alt="Photo" />
            <img src="/assets/images/photos/dc/mlk.jpg" alt="Photo" />
            
            <img src="/assets/images/photos/dc/monument2.jpg" alt="Photo" />
            <img src="/assets/images/photos/dc/museum.jpg" alt="Photo" />
            <img src="/assets/images/photos/dc/pyramid.jpg" alt="Photo" />
            <img src="/assets/images/photos/dc/IMG_5028.jpg" alt="Photo" />
            <img src="/assets/images/photos/dc/IMG_4975.jpg" alt="Photo" />
            
            <img src="/assets/images/photos/dc/IMG_4974.jpg" alt="Photo" />
            
            <img src="/assets/images/photos/dc/IMG_4907.jpg" alt="Photo" />
            <img src="/assets/images/photos/dc/IMG_4780.jpg" alt="Photo" />
            <img src="/assets/images/photos/dc/IMG_4975.jpg" alt="Photo" />

            <img src="/assets/images/photos/dc/IMG_4661.jpg" alt="Photo" />
            <img src="/assets/images/photos/dc/IMG_4758.jpg" alt="Photo" />
            <img src="/assets/images/photos/dc/IMG_4966.jpg" alt="Photo" /> --}}
        </div>

        <br />
        <br />
        <br />
        @include('photography-back-link')

    </div>
@endsection        