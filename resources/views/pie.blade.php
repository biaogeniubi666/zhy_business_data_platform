<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ECharts</title>
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> --}}
    <link rel="stylesheet" href="/css/app.css">
    
</head>
<body>
        
<div class="jumbotron">
<<<<<<< HEAD
        <h1>Hello, world!</h1>
=======
        <h1>Hello, world!!!!!!!!!!!!!!!!!!!!!!!!!</h1>
>>>>>>> 4dc76f5b7826cf905352268f0743a9ce7b313ff0
        <p>...</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
    <div id="app1">
        <example-component></example-component>
        {{-- <hello-vue title="{{ $type_of_roudian }}"> </hello-vue> --}}
    </div>

    <div id="blog-post1">
        {{-- <blog-post v-bind:likes="44"></blog-post> --}}
        {{-- <blog-post title="{{ $type_of_roudian }}"></blog-post>
        <blog-post v-bind:likes=" {{ $type_of_roudian }}"></blog-post> --}}
    </div>

    
    <div id="components-demo">
        <button-counter></button-counter>
    </div>
        
</body>

<script src="js/app.js"></script>
</html>