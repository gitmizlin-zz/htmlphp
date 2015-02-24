<?php 
	include("incl/config.php");

	$title = "Mina redovisningar av kursmomenten";
	$pageId = "report";

	include("incl/header.php"); 
?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->

		<div id="presentation">

			<h1>
				<?php 
					echo $title; 
				?>
			</h1>
			<article id="report_kmom05">
				<h2>
					Kmom05: HTML-formulär och PHP
				</h2>
				    <P>Kommer snart

			</article> <!-- end of report_kmom05 article -->

			<article id="report_kmom04">
				<h2>
					Kmom04: CSS och en style-väljare i PHP
				</h2>
					<P>Detta kursmoment gick relativt bra. Jag tyckte att speciellt färg-delen var intressant och lärorik. Jag ser tusentals färger i mitt vardagliga liv men har aldrig tänkt på varför de ser ut som de gör, och hur våra ögon tolkar dem. Colorzilla och Adobe color-wheel tyckte jag var väldigt användbara och roliga. Dom ska jag definitivt använda när jag ska styla i framtiden.

					<P>Jag blev helt beroende av att kika på Mos kod när det gällde styleväljaren. Jag känner mig osäker på php och behöver mer övning. När jag är färdig med kursen ska jag göra en webbsida själv från grunden, hoppas att jag kommer att känna mig bekväm med php tills dess.

					<P>Jag skapade en stylesheet "pop.css", där sidan skulle få utseendet av “pop”; enkel och lite barnslig. Men ändringen av background verkar inte ha påverkat "me"-sidan (top-page) medan alla andra funkar bra. Har fortfarande inte lyckats med att hitta vad som är fel med koden. Och "empty.css" sheeten verkar inte fungera som den ska. Stylen blir inte helt tom, utan ärver standard-stylesheeten trots att empty.css är helt tom, så lite tips skulle mycket uppskattas. 

					<P>När jag först började läsa css för många år sedan så kändes det roligt och ganska enkelt. Men efter ett tag så började det kännas jobbigt speciellt när det gällde layout. Float och clear hade jag haft svårt med länge, men nu känns det okej. Känner fortfarande inte att jag bemästrar css, men det går framåt i alla fall.					

			</article> <!-- end of report_kmom04 article -->
				<h2>
					Kmom03: Dynamisk webbplats med PHP
				</h2>
					<P>I detta moment var vissa delar svåra medan andra var lätta att förstå. Det gick i alla fall snabbare än det första och andra momenten.

					<P>Att man kunde sätta timer för att veta hur lång tid det tar för att generera en sida visste jag inte om. Har aldrig tänkt på sådana saker förut, så det var lärorikt. 

					<P>Jag spenderade mycket tid på att fixa storleken av rutan för login success/failure meddelandet. Dock så hur mycket jag än ändrade stylesheeten så hände ingenting. Till slut så märkte jag äntligen att storleken var redan bestämd i "style" i html, inte i css. Undrar varför man sätter design i html, en bra förklaring skulle uppskattas. 

					<P>Det var också svårt att sätta multi-sidans meny bredvid main-boxen som låg under menyn. Jag prövade använda float, ändra storlekerna av rutorna, margin, padding etc. Det äntligen löste sig när jag kom på att jag behövde använda "display: inline-block". Tycker verkligen att css är knepigt. 

					<P>$_GET och $_POST förstod jag bra tack vare exemplen.

					<P>Jag förstår fortfarande inte koden "session_name(preg_replace('/[:\.\/-_]/', '', __FILE__));" i "config.php". Har läst om regex men kan inte komma på vad "'/[:\.\/-_]/'"-delen ska matcha. Kunde inte hitta någon förklaring i instruktionen heller, så lite tips på sidan vore nice.

					<P>Nu när man skriver mer kod i filerna och skapar fler filer så känns det lite jobbigt att komma ihåg vilken kod som finns i vilken fil, när man vill fixa något. Känns som man verkligen behöver hålla ordning.				

			</article> <!-- end of report_kmom03 article -->

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
