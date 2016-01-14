<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="../../favicon.ico">

    <title>Store Project With Laravel</title>

    <!-- Bootstrap core CSS -->
    {!! HTML::style('css/bootstrap.css') !!}

    {!! HTML::style('css/stylesheet1.css') !!}
    

    <!-- Jquery Libarary -->
    {!! HTML::script('js/jquery.js') !!}

    <!-- Bootstrap core Js -->
    {!! HTML::script('js/bootstrap.js') !!}

    <!-- Side Menu Style -->
    {!! HTML::style('css/sidemenu.css') !!}
    {!! HTML::script('js/script.js') !!}
  </head>

  <body>
    @yield('sidemenu')

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TEAM COBHAM</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Accueil</a></li>
            <li><a href="#dossier">Dossier</a></li>
            <li><a href="{{ url('client') }}">Client</a></li>
            <li><a href="{{ url('article') }}">Article</a></li>
            <li><a href="#client">Composant</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          @if(!Auth::check())
            <li><a href="{{ action('Auth\AuthController@getLogin') }}">Login</a></li>
            <li><a href="{{ action('Auth\AuthController@getRegister') }}">Register</a></li>
          @else
            <li><a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a></li>
          @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container" style="margin-top:50px;">
      
      <div class="col-sm-8">
          @yield('content')

      </div>

      <div class="col-sm-4">

          @yield('sidebar')
      </div> 

    </div><!-- /.container -->


    @include('includes/errors')
    @include('includes/validations')

    <script type="text/javascript">
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        body = document.body;

      showLeft.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeft' );
      };

      function disableOther( button ) {
        if( button !== 'showLeft' ) {
          classie.toggle( showLeft, 'disabled' );
        }
      }
    </script>
</body>
</html>