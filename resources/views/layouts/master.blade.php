<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include("partials.head")
    <body>
      <div class="container">
        
        @include("partials.header")
        @include("partials.search")

        @yield("content")

        @include("partials.footer")
    </div>
    </body>
</html>
