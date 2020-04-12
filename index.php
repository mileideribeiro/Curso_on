<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);



$nome = 'Eduardo';
$idade = 28;


//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade<=12)
{
    //echo 'infantil';
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador" .$nome. "compete na categoria infantil";
    }
}
else if($idade >= 13 && $idade <=18)
{
   // echo 'adolecente';
   for($i =0; $i <= count($categorias); $i++)
   {
       if($categorias[$i] == 'adolecente')
           echo "O nadador " .$nome. " compete na categoria adolecente";
   }
}
else{
    //echo 'adulto';
    for($i =0; $i <= count($categorias); $i++)
   {
       if($categorias [$i] == 'adulto')
           echo "O nadador " .$nome. " compete na categoria adulto";
   }
}