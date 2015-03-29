<?php
	include("incl/config.php");

    $pageTitle = "Välkommen till Begravningsmuseum Online";
    $pageId = "top";
	include("incl/header.php");
?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->

<div id="content">
	<article class="justify_border1">
		<h1>
			<?php
				echo $pageTitle;
			?>
		</h1>

		  <img class="img-float-left" src="img/ronny_holm.jpg" alt="Ronnt Holm">

			<p>Begravningsmuseum Online (BMO) finns för att vårda ett kulturarv av seder och bruk kring begravningar. Vilka var de seder och bruk som användes vid begravningar för ett eller två sekel sedan? Vi glömmer snabbt. BMO finns för att vårda minnen av gångna tiders seder och bruk. Förhoppningsvis ger det oss en förståelse för hur det var på farfars och mormors tid, kanske kan det även hjälpa oss att nyansera vår bild av hur vi gör idag.

			<p>Denna webbplats är resultat av ett samarbete mellan Ronny Holm, Mikael Roos och studenter på kursen "Databaser, HTML, CSS och skriptbaserad PHP-programmering" vid Blekinge Tekniska Högskola.

			<p>Texterna på BMO är skapade av Ronny Holm och Mikael Roos, om inte annat anges. Bilderna som används är från Ronny Holms privata samling. De objekt som finns på BMO är från Ronny Holms privata samling om inget annat anges.

			<p>Varje student har skapat ett eget BMO, mer eller mindre inspirerade av sina med-studenters arbeten, input från Ronny Holm i sin funktion som kund samt input och feedback från kursens lärare.

			<p>Text och material på denna webbplats är publicerat enligt licensen <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution Share-Alike License v3.0</a> om inte annat anges.

			<p class="mer_om_oss"><a href="om_oss.php">›› Mer om oss</a>
	</article>

    <!-- byline -->
	<div id="byline" class="byline">
	 <p><strong>Om utvecklaren</strong></p>
	 <p>Jag som har skapat hemsidan heter Mi. Utom html och php läser jag Python på BTH. Målet är att jag ska kunna jobba inom utvecklingsbranschen. På fritiden bakar jag kaffebröd och tårtor. Älskar djur, speciellt katter.</p>
	 </div>
</div> 	<!-- end of content -->


<?php
	include("incl/footer.php");
?>

