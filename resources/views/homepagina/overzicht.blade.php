<style>
    .plus {
            height: 130px;
            width: 130px;
            margin-left: 20px;
            text-align: center;
            font-size: 5rem;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            color: white;
            background-color: #eaff4f;
            
    }

    .a1:hover{
        scale: 1.05;
            
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
            font-size: 5rem;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            color: white;
            background-color: #5b6ff5;
    }
    .keer{
        height: 130px;
            width: 130px;
            margin-left: 20px;
            text-align: center;
            font-size: 5rem;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            color: white;
            background-color: #7efc6a;
    }
    .deel{
        height: 130px;
            width: 130px;
            margin-left: 20px;
            text-align: center;
            font-size: 5rem;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            color: white;
            background-color: #fa3434;
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


<body>
<div class="text">
<h1>Welkom bij het rekenprogramma.</h1>

    <h4>
        Op deze pagina kunt u de keuze maken voor welke sommen je wilt.
    </h4> 
</div>

    <div class="grids">
        <a class="a1" href=""><h1 class="plus">+</h1></a>
        <a class="a1" href=""><h1 class="min">-</h1></a>
        <a class="a1" href=""><h1 class="keer">x</h1></a>
        <a class="a1" href=""><h1 class="deel">÷</h1></a>
    </div>
</body>
