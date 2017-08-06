<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include("partials.head")
    <body>
      @include("partials.header")
      @include("partials.search")

      @yield("content")
      
      @include("partials.footer")
    </body>
</html>
