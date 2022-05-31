<?php

use PhpParser\Node\Stmt\Echo_;

$categorias=[];
$categorias[]='Infantil';
$categorias[]='Adolescente';
$categorias[]='Adulto';

$nome = $_POST['Nome'];
$idade = $_POST['Idade'];

if(empty($nome)){
   Echo "o nome não pode estar vazio";
 return;
}

if(strlen($nome)<3){
    Echo "O nome deve ter mais que 3 caracteres";
    return;
}
if(strlen($nome)>8){
    Echo "O nome é muito extenso";
    return;
}
if(!is_numeric($idade)){
    Echo "informe um numero para idade";
    return;
}

if($idade>=6 && $idade<=12){

    for ($i = 0; $i<= count($categorias);$i ++);{

        if($categorias[$i] = 'Infantil');

          echo 'nadador '. $nome.' compete na categoria Infantil';
    };
}
elseif($idade>=13 && $idade<=18){

    for ($i = 0; $i<= count($categorias);$i ++);{

        if($categorias[$i] = 'Adolescente');

          echo 'nadador '. $nome.' compete na categoria Adolescente';
    };
}
else
{

    for($i = 0; $i<= count($categorias);$i ++);{

        if($categorias[$i] = 'Adulto');

          echo 'nadador '. $nome.' compete na categoria Adulto';
    };
}



?>