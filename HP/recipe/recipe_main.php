<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>레시피</title>
              
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel = "stylesheet" href="../css/common.css">
        <link rel = "stylesheet" href = "../css/recipe.css">
    </head>
    
    <body>
        <header>
            <?php include "../lib/header2.php"?>
        </header>
        
        <section>
        
        <div id="wrapper">
          
            <div id="sidebar">
                <ul id="recipe_menu">
                    <li><a href="#">발렌타인 데이</li>
                    <li><a href="#">화이트 데이</li>
                    <li><a href="#">결혼 기념일</li>
                    <li><a href="#">크리스마스</li>
                    <li><a href="#">기타 기념일</li>
                </ul>
            </div>
            
            <div id="menu_content">
                <div class="factor text-center">
                    
                    <div class="col-xs-4 product">
                        <img src = "../img/imsichoco.jpg" width="150">
                        <p style="margin-top: 15px;"> 오레오 초코쿠키 </p>                                                           
                    </div>
                    
                    <div class="col-xs-4 product">
                        <img src = "../img/imsichoco.jpg" width="150">
                        <p style="margin-top: 15px;"> 화이트 초코마카다미아</p>                
                    </div>
                    
                    <div class="col-xs-4 product">
                        <img src = "../img/imsichoco.jpg" width="150">
                        <p style="margin-top: 15px;">그 아무튼 </p>               
                    </div>
            
                    <div class="col-xs-4 product">
                        <img src = "../img/imsichoco.jpg" width="150">
                        <p style="margin-top: 15px;"> 맛있는 거 </p>             
                    </div>
                </div>
                
                <br>
                
                <div class="factor text-center">
                    
                    <div class="col-xs-4 product">
                        <img src = "../img/imsichoco.jpg" width="150">
                        <p style="margin-top: 15px;"> 오레오 초코쿠키 </p>                                                           
                    </div>
                    
                    <div class="col-xs-4 product">
                        <img src = "../img/imsichoco.jpg" width="150">
                        <p style="margin-top: 15px;"> 화이트 초코마카다미아</p>                
                    </div>
                    
                    <div class="col-xs-4 product">
                        <img src = "../img/imsichoco.jpg" width="150">
                        <p style="margin-top: 15px;">그 아무튼 </p>               
                    </div>
            
                    <div class="col-xs-4 product">
                        <img src = "../img/imsichoco.jpg" width="150">
                        <p style="margin-top: 15px;"> 맛있는 거 </p>             
                    </div>
                </div>
                
                <br>
                
                <div class="factor text-center">
                    
                    <div class="col-xs-4 product">
                        <img src = "../img/imsichoco.jpg" width="150">
                        <p style="margin-top: 15px;"> 오레오 초코쿠키 </p>                                                           
                    </div>
                    
                    <div class="col-xs-4 product">
                        <img src = "../img/imsichoco.jpg" width="150">
                        <p style="margin-top: 15px;"> 화이트 초코마카다미아</p>                
                    </div>
                    
                    <div class="col-xs-4 product">
                        <img src = "../img/imsichoco.jpg" width="150">
                        <p style="margin-top: 15px;">그 아무튼 </p>               
                    </div>
            
                    <div class="col-xs-4 product">
                        <img src = "../img/imsichoco.jpg" width="150">
                        <p style="margin-top: 15px;"> 맛있는 거 </p>             
                    </div>
                </div>
                
            </div>
            
        </div>

        
        </section>
        
        <footer>
            <?php include "../lib/footer.php" ?>
        </footer>
        
    </body>
</html>