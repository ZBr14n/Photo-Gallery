@extends('layouts.MyHeader')
@push('styles')
    <link href="//fathomless-shore-36561.herokuapp.com/css/override_footer.css" rel="stylesheet" type="text/css">    
    {{-- <link href="{{asset('css/override_footer.css')}}" rel="stylesheet" type="text/css">     --}}
@endpush


@section('info')
        
    <div class="page-banner">            

    </div>
    @include("ProfileIcon")
    
    <div class="content-wrapper">
        <div class="contact-list">
            <p>
                Email me at
                <a href="mailto:brlam@brianlam.info" title="Email Me">brlam@brianlam.info</a>
            </p>
            <p>
                View my GitHub at 
                <a target="_blank" href="http://www.github.com/ZBr14n">Brian Lam</a>
            </p>        
            <p>            
                See me on <a target="_blank" href="https://www.linkedin.com/in/brian-lam-52703249">LinkedIn</a>                       
            </p>
            <p>
                Feel free to reach out and say hi!
            </p>    
        </div>    
    </div>

    
@endsection