<?php
    date_default_timezone_set('Europe/Zagreb');

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $starost = $_POST['starost'];
        $prijevoz = $_POST['prijevoz'];
        $trajanje = $_POST['trajanje'];
        $datum = $_POST['datum'];
		$drustvo = $_POST['drustvo'];
        $zivotinja = $_POST['zivotinja'];
        $smjestaj = $_POST['smjestaj'];
		$cijena = $_POST['cijena'] * 1000;
        
		//regije
		$regije = "\t<Regije>\n";
			if (isset($_POST['Sve_regije'])) {
				$regije .= "\t\t<Regija>" . $_POST['Sve_regije'] . "</Regija>\n";
			}
			if (isset($_POST['Slavonija'])) {
				$regije .= "\t\t<Regija>" . $_POST['Slavonija'] . "</Regija>\n";
			}
			if (isset($_POST['Sredisnja_Hrvatska'])) {
				$regije .= "\t\t<Regija>" . $_POST['Sredisnja_Hrvatska'] . "</Regija>\n";
			}
			if (isset($_POST['Grad_Zagreb'])) {
				$regije .= "\t\t<Regija>" . $_POST['Grad_Zagreb'] . "</Regija>\n";
			}
			if (isset($_POST['Lika'])) {
				$regije .= "\t\t<Regija>" . $_POST['Lika'] . "</Regija>\n";
			}
			if (isset($_POST['Istra'])) {
				$regije .= "\t\t<Regija>" . $_POST['Istra'] . "</Regija>\n";
			}
			if (isset($_POST['Kvarner'])) {
				$regije .= "\t\t<Regija>" . $_POST['Kvarner'] . "</Regija>\n";
			}
			if (isset($_POST['Zadar'])) {
				$regije .= "\t\t<Regija>" . $_POST['Zadar'] . "</Regija>\n";
			}
			if (isset($_POST['Sibenik'])) {
				$regije .= "\t\t<Regija>" . $_POST['Sibenik'] . "</Regija>\n";
			}
			if (isset($_POST['Split'])) {
				$regije .= "\t\t<Regija>" . $_POST['Split'] . "</Regija>\n";
			}
			if (isset($_POST['Dubrovnik'])) {
				$regije .= "\t\t<Regija>" . $_POST['Dubrovnik'] . "</Regija>\n";
			}
		$regije .= "\t</Regije>\n";
		
		//interesi
		$interesi = "\t<Interesi>\n";
			if (isset($_POST['sport'])) {
				$interesi .= "\t\t<Interes>" . $_POST['sport'] . "</Interes>\n";
			}
			if (isset($_POST['povijest'])) {
				$interesi .= "\t\t<Interes>" . $_POST['povijest'] . "</Interes>\n";
			}
			if (isset($_POST['zabava'])) {
				$interesi .= "\t\t<Interes>" . $_POST['zabava'] . "</Interes>\n";
			}
			if (isset($_POST['umjetnost'])) {
				$interesi .= "\t\t<Interes>" . $_POST['umjetnost'] . "</Interes>\n";
			}
			if (isset($_POST['kultura'])) {
				$interesi .= "\t\t<Interes>" . $_POST['kultura'] . "</Interes>\n";
			}
			if (isset($_POST['priroda'])) {
				$interesi .= "\t\t<Interes>" . $_POST['priroda'] . "</Interes>\n";
			}
			if (isset($_POST['odmor'])) {
				$interesi .= "\t\t<Interes>" . $_POST['odmor'] . "</Interes>\n";
			}
		$interesi .= "\t</Interesi>\n";

        $result = '';

        $result .= "<Putovanje>\n";

        //email
        $result .= "\t<Email>" . $email . "</Email>\n";

        //starost
        $result .= "\t<Starost>" . $starost . "</Starost>\n";

        //prijevoz
        $result .= "\t<VlastitiPrijevoz>" . $prijevoz . "</VlastitiPrijevoz>\n";

        //trajanje
        $result .= "\t<Trajanje>" . $trajanje . "</Trajanje>\n";

        //datum
        $result .= "\t<DatumOdlaska>" . $datum . "</DatumOdlaska>\n";
		
		//drustvo
        $result .= "\t<Drustvo>" . $drustvo . "</Drustvo>\n";

        //zivotinja
        $result .= "\t<Zivotinja>" . $zivotinja . "</Zivotinja>\n";

        //smjestaj
        $result .= "\t<Smjestaj>" . $smjestaj . "</Smjestaj>\n";
		
		//regija
        $result .= $regije;

        //interesi
        $result .= $interesi;

        //cijena
        $result .= "\t<Cijena>" . $cijena . "</Cijena>\n";

        $result .= '</Putovanje>';

        $filename = 'putovanje' . date('Y_m_d_h_i_s') . '.xml';
        file_put_contents($filename, $result);
        die('Uskoro ćemo Vam se javiti s povratnom informacijom!');
    }
