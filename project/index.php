<?php
	include("incl/config.php");

	$pageTitle = "Välkommen till Begravningsmuseum Online";
	$pageId = "hem";
	$pageStyle = null;

	include("incl/header.php");
?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->

	<div id="content">
		<article class="content column c-7">

			<?php
				if (isset($_POST['all-objects'])) {

					echo "<h2>Alla museiobjekt</h2>";
					include('incl/objekt/read_all.php');
				}
			?>

        <?php if (!isset($_POST['all-objects'])): ?>
			<div>
				<h1><?php echo $pageTitle; ?></h1>
				<p>BMO finns för att vårda ett kulturarv av seder och bruk kring begravningar.</p>
			</div>

				<p>
					Begravningsmuseum Online (BMO) finns för att vårda ett kulturarv av seder och bruk kring begravningar.
					Vilka var de seder och bruk som användes vid begravningar för ett eller två sekel sedan? Vi glömmer snabbt.
					BMO finns för att vårda minnen av gångna tiders seder och bruk. Förhoppningsvis ger det oss en förståelse för hur det var på farfars och mormors tid, kanske kan det även hjälpa oss att nyansera vår bild av hur vi gör idag.
				</p>
				<p>
					I början av 1970-talet började Ronny Holm, att samla de första sakerna, som nu finns i Begravningsmuseet i Ljungby.
					Det var ting som funnits i kyrkor, på kyrkogården, från privatpersoner m fl. Under årens lopp har Ronny Holm handlat i second handbutiker, varit på loppmarknader och besökt auktioner.
				</p>
				<p>
					I samband med en kyrkogårdsvandring arrangerades en utställning med föremål från Ronny Holms samling.
					Flera av deltagarna vid rundvandringen tyckte att utställningen var så värdefull att den borde permanentas.
					I samband med Alla Helgons Dag, 2004, invigdes så Sveriges första begravningsmuseum.
				</p>
				<p>
					Redan efter ett par veckor hade man haft över 2000 besökare och intresset var mycket stort från både allmänhet, grupper av alla de slag och inte minst massmedia.
					Museet visar seder och bruk vid död och begravning under 1800 och 1900-talen.
					Här visas hela förloppet vid ett dödsfall, från tillkännagivandet via klockringning till gravsättningen och gravölet. Många av föremålen är skänkta eller utlånade av privatpersoner, institutioner etc.
				</p>
			<?php endif; ?>

			<?php if (!isset($_POST['all-objects'])): ?>
			<ul class="thum_250">
				<li><img src="img/bmo/250/minnestavla_eug.jpg"/></li>
				<li><img src="img/bmo/250/parlkrans_blomma.jpg"/></li>
				<li><img src="img/bmo/250/begravningskonfekt_madonna_maria_o_jesus.jpg"/></li>
				<li><img src="img/bmo/250/portvin_med_glas.jpg"/></li>
				<li><img src="img/bmo/250/begravningskonfekt_svart_tro_hopp_karlek.jpg"/></li>
			</ul>

				<form method="post" class="button">
					<input type="image" src="img/obj_all_button.png" id="button" name="all-objects" value	="Visa alla objekt" />
				</form>
			<?php endif; ?>


		</article>
	</div> 	<!-- end of content -->
<?php
	include("incl/footer.php");
?>
