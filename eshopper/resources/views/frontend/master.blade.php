<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend/css/animate/animate.min.css">
    <link rel="stylesheet" href="frontend/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/index.css">
    <link rel="stylesheet" href="frontend/css/shop.css">
    <link rel="stylesheet" href="frontend/css/detail.css">
    <link rel="stylesheet" href="frontend/css/cart.css">
    <link rel="stylesheet" href="frontend/css/about.css">
    <link rel="stylesheet" href="frontend/css/checkout.css">
    <link rel="shortcut icon" href="backend/img/avatar.jpg" type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,800;1,800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="frontend/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/owlcarousel/dist/assets/owl.theme.default.min.css">
    <title>@yield('title') | cafeHolic</title>
</head>

<body class="bg-darkmaroon">

    @include('frontend.layouts.header')

    @section('content') @show

    @include('frontend.layouts.footer')

    <!-- bootstrap js -->
    <script src="frontend/js/bootstrap/jquery-3.5.1.slim.min.js"></script>
    <script src="frontend/js/bootstrap/popper.min.js"></script>
    <script src="frontend/js/bootstrap/bootstrap.min.js"></script>

    <!-- owl carousel -->
    <script src="frontend/owlcarousel/docs/assets/vendors/jquery.min.js"></script>
    <script src="frontend/owlcarousel/dist/owl.carousel.min.js"></script>
    <script src="frontend/js/carousel.js"></script>

</body>

</html>