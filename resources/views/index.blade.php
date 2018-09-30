<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lang Compare</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
</head>
<body>
    <div id="app" class="container">
        <search-component></search-component>
    </div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted text-center m-0"><a href="https://github.com/patoui/lang-compare" target="_blank">Source Code</a></p>
        <p class="text-muted text-center">&copy; {{ \Carbon\Carbon::now()->format('Y') }} Patrique Ouimet</p>
      </div>
    </footer>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
