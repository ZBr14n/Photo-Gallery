@extends('layouts.MyHeader')
@push('styles')
    <link href="//fathomless-shore-36561.herokuapp.com/css/override_footer.css" rel="stylesheet" type="text/css">
    {{-- <link href="{{asset('css/override_footer.css')}}" rel="stylesheet" type="text/css">     --}}
@endpush

@section('title') Resume @endsection

@section('info')    

    <div class="page-banner">            

    </div>
    @include("ProfileIcon")
    {{-- add custom content here so that the footer will be pushed down where it supposed to be --}}
    <div class="content-wrapper">
        <h1 class="resume-h1">Technology Summary</h1>
        <div class="skills-wrapper">
            <div class="skills-column">
                <h4>Experienced with: </h4>
                <ul>
                    <li>JavaScript</li>
                    <li>Python</li>
                    <li>SQL</li>
                    <li>HTML 5</li>
                    <li>CSS3 / SASS</li>
                    
                </ul>
            </div>
            <div class="skills-column">
                <h4>Familiar with: </h4>
                <ul>
                    <li>PHP</li>
                    <li>Laravel</li>
                    <li>Next.js</li>
                    <li>Node.js / Express.js</li>
                    <li>Git</li>
                    <li>AWS</li>
                </ul>
            </div>
            <div class="skills-column">
                <h4>Basic Knowledge of: </h4>
                <ul>
                    <li>GraphQL</li>
                    <li>C#</li>
                    <li>Liquid Template</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

