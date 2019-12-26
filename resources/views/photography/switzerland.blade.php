@extends('layouts.MyHeader')
@push('styles')
    {{-- <link href="//fathomless-shore-36561.herokuapp.com/css/override_footer.css" rel="stylesheet" type="text/css">     --}}
    <link href={{url('/css/override_footer.css')}} rel="stylesheet" type="text/css">    
@endpush

@section('title') Switzerland @endsection

@section('info')
        
    <div class="content-wrapper">
        <div class="swiss-title">
            <h1>Switzerland</h1>            
        </div>
        
        @include('photography-back-link')
        <div class="photos-wrapper">
            {{url('/images/my_images/photos/switzerland/olympic_clock.jpg')}}
            {{url('/images/cube.JPG')}}

            <img src={{url('/images/my_images/photos/switzerland/olympic_clock.jpg')}} alt="Photo" />
                        
            {{-- <img src="storage/images/photos/switzerland/olympic_truce.jpg" alt="Photo" /> --}}
            
            <img src={{url('/images/cube.JPG')}} alt="Image" />
            <img src={{url('/images/Profile.jpg')}} alt="Image" />
            <img src={{url('/images/museum.JPG')}} alt="Image" />
            



            {{-- <img src={{asset('storage/images/photos/switzerland/olympic_clock.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/switzerland/olympic_truce.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/switzerland/olympic_museum.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/switzerland/castle.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/switzerland/mountain2.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/switzerland/mountain3.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/switzerland/panoramic2.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/switzerland/mountain.jpg')}} alt="Photo" />
            <img src={{asset('storage/images/photos/switzerland/castle_cage.jpg')}} alt="Photo" /> --}}
            



            {{-- <img src="/assets/images/photos/switzerland/olympic_clock.jpg" alt="Photo" />
            <img src="/assets/images/photos/switzerland/olympic_truce.jpg" alt="Photo" />
            <img src="/assets/images/photos/switzerland/olympic_museum.jpg" alt="Photo" />
            <img src="/assets/images/photos/switzerland/castle.jpg" alt="Photo" />                        
            <img src="/assets/images/photos/switzerland/mountain2.jpg" alt="Photo" />
            <img src="/assets/images/photos/switzerland/mountain3.jpg" alt="Photo" />
            <img src="/assets/images/photos/switzerland/panoramic2.jpg" alt="Photo" />
            <img src="/assets/images/photos/switzerland/mountain.jpg" alt="Photo" />
            <img src="/assets/images/photos/switzerland/castle_cage.jpg" alt="Photo" /> --}}
        </div>

        <br />
        <br />
        <br />
        @include('photography-back-link')
    </div>
@endsection