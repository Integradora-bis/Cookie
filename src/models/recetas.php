<?php
    include_once("conexion.php");
    include("../components/card.php");
    
    $contador=0;
    
    function allrecipes(){
        $consulta = "select  name,img,recipe_id from recipes";
        $mysqli = connect();
        $resultado = $mysqli->query($consulta);
        if ($resultado->num_rows === 0) { 
            echo '<h1>Lo sentimos por el momento no contamos con Artículos</h1>';
        }
        else{
            echo '
            <div class = "container col-9" id="recipes">
            <div class="row" id="">';
            while ($datos = $resultado->fetch_array()) {
                card($datos[0],$datos[1]);
                recipe($datos[2]);
                $contador++;                
                if ($contador == 4){
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
    function desserts (){
        $consulta = "select  name,img,recipe_id from recipes where type='dessert'";
        $mysqli = connect();
        $resultado = $mysqli->query($consulta);
        if ($resultado->num_rows === 0) { 
            echo '<h1>Lo sentimos por el momento no contamos con Artículos</h1>';
        }
        else{
            echo '
            <div class = "container col-9" id="recipes">
            <div class="row" id="">';
            while ($datos = $resultado->fetch_array()) {
                card($datos[0],$datos[1]);
                
                $contador++;                
                if ($contador == 4){
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
    function foods (){
        $consulta = "select  name,img,recipe_id from recipes where type='food'";
        $mysqli = connect();
        $resultado = $mysqli->query($consulta);
        if ($resultado->num_rows === 0) { 
            echo '<h1>Lo sentimos por el momento no contamos con Artículos</h1>';
        }
        else{
            echo '
            <div class = "container col-9" id="recipes">
            <div class="row" id="">';
            while ($datos = $resultado->fetch_array()) {
                card($datos[0],$datos[1]);
                
                $contador++;                
                if ($contador == 4){
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
    function short (){
        $consulta = "select  name,img,recipe_id from recipes where time='-1hr'";
        $mysqli = connect();
        $resultado = $mysqli->query($consulta);
        if ($resultado->num_rows === 0) { 
            echo '<h1>Lo sentimos por el momento no contamos con Artículos</h1>';
        }
        else{
            echo '
            <div class = "container col-9" id="recipes">
            <div class="row" id="">';
            while ($datos = $resultado->fetch_array()) {
                card($datos[0],$datos[1]);
                
                $contador++;                
                if ($contador == 4){
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
    function long (){
        $consulta = "select  name,img,recipe_id from recipes where type='+1hr'";
        $mysqli = connect();
        $resultado = $mysqli->query($consulta);
        if ($resultado->num_rows === 0) { 
            echo '<h1>Lo sentimos por el momento no contamos con Artículos</h1>';
        }
        else{
            echo '
            <div class = "container col-9" id="recipes">
            <div class="row" id="">';
            while ($datos = $resultado->fetch_array()) {
                card($datos[0],$datos[1]);
                
                $contador++;                
                if ($contador == 4){
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
    function familiar (){
        $consulta = "select  name,img,recipe_id from recipes where portions='fam'";
        $mysqli = connect();
        $resultado = $mysqli->query($consulta);
        if ($resultado->num_rows === 0) { 
            echo '<h1>Lo sentimos por el momento no contamos con Artículos</h1>';
        }
        else{
            echo '
            <div class = "container col-9" id="recipes">
            <div class="row" id="">';
            while ($datos = $resultado->fetch_array()) {
                card($datos[0],$datos[1]);
                
                $contador++;                
                if ($contador == 4){
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
    function individual (){
        $consulta = "select  name,img,recipe_id from recipes where portions='ind'";
        $mysqli = connect();
        $resultado = $mysqli->query($consulta);
        if ($resultado->num_rows === 0) { 
            echo '<h1>Lo sentimos por el momento no contamos con Artículos</h1>';
        }
        else{
            echo '
            <div class = "container col-9" id="recipes">
            <div class="row" id="">';
            while ($datos = $resultado->fetch_array()) {
                card($datos[0],$datos[1]);
                
                $contador++;                
                if ($contador == 4){
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
?>
