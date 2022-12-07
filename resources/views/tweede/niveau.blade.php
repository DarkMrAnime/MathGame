<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mathgame</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
      
        html{
            background-color: #FCEADE;
        }
        .block{
            background-color: white;
            width: 80%;
            height: 500px;
            display: flex;
            justify-content: space-between;
            border-radius: 10px;
            padding-top: 25px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            }
        .main{
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }
    @media only screen and (max-width: 800px) {
    .block {
        background-color: white;
            width: 80%;
            height: 1500px;
            display: flex;
            justify-content: space-between;
            border-radius: 10px;
            padding-top: 25px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    }
    .plus {
            height: 130px;
            width: 130px;
            margin-left: 20px;
            text-align: center;
            font-size: 2rem;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            color: black;
            background-color: #E9FF00 ;
            
    }

    .a1:hover{
        scale: 1.05;
       
       
            
    }
    .plus:hover{
        background-color:orange;
        color:white;
        text-shadow: 2px 2px red;
    }
    .grids {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-auto-rows: 300px;
        position: relative;
        top: 330px;
        left: -26%;
        
        
        
    }
    .a1{
        text-decoration: none;
        transition: 0.3s;
        height:125px;
    }
    .min{
        height: 130px;
            width: 130px;
            margin-left: 20px;
            text-align: center;
            font-size: 2rem;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            color: black;
            background-color: #5b6ff5;
    }
    .keer{
        height: 100px;
            width: 130px;
            margin-left: 20px;
            text-align: center;
            font-size: 2rem;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            color: black;
            background-color: #7efc6a;
            
}
    .text{
        margin-left: 20px;

    }
    @media only screen and (max-width: 800px) {
    .grids {
        grid-template-columns: 1fr;
        
    }
    }
    </style>
</head>

<body class="antialiased">
    @include('homepagina.navbar')
<div class="main">
    <div class="block">
    <div class="text">
        <h1>Kies je niveau.</h1>
        
            <h4>
                Op deze pagina kan je de keuze maken voor welk niveau je wilt.
            </h4> 
        </div>
        
            <div class="grids">
                <a class="a1" href=""><h1 class="plus">Basic</h1></a>
                <a class="a1" href=""><h1 class="min">Advance</h1></a>
                <a class="a1" href=""><h1 class="keer">Expert</h1></a>
            </div>
    </div>
</div>
    {{-- @include('homepagina.footer') --}}
</body>

</html>
