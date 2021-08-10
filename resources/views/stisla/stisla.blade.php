<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('vendor/stisla/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/stisla/css/fontawesome.min.css') }}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('vendor/stisla/css/style.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/stisla/css/components.min.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('stisla.includes.navbar')
      @include('stisla.includes.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{ $title }}</h1>
            @if (isset($breadcrumbs))
            <div class="section-header-breadcrumb">
              @foreach ($breadcrumbs as $breadcrumb)
              <div class="breadcrumb-item @if ($loop->last) active @endif">
                @if (is_array($breadcrumb) && count($breadcrumb) == 2)
                <a href="{{ $breadcrumb[1] }}">{{ $breadcrumb[0] }}</a>
                @else
                {{ $breadcrumb }}
                @endif
              </div>
              @endforeach
            </div>
            @endif
          </div>

          <div class="section-body">
            @yield('section-body')
          </div>
        </section>
      </div>
      @include('stisla.includes.footer')
    </div>
  </div>


  <!-- General JS Scripts -->
  <script src="{{ asset('vendor/stisla/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('vendor/stisla/js/popper.min.js') }}"></script>
  <script src="{{ asset('vendor/stisla/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('vendor/stisla/js/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('vendor/stisla/js/moment.min.js') }}"></script>
  <script src="{{ asset('vendor/stisla/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{ asset('vendor/stisla/js/scripts.js') }}"></script>
  <script src="{{ asset('vendor/stisla/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
</body>

</html>