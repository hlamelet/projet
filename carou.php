<!DOCTYPE html>
<html>
<head>
    <title>skip ad</title>
    <link rel="stylesheet" href="carou.css">
</head>
<body style="height: 2000px;">
	
    <div class="slider">
		<!-- fade css -->
		<div class="myslide fade">
			<div class="txt">
				<h1>IMAGE 1</h1>
				<p>Web Devoloper<br>Subscribe To My Channel For More Videos</p>
			</div>
			<img src="img1.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				<h1>IMAGE 2</h1>
				<p>Web Devoloper<br>Subscribe To My Channel For More Videos</p>
			</div>
			<img src="img2.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				<h1>IMAGE 3</h1>
				<p>Web Devoloper<br>Subscribe To My Channel For More Videos</p>
			</div>
			<img src="img3.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				<h1>IMAGE 4</h1>
				<p>Web Devoloper<br>Subscribe To My Channel For More Videos</p>
			</div>
			<img src="img4.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				<h1>IMAGE 5</h1>
				<p>Web Devoloper<br>Subscribe To My Channel For More Videos</p>
			</div>
			<img src="img5.jpg" style="width: 100%; height: 100%;">
		</div>
		<!-- /fade css -->
		
		<!-- onclick js -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		
		<div class="dotsbox" style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
			<span class="dot" onclick="currentSlide(5)"></span>
		</div>
		<!-- /onclick js -->
	</div>
	
<script src="carou.js"></script>
</body>
</html>


