<div class="row" style="margin-top:20px;">
<div class="col-lg-3 col-lg-offset-5 col-md-3 col-md-offset-5  col-sm-offset-2  col-xs-offset-2">
<select onchange='changecolor(this);'><!-- change background colour options -->
<option value="select">Select content background colour</option>
<option value="#ADD8E6">Pale blue</option>
<option value="#aafbaa">Pale green</option>
<option value="yellow">Yellow</option>
<option value="#e5cb90">Pale cream</option>
<option value="#f1e1cc">Magnolia</option>
</select>
</div>
</div><!-- end of row -->
</div><!-- end of colorbk div for background colour change -->

<div class="row container-fluid" style="margin-top: 20px;">

		
			<div class="footer" style="max-width: 1200px;">
			<div style="margin:0 auto;" class="jumbotron" class="col-lg-12   col-md-6 col-sm-12  col-xs-12 ">
				
	    <div id="flinks" class="col-lg-2 ">
        
       <a class="li" href="https://www.birdwatching.co.uk/" target="_blank">Bird Watching Magazine</a>
       <br><br>
       <a class="li" href="http://www.thefield.co.uk/" target="_blank">The Field </a>
       <br><br>
       <a class="li" href="index.php?p=contact" target="_blank">Contact Us </a>

   </div>
   
<div id="face2" class="col-lg-1 col-lg-offset-1 hidden-xs hidden-sm hidden-md">
    <a href="https://en-gb.facebook.com/" target="_blank"><img src="images/face2.jpg" alt="Facebook link" style="max-width:120px" ></a>
</div>
    
<div id="twit2" class="col-lg-1 col-lg-offset-1 hidden-xs hidden-sm hidden-md">
    <a href="https://twitter.com/" target="_blank"><img src="images/twit2.jpg"  alt="Twitter link" style="max-width:120px"  ></a>
</div>
    
 <div id="insta" class="col-lg-1 col-lg-offset-1 hidden-xs hidden-sm hidden-md">
    <a href="https://www.instagram.com/?hl=en/" target="_blank"><img src="images/insta.jpg" alt="Instagram link" style="max-width:120px" ></a>
</div>
   
<div id="rspb" class="col-lg-1 col-lg-offset-1  hidden-xs hidden-sm hidden-md">
    <a href="https://ww2.rspb.org.uk/join-and-donate/join-us/?gclid=EAIaIQobChMIruaq2Yvq1wIVETwbCh3lFgacEAAYASAAEgK83_D_BwE" target="_blank"><img src="images/rspb.jpg" alt="Royal Society for the Protection of Birds link"  style="max-width:120px" ></a>
</div>
				</div>
   
</div>
			
			</div>
</div>

		
	
</div>

<!-- twitter js taken from: https://developer.twitter.com/en/docs -->
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));
</script><!-- end of twitter js -->

<!-- background colour change js -->
<script type="text/javascript">
  function changecolor(color) {
	  document.getElementById('colorbk').style.
	     background= color.value;
  }

</script>

</body>
</html>