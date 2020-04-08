
<h1>Lista</h1>
<?php
    $i = 1;
    //print_r($lista);
    foreach($lista as $dados){
        echo $i." - ".$dados['nome']."<br>";
        $i++; 
    }

   
