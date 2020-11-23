<?php
function card ($rName,$rImg){ 
    
    echo '
    <div class="col-md">
            <div id ="recipe.php">
                <a href="">
                <img src="'.$rImg.'" class="card-img-top" alt="Foods" style="width:100%;">              
                <button type="button" class="btn btn-outline-dark col mb-4">"'.$rName.'"</button>                                 
                </a>  
            </div>
        </div>';
    /*
    echo '<div class="card" style="width: 20rem;">
    <img src="'.$rImg.'" class="card-img-top" alt="...">
    <div class="card-body">
    <a href="#" class="btn btn-primary"><h5 class="card-title">'.$rName.'</h5></a>
    </div>
  </div>'*/;
    }

?>
