<!DOCTYPE html>

<head>
    <title>&#x1F914 PHP Quiz &#x1F914</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1>&#x1F914 PHP QUIZ! &#x1F914</h1>
    </header>
    
    <main>
    <div class="question">
        <form action="result.php" method="POST">
            <div><label for="question1">1- Considere que $welcome = "Bem vindo!", como exibir essa variável na tela?</label></div>
            <div><input type="radio" name="question1" value="A" /> echo "Bem vindo!";</div>
            <div><input type="radio" name="question1" value="B" /> echo "$welcome";</div>
            <div><input type="radio" name="question1" value="C" /> echo $welcome;</div>

            <div><label for="question2">2- Como pegar uma informação em um form com o método GET?</label></div>
            <div><input type="radio" name="question2" value="A" /> getelementbyid.get</div>
            <div><input type="radio" name="question2" value="B" /> Request_form_GET</div>
            <div><input type="radio" name="question2" value="C" /> $_GET[];</div>

            <div><label for="question3">3- Variáveis no PHP são declaradas com</label></div>
            <div><input type="radio" name="question3" value="A" /> $</div>
            <div><input type="radio" name="question3" value="B" /> &amp;</div>
            <div><input type="radio" name="question3" value="C" /> Ambas estão corretas</div>

            <div><label for="question4">4- Como iniciar e finalizar código PHP?</label></div>
            <div><input type="radio" name="question4" value="A" /> &lt;?php echo "Seu código"; ?&gt;</div>
            <div><input type="radio" name="question4" value="B" /> &lt;$php echo "Seu código"; ?&gt;</div>
            <div><input type="radio" name="question4" value="C" /> &lt;php echo "Seu código"; ?&gt;</div>

            <div><label for="question5">5- Marque a alternativa FALSA sobre variaveis:</label></div>
            <div><input type="radio" name="question5" value="A" /> Variáveis tem seu valor denotado pelo operador =</div>
            <div><input type="radio" name="question5" value="B" /> Variáveis não tem um tipo obrigatório, podendo a qualquer momento guardar
             numeros ou caracteres</div>
            <div><input type="radio" name="question5" value="C" /> Variáveis precisam ser declaradas para uso</div>

            <input type=submit value="Resultado!" class="fim">
        </form>
    </div>
    </main>
    <footer>
    @Code João Rafael Pereira Cruz
    </footer>
</body>
</html>
