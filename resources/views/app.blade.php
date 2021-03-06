<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body class="antialiased">
<div class="container pt-5" id="app">
    <App/>


</div>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&key=AIzaSyDvL5l0A1Z2XAWGKfsjRD6_f0SdgeYMglY"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvL5l0A1Z2XAWGKfsjRD6_f0SdgeYMglYIzaSyDvL5l0A1Z2XAWGKfsjRD6_f0SdgeYMglY&libraries=places"></script>--}}

<script src="{{ asset('js/app.js')  }}"></script>

</body>
</html>
