<style>
    .container {
        margin-top: 75px;
        margin-bottom: 75px;
        width: 80%;
        height: 500px;
        margin-left: 10%;
        margin-right: 10%;
        background-color: white;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        padding: 10px;
    }

    .container-top {
        display: flex;
        justify-content: center;
    }

    .container-bottom {
        margin-top: 250px;
        display: flex;
        justify-content: center;
    }

    .plus {
        width: 125px;
        height: 125px;
        background-color: #FF8A5B;
        margin-left: 10px;
        margin-right: 10px;
        text-align: center;
        font-size: 5rem;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px,
            rgba(0, 0, 0, 0.22) 0px 15px 12px;
        color: #25CED1;
        text-shadow: 2px 2px black
    }
    .min {
        width: 125px;
        height: 125px;
        background-color: #FF8A5B;
        margin-left: 10px;
        margin-right: 10px;
        text-align: center;
        font-size: 5rem;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px,
            rgba(0, 0, 0, 0.22) 0px 15px 12px;
        color: #25CED1;
        text-shadow: 2px 2px black
    }
    .keer {
        width: 125px;
        height: 125px;
        background-color: #FF8A5B;
        margin-left: 10px;
        margin-right: 10px;
        text-align: center;
        font-size: 5rem;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px,
            rgba(0, 0, 0, 0.22) 0px 15px 12px;
        color: #25CED1;
        text-shadow: 2px 2px black
    }
    .deel {
        width: 125px;
        height: 125px;
        background-color: #FF8A5B;
        margin-left: 10px;
        margin-right: 10px;
        text-align: center;
        font-size: 5rem;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px,
            rgba(0, 0, 0, 0.22) 0px 15px 12px;
        color: #25CED1;
        text-shadow: 2px 2px black
    }

    @media only screen and (max-width: 800px) {
        .container {
            height: auto;
        }
    }

    @media only screen and (max-width: 800px) {
        .container-bottom {
            display: inline;
        }
    }

    @media only screen and (max-width: 800px) {
        .plus {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    }
    @media only screen and (max-width: 800px) {
        .min {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    }
    @media only screen and (max-width: 800px) {
        .keer {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    }
    @media only screen and (max-width: 800px) {
        .deel {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    }
    .a1 {
        text-decoration: none;
        transition: 0.3s;
        height: 125px;
    }
    .a1:hover {
        scale: 1.05;
    }
    .plus:hover {
        background-color: #25CED1;
        color: #FCEADE;
        text-shadow: 2px 2px black;
    }
    .min:hover {
        background-color: #25CED1;
        color: #FCEADE;
        text-shadow: 2px 2px black;
    }
    .keer:hover {
        background-color: #25CED1;
        color: #FCEADE;
        text-shadow: 2px 2px black;
    }
    .deel:hover {
        background-color: #25CED1;
        color: #FCEADE;
        text-shadow: 2px 2px black;
    }
    h1{
        text-shadow: 2px 2px #FF8A5B;
        color: black;
    }
    h4{
        text-shadow: 2px 2px #FF8A5B;
        color: black;
    }
    .text {
        width: 125px;
        height: 125px;
        position: relative;
        margin-left: 10px;
        margin-right: 10px;
        text-align: center;
        font-size: 1rem;
        color: black;
        left: 314px;
    }
</style>

<div class="container">
    <div class="container-top">
        <div>
            <h1>Welkom bij het rekenprogramma.</h1>

            <h4>
                Op deze pagina kunt u de keuze maken voor welke sommen en welk
                niveau u wilt.
            </h4>
        </div>
    </div>

    <div class="container-bottom">
        <a class="a1" href=""><div class="plus">+</div></a>

        <a class="a1" href=""><div class="min">-</div></a>

        <a class="a1" href=""><div class="keer">X</div></a>

        <a class="a1" href=""><div class="deel">÷</div></a>
    </div>
    <div class="text">Plussommen</div>
    <div class="text">Minsommen</div>
    <div class="text">Deelsommen</div>
    <div class="text">Keersommen</div>
</div>
