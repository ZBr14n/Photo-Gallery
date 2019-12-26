<html>
    <head>
        <title>@yield('title')</title>     
        <link rel="icon" href="{{ url('images/logo.png') }}" type="image/x-icon"/> 
        <link href="{{mix('css/swiss.css')}}" rel="stylesheet">          
        <link href="{{mix('css/profile-pic.css')}}" rel="stylesheet">    
        <link href="{{mix('css/home-section.css')}}" rel="stylesheet">           
        <link href="{{mix('css/footer.css')}}" rel="stylesheet">           
        <link href="{{mix('css/resume.css')}}" rel="stylesheet">          
        <link href="{{mix('css/photography.css')}}" rel="stylesheet">   
        @stack('styles')       
    </head>
    <body>
        <div class="page-border"></div>
        
        <nav style="background-color: black; padding: 1em;">
            <div class="nav-container">
                <a href="/" class="homeLink">Brian Lam</a>
                <div class="float-right">                    
                    <a href="http://brianlam.info/" target="_blank" class="nav-link-about">About Me</a>
                    <a href="/contact" class="nav-link-contact">Contact</a>
                </div>
            </div>            
        </nav>

        <div class="page-banner-overlay page-banner-overlay-active"></div>
        
        <div class="container">
            @yield('info')       
        </div>                             
        @include('footer')    
    </body>
    
</html>