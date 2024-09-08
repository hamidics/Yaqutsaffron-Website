<div id="tooplate_footer_wrapper" style="background-image:url(images/footer.png); height:50px">


        <div class="clear" align="center">
					<table width="75%" style="padding-top:7px;color:white" align="center">
						<tr><td><img src="images/m.png" style="height:30px; width:30px"> </td><td>+93 786379003 </td>
						<td><img src="images/email.png" style="height:30px; width:30px"> </td><td>info@yaqutsaffron.com</td><td><img src="images/address.png" style="height:30px; width:30px"> </td><td>4rth Floor, Kasra Business Center, Chawk - e - Golha, Herat, Afghanistan</td></tr>
			</table></div>
	</div> <!-- END of tooplate_footer -->
</div> <!-- END of tooplate_footer_wrapper -->


<script src="js/scroll-startstop.events.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
		var $elem = $('#content');

		$('#nav_up').fadeIn('slow');

		$(window).bind('scrollstart', function(){
			$('#nav_up,#nav_down').stop().animate({'opacity':'0.2'});
		});
		$(window).bind('scrollstop', function(){
			$('#nav_up,#nav_down').stop().animate({'opacity':'1'});
		});

		$('#nav_up').click(
			function (e) {
				$('html, body').animate({scrollTop: '0px'}, 800);
			}
		);
	});
</script>
