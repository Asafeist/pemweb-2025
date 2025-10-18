<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Course</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Course Project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles_template/bootstrap4/bootstrap.min.css">
        <link href="plugins_template/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="plugins_template/OwlCarousel2-2.2.1/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="plugins_template/OwlCarousel2-2.2.1/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="plugins_template/OwlCarousel2-2.2.1/animate.css">
        <link rel="stylesheet" type="text/css" href="styles_template/main_styles.css">
        <link rel="stylesheet" type="text/css" href="styles_template/responsive.css">
    </head>
<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>