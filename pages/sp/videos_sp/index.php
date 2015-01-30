<?php include("/head.html"); ?>

<body>

	<div id="header">
		<?php include("/../header_sp.html"); ?>
	</div>
	
	<div id="container">
	
		<table>
		
			<tr>
				<td id="snavbar" valign="top">
					
					<?php include("/navbar_sp.html"); ?>
		
				</td>
				
				<td id="content" valign="top">
				
                <div class="vidoes">
                	
                    <p class="video_description">
						<a href="vec_promo.php" id="popup1" style="border: none; text-decoration: none; color: #000000;">
                    		<img src="/../media/images/video_thmbs/vec_promo_v-thmb.png" alt="VEC Promo" width="150" height="100" class="video_thumbnail" style="margin-left: 50px;" />
                        </a>
                        Presentaci&oacute;n del ministerio VEC por "Mundo Cristiano", noticiero de CBN Am&eacute;rica Latina.                        
                    </p>

<script type="text/javascript">
	document.getElementById('popup1').onclick= function() {
		return !window.open(this.href, '_blank', 'width=530,height=430');
	};
</script>

					<p class="video_description">
                    	<a href="testimonio_mohamed.php" id="popup2" style="border: none; text-decoration: none; color: #000000;">
                        	<img src="/../media/images/video_thmbs/mohamed_v-thmb.png" alt="Testimonio de Mohamed" width="150" height="100" class="video_thumbnail" style="margin-left: 50px;" />
                        </a>
                    Reportaje complementario por Mundo Cristiano despu&eacute;s del fallecimiento del joven jinete de toros, Mohamed Hamadani.                     
                    </p>

<script type="text/javascript">
	document.getElementById('popup2').onclick= function() {
		return !window.open(this.href, '_blank', 'width=530,height=430');
	};
</script>
                    
                </div>
                    
				</td>
			</tr>
			
			<tr>
			
				<!-- The Following Is A Blank Cell Under Navbar  *** DO NOT CHANGE *** -->
				<td>&nbsp;</td>
				<!-- The Previous Was A Blank Cell Under Navber  *** DO NOT CHANGE *** -->
				
				<td>
				
					<p class="horses">
						<img src="/../media/images/common/cowboys.gif" alt="" width="576" height="47" style=" border: 0px;" />					</p>				</td>
			</tr>
			
			<tr>
				<td colspan="2">
					
					<div id="footer">
						<?php include("/../footer_sp.html"); ?>
					</div>
					
				</td>
			</tr>
			
			<tr>
				<td colspan="2">
					<p id="webmaster">
						Preguntas y comentarios a <a href="mailto:webmaster@vaquerosencristo.org">Webmaster</a><br />
						S&iacute;tio dise&ntilde;ado por <a href="http://www.misite.net/">Misite.Net</a>					</p>				</td>
			</tr>			
		</table>
	</div>
</body>
</html>