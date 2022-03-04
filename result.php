<!DOCTYPE html>

<head>
    <title>&#x1F914 RESULTADO: &#x1F914</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1>&#x1F914 RESULTADO: &#x1F914</h1>
    </header>
    
    <main>
    <?php
        $resposta1 = $_POST['question1'] = (isset($_POST['question1']) ) ? $_POST['question1'] : null;
        $resposta2 = $_POST['question2'] = (isset($_POST['question2']) ) ? $_POST['question2'] : null;
        $resposta3 = $_POST['question3'] = (isset($_POST['question3']) ) ? $_POST['question3'] : null;
        $resposta4 = $_POST['question4'] = (isset($_POST['question4']) ) ? $_POST['question4'] : null;
        $resposta5 = $_POST['question5'] = (isset($_POST['question5']) ) ? $_POST['question5'] : null;

        $score = 0;

        if ($resposta1 == "C") {$score++; }
        if ($resposta2 == "C") {$score++; }
        if ($resposta3 == "A") {$score++; }
        if ($resposta4 == "A") {$score++; }
        if ($resposta5 == "C") {$score++; }

        echo "<div class='resultado'>$score / 5 corretas</div>";

        if ($score == 5){
            echo "<div class='resultado'>PARABAINS!!! &#x1F44F</div>";
        } else if ($score >= 3) {
            echo "<div class='resultado'>Muito bem!</div>";
        } else if ($score >= 1) {
            echo "<div class='resultado'>Podia ser melhor heim... &#x261D</div>";
        } else {
            echo "<div class='resultado'>Eita... &#x1F4A9</div>";
        }

    ?>

    </main>
    <footer>
    @Code João Rafael Pereira Cruz
    </footer>
</body>
</html>