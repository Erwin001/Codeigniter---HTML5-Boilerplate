		</div>
		<footer>
			
		</footer>
	</div> <!--! end of #container -->
	
	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='<?php echo base_url().JSLIB_FOLDER; ?>jquery-1.5.2.min.js'>\x3C/script>")</script>
	
	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php echo base_url().JS_FOLDER; ?>plugins.js"></script>
	<script src="<?php echo base_url().JS_FOLDER; ?>script.js"></script>
	<!-- end scripts-->
	
	<!--[if lt IE 7 ]>
	    <script src="/static/js/libs/dd_belatedpng.js"></script>
	    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
	  <![endif]-->
	
	<!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site's ID -->
	<script>
	    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
	    s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>
  
</body>
</html>