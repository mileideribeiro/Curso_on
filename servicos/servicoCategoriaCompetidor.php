<?php
function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias [] = 'infantil' ;
    $categorias [] = 'adolecente' ;
    $categorias [] = 'adulto' ;

    if (ValidaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        if ( $idade >= 6 &&  $idade <= 12 )
        {
            // echo 'infantil';
            for ($i = 0; $i <= count($categorias); $i++)
            {
                if( $categorias[$i] == "infantil")
                {
                    setarMensagemSucesso( "O nadador " . $nome . " competir na categoria " .$categorias[$i]) ;
                    return null;
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
                setarMensagemSucesso("O nadador " . $nome . " competir na categoria " .$categorias[$i]) ;
                return null;
            }  
        }
        }
        else {
            // echo 'adulto';
            for ( $i = 0 ; $i <= count ( $categorias ); $i++)
            {
                if ( $categorias [$i] == "adulto")
                {
                    setarMensagemSucesso("O nadador " . $nome. " competir na categoria  " .$categorias[$i]) ;
                    return null;
                }
            }
        }
    }
    else{
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}