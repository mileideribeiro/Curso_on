<?php
 
$categorias = [];
$categorias [] = 'infantil' ;
$categorias [] = 'adolecente' ;
$categorias [] = 'adulto' ;
$categorias [] = 'idoso' ;
// print_r ($ categorias);



$nome = $_POST['nome'] ;
$idade = $_POST['idade'] ;

if(empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) <3)
{
    echo 'O nome deve conter mais que 3 caracteres';
    return;
}

if(strlen($nome) > 40)
{
    echo ' O nome não pode ser tão extenso';
    return;
}

if(!is_numeric($idade))
{
    echo 'Informe um numero para idade';
    return;
}


//var_dump ($nome);
//var_dump ($idade);

if ( $idade >= 6 &&  $idade <= 12 )
{
    // echo 'infantil';
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == "infantil")
            echo "O nadador" . $nome . "competir na categoria infantil" ;
    }
}
    else if ( $idade >= 13 && $idade <= 18 )
{
   // echo 'adolecente';
   for ( $i = 0 ; $i <= count ( $categorias ); $i++)
   {
       if ( $categorias [$i] == 'adolecente' )
           echo  "O nadador" . $nome . "competir na categoria adolecente" ;
   }
}
else {
    // echo 'adulto';
    for ( $i = 0 ; $i <= count ( $categorias ); $i++)
   {
       if ( $categorias [$i] == 'adulto')
           echo  "O nadador" . $nome . "competir na categoria adulto" ;
   }
}