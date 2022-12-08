<style>
     html {
            background-color: #FCEADE;
        }
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
        margin-top: 110px;
        display: flex;
        justify-content: center;
    }

    .container-bottom {
        display: flex;
        justify-content: center;
    }

    .basic {
        width: 175px;
        height: 125px;
        background-color: #FF8A5B;
        margin-left: 10px;
        margin-right: 50px;
        text-align: center;
        font-size: 2.5rem;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;
        color: #25CED1;
        text-shadow: 1px 1px black;
    }

    .advanced {
        width: 175px;
        height: 125px;
        background-color: #FF8A5B;
        margin-left: 10px;
        margin-right: 10px;
        text-align: center;
        font-size: 2.5rem;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;
        color: #25CED1;
        text-shadow: 1px 1px black
    }

    .expert {
        width: 175px;
        height: 125px;
        background-color: #FF8A5B;
        margin-left: 50px;
        margin-right: 10px;
        text-align: center;
        font-size: 2.5rem;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;
        color: #25CED1;
        text-shadow: 1px 1px black
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
       .basic {
           margin-top: 20px;
           margin-bottom: 20px;
       }
   }

   @media only screen and (max-width: 800px) {
       .advanced {
           margin-top: 20px;
           margin-bottom: 20px;
       }
   }

   @media only screen and (max-width: 800px) {
       .expert {
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

    .basic:hover {
        background-color: #25CED1;
        color: #FCEADE;
        text-shadow: 1px 1px black;
    }

    .advanced:hover {
        background-color: #25CED1;
        color: #FCEADE;
        text-shadow: 1px 1px black;
    }

    .expert:hover {
        background-color: #25CED1;
        color: #FCEADE;
        text-shadow: 1px 1px black;
    }

    h1 {
        text-shadow: 1px 1px #FF8A5B;
        color: black;
    }

    h4 {
        text-shadow: 1px 1px #FF8A5B;
        color: black;
    }
</style>
@include('homepagina.navbar')
<div class="container">
    <div class="container-top">
        <div>
            <h1>Kies een niveau.</h1>

            <h4>
                Op deze pagina kan je niveau kiezen.<br/>
                Kies uit de volgende niveau's:
            </h4>
        </div>
    </div>

    <div class="container-center">
        <a class="a1" href="/plus/basic">
            <div class="basic">Basic</div>
        

        </a>

        <a class="a1" href="/plus/advanced">
            <div class="advanced">Advanced</div>
          

        </a>

        <a class="a1" href="/plus/expert">
            <div class="expert">Expert</div>
            


        </a>

    </div>
    <div class="container-bottom">
    </div>
</div>