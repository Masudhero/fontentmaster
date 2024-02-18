<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reflex soft l.t.d</title>
    <link rel="stylesheet" href="{{ asset('/') }}style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
{{-- header section  --}}
@include('include.header')
  <!-- this is tourmate section end  -->
    @yield('content');
  {{-- footer section  --}}
  @include('include.footer')
  <!-- our footer section end my webside  -->
</body>
</html>
