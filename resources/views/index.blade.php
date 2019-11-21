<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPA Laravel y Vue</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>   

    <div id="app">

        <!--Ya no se llama a este componente sino al componente App ya que estamos usando Vue router -->
        <!-- <posts></posts> -->

        <app></app>


    </div>

    <script src="{{asset('js/app.js')}}"></script>
    
</body>

</html>
