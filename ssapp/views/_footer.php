		</div>
		<footer><?= $this->lang->line('footer_copyright_text') ?></footer>
	</div> <!--! end of #content -->
	
	<!-- jQuery -->
	<script src="<?php echo base_url().JSLIB_FOLDER; ?>jquery-1.5.min.js"></script>
	
	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php echo base_url().JSLIB_FOLDER; ?>plugins.js"></script>
	<script src="<?php echo base_url().JS_FOLDER; ?>/script.js"></script>
	<!-- end concatenated and minified scripts-->
	
	<!--[if lt IE 7 ]>
	<script src="<?php echo base_url().JSLIB_FOLDER; ?>dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
	<![endif]-->
	
	<!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet 
		change the UA-XXXXX-X to be your site's ID -->
	
	<!-- 
	<script>
		var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
		(function(d, t) {
   			var g = d.createElement(t),
			s = d.getElementsByTagName(t)[0];
			g.async = true;
			g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g, s);
		})(document, 'script');
	</script>
	-->
  
</body>
</html>