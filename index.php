<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title> Exercício 4 Quiz </title>
    <meta charset="utf-8">
</head>
<body>
    <div class="container">
        <form action="exercicio4.php" method="POST">
            <div id="title">
                <h1> Exercício 4 Quiz</h1>
            </div>
            <p id="p">
                Insira um número: <input type="number" name="nmr1" />
            </p>
            <p id="p">
                Insira um número: <input type="number" name="nmr2" />
            </p>
            <div class="rb">
                    <input type="radio" name="op" value="a">
                    <label> Adição </label>
            </div>
            <div class="rb">
                    <input type="radio" name="op" value="s">
                    <label> Subtração </label>
            </div>
            <div class="rb">
                    <input type="radio" name="op" value="m">
                    <label> Multiplição </label>
            </div>
            <div class="rb">
                    <input type="radio" name="op" value="d">
                    <label> Divisão </label>
            </div>
            <div id="bt">
                <input type="submit" value="Resultado" name='res' id="res">
            </div>
    </div>
    </form>
</body>
</html>