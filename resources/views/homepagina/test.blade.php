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

    .container-center {
        display: flex;
        justify-content: center;
        margin-top: 110px;
    }

    .container-bottom {
        display: flex;
        justify-content: center;
    }

    .plus {
        width: 125px;
        height: 125px;
        background-color: #FF8A5B;
        margin-left: 10px;
        margin-right: 25px;
        text-align: center;
        font-size: 5rem;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;
        color: #25CED1;
        text-shadow: 2px 2px black;
        font-family: 'Chewy', cursive;

    }

    .min {
        width: 125px;
        height: 125px;
        background-color: #FF8A5B;
        margin-left: 10px;
        margin-right: 25px;
        text-align: center;
        font-size: 5rem;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;
        color: #25CED1;
        text-shadow: 2px 2px black;
        font-family: 'Chewy', cursive;

    }

    .keer {
        width: 125px;
        height: 125px;
        background-color: #FF8A5B;
        margin-left: 10px;
        margin-right: 25px;
        text-align: center;
        font-size: 5rem;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;
        color: #25CED1;
        text-shadow: 2px 2px black;
        font-family: 'Chewy', cursive;

    }

    .deel {
        width: 125px;
        height: 125px;
        background-color: #FF8A5B;
        margin-left: 10px;
        margin-right: 25px;
        text-align: center;
        font-size: 5rem;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;
        color: #25CED1;
        text-shadow: 2px 2px black;
        font-family: 'Chewy', cursive;

    }
    .gemengd {
        width: 125px;
        height: 125px;
        background-color: #FF8A5B;
        margin-left: 10px;
        margin-right: 10px;
        text-align: center;
        font-size: 5rem;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;
        color: #25CED1;
        text-shadow: 2px 2px black;
        font-family: 'Chewy', cursive;

    }

    @media only screen and (max-width: 800px) {
        .container {
            height: auto;
        }
    }

    @media only screen and (max-width: 800px) {
        .container-center {
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
    @media only screen and (max-width: 800px) {
        .gemengd {
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
    .gemengd:hover {
        background-color: #25CED1;
        color: #FCEADE;
    }   

    h1{
        text-shadow: 1px 1px #FF8A5B;
        color: black;
        font-family: 'Chewy', cursive;
    }

    h4 {
        text-shadow: 1px 1px #FF8A5B;
        color: black;
        font-family: 'Happy Monkey', cursive;
    }

    .text {
        font-family: 'Happy Monkey', cursive;

        width: 125px;
        height: 125px;
        position: relative;
        margin-left: 10px;
        margin-right: 10px;
        text-align: center;
        font-size: 1rem;
        color: black;
    }
</style>

<div class="container">
    <div class="container-top">
        <div>
            <h1>Welkom bij het rekenprogramma.</h1>

            <h4>
                Op deze pagina kunt u de keuze maken voor welke sommen u wilt.
            </h4>
        </div>
    </div>

    <div class="container-center">
        <a class="a1" href="/niveauplus">
            <div class="plus">+</div>
            <div class="text">Plussommen</div>
        </a>

        <a class="a1" href="/niveaumin">
            <div class="min">-</div>
            <div class="text">Minsommen</div>
        </a>

        <a class="a1" href="/niveaukeer">
            <div class="keer">X</div>
            <div class="text">Keersommen</div>
        </a>

        <a class="a1" href="/niveaudeel">
            <div class="deel">??</div>
            <div class="text">Deelsommen</div>

        </a>
        <a class="a1" href="/niveaugemengd">
            <div class="gemengd">=</div>
            <div class="text">Gemengdesommen</div>

        </a>
    </div>
    <div class="container-bottom">
    </div>
</div>