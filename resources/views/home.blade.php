@extends('layouts.MyHeader')
@push('styles')
    <link href="//fathomless-shore-36561.herokuapp.com/css/override_footer.css" rel="stylesheet" type="text/css">    
    {{-- <link href="{{asset('css/override_footer.css')}}" rel="stylesheet" type="text/css">     --}}
@endpush

@section('title') Brian Lam @endsection

@section('info')    
    
    <div class="page-banner">            

    </div>
    @include("ProfileIcon")
    @include('album')
    
@endsection