?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
			integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="icon" href="favicon2.ico"/> 
		<script>
			function checkAlert(){
				if(document.Forma.Sve_regije.checked == true){
					document.Forma.Slavonija.disabled = true;
					document.Forma.Sredisnja_Hrvatska.disabled = true;
					document.Forma.Grad_Zagreb.disabled = true;
					document.Forma.Lika.disabled = true;
					document.Forma.Istra.disabled = true;
					document.Forma.Kvarner.disabled = true;
					document.Forma.Zadar.disabled = true;
					document.Forma.Sibenik.disabled = true;
					document.Forma.Split.disabled = true;
					document.Forma.Dubrovnik.disabled = true;
				}
				else if(document.Forma.Sve_regije.checked == false){
					document.Forma.Slavonija.disabled = false;
					document.Forma.Sredisnja_Hrvatska.disabled = false;
					document.Forma.Grad_Zagreb.disabled = false;
					document.Forma.Lika.disabled = false;
					document.Forma.Istra.disabled = false;
					document.Forma.Kvarner.disabled = false;
					document.Forma.Zadar.disabled = false;
					document.Forma.Sibenik.disabled = false;
					document.Forma.Split.disabled = false;
					document.Forma.Dubrovnik.disabled = false;
				}
			}
		</script>
		<title>Kamo putovati?</title>
	</head>
	<body>
		<nav class="navbar navbar-dark bg-primary">
		  <a class="navbar-brand" href="#">Kamo putovati u Hrvatskoj?</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item">
				<a class="nav-link" target="_blank" href="https://croatia.hr/hr-HR/informacije-o-putovanju/turisticke-agencije">Turistička agencija</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" target="_blank" href="https://www.atlas.hr/">Atlas</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" target="_blank" href="http://www.globaltravel.hr/">Global travel</a>
			  </li>
			</ul>
		  </div>
		</nav>
		<div class="container mt-5 mb-5">
			<div class="row">
				<div class="col-10 mx-auto">
					<h1 class="mb-3 text-center">Saznajte koje je mjesto za Vas</h1>
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="slika1.jpg" class="d-block w-100" alt="Pulski amfiteatar">
							</div>
							<div class="carousel-item">
								<img src="slika2.jpg" class="d-block w-100" alt="Osijek">
							</div>
							<div class="carousel-item">
								<img src="slika3.jpg" class="d-block w-100" alt="Jezero">
							</div>
							<div class="carousel-item">
								<img src="slika4.jpg" class="d-block w-100" alt="Planine">
							</div>
							<div class="carousel-item">
								<img src="slika5.jpg" class="d-block w-100" alt="Plitivčka jezera">
							</div>
							<div class="carousel-item">
								<img src="slika6.jpg" class="d-block w-100" alt="Rovinj">
							</div>
							<div class="carousel-item">
								<img src="slika7.jpg" class="d-block w-100" alt="Trakošćan">
							</div>
							<div class="carousel-item">
								<img src="slika8.jpg" class="d-block w-100" alt="Grad">
							</div>
							<div class="carousel-item">
								<img src="slika9.jpg" class="d-block w-100" alt="Čakovec">
							</div>
							<div class="carousel-item">
								<img src="slika10.jpg" class="d-block w-100" alt="HNK Zagreb">
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div><br/>
					<form action="putovanje.php" method="POST" name="Forma">
						<!-- e-mail -->
						<div class="form-group">
							<label for="E-mail"><b>Email adresa</b></label>
							<input type="email" name="email" class="form-control" id="E-mail" placeholder="ime@email.com" required>
							<small id="emailHelp" class="form-text text-muted">Upišite e-mail kako bismo Vas mogli kontaktirati.</small>
						</div>
						<!-- starost -->
						<div class="form-group">
							<label for="starost"><b>Koliko imate godina?</b></label>
							<input type="range" name="starost" class="custom-range" min="1" max="100" step="1" id="starost" value="20" required>
							<p>Starost: <span id="broj"></span> god</p>
						</div>
						<script language="JavaScript">
							var slider = document.getElementById("starost");
							var output = document.getElementById("broj");
							output.innerHTML = slider.value;

							slider.oninput = function() {
								output.innerHTML = this.value;
							}
						</script>
						<!-- prijevoz -->
						<label><b>Imate li vlastiti prijevoz?</b></label>
						<div class="custom-control custom-radio">
							<input type="radio" id="DA" name="prijevoz" class="custom-control-input" value="Da" required>
							<label class="custom-control-label" for="DA">Da</label>
						</div>
						<div class="custom-control custom-radio">
							<input type="radio" id="NE" name="prijevoz" class="custom-control-input" value="Ne" required>
							<label class="custom-control-label" for="NE">Ne</label>
						</div>
						<br/>
						<!-- broj dana -->
						<div class="form-group">
							<label for="broj_dana"><b>Koliko dana bi trajalo vaše putovanje?</b></label>
							<input type="range" name="trajanje" class="custom-range" min="1" max="14" step="1" id="broj_dana" value="7" required>
							<p>Broj dana: <span id="broj2"></span></p>
						</div>
						<script>
							var slider2 = document.getElementById("broj_dana");
							var output2 = document.getElementById("broj2");
							output2.innerHTML = slider2.value;

							slider2.oninput = function() {
								output2.innerHTML = this.value;
							}
						</script>
						<!-- datum -->
						<div class="form-group">
							<label for="datum"><b>Kojeg datuma bi željeli krenuti na put?</b></label><br/>
							<input type="date" name="datum" class="form-control" id="datum" required>
						</div>
						<!-- s kim putujete -->
						<div class="form-group">
							<label for="drustvo"><b>Putujem:</b></label>
							<select class="form-control" id="drustvo" name="drustvo">
								<option>sam/sama</option>
								<option>s partnericom/partnerom</option>
								<option>s obitelji</option>
								<option>s prijateljima</option>
							</select>
						</div>
						<!-- kućni ljubimac -->
						<label><b>Imate li kućnog ljubimca kojeg biste željeli povesti na put?</b></label>
						<div class="custom-control custom-radio">
							<input type="radio" id="Da" name="zivotinja" class="custom-control-input" value="Da" required>
							<label class="custom-control-label" for="Da">Da</label>
						</div>
						<div class="custom-control custom-radio">
							<input type="radio" id="Ne" name="zivotinja" class="custom-control-input" value="Ne" required>
							<label class="custom-control-label" for="Ne">Ne</label>
						</div>
						<br/>
						<!-- smještaj -->
						<div class="form-group">
							<label for="smjestaj"><b>Željeni smještaj:</b></label>
							<select class="form-control" id="smjestaj" name="smjestaj" required>
								<option>hotel</option>
								<option>hostel</option>
								<option>apartman</option>
								<option>kuća</option>
								<option>kamp</option>
							</select>
						</div>
						<!-- odabir regije -->
						<label><b>Odaberite regiju/regije:</b></label>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="Sve regije" id="Sve_regije" name="Sve_regije" onClick="checkAlert()">
							<label class="custom-control-label" for="Sve_regije">
								Sve regije
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="Slavonija" id="Slavonija" name="Slavonija">
							<label class="custom-control-label" for="Slavonija">
								Slavonija
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="Središnja Hrvatska" id="Sredisnja_Hrvatska" name="Sredisnja_Hrvatska">
							<label class="custom-control-label" for="Sredisnja_Hrvatska">
								Središnja Hrvatska
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="Grad Zagreb" id="Grad_Zagreb" name="Grad_Zagreb">
							<label class="custom-control-label" for="Grad_Zagreb">
								Grad Zagreb
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="Lika - Karlovac" id="Lika" name="Lika">
							<label class="custom-control-label" for="Lika">
								Lika - Karlovac
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="Istra" id="Istra" name="Istra">
							<label class="custom-control-label" for="Istra">
								Istra
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="Kvarner" id="Kvarner" name="Kvarner">
							<label class="custom-control-label" for="Kvarner">
								Kvarner
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="Dalmacija - Zadar" id="Zadar" name="Zadar">
							<label class="custom-control-label" for="Zadar">
								Dalmacija - Zadar
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="Dalmacija - Šibenik" id="Sibenik" name="Sibenik">
							<label class="custom-control-label" for="Sibenik">
								Dalmacija - Šibenik
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="Dalmacija - Split" id="Split" name="Split">
							<label class="custom-control-label" for="Split">
								Dalmacija - Split
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="Dalmacija - Dubrovnik" id="Dubrovnik" name="Dubrovnik">
							<label class="custom-control-label" for="Dubrovnik">
								Dalmacija - Dubrovnik
							</label>
						</div><br/>
						<!-- interesi -->
						<label><b>Što vas zanima?</b></label>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="sport" id="sport" name="sport">
							<label class="custom-control-label" for="sport">
								sport (rekreativni, ekstremni, teretana)
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="povijest" id="povijest" name="povijest">
							<label class="custom-control-label" for="povijest">
								povijest (znamenitosti, muzeji, spomenici, crkve)
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="zabava" id="zabava" name="zabava">
							<label class="custom-control-label" for="zabava">
								zabava (adrenalin, dječja igrališta, šoping)
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="umjetnost" id="umjetnost" name="umjetnost">
							<label class="custom-control-label" for="umjetnost">
								umjetnost (glazba, film, festivali)
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="kultura" id="kultura" name="kultura">
							<label class="custom-control-label" for="kultura">
								kultura (ljudi, običaji, hrana)
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="priroda" id="priroda" name="priroda">
							<label class="custom-control-label" for="priroda">
								prirodne ljepote (nacionalni parkovi, parkovi prirode, špilje, planine)
							</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="odmor" id="odmor" name="odmor">
							<label class="custom-control-label" for="odmor">
								odmor (sauna, masaža, mir, toplice)
							</label>
						</div>
						<br/>
						<!-- cijena -->
						<div class="form-group">
							<label for="cijena"><b>Koliko najviše želite izdvojiti?</b></label>
							<input type="range" name="cijena" class="custom-range" min="1" max="25" step="0.5" id="cijena" value="7" required>
							<p>Max. cijena: <span id="broj3"></span> kn</p>
						</div>
						<script>
							var slider3 = document.getElementById("cijena");
							var output3 = document.getElementById("broj3");
							output3.innerHTML = slider3.value * 1000;

							slider3.oninput = function() {
								output3.innerHTML = this.value * 1000;
							}
						</script>
						<button type="submit" class="btn btn-outline-primary float-right mt-3">Spremi kao XML</button>
					</form>
				</div>
			</div>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
			integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
			crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
			integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
			crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
			integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
			crossorigin="anonymous"></script>
	</body>
</html>