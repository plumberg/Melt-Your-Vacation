<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="contact_login.php">Contact</a>
</div>


   
  <div id="main">
      
        <button class="openbtn" style="width:100%" onclick="openNav()">&#9776; See Menu</button>        
        
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