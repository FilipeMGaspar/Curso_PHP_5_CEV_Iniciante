<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula18 - Vetores e Matrizes - Parte 1</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <pre>        
            <?php
               
                echo "Função print_r()<br>";
               //Função print_r 
               $v = array("a","j", "m","x","k");
               print_r($v); 
               
               echo "<br>Função var_dump()<br>";
               //função var_dump
               var_dump($v); 
               
               echo "<br>Função count()<br>";
               //funçao count()
               $tot = count($v); 
               echo "O vetor tem ". count($v) . "elementos";

               //função array_push() adiciona elemento no fim do vetor
               array_push($v,"o"); //é o mesmo que $v[] = 7; 
               $v[]= "XP";
               echo "<br>";
               print_r($v);

               //função array_pop() elimina o ultimo elemento do vetor
               array_pop($v); //unset($v);              « 
               echo "<br>";
               print_r($v);
               
               echo "<br>";

               //Função  array_unshift() adiciona um elemento no inicio do vetor
               array_unshift($v, "z");
               print_r($v); 
               echo "<br>";
              
                //Função  array_shift() apaga o elemento do inicio do vetor
               array_shift($v);
               print_r($v);

               echo "<br>";
               
               //Função sort() ordena o vetor por ordem crescente
               sort($v);
               print_r($v);
               
               //Função rsort() ordena o vetor por ordem decrescente
               echo "<br>";
               rsort($v);
               print_r($v);

               //Função asort() ordena o vetor por ordem crescente mantendo a associação os indices
                $n = array(3,5,8,2);
                print_r($n);
                asort($n);
                echo "<br>";
                print_r($n);
             
                echo "<br>";   

                 //Função arsort() ordena o vetor por ordem decrescente mantendo a associação os indices
                arsort($n);
                print_r($n);
                
                echo "<br>";

                $vet = array(
                    2=> "A",
                    5=> "J",
                    0=>"M",
                    3=> "X",
                    4=>"k");
          
                 print_r($vet);
                //Função ksort() ordena os indices do vetor por ordem crescente
                ksort($vet);
                echo "<br>";
                print_r($vet);  

                echo "<br><br>";
                //Função krsort() ordena os indices do vetor por ordem decrescente    
                krsort($vet);
                print_r($vet); 

            ?>  
        </pre>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>