<?php

use PhpParser\Node\Stmt\Echo_;

$categorias=[];
$categorias[]='Infantil';
$categorias[]='Adolescente';
$categorias[]='Adulto';

$nome ='eduardo';
$idade = 8;


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
for ($i = 0; $i<= count($categorias);$i ++);{
        if($categorias[$i] = 'Aulto');
        echo 'nadador '. $nome.' compete na categoria Adulto';
    };

?>