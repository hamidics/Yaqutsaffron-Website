<?php
	include "header.php";
?>


<div id="tooplate_slider_wrapper">
    <div id="tooplate_slider">
    	<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/slider/01.jpg" alt="" title="#caption1" />
                <img src="images/slider/02.jpg" alt="" title="#caption2" />
                 <img src="images/slider/03.jpg" alt="" title="#caption1" />
                <img src="images/slider/04.jpg" alt="" title="#caption3" />
            </div>
            <div id="caption1" class="nivo-html-caption">
            	<h1>Nulla egestas turpis ac lectus</h1>
                <p>Nulla egestas turpis ac lectus dapibus adipiscing. Nulla laoreet nisi vitae libero pellentesque aliquam.</p>
            </div>
            <div id="caption2" class="nivo-html-caption">
                <h1>Nulla egestas turpis ac lectus</h1>
                <p>Nulla egestas turpis ac lectus dapibus adipiscing. Nulla laoreet nisi vitae libero pellentesque aliquam.</p>
            </div>
            <div id="caption3" class="nivo-html-caption">
                <h1>Nulla egestas turpis ac lectus</h1>
                <p>Nulla egestas turpis ac lectus dapibus adipiscing. Nulla laoreet nisi vitae libero pellentesque aliquam.</p>
            </div>
        </div>
        <div class="button_box">
        	<h2>Welcome Note!</h2>
        </div>
        <script type="text/javascript" src="js/jquery-1.6.3.min.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
			effect: 'fade',
			controlNav: true, // 1,2,3... navigation
            directionNav: false,
			animSpeed: 800, // Slide transition speed
	        pauseTime: 4000, // How long each slide will show
			});
        });
        </script>
    </div> <!-- END of slider -->


</div>
     <!-- END of tooplate_main -->
 <div align="center" style="color:black; font-family:Calibri;font-size:16px">
<table><tr><td><img src="images/2.png" style="height:100px; width:100px"/></td><td>
	<br>
Yaqut Saffron company is established by a group of Afghan, young and expert investors<br>
who are experienced and motivated in Herat city in west of Afghanistan, the city which is <br>
the provenance and center of production and trading of Afghanistan saffron. <a href="about.html">more></a><br>
</td><td>
<img src="images/1.png" style="height:100px; width:100px"/>
</td>
</tr>
</table>

  </div>
<?php
include "footer.php";
 ?>

</body>
</html>
