<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
    font-family: "Times New Roman", Times, serif;
  color: black;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.dot {
  height: 5px;
  width: 20px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 15px;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: black;
}
.span{
    font-weight:bold;
    font-style: italic;
    color:#ff4012;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
    <img src="images/slider2.jpg" style="width:100%; vertical-align: middle; height: 500px;">
    <div class="text">We make a living by what we get, but we make a life by what we give.</div>
</div>

<div class="mySlides fade">
    <img src="images/slider6.jfif" style="width:100%; vertical-align: middle; height: 500px;">
    <div class="text">To give blood you need neither extra strength nor extra food, and you will save a life.</div>
</div>

<div class="mySlides fade">
  <img src="images/slider4.jpg" style="width:100%; vertical-align: middle; height: 500px;">
  <div class="text">
         <div>If you’re a blood donor, you’re a hero to someone, somewhere, </div><div>who received your gracious gift of life.</div>
         </div>
</div>
</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>

</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 
