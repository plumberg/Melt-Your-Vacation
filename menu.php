<!-- new header is copied from the bootstrap free samples -->
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <!--<h5 class="my-0 mr-md-auto font-weight-bold">Melt Your Vacation</h5>-->
  <img src="img/logoName.png" class="my-0 mr-md-auto">
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">About</a>
    <a class="p-2 text-dark" href="services.php">Services</a>
    <a class="p-2 text-dark" href="contact_email.php">Contact Us</a>
    <a class="p-2 text-dark" href="cart.php">My Schedule</a>
  </nav>

  <?php
  session_start();
  if(isset($_SESSION['name'])): ?>
    <a class="btn btn-outline-primary" href="logout.php">Log Out</a>
  <?php else: ?>
    <a class="btn btn-outline-primary" href="contact_login.php">Log In</a>
  <?php endif; ?>




</div>

<!--
Old version:

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="services.php">Services</a>
  <a href="#">Clients</a>
  <a href="contact_login.php">Contact</a>
</div>



  <div id="main">

        <button class="openbtn" style="width:100%" onclick="openNav()">&#9776; Melt Your Vacation Menu</button>

        <div id="name">
            <h2>Melt Your Vacation</h2>
        </div>

   </div>


    <div id="logo">
            <p>Find your adventure now...
            <IMG SRC="logo.png" ALT="logo" WIDTH=140 HEIGHT=140>
                </p>
    </div>


<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
</script>
-->
