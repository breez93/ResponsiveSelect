<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>.................Responsive Select..............</h3>
    <br>
    <br>
    <hr>
    
    <form action="index.php" method="GET">
        <?php
        if(isset($_GET["Enviar"])){
            $distritos;
            $concelhos;

        }
        
        
        ?>
        
        <select name="Distritos" id="Dist">
        <option value="Santarem" id="dist1">Santarem</option>
        <option value="Evora" id="dist2">Evora</option>
        <option value="Lisboa" id="dist3">Lisboa</option>
        <?php
        
        $distritos = $_GET["Distritos"];
        $concelhos = $_GET["Conc"];
        ?>
    </select>
    <select name="Concelhos" id="Conc">
        <option value="Torres Novas" id="conc1">Torres Novas</option>
        <option value="Mourao" id="conc2">Mourao</option>
        <option value="Cascais" id="conc3">Cascais</option>
        <?php
        
        if($distritos=="Santarem"){
            $concelhos="Torres Novas";
        }
            elseif($distritos=="Evora"){
                $concelhos="Mourao";
            }
            else{
                $concelhos="Cascais";
            }
        ?>
        <input type="submit" value="Enviar">
     
    </select>
    </form>
    <br>
    <br>
    <p>Resultado:    </p>
    <hr>
    <?php
        
        echo"O distrito e:   ".$distritos.", e o seu respetivo concelho e:  ".$concelhos;
        
        
        ?>


</body>

</html>