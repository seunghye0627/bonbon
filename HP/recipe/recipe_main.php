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
          
            <div class="clear" id="sidebar">
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
                      
        
        </section>
        
        <footer>
            <div id="ssibal">
                <div id = "footer_content">
                    <p id = "footer_logo">레시피 | <span>충북대학교</span></p>
                    <ul id = "download">
                        <li></li>
                        <li></li>
                        <li>적당한 사~진</li>
                    </ul>
                    <ul id = "author">
                        <li>문의 메일</li>
                        <li>- 개발자1 : juyeon522@naver.com</li>
                        <li>- 개발자2 : muntaxx@naver.com</li>
                        <li>- 개발자3 : pmis118@naver.com</li>
                    </ul>
                </div>
            </div>
        </footer>
        
    </body>
</html>