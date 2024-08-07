<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title', 'Imad Daimi - dashboard login')</title>
    <link rel="icon" type="image/x-icon" href="{{ app('logo') }}" style="transform: scale(1.2);">
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/simplebar.css')}}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/feather.css')}}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/daterangepicker.css')}}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/app-light.css')}}" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{asset('dashboard/css/app-dark.css')}}" id="darkTheme">
  </head>
  <body class="dark ">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        
        <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" action="{{ route('login') }}" method="POST">
            @csrf
           <img src="{{ app('logo') }}">
              <h1 class="h6 mb-3">Sign in</h1>
            @if ($errors->any())
                @if($errors->has('msg'))
                    <p class="alert alert-danger"id="alert" role="alert" style="padding-top:5px;padding-bottom:5px; padding-left: 10px; background-color:brown;border-radius: 20px; color:beige;">{{ $errors->first('msg') }}</p>
                @endif
            @endif
           
          
          
          <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="text" id="inputEmail" class="form-control form-control-lg"  name="email" value="{{old('email')}}" placeholder="Email address" autofocus="">
            <div style="text-align: left;">
                @if ($errors->has('email'))
                    <p class="text-error more-info-err" style="color: red;">
                        {{ $errors->first('email') }}</p>
                @endif
            </div>
            
          </div>
          <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control form-control-lg" placeholder="Password" >
            <div style="text-align: left;">
                @if ($errors->has('password'))
                        <p class="text-error more-info-err" style="color: red;">
                            {{ $errors->first('password') }}</p>
                @endif
            </div>
            
          </div>
         
          <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
          <p class="mt-5 mb-3 text-muted">© 2024 - Imad Eldaimi</p>
        </form>
      </div>
    </div>
    <script src="{{asset('dashboard/js/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/js/popper.min.js')}}"></script>
    <script src="{{asset('dashboard/js/moment.min.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/js/simplebar.min.js')}}"></script>
    <script src="{{asset('dashboard/js/daterangepicker.js')}}"></script>
    <script src="{{asset('dashboard/js/jquery.stickOnScroll.js')}}"></script>
    <script src="{{asset('dashboard/js/tinycolor-min.js')}}"></script>
    <script src="{{asset('dashboard/js/config.js')}}"></script>
    <script src="{{asset('dashboard/js/apps.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
        $('#alert').fadeOut('fast');
        }, 5000);
        });
        </script>
  </body>
</html>
</body>
</html>