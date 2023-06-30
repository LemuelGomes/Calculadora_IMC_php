<?php
    $peso = $_POST['campo_peso'];
    $altura = $_POST['campo_altura'];
    $idade = $_POST['campo_idade'];
    $texto = '';
    $p1 = pow(doubleval($altura), 2);
    $imc = doubleval($peso) / doubleval($p1);

    if($imc < 18.5) 
    {
        $texto = 'Você está abaixo do Peso!';
    } 
    else
    {
        if($imc < 24.9)
        {
            $texto = 'Seu peso é o ideal!';
        } 
        else 
        {
            if($imc < 29.9)
            {
                $texto = 'Está levemente acima do peso';
                
            } 
            else 
            {
                if($imc < 34.3)
                {
                    $texto = 'Está moderadamente Obeso';                    
                } 
                else 
                {
                    if($imc < 39.9) 
                    {
                        $texto = 'Está com Obesidade Severa';
                    } 
                    else 
                    {
                        $texto = 'Está em estado crítico';
                    }
                }
            }
        }
    }

    header('Location: index.php?texto=' . $texto)
 ?>