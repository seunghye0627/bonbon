<!-- 메인 이미지 영역 -->
<!-- <div id = "main_img_bar">
	<img src = "./img/main_img.jpg">
</div> -->

<div id="main_header" style="width: 100%; height: 270px;">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel-img" style="width: 100%" height="650px" src="./img/valentine.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <p class="subtitle"> Valentine Day Recipe</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="carousel-img" style="width: 100%" height="650px" src="./img/white.jpg" alt="Second slide">
      		 <div class="carousel-caption d-none d-md-block">
                <p class="subtitle"> White Day Recipe</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="carousel-img" style="width: 100%" height="650px" src="./img/christ1.jpg" alt="Third slide">
        	 <div class="carousel-caption d-none d-md-block">
                <p class="subtitle"> Christmas Day Recipe</p>
            </div>
        
        </div>
    </div>
</div>
</div>

<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>


<!-- 최신 게시글 표시 영역 -->
<div id = "main_content">
	<article id = "latest">
		<h4>최신 게시글</h4>
		<ul></ul>
	</article>
	
	<!-- 포인트 랭킹 목록 -->
	<article id = "point_rank">
		<h4>포인트 랭킹</h4>
		<ul></ul>
	</article>
</div>