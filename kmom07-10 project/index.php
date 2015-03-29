<?php
	include("incl/config.php");

	$pageTitle = "Välkommen till Begravningsmuseum Online";
	$pageId = "hem";
	$pageStyle = null;

	include("incl/header.php");
?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->

<div id="content">
	<article class="justify border">
		<h1>
			<?php
				echo $pageTitle;
			?>
		</h1>
			<p>bla bla

			<figure class="presentation">
				<img id="main_img" src="img/me.jpg" alt="main photo">
				<figcaption>
					<p>Bild: Mis katt. Togs <time>2014-07-01</time></p>
				</figcaption>
			</figure>
	</article>
</div> 	<!-- end of content -->

<?php
	include("incl/byline.php");
?>

<?php
	include("incl/footer.php");
?>

