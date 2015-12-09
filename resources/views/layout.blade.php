<!DOCTYPE html>
<!--[if lt IE 10]><html lang="en" class="lt-ie10"><![endif]-->
<!--[if gt IE 9]><html lang="en"><!--<![endif]-->
<head>
  <meta charset="UTF-8" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="tileicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="96x96" href="favicon.png">
  <link rel="icon" href="favicon.png" sizes="32x32">
  <title>{{ $pageName }} | Lousville Uncorked</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="nofollow" /> 
  <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
</head>
<body id="{{ strtolower(preg_replace("/[\s_]/", "-", $pageName)) }}">
  <a href="#main" class="wai-aria">Skip to main content</a>

  <header role="banner">
    <div class="wrapper">
      <a class="main-logo grow" href="/"><img src="{{ URL::asset('images/white-logo-2.png') }}" alt="Louisville Uncorked Homepage"></a>
      
      <button id="show-hide-nav" class="show-hide-nav">Menu</button>
      
      <nav id="main-nav" class="main-navigation" role="navigation">
        <ul>
          <li><a class="team-registration-navlink" href="/registration">Registration</a></li>
          <li><a class="photos-navlink" href="/photos">Photos</a></li>
          <li><a class="faq-navlink" href="/faq">FAQ</a></li>
          <li><a class="contact-us-navlink" href="/contact">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  @yield('banner')

  <main role="main" id="main">
    @yield('content')
  </main>

  <footer class="dark-bg" role="contentinfo">
    <div class="small-wrapper">
      <div class="left">
        <p>&copy; <script>document.write(new Date().getFullYear())</script> Louisville Uncorked</p>
      </div>
      
      <ul class="right">
        <li>Connect with us <a href="https://www.facebook.com/events/141439455995443/" class="external-link icon-facebook2" target="_blank"></a></li>
      </ul>
      
      <span class="lu-icon"></span>
    </div>
  </footer>

</body>
<script src="{{ URL::asset('js/all.js') }}"></script>
@if(strtolower(preg_replace("/[\s_]/", "-", $pageName)) === 'team-registration')
  <script src="{{ URL::asset('js/team-registration.js') }}"></script>
@endif
@if(strtolower(preg_replace("/[\s_]/", "-", $pageName)) === 'home')
  <script src="{{ URL::asset('js/lib/lightbox.js') }}"></script>
  <script src="{{ URL::asset('js/home.js') }}"></script>
@endif
@if(strtolower(preg_replace("/[\s_]/", "-", $pageName)) === 'photos')
  <script src="{{ URL::asset('js/photos.js') }}"></script>
  <script src="{{ URL::asset('js/lib/lightbox.js') }}"></script>
@endif
<script src="{{ URL::asset('js/_global.js') }}"></script>
@if ( Config::get('app.debug') )
  <script type="text/javascript">
    document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
  </script> 
@endif
</html>