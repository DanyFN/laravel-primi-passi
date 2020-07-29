<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href=" {{ asset("css/app.css") }} ">
    <title></title>
  </head>
  <body>
    {{-- inludo l'header --}}
    @include("partials.header")

    {{-- main --}}
    @yield('content')    {{-- ===> segnaposto --}}

    {{-- includo il footer --}}
    @include("partials.footer")


  </body>
</html>
