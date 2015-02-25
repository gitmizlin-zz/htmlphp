<?php
	include("incl/config.php");

	$title = "Om mig";

	include("incl/header.php"); 
?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->
<div id="content">
		<h1>
			<?php 
				echo $title; 
			?>
		</h1>	
			<p>Hej! Mi heter jag och bor i södra Stockholm med min pojkvän och katt.</p>

			<p>Jag har aldrig jobbat med programmering, men har de senaste veckorna pluggat lite PHP på egen hand och kände att det var dags att läsa det på riktigt. </p>

			<p>På min fritid gillar jag att simma och baka. Min specialité är kaffebröd med vitchoklad och kastanjer;)</p>	
				<img id="main_img" src="img/me.jpg" alt="main photo">

</div> 	<!-- end of content -->	

<?php
	include("incl/footer.php"); 
?>