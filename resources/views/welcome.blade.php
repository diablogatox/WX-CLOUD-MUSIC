<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>WX云音乐</title>
        <link rel="shortcut icon" href="">
    </head>
    <body ms-controller="test">
        <input ms-duplex="@name">
        <!--<p>Hello,@{@name}}!</p>-->
        <ul>
           <li ms-for="($index,el) in @array">@{{$index}}--@{{el}}</li>
        </ul>
        <script src="js/app.js"></script>
        <script>
            var vm = avalon.define({
                $id: "test",
                name: "司徒正美",
                array: [11,22,33]
            })
            setTimeout(function(){
               vm.array.set(0, 444)
            }, 3000)
        </script>
    </body>
</html>
