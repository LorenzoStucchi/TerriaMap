<?php
$pos = strrpos($_COOKIE['_rse-web_it'], "email=");
if ($pos === false) {
	header("Location: http://doc.rse-web.it?tipo=prodotto&id=176");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:600,600i&display=swap">


<title>Rse S.p.A.</title><style type="text/css" media="screen"></style><!-- Statistiche -->

 <!--<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3419972-15']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> -->

<!-- Matomo -->
	<script>  var _paq = window._paq = window._paq || []; 
	/* tracker methods like "setCustomDimension" should be called before "trackPageView" */ 
	_paq.push(['trackPageView']); 
	_paq.push(['enableLinkTracking']); 
	(function() { 
    var u="https://rseweb.matomo.cloud/"; 
    _paq.push(['setTrackerUrl', u+'matomo.php']); 
    _paq.push(['setSiteId', '11']); 
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; 
    g.async=true; g.src='//cdn.matomo.cloud/rseweb.matomo.cloud/matomo.js'; s.parentNode.insertBefore(g,s); 
	})(); 
	</script>
	<!-- End Matomo Code -->

</head>

<div style="text-align: center;">
<font size="4">
<table style="text-align: left; width: 100%; background-color: #3F4854" border="0" cellpadding="0" cellspacing="0" >

  <tbody>

    <tr>
		<td style="text-align: center; width: 100%;"><img style="width:30%; height: 30%;" alt="" src="/immagini/aeolian_logo_9_bis.png" hspace="0" vspace="0"></td>

    </tr>
 
  </tbody>
</table>
</font>

<br>

</div>

    <table width="890" align = "center" style=" font-family:Nunito;font-size: 15px; border: thin solid gray;" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td style="border-top: thin solid gray; border-right: thin solid gray; width: 100px; height: 400px; text-align: center; vertical-align: text-top; text-indent: 2px; background-color: white;">

<a href="download/Grid_nazionale23022023.zip">Scarica il file del Grid Nazionale in formato zip</a>
            </td>
            <td style="border-top: thin solid gray; width: 623px; height: 400px; text-align: justify; vertical-align: text-top; background-color: white;">
                Il file contiene la copertura in formato ESRI Shapefile che rappresenta la griglia
                con passo 1.4x1.4 km relativa ai parametri dell'Atlante Eolico dell'Italia.<br>
                <br>
                Nella tabella
                attributi associata allo Shapefile sono presenti 16 campi numerici contenenti i valori
                di velocita' media annua onshore e offshore espressi in m/s relativi
				ai livelli di quota sul livello del terreno/mare rispettivamente
                di 50, 75, 100, 125 e 150 metri e di producibilita'specifica espressi in
                MWh/MW, relativi ai livelli di quota sul livello del terreno/mare rispettivamente
                di 50, 75 e 100 metri onshore e 100, 125 e 150 m offshore.
			    La griglia contiene, inoltre, un campo denominato "onshore", che riporta il valore 1 se il punto griglia ricade all'interno del dominio onshore o il valore 0 se il punto griglia ricade all'interno del dominio offshore, i valori del parametro di forma della distribuzione Weibull di intensità del vento, la quota sul livello del mare e la distanza di ogni cella dalla cabina primaria più vicina.
				I valori di velocità del vento e producibilità sono riportati di conseguenza all'interno della griglia.
				<br>
                <br>
                Le celle sono rappresentate nel sistema di proiezione
                UTM Fuso 32N ellissoide WGS84, come definito nel file associato "Grid_Nazionale.prj".<br>
                <br>
                Vengono forniti due file, "vento_grid_shape.lyr" e "prod_grid_shape.lyr", utili
                per la rappresentazione tematica dei dati congruente a quella visualizzabile nell'Atlante
                Eolico interattivo.
            </td>
        </tr>
    </tbody></table>
    <br>
    <br>
	
	

<!-- FINE CORPO -->


</body></html>