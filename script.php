<?php
 session_start();
 
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
    $_SESSION['mensagem-de-erro']='O nome não pode ser vazio, por favor preencha-o novamente';
    header('location:index.php');
    return;
}

else if(strlen($nome) < 3)
{
    $_SESSION['mensagem-de-erro']='O nome deve conter mais que 3 caracteres';
    header('location:index.php');
    return;
}

else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro']=' O nome não pode ser tão extenso';
    header('location:index.php');
    return;
}

else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro']= 'Informe um numero para idade';
    header('location:index.php');
    return;
}


//var_dump ($nome);
//var_dump ($idade);

if ( $idade >= 6 &&  $idade <= 12 )
{
    // echo 'infantil';
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if( $categorias[$i] == "infantil")
        {
            $_SESSION['mensagem-de-sucesso']= "O nadador " . $nome . " competir na categoria " .$categorias[$i] ;
            header('location:index.php');
            return;
        }
    }
}
    else if ( $idade >= 13 && $idade <= 18 )
{
   // echo 'adolecente';
   for ( $i = 0 ; $i <= count ( $categorias ); $i++)
   {
       if ( $categorias [$i] == "adolecente")
       {
           $_SESSION['mensagem-de-sucesso']= "O nadador " . $nome . " competir na categoria " .$categorias[$i] ;
           header('location:index.php');
           return;
       }  
   }
}
else {
    // echo 'adulto';
    for ( $i = 0 ; $i <= count ( $categorias ); $i++)
   {
       if ( $categorias [$i] == "adulto")
       {
           $_SESSION['mensagem-de-sucesso']= "O nadador " . $nome. " competir na categoria " .$categorias[$i] ;
           header('location:index.php');
           return;
       }
   }
}