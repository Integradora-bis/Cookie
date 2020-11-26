<?php
 echo'
 <!--Main card-->

 <div class="cuki position-relative overflow-hidden p-3 p-md-5 m-sm-5 text-center rounded shadow p-3 mb-5">
 <div class=" col-sm-12 p-lg-5 mx-auto my-5">
     <img class="chef" src="https://drive.google.com/thumbnail?id=1ljq-pIN0MrXAuUiwbuZ7jvOhlQkksR44"><br>
     <h1 class="display-4 font-weight-normal" style="color: #ac8b67">Welcome to Cookie!</h1> <br>
     <p class="lead font-weight-normal">What do you want to eat today?</p> <br>
     <h3"display-4 font-weight-normal" style="color: #ac8b67">Type your ingredient</h3>
    <div style="align-items: center;">
        <form class="form-inline col-md-6 p-lg-1 mx-auto my-1">
            <input class="form-control col-md-10 p-lg-1 mx-auto my-3 mr-md-6" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-5 my-sm-0" type="submit">Search</button>
        </form>
    </div>
 </div>
 </div>

 
  
 <div class = "position-relative overflow-hidden p-3 p-md-5 m-sm-5 text-center rounded shadow p-3 mb-5">

 <br> <h5 id="rn" class="display-10" style="color:#ac8b67">Categories</h5> <br><br>
  
<!--Categories 1-->

    <div class="container">
        <div class="row mb-3">

            <!--Foods-->
                <div class="col-md-4 id ="foods">                    
                    <a href="../views/foods.php">
                     <img src="../img/food.jpg" class="card-img-top" alt="Foods" style="width:100% height:auto"> 
                     <br><br>              
                     <button type="button" class="btn btn-outline-dark col mb-4">Foods</button>                                 
                    </a>                     
                </div>

            <!--Family--> 
                <div class="col-md-4 id="family">
                    <a href="../views/family.php">
                    <img src="../img/family.jpg" class="card-img-top" alt="family" style="width:100% height:auto">
                    <br> <br> 
                    <button type="button" class="btn btn-outline-dark col mb-4">For the family</button> 
                    </a>              
                </div>  

            <!--easy to make-->
                <div class="col-md-4 id ="easy"">
                    <a href="../views/short.php">
                    <img src="../img/easy.jpg" class="card-img-top" alt="easy" style="width:100% height:auto">
                    <br> <br> 
                    <button type="button" class="btn btn-outline-dark col mb-4">Easy to make</button>                  
                </div> 
        </div>   
    </div>
    
    <br>

<!--Categories 2-->

    <div class="container">
        <div class="row mb-3">

            <!--Desserts-->
                <div class="col-md-4 id ="desserts">
                    <a href="../views/desserts.php">
                    <img src="../img/dessert.jpg" class="card-img-top" alt="dessert" style="width:100% height:auto">
                    <br> <br> 
                    <button type="button" class="btn btn-outline-dark col mb-4">Desserts</button> 
                  </a> 
                 </div>

            <!--Individual-->
                <div class=col-md-4 id ="individual">
                    <a href="../views/individual.php">
                    <img src="../img/individual.jpg" class="card-img-top" alt="individual" style="width:100% height:auto">
                    <br> <br>                   
                    <button type="button" class="btn btn-outline-dark col mb-4">For yourself</button>     
                    </a>          
                </div>  

            <!--hard to make-->
                <div class=col-md-4 id ="hard">
                    <a href="../views/long.php">
                    <img src="../img/hard.jpg" class="card-img-top" alt="hard" style="width:100% height:auto">   
                    <br> <br>                    
                    <button type="button" class="btn btn-outline-dark col mb-4">Hard to make</button>             
                  </a>       
                </div>
        </div>        
    </div>

</div>
 
'
?>
