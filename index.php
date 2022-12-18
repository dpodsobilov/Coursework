<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Метод Ньютона для решения неоднородного уравнения</title>
</head>
<body>
    <header>
        <nav>
            <ul class="header-ul">
                <li><a href="./index.php">Работа алгоритма</a></li>
                <li><a href="./about.php">О методе</a></li>
                <li><a href="./examples.php">Примеры</a></li>
            </ul> 
        </nav>
    </header>
    
    <h1>Метод Ньютона решения нелинейного уравнения</h1>
    <div class="rectangle">
        <form method="post" id="input_form">
            <div class="text">
                <p>Введите функцию:</p>
            </div>

            <div class="input">
                <p>f(x) = <input class="input-func" name="input_x4" type="number" step="any" placeholder="36"><!--
                --> x^4 + <input class="input-func" name="input_x3" type="number" step="any" placeholder="-2"><!--
                --> x^3 + <input class="input-func" name="input_x2" type="number" step="any" placeholder="10"><!--
                --> x^2 + <input class="input-func" name="input_x1" type="number" step="any" placeholder="-3"><!--
                --> x + <input class="input-func" name="input_x0" type="number" step="any" placeholder="5"></p>
            </div>
        
            <div class="text">
                <p>Введите интервал:</p>
            </div>
        
            <div class="input">
                <p>[a, b] = [<input class="input-interval" name="input_a" type="number" step="any" placeholder="-5">], <!--
                -->[<input class="input-interval" name="input_b" type="number" step="any" placeholder="5">]</p>
            </div>
        
            <div class="text">
                <p>Введите точность:</p>
            </div>
        
            <div class="input">
                <p>&#949; = <input class="input-accuracy" name="input_accuracy" type="number" step="any" min="0" placeholder="0.0001"></p>
            </div>
            
            <div class="div-button">
                <input class="button" type="submit" value="Рассчитать">
            </div>

            <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
            <script src="./script.js"></script>

            <div class="text">
                <p>Результат: <span id="answer"><!-- для результата --></span></p>
            </div>

        </form>
    </div>
    
</body>
</html>