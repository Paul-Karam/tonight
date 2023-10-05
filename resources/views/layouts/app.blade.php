<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/flickity@2.0.11/dist/flickity.css">
        <script src="https://unpkg.com/flickity@2.0.11/dist/flickity.pkgd.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./scss/app.scss">
        @vite(["resources/scss/app.scss", "resources/js/app.js"])
        <title>Tonight</title>
    </head>
<body>
    <div class="container">
        @include('main-layouts/main-nav')
        @include('main-layouts/sidebar')

        @yield('content')

        @include('main-layouts/footer')
    </div>
</body>
</html>