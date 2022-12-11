@extends('Sommen/index')

@section('Difficulty')
Niveau: BASIC
@endsection

@section('Sommen')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plus Sommen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<style>
  .sommen-sum-container {
    display: flex;
    justify-content: center;
    margin-top: 50px;
    font-size: 5vh;
    color: black;
    font-weight: bold;
    background-color: #ff8a5b;
    border-radius: 100px;
    margin-left: 25%;
    margin-right: 25%;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    user-select: none;
    font-family: "Happy Monkey", cursive;
    overflow: hidden;
  }

  .antwoord-sum-container {
    display: flex;
    justify-content: center;
    margin-top: 100px;
  }

  .Submit-btn {
    height: 25px;
    width: auto;
    padding: 5px;
    border: none;
    border-radius: 3px;
    background-color: #ff8a5b;
    margin-bottom: 65px;
    font-family: "Happy Monkey", cursive;
  }

  .Submit-btn:hover {
    scale: 1.05;
  }


  p.score {
    text-align: center;
  }

  #bottom {
    bottom: 0;
    text-align: center;
  }


  #progress {
    position: relative;
    margin-bottom: 30px;
  }

  #progress-bar {
    position: absolute;
    background: lightseagreen;
    height: 5px;
    width: 0%;
    top: 50%;
    left: 0;
  }

  #progress-num {
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
    justify-content: space-between;
  }


  #progress-num::before {
    content: "";
    background-color: lightgray;
    position: absolute;
    top: 50%;
    left: 0;
    height: 5px;
    width: 100%;
    z-index: -1;
  }

  #progress-num .step {
    border: 3px solid lightgray;
    border-radius: 100%;
    width: 25px;
    height: 25px;
    line-height: 25px;
    text-align: center;
    background-color: #fff;
    font-family: sans-serif;
    font-size: 14px;
    position: relative;
    z-index: 1;
  }

  #progress-num .step.active {
    border-color: lightseagreen;
    background-color: lightseagreen;
    color: #fff;
  }
</style>

<body>
  <div class="sommen-sum-container">
    <?php
    $output = createSum();
    echo "<div style='display:none;' id='antwoord'>" . $output . "</div>";
    ?>
  </div>
  <div class="antwoord-sum-container">
    <input type="text" class="input-field" placeholder="Antwoord" name="answer" id="answer" />
    <button type="submit" class="Submit-btn" id="btnCheckAntwoord" onclick="checkAntwoord()" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Controleer
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="Score">Volgende som knop
            <p>
            <p class="score">Score: [score] </p>

            <div id="bottom">Bottom Content Div</div>

            <!-- progress bar -->

            <div id="progress">
              <div id="progress-bar"></div>
              <ul id="progress-num">
                <li class="step active">1</li>
                <li class="step">2</li>
                <li class="step">3</li>
                <li class="step">4</li>
                <li class="step">5</li>
                <li class="step">6</li>
                <li class="step">7</li>
                <li class="step">8</li>
                <li class="step">9</li>
                <li class="step">10</li>
              </ul>
            </div>

            <button id="progress-prev" class="btn" disabled>Prev</button>
            <button id="progress-next" class="btn">Next</button>

            <script>
              const progressBar = document.getElementById("progress-bar");
              const progressNext = document.getElementById("progress-next");
              const progressPrev = document.getElementById("progress-prev");
              const steps = document.querySelectorAll(".step");
              let active = 1;

              progressNext.addEventListener("click", () => {
                active++;
                if (active > steps.length) {
                  active = steps.length;
                }
                updateProgress();
              });

              progressPrev.addEventListener("click", () => {
                active--;
                if (active < 1) {
                  active = 1;
                }
                updateProgress();
              });

              const updateProgress = () => {
                // toggle active class on list items
                steps.forEach((step, i) => {
                  if (i < active) {
                    step.classList.add("active");
                  } else {
                    step.classList.remove("active");
                  }
                });
                // set progress bar width  
                progressBar.style.width =
                  ((active - 1) / (steps.length - 1)) * 100 + "%";
                // enable disable prev and next buttons
                if (active === 1) {
                  progressPrev.disabled = true;
                } else if (active === steps.length) {
                  progressNext.disabled = true;
                } else {
                  progressPrev.disabled = false;
                  progressNext.disabled = false;
                }
              };
            </script>

          </div>
          <?php
          function createSum()
          {
            $value1 = rand(0, 20);
            $value2 = rand(0, 20);
            $value3 = $value1 + $value2;

            echo $value1;
            echo ' + ';
            echo $value2;
            echo ' = ?';
            return $value3;
          }
          ?>
          <script>
            function checkAntwoord() {
              var inputAntwoord = document.getElementById("answer").value;
              var correctAntwoord = document.getElementById("antwoord").innerHTML;

              if (inputAntwoord == correctAntwoord) {
                console.log("antwoord = goed");
              } else {
                console.log("antwoord = fout");
              }
            }
          </script>





</html>
@endsection