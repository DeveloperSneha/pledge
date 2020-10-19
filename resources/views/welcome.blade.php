<style>
    .curtain {
  width: 100%; /* Ensures the component is the full screen width */
  height: 100vh; /* We're using this for demo purposes */
  overflow: hidden; /* Allows us to slide the panels outside the container without them showing */
}
  
.curtain__wrapper {
  width: 100%;
  height: 100%;
}

input[type=checkbox] {
  position: absolute; /* Force the checkbox at the start of the container */
  cursor: pointer; /* Indicate the curtain is clickable */
  width: 100%; /* The checkbox is as wide as the component */
  height: 100%; /* The checkbox is as tall as the component */
  z-index: 100; /* Make sure the checkbox is on top of everything else */
  opacity: 0; /* hide the checkbox */
}

/* Slide the first panel in */
input[type=checkbox]:checked ~ div.curtain__panel--left {
    transform: translateX(0);
}
        
/* Slide the second panel in */
input[type=checkbox]:checked ~ div.curtain__panel--right {
    transform: translateX(0);
}
      
.curtain__panel {
  background: orange;
  width: 50%; /* Each panel takes up half the container */
  height: 100vh; /* Used for demo purposes */
  float: left; /* Makes sure panels are side-by-side */
  position: relative; /* Needed to define the z-index */
  z-index: 2; /* Places the panels in front of the prize */
  transition: all 1s ease-out; /* Animates the sliding transition */
}

.curtain__panel--left {
  transform: translateX(-100%);
}

.curtain__panel--right {
    transform: translateX(100%);
}
  
.curtain__prize {
  background: #333;
  position: absolute; /* Forces the prize position into the container start */
  z-index: 1; /* Places the prize behind the panels, which are z-index 2 */
  width: 100%;
  height: 100%;
}
</style>
<!-- The parent component -->
<div class="curtain">
    
    <!-- The component wrapper -->
  <div class="curtain__wrapper">
    
    <!-- The checkbox hack! -->
        <input type="checkbox" checked>
    
    <!-- The left curtain panel -->
    <div class="curtain__panel curtain__panel--left">

    </div> <!-- curtain__panel -->
    
    <!-- The prize behind the curtain panels -->
    <div class="curtain__prize">

    </div> <!-- curtain__prize -->
    
    <!-- The right curtain panel -->
    <div class="curtain__panel curtain__panel--right">
        
    </div> <!-- curtain__panel -->
    
  </div> <!-- curtain__wrapper -->
</div> <!-- curtain -->