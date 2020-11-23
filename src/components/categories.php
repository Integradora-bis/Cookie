<?php
 echo'

<div class=container mb-2>
<h1 id="rn" class="display-3">Welcome to Cookie!</h1>
<p>Choose the category that best suits you</p> <br>
</div>
 
<div class = "container col-10" id="categories">
 
<!-- Categories 1 -->
 
<div class="row row-cols-1 row-cols-md-2" >
 
         <!--Foods-->        
         <div class="col mb-4">
             <div id ="foods">
                 <a href="../views/cards.php">
                     <img src="../img/food.jpg" class="card-img-top" alt="Foods" style="width:100% height:auto">              
                         <button type="button" class="btn btn-outline-dark col mb-4">Foods</button>                                 
                 </a>  
             </div>
              
         </div> 
     
         <!--Desserts-->
         <div class="col mb-4">
             <div id ="desserts">
                 <a href="../views/desserts.php">
                     <img src="../img/dessert.jpg" class="card-img-top" alt="dessert" style="width:100% height:auto">
                     <div>
                         <button type="button" class="btn btn-outline-dark col mb-4">Desserts</button>                 
                     </div>  
                 </a> 
             </div>
                
         </div> 
                     
 </div>
     
 <!-- Categories 2 -->
 
 <div class="row row-cols-1 row-cols-md-2">
     
     <!--Family-->           
     <div class="col mb-4">
         <div id ="family">
             <a href="familiar.php">
                 <img src="../img/family.jpg" class="card-img-top" alt="family" style="width:100% height:auto">
                 <div>
                 <button type="button" class="btn btn-outline-dark col mb-4">For the family</button>               
                 </div>  
             </a>   
         </div>
           
     </div> 
 
     <!--Individual-->
     <div class="col mb-4">
         <div id ="individual">
             <a href="individual.php">
                 <img src="../img/individual.jpg" class="card-img-top" alt="individual" style="width:100% height:auto">
                 <div >
                 <button type="button" class="btn btn-outline-dark col mb-4">For yourself</button>              
                 </div>  
             </a>    
         </div>
           
     </div> 

 </div>
 
 <!-- Categories 3 -->
 
     <div class="row row-cols-1 row-cols-md-2">
     
         <!--easy to make-->         
         <div class="col mb-4">
             <div id ="easy">
                 <a href="short.php">
                     <img src="../img/easy.jpg" class="card-img-top" alt="easy" style="width:100% height:auto">
                     <div>
                         <button type="button" class="btn btn-outline-dark col mb-4">Easy to make</button>                  
                     </div>  
                 </a>      
             </div>
             
         </div> 
     
         <!--hard to make-->
         <div class="col mb-4">
             <div id ="hard">
                 <a href="long.php">
                     <img src="../img/hard.jpg" class="card-img-top" alt="hard" style="width:100% height:auto">
                     <div>
                     <button type="button" class="btn btn-outline-dark col mb-4">Hard to make</button>                 
                     </div>  
                 </a>       
             </div>
              
         </div> 
                         
     </div>

 </div>

</div>

'
?>
