<?php

/* @var $this yii\web\View */
$this->title = 'Backend Grid';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="demo-backend-grid">

	<form method="post" class="form-inline" action="?do=catalog&amp;act=">
		<div class="scms_formbody">
			<input type="hidden" value="scms_filters" name="FORM_SUBMIT">

			<table cellspacing="0" border="0" style="width: 100%;" cellpading="0" class="scms_subpanel_table">
				<tbody>
				<tr>
					<td class="scms_subpanel_td scms_subpanel_td_filtr">
						<select style="width: 100%" class="form-control " id="province" name="province" onchange="submit();">
							<option value="scms_province">Województwo</option>
							<option value="scms_province">-= Wszystkie =-</option>
							<option value="1">dolnośląskie</option>
							<option value="2">kujawsko-pomorskie</option>
							<option value="3">lubelskie</option>
							<option value="4">lubuskie</option>
							<option value="7">mazowieckie</option>
							<option value="6">małopolskie</option>
							<option value="8">opolskie</option>
							<option value="9">podkarpackie</option>
							<option value="10">podlaskie</option>
							<option value="11">pomorskie</option>
							<option value="14">warmińsko-mazurskie</option>
							<option value="15">wielkopolskie</option>
							<option value="16">zachodniopomorskie</option>
							<option value="5">łódzkie</option>
							<option value="12">śląskie</option>
							<option value="13">świętokrzyskie</option>
						</select>
					</td>
					<td class="scms_subpanel_td scms_subpanel_td_filtr">
						<select style="width: 100%" class="form-control " id="location" name="location" onchange="submit();">
							<option value="scms_location">Lokalizacja</option>
							<option value="scms_location">-= Wszystkie =-</option>
							<option value="0">no</option>
							<option value="1">yes</option>
						</select>
					</td>
					<td class="scms_subpanel_td scms_subpanel_td_filtr">
						<select style="width: 100%" class="form-control " id="category_id" name="category_id" onchange="submit();">
							<option value="scms_category_id">Kategoria</option>
							<option value="scms_category_id">-= Wszystkie =-</option>
							<option value="1">AGD i RTV</option>
							<option value="476">Alarmy i zabezpieczenia</option>
							<option value="501">Alkohole i wyroby spirytusowe</option>
							<option value="87">Apteki</option>
							<option value="30">Apteki</option>
							<option value="73">Artykuły biurowe</option>
							<option value="573">Autobusy i autokary</option>
							<option value="2">Banki i finanse</option>
							<option value="1153">Biura</option>
							<option value="5">Biura Podróży</option>
							<option value="76">Biżuteria</option>
							<option value="749">Budowlane materiały</option>
							<option value="3">Budownictwo</option>
							<option value="1027">Ceramika</option>
							<option value="4">Chemia</option>
							<option value="373">Cukierki i słodycze</option>
							<option value="8">Doradztwo Podatkowe</option>
							<option value="1030">Dostarczanie ciepła - para woda</option>
							<option value="777">Dostarczanie wody wodociągi</option>
							<option value="219">Drewno</option>
							<option value="147">Dywany i wykładziny podłogowe</option>
							<option value="57">Dziecięce artykuły</option>
							<option value="84">Elektroinstalatorstwo</option>
							<option value="7">Elektronika</option>
							<option value="261">Energia</option>
							<option value="927">Fotografia</option>
							<option value="389">Fundacje</option>
							<option value="1307">Galanteria skórzana</option>
							<option value="549">Galerie sztuki muzea</option>
							<option value="698">Gastronomia</option>
							<option value="93">Handel</option>
							<option value="37">Hotele</option>
							<option value="96">Informatyka</option>
							<option value="27">Inne</option>
							<option value="681">Instalacje i urządzenia</option>
							<option value="270">Instrumenty muzyczne - akcesoria</option>
							<option value="122">Internet</option>
							<option value="139">Kancelarie adwokackie</option>
							<option value="638">Kawiarnie</option>
							<option value="642">Kempingi pola namiotowe</option>
							<option value="10">Komputery</option>
							<option value="659">Kopiarki</option>
							<option value="1089">Kowalstwo artystyczne</option>
							<option value="313">Laboratoria</option>
							<option value="353">Malowanie i tapetowanie</option>
							<option value="696">Mass media</option>
							<option value="765">Maszyny</option>
							<option value="13">Meble</option>
							<option value="896">Metale</option>
							<option value="735">Montaż instalacji elektrycznych</option>
							<option value="18">Motoryzacja - blacharstwo</option>
							<option value="20">Motoryzacja - stacje obsługi</option>
							<option value="70">Muzyka</option>
							<option value="58">Narzędzia</option>
							<option value="747">Nieruchomości</option>
							<option value="170">Obrazy dekoracja wnętrz</option>
							<option value="717">Obróbka powierzchowna metali</option>
							<option value="371">Obuwie</option>
							<option value="733">Odprowadzanie ścieków</option>
							<option value="17">Odzież</option>
							<option value="554">Ogrodnictwo</option>
							<option value="585">Ogrodnictwo - maszyny i sprzęt</option>
							<option value="238">Oleje i smary przemysłowe</option>
							<option value="499">Opakowania</option>
							<option value="144">Opony i akcesoria</option>
							<option value="125">Oprogramowanie</option>
							<option value="779">Optyka</option>
							<option value="517">Oświetlenie</option>
							<option value="689">Paliwa</option>
							<option value="1029">Papier i tektura</option>
							<option value="152">Pasmanteria hafty i koronki</option>
							<option value="855">Perfumy</option>
							<option value="479">Pielęgnacja i opieka</option>
							<option value="115">Pijar</option>
							<option value="938">Piwiarnie winiarnie kluby</option>
							<option value="1028">Podróże</option>
							<option value="143">Podzespoly</option>
							<option value="813">Pojazdy</option>
							<option value="680">Pojazdy mechaniczne - detal</option>
							<option value="61">Poligrafia</option>
							<option value="1232">Pompy hydrauliczne</option>
							<option value="367">Pończochy i skarpetki</option>
							<option value="185">Pośrednictwo pracy</option>
							<option value="964">Prasa specjalistyczna</option>
							<option value="1039">Preparaty farmaceutyczne parafarmaceutyki</option>
							<option value="663">Produkcja filmowa i wideo</option>
							<option value="632">Produkcja teatralna usługi</option>
							<option value="343">Produkty metalurgiczne</option>
							<option value="695">Projektowanie parków i ogrodów</option>
							<option value="408">Przewody i kable elektryczne i telefoniczne</option>
							<option value="62">Reklama</option>
							<option value="1337">Rolnictwo</option>
							<option value="29">Rozrywka</option>
							<option value="559">Rzemiosło</option>
							<option value="533">Salony fryzjerskie</option>
							<option value="646">Samochody osobowe</option>
							<option value="600">Samochody osobowe - części</option>
							<option value="613">Samochody osobowe - sprzedaż</option>
							<option value="1045">Samochody turystyczne</option>
							<option value="497">Sanitarne urządzenia łazienkowe</option>
							<option value="519">Serwis i konserwacja</option>
							<option value="939">Silniki elektryczne generatory prądnice</option>
							<option value="1006">Spawanie i lutowanie</option>
							<option value="287">Specjalistyczne przychodnie medyczne</option>
							<option value="201">Specjalistyczne usługi prawnicze</option>
							<option value="603">Specjalistyczne zakłady budowlane</option>
							<option value="1024">Spedycja ekspresowa</option>
							<option value="63">Sport</option>
							<option value="230">Sprzedaż wyrobów metalowych</option>
							<option value="154">Sprzedaż wysyłkowa</option>
							<option value="563">Sprzęt</option>
							<option value="210">Sprzęt chłodniczy</option>
							<option value="564">Sprzęt gastronomiczny</option>
							<option value="635">Sprzęt kuchenny</option>
							<option value="299">Sprzęt sygnalizacyjny i alarmowy</option>
							<option value="207">Stowarzyszenia i organizacje</option>
							<option value="196">Studia szkoły i sale taneczne</option>
							<option value="142">Szkolenia</option>
							<option value="637">Szkółki hodowlane i leśne</option>
							<option value="644">Sąd siły porządkowe</option>
							<option value="686">Telekomunikacja</option>
							<option value="579">Tkaniny i dzianiny</option>
							<option value="904">Torby kosze i walizki</option>
							<option value="22">Transport</option>
							<option value="46">Transport samochodowy</option>
							<option value="23">Turystyka</option>
							<option value="437">Turystyka i podróże</option>
							<option value="630">Tworzywa sztuczne - opakowania</option>
							<option value="112">Tłumaczenia</option>
							<option value="68">Ubezpieczenia</option>
							<option value="221">Ubrania robocze i ochronne</option>
							<option value="24">Usługi</option>
							<option value="252">Usługi prawnicze</option>
							<option value="209">Usługi programistyczne</option>
							<option value="323">Usługi publiczne</option>
							<option value="1013">Usługi różne</option>
							<option value="164">Usługi samochodowe</option>
							<option value="814">Usługi sekretarskie protokolanckie</option>
							<option value="454">Usługi związane z komputerami</option>
							<option value="324">Utrzymanie sprawności fizycznej - uslugi</option>
							<option value="718">Uzdatnianie oczyszczanie wód</option>
							<option value="1143">Używane pojazdy - detal</option>
							<option value="773">Wierzytelności handlowe</option>
							<option value="311">Wina</option>
							<option value="746">Wynajem samochodów i autobusów</option>
							<option value="722">Wyposażenie basenów</option>
							<option value="432">Wyposażenie centralnego ogrzewania</option>
							<option value="69">Wypożyczalnie</option>
							<option value="344">Wyroby gotowe</option>
							<option value="760">Wyroby z kamienia</option>
							<option value="835">Wywóz i składowanie odpadków</option>
							<option value="672">Zabawki i gry</option>
							<option value="169">Zakładanie systemów alarmowych</option>
							<option value="1104">Zarządzanie</option>
							<option value="290">Zasłony przeciwsłoneczne</option>
							<option value="25">Zdrowie</option>
							<option value="312">Zegarki</option>
							<option value="1298">Zjazdy - organizacja i obsługa</option>
							<option value="26">Zwierzęta</option>
							<option value="1195">Związki zawodowe i stowarzyszenia</option>
							<option value="245">Złom odpady metalowe</option>
							<option value="213">Łożyska toczne</option>
							<option value="128">Śruby i nakrętki</option>
							<option value="1082">Żywność</option>
						</select>
					</td>
					<td class="scms_subpanel_td scms_subpanel_td_filtr">
						<select style="width: 100%" class="form-control " id="status" name="status" onchange="submit();">
							<option value="scms_status">Status</option>
							<option value="scms_status">-= Wszystkie =-</option>
							<option value="1">Accept</option>
							<option value="4">Add</option>
							<option value="2">Ban</option>
						</select>
					</td>
				</tr>
				<tr>

					<td style="text-align: left;" colspan="1" class="scms_subpanel_td scms_subpanel_td_serach">
						<div class="form-group">
							<label class="sr-only">
								Szukaj </label>

							<div class="input-group">
								<div class="input-group-addon glyphicon glyphicon-filter"></div>
								<input type="text" value="" class="form-control " name="serach_value" id="serach_value">
							</div>
							<input type="button" onclick="$('#serach_value').val('');" class="btn btn-default" style="width: 15px;" value="X">
							=
							<select class="form-control '" name="serach_field">
								<option value="email">Email</option>
								<option value="fax">Fax</option>
								<option value="host">Host dodania</option>
								<option value="city_code">Kod pocztowy</option>
								<option value="city">Miasto</option>
								<option value="name">Nazwa</option>
								<option value="nip">NIP</option>
								<option value="image">Obraz</option>
								<option value="description">Opis</option>
								<option value="geo_x">Pozycja X</option>
								<option value="geo_y">Pozycja Y</option>
								<option value="regon">Regon</option>
								<option value="www">Strona WWW</option>
								<option value="phone">Telefon</option>
								<option value="mobilephone">Telfon komórkowy</option>
								<option value="street">Ulica</option>
							</select>
						</div>
					</td>
					<td colspan="2" class="scms_subpanel_td scms_subpanel_td_sorting scms_subpanel_td_label width-30">
						<div class="form-group">
							<label class="sr-only">
								Sortuj </label>

							<div class="input-group">
								<div class="input-group-addon glyphicon glyphicon-sort-by-attributes"></div>
								<select class="form-control" id="scms_sort" name="scms_sort" onchange="submit();">
									<option value="_default_">-= Default =-</option>
									<option value="date_stamp">Data zmiany</option>
									<option value="email">Email</option>
									<option value="category_id">Kategoria</option>
									<option value="city_code">Kod pocztowy</option>
									<option value="city">Miasto</option>
									<option value="name">Nazwa</option>
									<option value="status">Status</option>
									<option value="www">Strona WWW</option>
									<option value="street">Ulica</option>
									<option value="province">Województwo</option>
									<option value="views">Wyświetleń</option>
								</select>
							</div>
						</div>
					</td>

					<td colspan="-1" style="text-align: right; white-space: nowrap" class="right scms_subpanel_td width-30">
						<div class="form-group">
							<div style="white-space: nowrap;" class="input-group">
								<button name="scms_filter" class="btn btn-default" id="scms_filter" type="submit">Filter</button>
								<button name="scms_reset" class="btn btn-default" id="scms_reset" type="submit">Reset</button>
							</div>
						</div>
					</td>
				</tr>

				</tbody>
			</table>
		</div>
	</form>

	<div class="sys-page-index">
		<h1></h1>
	</div>
	<div class="grid-view" id="w0">
		<div style="float: right">
			<ul class="pagination">
				<li class="first disabled"><span>&lt;&lt;</span></li>
				<li class="prev disabled"><span>«</span></li>
				<li class="active"><a data-page="0" href="default/index/?do=catalog&amp;act=&amp;page=1&amp;per-page=30">1</a></li>
				<li><a data-page="1" href="default/index/?do=catalog&amp;act=&amp;page=2&amp;per-page=30">2</a></li>
				<li><a data-page="2" href="default/index/?do=catalog&amp;act=&amp;page=3&amp;per-page=30">3</a></li>
				<li><a data-page="3" href="default/index/?do=catalog&amp;act=&amp;page=4&amp;per-page=30">4</a></li>
				<li><a data-page="4" href="default/index/?do=catalog&amp;act=&amp;page=5&amp;per-page=30">5</a></li>
				<li><a data-page="5" href="default/index/?do=catalog&amp;act=&amp;page=6&amp;per-page=30">6</a></li>
				<li><a data-page="6" href="default/index/?do=catalog&amp;act=&amp;page=7&amp;per-page=30">7</a></li>
				<li><a data-page="7" href="default/index/?do=catalog&amp;act=&amp;page=8&amp;per-page=30">8</a></li>
				<li><a data-page="8" href="default/index/?do=catalog&amp;act=&amp;page=9&amp;per-page=30">9</a></li>
				<li><a data-page="9" href="default/index/?do=catalog&amp;act=&amp;page=10&amp;per-page=30">10</a></li>
				<li class="next"><a data-page="1" href="default/index/?do=catalog&amp;act=&amp;page=2&amp;per-page=30">»</a></li>
				<li class="last"><a data-page="2036" href="default/index/?do=catalog&amp;act=&amp;page=2037&amp;per-page=30">
						&gt;&gt;</a></li>
			</ul>
		</div>
		<div class="summary">Wyświetlone <b>1-30</b> z <b>61&nbsp;108</b>.</div>

		<table class="table table-striped table-hover">
			<thead>
			<tr>
				<th><a data-sort="id" href="default/index/?do=catalog&amp;act=&amp;sort=id">Id</a></th>
				<th><a data-sort="date_create" href="default/index/?do=catalog&amp;act=&amp;sort=date_create">Data dodania</a></th>
				<th><a class="asc" data-sort="category_id" href="default/index/?do=catalog&amp;act=&amp;sort=category_id">Kategoria</a></th>
				<th><a class="desc" data-sort="name" href="default/index/?do=catalog&amp;act=&amp;sort=name">Nazwa</a></th>
				<th><a data-sort="city" href="default/index/?do=catalog&amp;act=&amp;sort=city">Miasto</a></th>
				<th><a data-sort="street" href="default/index/?do=catalog&amp;act=&amp;sort=street">Ulica</a></th>
				<th>&nbsp;</th>
			</tr>
			</thead>
			<tbody>
			<tr data-key="8">
				<td>8</td>
				<td>2007-09-18 12:24:25</td>
				<td>AGD i RTV</td>
				<td>Testcdscd</td>
				<td>Test</td>
				<td>Test</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=8&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=8&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=8&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="9">
				<td>9</td>
				<td>2007-09-18 12:27:05</td>
				<td>Budownictwo</td>
				<td>Test2</td>
				<td>Test</td>
				<td>Test</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=9&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=9&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=9&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="10">
				<td>10</td>
				<td>2007-09-18 14:53:49</td>
				<td>Nieruchomości</td>
				<td>tst</td>
				<td>test</td>
				<td>test</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=10&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=10&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=10&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="11">
				<td>11</td>
				<td>2007-09-18 14:54:14</td>
				<td>Nieruchomości</td>
				<td>tst</td>
				<td>test</td>
				<td>test</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=11&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=11&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=11&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="12">
				<td>12</td>
				<td>2007-09-18 14:54:25</td>
				<td>Nieruchomości</td>
				<td>tst</td>
				<td>test</td>
				<td>test</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=12&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=12&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=12&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="14">
				<td>14</td>
				<td>2007-09-18 14:55:37</td>
				<td>Nieruchomości</td>
				<td>tst</td>
				<td>test</td>
				<td>test</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=14&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=14&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=14&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="15">
				<td>15</td>
				<td>2007-09-18 14:55:48</td>
				<td>Nieruchomości</td>
				<td>tst</td>
				<td>test</td>
				<td>test</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=15&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=15&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=15&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="16">
				<td>16</td>
				<td>2007-09-18 14:56:01</td>
				<td>Nieruchomości</td>
				<td>tst</td>
				<td>test</td>
				<td>test</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=16&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=16&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=16&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="17">
				<td>17</td>
				<td>2007-09-18 15:06:56</td>
				<td>Biura Podróży</td>
				<td>gfdgdf</td>
				<td>gdfgdf</td>
				<td>gdfgdf</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=17&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=17&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=17&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="18">
				<td>18</td>
				<td>2007-09-18 16:13:10</td>
				<td>Nieruchomości</td>
				<td>Test 3</td>
				<td>Bielsko-Biała</td>
				<td>Test</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=18&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=18&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=18&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="19">
				<td>19</td>
				<td>2007-09-18 16:24:55</td>
				<td>Chemia</td>
				<td>fgdgd</td>
				<td>dsaladsj</td>
				<td>fd</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=19&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=19&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=19&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="20">
				<td>20</td>
				<td>2007-09-20 12:38:47</td>
				<td>Salony fryzjerskie</td>
				<td>Piękne Ciało</td>
				<td>Katowice</td>
				<td>ul. Mickiewicza</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=20&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=20&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=20&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="21">
				<td>21</td>
				<td>2007-10-07 16:21:13</td>
				<td>Apteki</td>
				<td>Apteka Pod Orłem</td>
				<td>Katowice</td>
				<td>ul. Rymonta 6/7</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=21&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=21&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=21&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="22">
				<td>22</td>
				<td>2007-10-08 16:23:09</td>
				<td>Żywność</td>
				<td>efd</td>
				<td>DFf</td>
				<td>dfF</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=22&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=22&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=22&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="23">
				<td>23</td>
				<td>2007-10-11 17:26:59</td>
				<td>Usługi</td>
				<td>DOMIX</td>
				<td>Dąbrowa Górnicza</td>
				<td>Graniczna 9</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=23&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=23&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=23&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="24">
				<td>24</td>
				<td>2007-10-12 14:25:48</td>
				<td>AGD i RTV</td>
				<td>hgjhgk</td>
				<td>khgfhgfhgkhj</td>
				<td>ncgbvchv</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=24&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=24&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=24&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="25">
				<td>25</td>
				<td>2007-10-12 14:26:37</td>
				<td>AGD i RTV</td>
				<td>SESSSSR</td>
				<td>GGYGUYG</td>
				<td>TYTFYYDD</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=25&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=25&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=25&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="26">
				<td>26</td>
				<td>2007-10-12 14:34:38</td>
				<td>AGD i RTV</td>
				<td>VHVHHVHV</td>
				<td>XXXGFGFXGFX</td>
				<td>CFCGFCGFCGFC</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=26&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=26&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=26&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="27">
				<td>27</td>
				<td>2007-10-25 08:27:10</td>
				<td>Usługi</td>
				<td>AnCz Andrzej Czarnecki Poligrafia-Reklama-Marketing</td>
				<td>Warszawa</td>
				<td>Jana Cybisa 2/59</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=27&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=27&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=27&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="28">
				<td>28</td>
				<td>2007-10-25 08:37:27</td>
				<td>Usługi</td>
				<td>AnCz Andrzej Czarnecki Poligrafia-Reklama-Marketing</td>
				<td>Bliżyn</td>
				<td>Kościuszki 142B</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=28&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=28&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=28&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="29">
				<td>29</td>
				<td>2007-10-25 11:29:35</td>
				<td>Usługi</td>
				<td>Shado</td>
				<td>Bielsko-Biała</td>
				<td>Prusa</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=29&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=29&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=29&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="30">
				<td>30</td>
				<td>2007-10-26 11:27:09</td>
				<td>Budownictwo</td>
				<td>BUDMAX-METAL sp. z o.o.</td>
				<td>Piekary Śląskie</td>
				<td>1 Maja 24</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=30&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=30&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=30&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="31">
				<td>31</td>
				<td>2007-10-26 11:27:26</td>
				<td>Budownictwo</td>
				<td>BUDMAX-METAL sp. z o.o.</td>
				<td>Piekary Śląskie</td>
				<td>1 Maja 24</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=31&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=31&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=31&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="32">
				<td>32</td>
				<td>2007-10-28 15:19:12</td>
				<td>Inne</td>
				<td>ZEGARMISTRZ</td>
				<td>JASTRZĘBIE ZDR.</td>
				<td>TURYSTYCZNA 65</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=32&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=32&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=32&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="33">
				<td>33</td>
				<td>2007-10-28 15:55:21</td>
				<td>Motoryzacja - blacharstwo</td>
				<td>www.autostrefa.pl</td>
				<td>Poznań</td>
				<td>www.autostrefa.pl</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=33&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=33&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=33&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="34">
				<td>34</td>
				<td>2007-10-28 15:55:51</td>
				<td>Inne</td>
				<td>www.autostrefa.pl</td>
				<td>Poznań</td>
				<td>www.autostrefa.pl</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=34&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=34&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=34&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="35">
				<td>35</td>
				<td>2007-10-28 15:56:41</td>
				<td>Inne</td>
				<td>www.autostrefa.pl</td>
				<td>Poznań</td>
				<td>www.autostrefa.pl</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=35&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=35&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=35&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="36">
				<td>36</td>
				<td>2007-10-28 15:57:04</td>
				<td>Motoryzacja - stacje obsługi</td>
				<td>www.autostrefa.pl</td>
				<td>Poznań</td>
				<td>www.autostrefa.pl</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=36&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=36&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=36&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="37">
				<td>37</td>
				<td>2007-11-05 23:12:22</td>
				<td>Inne</td>
				<td>Soundimage - Bank Muzyki i Dźwięków</td>
				<td>Warszawa</td>
				<td>ul. Odkryta 55 d lok. 24</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=37&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=37&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=37&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			<tr data-key="38">
				<td>38</td>
				<td>2007-11-07 18:01:38</td>
				<td>Turystyka</td>
				<td>Pałacyk Łąkomin</td>
				<td>Lubiszyn</td>
				<td>Łąkomin 1</td>
				<td style="text-align: right; white-space: nowrap;">
					<a data-pjax="0" aria-label="Zobacz szczegóły" title="Zobacz szczegóły" href="?do=catalog&amp;act=cmdShow&amp;id=38&amp;table=catalog"><span class="glyphicon glyphicon-eye-open"></span></a>
					<a data-pjax="0" aria-label="Aktualizuj" title="Aktualizuj" href="?do=catalog&amp;act=cmdEdit&amp;id=38&amp;table=catalog"><span class="glyphicon glyphicon-pencil"></span></a>
					<a data-pjax="0" data-method="post" data-confirm="Czy na pewno usunąć ten element?" aria-label="Usuń" title="Usuń" href="?do=catalog&amp;act=cmdDelete&amp;id=38&amp;table=catalog"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
			</tbody>
		</table>
		<div style="float: right">
			<ul class="pagination">
				<li class="first disabled"><span>&lt;&lt;</span></li>
				<li class="prev disabled"><span>«</span></li>
				<li class="active"><a data-page="0" href="default/index/?do=catalog&amp;act=&amp;page=1&amp;per-page=30">1</a></li>
				<li><a data-page="1" href="default/index/?do=catalog&amp;act=&amp;page=2&amp;per-page=30">2</a></li>
				<li><a data-page="2" href="default/index/?do=catalog&amp;act=&amp;page=3&amp;per-page=30">3</a></li>
				<li><a data-page="3" href="default/index/?do=catalog&amp;act=&amp;page=4&amp;per-page=30">4</a></li>
				<li><a data-page="4" href="default/index/?do=catalog&amp;act=&amp;page=5&amp;per-page=30">5</a></li>
				<li><a data-page="5" href="default/index/?do=catalog&amp;act=&amp;page=6&amp;per-page=30">6</a></li>
				<li><a data-page="6" href="default/index/?do=catalog&amp;act=&amp;page=7&amp;per-page=30">7</a></li>
				<li><a data-page="7" href="default/index/?do=catalog&amp;act=&amp;page=8&amp;per-page=30">8</a></li>
				<li><a data-page="8" href="default/index/?do=catalog&amp;act=&amp;page=9&amp;per-page=30">9</a></li>
				<li><a data-page="9" href="default/index/?do=catalog&amp;act=&amp;page=10&amp;per-page=30">10</a></li>
				<li class="next"><a data-page="1" href="default/index/?do=catalog&amp;act=&amp;page=2&amp;per-page=30">»</a></li>
				<li class="last"><a data-page="2036" href="default/index/?do=catalog&amp;act=&amp;page=2037&amp;per-page=30">
						&gt;&gt;</a></li>
			</ul>
		</div>
	</div>
</div>