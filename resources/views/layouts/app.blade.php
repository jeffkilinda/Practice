<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SuperbetPredictions') }}</title>

 <meta name="description" content="The Professional number one football betting tips and predictions. 
 we provide free betting tips for many leagues all around the world.
 Visit our website for expertly analysed betting tips daily. ">
 <meta name="keywords" content="betting tips, betting, predictions, tips, football, football predictions, soccer, 
 football tips, soccer tips, sport betting, sports, odds, betting odds, best tips, 
 football betting tips, live betting, betting, sure football tips, football predictions and tips, vip tips">

    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
       
        <main class="py-4">
             @include('inc.navbar')
        <div class="container">
                <div class="row">
            <div class="custom-left" >   @include('inc.leftadds')</div>
            <div class="main-div" > 
                    @include('inc.messages')
                    @yield('content')
            </div>
            <div class="custom-right" > @include('inc.rightadds') </div>
        </div>
           

        </div>
        
        </main>
    </div>

    @include('inc.footer')
</body>
</html>


