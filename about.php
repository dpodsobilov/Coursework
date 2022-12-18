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

    <h2>Описание метода Ньютона</h2>

    <div class="rectangle">
        <div class="description">
            <p>&emsp;Классический метод Ньютона или касательных заключается в том,
                что если <i>x<sub>n</sub></i> — некоторое приближение к корню <i>x<sub><sub>*</sub></sub></i> уравнения <i>f(x) = 0, f	
                &#8712; C<sup>1</sup></i>, то следующее
                приближение определяется как корень касательной к функции <i>f(x)</i>, проведенной в точке <i>x<sub>n</sub></i>.</p>
            
            <p>&emsp;Алгоритм последовательных вычислений в методе Ньютона состоит в следующем:
                <i>x<sub>n+1</sub> = x<sub>n</sub> - f(x<sub>n</sub>)/f&nbsp;'(x<sub>n</sub>)</i><br>
                Сходимость метода касательных квадратичная, порядок сходимости равен 2.
            </p>

            <p>&emsp;Основная идея метода заключается в следующем: на отрезке <i>[a; b]</i> выбирается такое число <i>x<sub>0</sub></i>,
                при котором <i>f(x<sub>0</sub>)</i> имеет тот же знак, что и <i>f ''(x<sub>0</sub>)</i>, т. е. выполняется условие
                <i>f(x<sub>0</sub>) * f ''(x<sub>0</sub>) > 0</i>. Таким образом, выбирается точка с абсциссой <i>x<sub>0</sub></i>,
                в которой касательная к кривой <i>y = f(x)</i> на отрезке <i>[a; b]</i> пересекает ось <i>Ox</i>.
                За точку <i>x<sub>0</sub></i> сначала удобно выбирать один из концов отрезка.
            </p>
        </div>
    </div>
    
</body>
</html>