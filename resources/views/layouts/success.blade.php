<!DOCTYPE html>
<html lang="en">
  
<!-- font-family: 'Assistant', sans-serif;
font-family: 'Playfair Display', serif; -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @stack('prepend-style')
   @include('includes.style')
   @stack('addon-style')
</head>
<body>
  <!-- navbar -->
 @include('includes.navbar-alternate')
 <!-- main -->
        @yield('content')
    <!-- footer -->
   @include('includes.footer')
   <!-- script -->
   @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>
</html>