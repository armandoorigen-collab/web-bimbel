<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard ONMAI</title>
    <!-- ======= Styles ====== -->
   @include('incbelajar.styles')
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        
        @include('incbelajar.navigation')
        <!-- ========================= Main ==================== -->
        @yield('content')
    </div>

    <!-- =========== Scripts =========  -->
    @include('incbelajar.scripct')
</body>

</html>