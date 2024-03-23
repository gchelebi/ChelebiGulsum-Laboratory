<?php
    $num1 = 26;
    $num2 = 2;
    $operator = "+";
    $result = '';
            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 != 0) { 
                        $result = $num1 / $num2;
                    } else {
                        $result = '0-a bolunmur!';
                    }
                    break;
                default:
                    $result = 'bele bir operator yoxdur!';
                    break;
            }
            echo "Cavab: $result";
    ?>