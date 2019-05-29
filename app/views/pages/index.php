<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="w3-content w3-display-container" style="width:1000px;top: 55px;">
    <img class="mySlides" src="/public/images/msigtx1070.jpg" style="width:100%">
    <img class="mySlides" src="/public/images/gtx1660ti.jpg" style="width:100%">
    <img class="mySlides" src="/public/images/msigtx1070.jpg" style="width:100%">
    <img class="mySlides" src="/public/images/gtx1660ti.jpg" style="width:100%">
      
    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<div class="a">
    <h2>Welcome To Sefs Co. Hardware</h2>
</div>
<p id="para">
    Here at Sefs Co. Hardware you can find any graphics card on the market and all its specifications and details. This website
    also contains a compare feature to help you find the graphics card that suits your needs.
</p>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);
    carousel();
        
function plusDivs(n) {
    showDivs(slideIndex += n);
}
        
function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";
}

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {
        slideIndex = 1
    } 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000);
    }
</script>

<?php include(APPROOT . "/views/includes/footer.php"); ?>