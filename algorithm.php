<?php
    ini_set('max_execution_time', '300');
    header('Content-Type: text/html; charset=utf-8');
    
    // подсчет коэффициентов в первой производной
    function F1($fCoeff) {
        $f1Coeff = [];
        for($i = 0; $i < count($fCoeff) - 1; $i++) {
            $f1Coeff[$i] = $fCoeff[$i] * (count($fCoeff) - ($i + 1));
        }
        return $f1Coeff;
    }

    // функция подсчета значения
    function calcFunc($coeff, $value) {
        $result = 0;
        for($i = 0; $i < count($coeff); ++$i) {
            $result += pow($value, count($coeff) - ($i + 1)) * $coeff[$i];
        }
        return $result;
    }

    $result;
    // принимаем все значения
    if (!is_numeric($_POST['input_x4']) || !is_numeric($_POST['input_x3']) || !is_numeric($_POST['input_x2']) || !is_numeric($_POST['input_x1']) || !is_numeric($_POST['input_x0']) || 
    !is_numeric($_POST['input_a']) || !is_numeric($_POST['input_b']) || !is_numeric($_POST['input_accuracy'])) {
        $result = "Введите все значения";
    }
    else {
        $x4 = (float)htmlspecialchars($_POST['input_x4']); 
        $x3 = (float)htmlspecialchars($_POST['input_x3']); 
        $x2 = (float)htmlspecialchars($_POST['input_x2']); 
        $x1 = (float)htmlspecialchars($_POST['input_x1']); 
        $x0 = (float)htmlspecialchars($_POST['input_x0']); 

        $a = (float)htmlspecialchars($_POST['input_a']);
        $b = (float)htmlspecialchars($_POST['input_b']);
        $eps = (float)htmlspecialchars($_POST['input_accuracy']);

        if ($a > $b) {
            $temp = $a;
            $a = $b;
            $b = $temp;
        }

        $funcCoeff = [$x4, $x3, $x2, $x1, $x0];
        $f1Coeff = F1($funcCoeff);
        $f2Coeff = F1($f1Coeff);

        $current_time = time();
        
        $x0;    // начальная точка
        if (calcFunc($funcCoeff, $a) * calcFunc($f2Coeff, $a) > 0) {
            $x0 = $a;
        }
        else {
            $x0 = $b;
        }
        
        if ($x0 > $eps)
        {
            $xn = $x0 - calcFunc($funcCoeff, $x0) / calcFunc($f1Coeff, $x0);
        }
        else
        {
            $x0 += $eps; 
            $xn = $x0 - calcFunc($funcCoeff, $x0) / calcFunc($f1Coeff, $x0);
        }
        
        while (abs($x0 - $xn) > $eps && (time() - $current_time <= 20) && ($x0 - $b < $eps)) {
            $x0 = $xn;
            if ($x0 > $eps)
            {
                $xn = $x0 - calcFunc($funcCoeff, $x0) / calcFunc($f1Coeff, $x0);
            }
            else
            {
                $x0 += $eps; 
                $xn = $x0 - calcFunc($funcCoeff, $x0) / calcFunc($f1Coeff, $x0);
            }
        }

        if (time() - $current_time > 20) {
            $result = "Слишком сложные вычисления, корень не найден.";
        }
        elseif ($x0 - $b >= $eps) {
            $result = "Корня нет на заданном отрезке";
        }
        else {
            $result = round($xn, 4);
        }
    }
    echo ($result);
?>