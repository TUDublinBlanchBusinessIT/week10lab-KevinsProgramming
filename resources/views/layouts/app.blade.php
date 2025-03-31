<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{ config('app.name') }}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
              integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap 5 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}"></script>
    </head>

    <body>
        <!-- Bootstrap 5 Navbar -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
          <div class="container-fluid">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href={{ route('bookings.create')}}>Create Booking</a>
                
              </li>
              <li class="nav-item">
              <a class="nav-link" href={{ route('members.create')}}>New Members</a>
              </li>
              </li>
              <li class="nav-item">
              <a class="nav-link" href={{ route('courts.create')}}>New Courts</a>
              </li>
            </ul>
          </div>
        </nav>
        
        <div id="page-content-wrapper"> 
            <div class="container-fluid"> 
                <div class="row">
                    <!-- Well for left side of the page (to compensate for widescreen) -->
                    <div class="col-lg-2"></div>
                    <!-- Slot for content from Lower Level views with sections called 'content' pulled in here -->
                    <div class="col-lg-8"> @yield('content') </div>
                    <!-- Well for right side of the page (to compensate for widescreen) -->
                    <div class="col-lg-2"></div> 
                </div> 
            </div> 
        </div> 

        <!-- Webpack mix npm generated -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
        <script src="{{asset('js/app.js')}}"></script>
        @stack('js_scripts')
    </body>
</html>
