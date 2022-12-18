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

    <h2>Примеры</h2>

    <div class="rectangle">
        <div class="description">
            <p><b>Исходная функция:</b> <i>f(x) = x<sup>4</sup> + x<sup>2</sup> - 2</i><br>
            Интервал: [-2, 2]<br>
            Точность: 0.001<br>
            Результат: -1
            </p>
            
            <p><b>Исходная функция:</b> <i>f(x) = x<sup>4</sup> + x<sup>2</sup> - 2</i><br>
            Интервал: [0, 2]<br>
            Точность: 0.0001<br>
            Результат: 1
            </p>

            <p><b>Исходная функция:</b> <i>f(x) = x<sup>4</sup> + x<sup>2</sup> - 2</i><br>
            Интервал: [-1, 2]<br>
            Точность: 0.0001<br>
            Результат: -0.7862
            </p>
            
            <p><b>Исходная функция:</b> <i>f(x) = x<sup>4</sup> + x<sup>2</sup> + 2</i><br>
            Интервал: [0, 2]<br>
            Точность: 0.0001<br>
            Результат: Корня нет на заданном отрезке
            </p>

        </div>
    </div>
    
</body>
</html>