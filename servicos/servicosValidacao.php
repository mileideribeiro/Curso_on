<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro('O nome não pode ser vazio, por favor preencha-o novamente');
        return false;
    }

    else if(strlen($nome) < 3)
    {
        setarMensagemErro('O nome deve conter mais que 3 caracteres');
        return false;
    }

    else if(strlen($nome) > 40)
    {
        setarMensagemErro(' O nome não pode ser tão extenso');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro('Informe um numero para idade');
        return false;
    }
    return true;
}



