<?php
use App\Models\User;

$user=DB::table('users');

$total=0;
if(Session::has('user')){
  $total=ProductController::cartitem();
}

?>


<!DOCTYPE html>
<html>
<title>E-Commerce</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>E-Comm</b></h3>
    <div style="color:#ff6666;">{{ Auth::user()->name }}</div>

  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="#" class="w3-bar-item w3-button">Dresses</a>
    <a href="#" class="w3-bar-item w3-button">Skirts</a>
    <a href="#" class="w3-bar-item w3-button">Pants</a>
    <a href="#" class="w3-bar-item w3-button">Make Up</a>


    
   
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a> 
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a> 
  <a href="{{route ('logout')}}" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('/logout').style.display='block'">Logout</a> 


</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">EcOm</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left" style="color:#ff9999;">Home</p>
    <p class="w3-right">


    <a href="cartlist">
      <i class="fa fa-shopping-cart w3-margin-right"> ({{$total}})</i>
      </a>


      <a href="">
      <i class="fa fa-search"></i>
      </a>


    </p>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="https://cdn.dribbble.com/users/3877357/screenshots/6871656/main-2.gif" alt="Home" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">New arrivals</h1>
      <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>
      <h1 class="w3-hide-small">COLLECTION 2021</h1>
      <p><a href="{{url('allproducts')}}" class="w3-button w3-black w3-padding-large w3-large">SHOPING NOW</a></p>
    </div>
  </div>

  

  <!-- Product grid -->
  <a href="">
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="https://my-live-05.slatic.net/p/af874f2d47cc105200ad5f34fdf8abc6.jpg_720x720q80.jpg_.webp" style="width:200px;height:300px;">
        <p>Wide Leg <br><b>$40.99</b></p>
      </div>
      </a>
    </div>
<div class='container'>
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="/w3images/jeans2.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
          </div>
        </div>
      </div>
      <a href="">
      <div class="w3-container">
        <img src="https://assets.ajio.com/medias/sys_master/root/20210403/bsM4/606867797cdb8c1f147522b4/-288Wx360H-461088032-blue-MODEL.jpg" style="width:200px;height:300px;">
        <p>Straweberry dress <br><b>$240.99</b></p>
      </div>
      </a>
    </div>
<a href="">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="https://ae01.alicdn.com/kf/H92903b59111446d7afc0118549600b0fe/Richkeda-Store-New-Hot-Hot-Spring-Autumn-New-Arrival-Solid-Color-Floral-Skirt-A-line-High.jpg_Q90.jpg_.webp" style="width:300px;height:300px;">
        <p>Butterfly skirt<br><b>$20</b></p>
      </div><br>
      </a>
      <div class="w3-container">
        <div class="w3-display-container">
          <div class="w3-display-middle w3-display-hover">
          </div>
        </div>
      </div>
    </div>
<a href="">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="https://etakeit.com/image/cache/data/maak/%D8%B1%D9%88%D8%AC-%D8%A7%D8%AD%D9%85%D8%B1-%D8%B4%D9%81%D8%A7%D9%87-%D9%85%D9%86-%D9%85%D8%A7%D9%83-mac-lipstick-russian-red-m-%D9%85%D8%A7%D9%83%D9%8A%D8%A7%D8%AC-1000x1000.jpg" style="width:300px;height:300px;">
        <p>Mac LipStic<br><b>$400.99</b></p>
      </div><br>
      </a>
    </div>
  </div>
  </div>
  
  
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Contact</h4>
        <p>Questions? Go ahead.</p>
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form>
      </div>

     

      <div class="w3-col s4 w3-justify">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Company Name</p>
        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>
    </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24">Developed by <a href="" title="W3.CSS" target="_blank" class="w3-hover-opacity">Amina Hesham</a></div>

  <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">NEWSLETTER</h2>
      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
