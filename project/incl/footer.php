<!-- Footer -->
			<footer id="bottom">
				<div class="fotter_column">
			        <p><b>Besöksadress:</b><br/> Skogskyrkogården, Donationsgatan 2, 341 35 Ljungby</p>
			        <p><b>Kontakt via pastorsexpeditionen:</b> Skogskyrkogården, Donationsgatan 2, 341 35 Ljungby</p>
			        <p><a href="https://goo.gl/maps/YUjRE" target="_blank">>>Se karta</a><br>			        <?php if (isset($pageId) && $pageId!="om") {
			        	echo '<a href="om.php">>>Läs mer om oss</a>';
			        } ?></p>

			    </div>

			    <div class="fotter_column">
			        <p><b>Telefon: </b> 0372-671 10</p>
			        <p><b>E-mail: </b><a href="mailto:ljungby@svenskakyrkan.se">ljungby@svenskakyrkan.se</a></p>

			        <ul id="logos">

			        	<li><a href="https://www.facebook.com/Begravningsmuseet" target="_blank" title="BMOs facebook-sida"><img src="img/fb_logo.jpg" alt="facebook" /></a></li>

			        	<li><a href="https://goo.gl/maps/YUjRE" target="_blank" title="BMO på Google karta"><img src="img/gmap_logo.jpg" alt="google_map" /></a></li>
			        	<li><a href="http://www.hitta.se/begravningsmuseet/ljungby/yhzzl2X4mn" target="_blank" title="BMO på Hitta.se"><img src="img/hitta_logo.jpg" alt="hitta.se" /></a></li>
			        	<li><a href="http://www.svenskakyrkan.se/ljungby/begravningsmuseum" target="_blank" title="BMO på Svenska kyrkans webbsida"><img src="img/svenska_kyrkan_logo.jpg" alt="Svenska kyrkan" /></a></li>
			        </ul>
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
	</div> 	<!-- end of content -->

</body>
</html>
