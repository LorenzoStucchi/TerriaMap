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

<a href="download/Grid_nazionale23022023.zip">Download the national grid file in .zip format</a>
            </td>
            <td style="border-top: thin solid gray; width: 623px; height: 400px; text-align: justify; vertical-align: text-top; background-color: white;">
                The file contains the coverage in ESRI shapefiles format representing the 1.4x1.4 km grid&nbsp;relating to the parameters of the Italy Wind Atlas<br>
                <br>
                The shapefile attribute table is composed of 16 numeric fields containing
the values of onshore annual mean wind speed expressed in m/s on the levels of altitude
above ground level/sea level respectively 50, 75, 100, 125 and 150 meters
and specific annual energy production expressed in MWh/MW, on the levels of altitude
above ground level/sea level 50, 75 and 100 meters for onshore cells and 100, 125 and 150 meters for offshore cells.
The grid also contains a field called "onshore", which reports the value 1 if the grid point falls within the onshore domain or the value 0 if the grid point falls within the offshore domain, the values ​​of the form of the Weibull distribution of wind intensity, the elevation above sea level and the distance of each cell from the nearest primary cabin.
The wind speed and producibility values ​​are reported accordingly within the grid.
				<br>
                <br>
                The cells are represented in the projection system UTM zone 32N ellipsoid WGS84, as defined in the associated file .prj.<br>
                <br>
                Two files are also provided, "vento_grid_shape.lyr" and "prod_grid_shape.lyr",
useful for representing the data&nbsp;consistent to that displayed in
the Interactive Wind Atlas.
            </td>
        </tr>
    </tbody></table>
    <br>
    <br>
	
	

<!-- FINE CORPO -->


</body></html>