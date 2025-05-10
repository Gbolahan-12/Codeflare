

<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
  @include('partials.header')
  <body>
    @include('partials.navbar')

    <main class="container mt-4">
      @yield('content')
    </main>

   
    @include('partials.footer')

  </body>
</html>