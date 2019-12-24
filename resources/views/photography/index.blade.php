@extends('layouts.MyHeader')
{{-- @push('styles')
    <link href="{{asset('css/override_footer.css')}}" rel="stylesheet" type="text/css">    
@endpush --}}

@section('title') Photography @endsection

@section('info')
  
    <div class="content-wrapper">
        <div class="index-title">
            <h1>Photography</h1>
            <h3>Visually documenting the world around me</h3>     
        </div>   

        <div class="album-listing">
            
            <a href="/photography/switzerland" class="switzerland">
                <div class="switzerland-photos">
                    <div class="swiss-section-label">Switzerland</div>  
                    <div class="swiss-section-overlay"></div>                  
                </div>
            </a>
                
            <a href="/photography/nyc" class="nyc">
                <div class="nyc-photos">
                    <div class="nyc-section-label">New York City</div>                    
                    <div class="nyc-section-overlay"></div>
                </div>
            </a>

            <a href="/photography/dc" class="nyc">
                <div class="dc-photos">
                    <div class="dc-section-label">Washington D.C.</div>                    
                    <div class="dc-section-overlay"></div>
                </div>
            </a>            

        </div>
    </div>
    
@endsection