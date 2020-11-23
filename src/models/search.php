<?php
    include_once("conexion.php");
    include("../components/card.php");
    $contador=1;
    function busqueda(){
    if ($_POST){
        $busqueda=explode(" ",$_POST['busqueda']);
        
        buscar($busqueda);
        
    }
    }
    
    function buscar($busqueda){
        foreach($busqueda as $ingrediente){
        $consulta = "select r.name, r.img, i.name as ingredients
        from ing_quant as q 
        join ingredients as i
                on q.ingredient_id=i.ingredient_id
        join recipes as r 
                on q.recipe_id=r.recipe_id 
        where i.name = '".$ingrediente."';";
        $mysqli = connect();
        $resultado = $mysqli->query($consulta);
        if ($resultado->num_rows === 0) { 
            echo '<h1>Lo sentimos por el momento no contamos con Artículos</h1>';
        }
        else{
            echo '
            <div class = "container col-9" id="recipes">
            <div class="row" id="">';
            while ($datos = $resultado->fetch_array()) 
            {
                card($datos[0],$datos[1]);
                $contador++;                
                if ($contador == 4)
                {
                    echo '
                    </div>
                    <div class="row"><br>';
                    $contador=0;                    
                }       
            }            
            echo '
            </div>
            </div>';                     
        }
    }
    }
    /*
    include_once("conexion.php");
    include("../components/card.php");
    $contador=1;
    function busqueda(){
    if ($_POST){
        $busqueda=$_POST['busqueda'];
        
        buscar($busqueda);
        
    }
    }
    
    function buscar($busqueda){
        $consulta = "select r.name, r.img, i.name as ingredients
        from ing_quant as q 
        join ingredients as i
                on q.ingredient_id=i.ingredient_id
        join recipes as r 
                on q.recipe_id=r.recipe_id 
        where i.name = '".$busqueda."';";
        $mysqli = connect();
        $resultado = $mysqli->query($consulta);
        if ($resultado->num_rows === 0) { 
            echo '<h1>Lo sentimos por el momento no contamos con Artículos</h1>';
        }
        else{
            echo '
            <div class = "container col-9" id="recipes">
            <div class="row" id="">';
            while ($datos = $resultado->fetch_array()) 
            {
                card($datos[0],$datos[1]);
                $contador++;                
                if ($contador == 4)
                {
                    echo '
                    </div>
                    <div class="row"><br>';
                    $contador=0;                    
                }       
            }            
            echo '
            </div>
            </div>';                     
        }
    }*/
?>


    
    
