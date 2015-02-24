<?php
	include("incl/config.php");

	$title = "Om mig";
	$pageId = "me";
	$pageStyle = null;

	include("incl/header.php"); 
?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->

<div id="content">
	<article class="justify border">
		<h1>
			<?php 
				echo $title; 
			?>
		</h1>	
			<p>Hej! Mi heter jag och bor i södra Stockholm med min pojkvän och katt.</p>

			<p>Jag har aldrig jobbat med programmering, men har de senaste veckorna pluggat lite PHP på egen hand och kände att det var dags att läsa det på riktigt. </p>

			<p>På min fritid gillar jag att simma och baka. Min specialité är kaffebröd med vitchoklad och kastanjer;)</p>	

			<figure class="presentation">
				<img id="main_img" src="img/me.jpg" alt="main photo">
				<figcaption>
					<p>Bild: Mis katt. Togs <time>2014-07-01</time></p>
				</figcaption>
			</figure>
	</article>
</div> 	<!-- end of content -->	

<?php 
	include('incl/byline.php'); 
?>

<?php
	include("incl/footer.php"); 
?>
