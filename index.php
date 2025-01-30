<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="light">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Encuesta</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <!-- Favicons -->
<meta name="theme-color" content="#712cf9">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style> 
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
      </symbol>
    </svg>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">El porqué del IT</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end gap-4">
        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="index.php">Responder</a>
        <a class="nav-link fw-bold py-1 px-0" href="results.php">Resultados</a>
      </nav>
    </div>
  </header>
  <main class="px-3">
    <div class="hero vh-100 d-flex flex-column justify-content-center align-items-center text-center">
    <h1>Propósito de la Encuesta</h1>
    <p class="lead">Esta encuesta busca recopilar opiniones tanto de <a href="https://www.pulsiondigital.com/blog/que-hace-un-it-recruiter-y-como-empezar/#:~:text=Un%20recruiter%20IT%2C%20tambi%C3%A9n%20conocido,tecnolog%C3%ADa%2C%20ingenier%C3%ADa%20y%20matem%C3%A1ticas)." Target="_BLANK">reclutadores IT</a> como de <a href="https://www.personio.es/glosario/perfiles-it/" target="_BLANK">trabajadores IT</a> acerca del proceso de búsqueda laboral. La información proporcionada será tratada de forma anónima y se utilizará exclusivamente con el objetivo de entender las razones detrás de la dificultad actual para encontrar empleo.</p>
    <p class="lead">
      <a href="#myTab" class="btn btn-lg btn-light fw-bold border-white bg-white">Participar</a>
    </p>
</div>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="tab-1" data-bs-toggle="tab" data-bs-target="#content-1" type="button" role="tab" aria-controls="content-1" aria-selected="true">
      Encuesta para Reclutadores IT
    </button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="tab-2" data-bs-toggle="tab" data-bs-target="#content-2" type="button" role="tab" aria-controls="content-2" aria-selected="false">
      Encuesta para Trabajadores IT
    </button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active text-start" id="content-1" role="tabpanel" aria-labelledby="tab-1">
    <!-- Contenido para reclutadores -->
    <h3 class="mt-5">Preguntas para Reclutadores IT</h3>
    <form action="send.php" method="POST">
    <?php
    require_once 'Server/database.php';
    $connection = connect();
    $query = "
    SELECT q.id as questionId, q.question, q.questiontype, o.id as optionId, o.option_question 
    FROM questions q
    LEFT JOIN options o ON q.id = o.questionId
    WHERE q.usertypeId = 1
";
    $result = mysqli_query($connection, $query);
    if ($result) {
        $questions = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $questions[$row['questionId']]['question'] = $row['question'];
            $questions[$row['questionId']]['questiontype'] = $row['questiontype'];
            if ($row['optionId']) {
                $questions[$row['questionId']]['options'][] = ['optionId' => $row['optionId'], 'option_question' => $row['option_question']];
            }
        }
        foreach ($questions as $id => $question) {
            echo "<h4 class='mt-5'>".$question['question']."</h4>";
            if ($question['questiontype'] == 'closed') {
                foreach ($question['options'] as $option) {
                    echo "<div>";
                    echo "<input class='me-2' type='radio' required name='question_$id' value='".$option['optionId']."' id='option_".$id."_".$option['optionId']."'/>";
                    echo "<label for='option_".$id."_".$option['optionId']."'>".$option['option_question']."</label>";
                    echo "</div>";
                }
            } elseif ($question['questiontype'] == 'open') {
                echo "<div class='form-floating'>";
                echo " <textarea  class='form-control' minlengt='10'  name='question_$id' placeholder='Deja tu respuesta aqui' id='floatingTextarea'></textarea>";
                echo "<label for='floatingTextarea'>Respuesta</label>";
                echo "</div>";
            }
        }
    } else {
        echo "<p>Error retrieving questions: " . mysqli_error($connection) . "</p>";
    }
    ?>
    <button class="btn btn-lg btn-light fw-bold border-white bg-white mt-5" type="submit">Enviar respuestas</button>
    </form>
  </div>
  <div class="tab-pane fade text-start" id="content-2" role="tabpanel" aria-labelledby="tab-2">
    <!-- Contenido para trabajadores -->
    <h3>Preguntas para Trabajadores IT</h3>
    <form action="send.php" method="POST">
    <?php
 $query = "
 SELECT q.id as questionId, q.question, q.questiontype, o.id as optionId, o.option_question 
 FROM questions q
 LEFT JOIN options o ON q.id = o.questionId
 WHERE q.usertypeId = 2
";
    $result = mysqli_query($connection, $query);
    if ($result) {
        $questions = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $questions[$row['questionId']]['question'] = $row['question'];
            $questions[$row['questionId']]['questiontype'] = $row['questiontype'];
            if ($row['optionId']) {
                $questions[$row['questionId']]['options'][] = ['optionId' => $row['optionId'], 'option_question' => $row['option_question']];
            }
        }
        foreach ($questions as $id => $question) {
            echo "<h4 class='mt-5'>".$question['question']."</h4>";
            if ($question['questiontype'] == 'closed') {
                foreach ($question['options'] as $option) {
                    echo "<div>";
                    echo "<input type='radio' class='me-2'  name='question_$id' value='".$option['optionId']."' id='option_".$id."_".$option['optionId']."'/>";
                    echo "<label for='option_".$id."_".$option['optionId']."'>".$option['option_question']."</label>";
                    echo "</div>";
                }
            } elseif ($question['questiontype'] == 'open') {
              echo "<div class='form-floating'>";
                echo " <textarea  class='form-control' minlengt='10' name='question_$id' placeholder='Deja tu respuesta aqui' id='floatingTextarea'></textarea>";
                echo "<label for='floatingTextarea'>Respuesta</label>";
                echo "</div>";
            }
        }
    } else {
        echo "<p>Error retrieving questions: " . mysqli_error($connection) . "</p>";
    }
    ?>
    <button class="btn btn-lg btn-light fw-bold border-white bg-white mt-5" type="submit">Enviar respuestas</button>
    </form>
  </div>
</div>

  </main>

  <footer class="mt-auto text-white-50">
    <p>Encuesta realizada por <a href="https://www.linkedin.com/in/duvan-mancilla " target="_BLANK"><u>Duvan Mancilla</u></a></p>
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body></html>