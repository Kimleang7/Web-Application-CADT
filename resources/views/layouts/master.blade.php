<!DOCTYPE html>
<html lang="en">

<head>
    <title>FreshDaily Restaurant | @yield('title')</title>

    <link rel="icon" href="images/food-logo.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/addToCart.css">
</head>

<body>

@include('partails.header')
@yield('content')
@include('partails.footer')

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js/addToCard.js"></script>

</body>
</html>

