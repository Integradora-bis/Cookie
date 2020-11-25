<?php
 echo'
 <!--Main card-->

 <div class="cuki position-relative overflow-hidden p-3 p-md-5 m-sm-5 text-center rounded shadow p-3 mb-5">
 <div class=" col-sm-12 p-lg-5 mx-auto my-5">
     <img class="chef" src="https://drive.google.com/thumbnail?id=1ljq-pIN0MrXAuUiwbuZ7jvOhlQkksR44"><br>
     <h1 class="display-4 font-weight-normal" style="color: #ac8b67">Welcome to Cookie!</h1> <br>
     <p class="lead font-weight-normal">What do you want to eat today?</p> <br>
     <h3"display-4 font-weight-normal" style="color: #ac8b67">Type your ingredient</h3>
     <div style="align-items: center;"><form class="form-inline col-md-3 p-lg-1 mx-auto my-1"></div>
         <input class="form-control col-md-4 p-lg-1 mx-auto my-3 mr-md-6" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-dark my-5 my-sm-0" type="submit">Search</button>
     </form>
 </div>
 </div>

 
  
 <div class = "position-relative overflow-hidden p-3 p-md-5 m-sm-5 text-center rounded shadow p-3 mb-5">

 <br> <h5 id="rn" class="display-10" style="color:#ac8b67">Categories</h5> <br><br>
  
 <!-- Categories 1 -->
  
 <div class="row row-cols-1 row-cols-md-2">
  
          <!--Foods-->        
          <div class="col md-5">
              <div id ="foods">
                  <a href="../views/foods.php">
                      <img src="../img/food.jpg" class="card-img-top" alt="Foods" style="width:100% height:auto">              
                          <button type="button" class="btn btn-outline-dark col mb-4">Foods</button>                                 
                  </a>  
              </div>
               
          </div> 
      
          <!--Desserts-->
          <div class="col md-5">
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
              <a href="../views/family.php">
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
              <a href="../views/individual.php">
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
                  <a href="../views/short.php">
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
                  <a href="../views/long.php">
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
