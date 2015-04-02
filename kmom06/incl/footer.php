<!-- Footer -->
	<div id="footer">
	<hr>
		<footer id="bottom">
			<p>Verktyg:
				<a href="http://validator.w3.org/check/referer">HTML5</a>   |
				<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>  |
				<a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>  |
				<a href="http://validator.w3.org/i18n-checker/check?uri=<?php echo getCurrentUrl(); ?>">i18n</a>  |
 				<a href="http://validator.w3.org/checklink?uri=<?php echo getCurrentUrl(); ?>">Links</a>  |
			</p>

			<?php if(isset($pageTimeGeneration)) : ?>
  			<p>Page generated in <?php echo round(microtime(true)-$pageTimeGeneration, 5); ?> seconds</p>
  			<?php endif; ?>

		</footer>
	</div> <!-- end of footer div -->
</body>
</html>
