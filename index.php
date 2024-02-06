<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function __autoload($class_name){
        require_once $class_name . '.php';
    }

    $arrayalunni = [new Alunno("marco","togni",27), new Alunno("mario","luigi",14), new Alunno("lorenzo","meucci",89)];
    
    foreach ($arrayalunni as $alunno) { 
        echo $alunno->GetAll() . "<br><br>";
    }
    
    
    ?>
</body>
</html>