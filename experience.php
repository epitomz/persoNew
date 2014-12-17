<?php
include('header.php');
include('navbar.php');
?>
    
    <!-- Contenu -->
    <div class="contenu">
        <h1>Expérience</h1>
        <div id="exp-1" class="experience" style="width: 310px; height: 300px;">
	        <h2>2014-...</h2>
	        <h3>Ingénieur étude et développement</h3>
            <div class="details">
                <ul>
                    <li>Conception d'un outil de calcul automatique de DPE (méthode 3CL-DPE)</li>
                    <li>lalala</li>
                </ul>
            </div>
	        
        </div>
        <div id="exp-2" class="experience" style="width: 310px; height: 300px;">
	        <h2>2013-2014</h2>
	        <h3>Auto-entrepreneur</h3>
            <p>Réalisation d'audits énergétiques</p>
            <div class="details">
                <ul>
                    <li>Conception d'un outil de calcul automatique de DPE (méthode 3CL-DPE)</li>
                    <li>lalala</li>
                </ul>
            </div>
	        
        </div>
        <div id="exp-3" class="experience" style="width: 310px; height: 300px;">
	        <h2>2013</h2>
	        <h3>Stage ingénieur R&amp;D</h3>
            <p>Rédaction de spécifications énergétiques pour la mise en place de nouvelles fonctionnalités dans le logiciel ArchiWIZARD Esquisse.</p>
            <div class="details">
                <ul>
                    <li>Conception d'un outil de calcul automatique de DPE (méthode 3CL-DPE)</li>
                    <li>lalala</li>
                </ul>
            </div>
        </div>
	        
    </div>
   
<?php
include('script.php');
?>   

    <script type="text/javascript">
    /* ------------- Cache le div details au chargement de la page ----------------- */
        $( document ).ready(function() {
            $("#exp-1 > .details").hide();
            $("#exp-2 > .details").hide();
            $("#exp-3 > .details").hide();
        });
        
    /* -------------------- Changement taille div contenu au clic ----------------------- */
	    var mod1 = false;
	    var mod2 = false;
	    var mod3 = false;
		var originWidth = 310;
		var modWidth = 500;
		var originHeight = 300;
		var modHeight = 620;
	        
	    $("#exp-1").click(function() {
	    	if (mod1 == false) {
		    	$(this).animate({
			    	width: modWidth,
			    	height: modHeight
			    }, function() {
                    $("#exp-1 > .details").show();
                });
				mod1 = true;
				
				if (mod2 == true) {
					$("#exp-2").animate({
						width: originWidth,
						height: originHeight						
					});
                    $("#exp-2 > .details").hide();
					mod2 = false;
				}
				
				if (mod3 == true) {
					$("#exp-3").animate({
						width: originWidth,
						height: originHeight					
					});
                    $("#exp-3 > .details").hide();
					mod3 = false;
				}
			}			
			
			else {
				$(this).animate({
					width: originWidth,
					height: originHeight
				});
                $("#exp-1 > .details").hide();
				mod1 = false;
			}
		});
		
		$("#exp-2").click(function() {
	    	if (mod2 == false) {
		    	$(this).animate({
			    	width: modWidth,
			    	height: modHeight
			    }, function() {
                    $("#exp-2 > .details").show();
                });
				mod2 = true;
				
				if (mod1 == true) {
					$("#exp-1").animate({
						width: originWidth,
						height: originHeight						
					});
                    $("#exp-1 > .details").hide();
					mod1 = false;
				}
				
				if (mod3 == true) {
					$("#exp-3").animate({
						width: originWidth,
						height: originHeight					
					});
                    $("#exp-3 > .details").hide();
					mod3 = false;
				}
			}			
			
			else {
				$(this).animate({
					width: originWidth,
					height: originHeight
				});
                $("#exp-2 > .details").hide();
				mod2 = false;
			}
		});

		$("#exp-3").click(function() {
	    	if (mod3 == false) {
		    	$(this).animate({
			    	width: modWidth,
			    	height: modHeight,
			    }, function() {
                    $("#exp-3 > .details").show();
                });
				mod3 = true;	
				
				if (mod1 == true) {
					$("#exp-1").animate({
						width: originWidth,
						height: originHeight						
					});
                    $("#exp-1 > .details").hide();
					mod1 = false;
				}
				
				if (mod2 == true) {
					$("#exp-2").animate({
						width: originWidth,
						height: originHeight					
					});
                    $("#exp-2 > .details").hide();
					mod2 = false;
				}
			}			
			
			else {
				$(this).animate({
					width: originWidth,
					height: originHeight
				});
                $("#exp-3 > .details").hide();
				mod3 = false;
			}
		});
   
    </script>
