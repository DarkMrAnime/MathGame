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

    .block {
        width: 125px;
        height: 125px;
        background-color: red;
        margin-left: 10px;
        margin-right: 10px;
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
        .block {
            margin-top: 10px;
            margin-bottom: 10px;
        }
    }
</style>

<div class="container">
    <div class="container-top">
        <div>
            <h1>Welkom bij het rekenprogramma.</h1>

            <h4>
                Op deze pagina kunt u de keuze maken voor welke sommen en welk niveau u wilt.
            </h4>
        </div>
    </div>

    <div class="container-bottom">
        <div class="block">

        </div>
        <div class="block">

        </div>
        <div class="block">

        </div>
        <div class="block">

        </div>
    </div>
</div>