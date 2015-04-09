<!-- Footer -->
	<div id="footer">
	    <div>
			<footer id="bottom">
				<div class="fotter_column">
			        <p><b>Besöksadress:</b> Skogskyrkogården, Donationsgatan 2, 341 35 Ljungby</p>
			        <p><b>Kontakt via pastorsexpeditionen:</b> Skogskyrkogården, Donationsgatan 2, 341 35 Ljungby</p>
			        <p><a href="https://goo.gl/maps/YUjRE" target="_blank">Se karta</a></p>

			        <?php if (isset($pageId) && $pageId!="om") {
			        	echo '<p><a href="om.php">>>Läs mer om oss</a></p>';
			        } ?>
			    </div>

			    <div class="fotter_column">
			        <p><b>Telefon: </b> 0372-671 10</p>
			        <p><b>E-mail: </b><a href="mailto:ljungby@svenskakyrkan.se">ljungby@svenskakyrkan.se</a></p>
			        <p><b>Facebook: </b><a href="https://www.facebook.com/Begravningsmuseet">BMO</a></p>
			    </div>

				<div class="fotter_column">
					<p><b>Admin Validatorer:</b><br/>
						<a href="http://validator.w3.org/check/referer">HTML5</a><br/>
						<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a><br/>
						<a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a><br/>
						<a href="http://validator.w3.org/i18n-checker/check?uri=<?php echo getCurrentUrl(); ?>">i18n</a><br/>
		 				<a href="http://validator.w3.org/checklink?uri=<?php echo getCurrentUrl(); ?>">Links</a><br/>
					</p>
			    </div>
			</footer>
		</div>
	</div> <!-- end of footer div -->
</div>   <!-- end of footer whole -->

</body>
</html>
