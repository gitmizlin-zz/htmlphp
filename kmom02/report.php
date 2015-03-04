<?php 
	include("incl/config.php");

	$title = "Mina redovisningar av kursmomenten";
	$pageId = "report";

	include("incl/header.php"); 
?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->
		<h1>
			<?php 
				echo $title; 
			?>
		</h1>

		<div id="presentation">
			<article id="report_kmom02">
				<h2>
					Kmom02: HTML-element och CSS-konstruktioner
				</h2>
					<p>Det andra momentet tog ganska mycket mer tid än det första - Favicon tyckte jag speciellt var intressant så jag tillbringade ett par timmar på att kolla och läsa om det.</p>
					<p>Jag har tidigare läst lite HTML och CSS, men det var 10 år sedan och jag har nästan  aldrig använt dem de senaste åren, så jag är fortfarande nybörjare. Guiderna html20 och css20 har jag dragit mycket nytta av. </p>
					<p>Visste inte om att man kunde ändra specifik sida med en variabel, det var smidigt.</p>
					<p>Me-sidans struktur av filer känns helt okej för mig. Dock vet jag inte hur det kommer att kännas när det blir fler och fler filer i de kommande momenten.</p>
			</article> <!-- end of report_kmom02 article -->

			<article id="report_kmom01">
				<h2>
					Kmom01: Kom igång med HTML, CSS och PHP
				</h2>
					<p>Det första momentet gick bra för mig, jag hade inga stora problem med att följa instruktionerna.</p>
					<p>Jag använder Windows 8.1 och Ubuntu 13.10, och kör normalt Chrome som webbläsare. För att kontrollera att webbsidan fungerar som den ska har jag även kört sidan i FF och IE. FileZilla har jag aldrig använt förut men det verkar fungera bra. Texteditor som jag använder är Sublime Text2.</p>
					<p>Instruktionerna var användarvänliga med personlig praktisk vägledning. Det tyckte jag var bra för att kunna komma igång med kursen.</p>
			</article> <!-- end of report_kmom01 article -->

		</div> <!-- end of presentaion div --> 


	<?php 
		include("incl/footer.php"); 
	?>
