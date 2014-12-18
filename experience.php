<?php
    $title = "Expérience";
    include('header.php');
    include('navbar.php');
?>
    
    <!-- Contenu -->
    <div class="contenu">
        <h1>Expérience</h1>
        <div id="exp-1" class="experience" style="width: 310px; height: 300px;">
	        <h2>2014-...</h2>
            <img class="sopra" src="img/sopra.png" />
	        <h3>Ingénieur étude et développement</h3>
            <h4><i>SOPRA (Bordeaux, 33)</i></h4>
            <div class="details" style="display: none">
                <ul>
                    <li></li>
                    <li>Conception d'un outil de calcul automatique de DPE (méthode 3CL-DPE)</li>
                    <li>lalala</li>
                </ul>
            </div>
	        
        </div>
        <div id="exp-2" class="experience" style="width: 310px; height: 300px;">
	        <h2>2013-2014</h2>
	        <h3>Auto-entrepreneur</h3>
            <h4><i>Toulouse, 31</i></h4>
            <p>Réalisation d'audits énergétiques</p>
            <div class="details" style="display: none">
                <ul>
                    <li>Conception d'un outil de calcul automatique de DPE (méthode 3CL-DPE)</li>
                    <li>lalala</li>
                </ul>
            </div>
	        
        </div>
        <div id="exp-3" class="experience" style="width: 310px; height: 300px;">
	        <h2>2013</h2>
            <img class="hpcsa" src="img/hpc-sa.png" />
	        <h3>Stage ingénieur R&amp;D</h3>
            <h4><i>HPC-SA (Toulouse, 31)</i></h4>
            <p>Rédaction de spécifications énergétiques pour le développement de nouvelles fonctionnalités dans le logiciel ArchiWIZARD Esquisse.</p>
            <div class="details" style="display: none">
                <ul>
                    <li>Conception en Virtual Basic d'un outil de diagnostic de performance énergétique selon la méthode 3CL-DPE.</li>
                    <li>Participation aux différentes étapes de la conception d'une nouvelle fonctionnalité dans le logiciel ArchiWIZARD : Analyse fonctionnelle, spécifications, réalisation d'IHM, développement C++.</li>
                </ul>
            </div>
        </div>
	        
    </div>

<?php
include('script.php');
?>   

    <script type="text/javascript">       
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
