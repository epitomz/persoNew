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
            <p>Lalala nous irons aux bois</p>
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
            <p>Réalisation d'études énergétiques de bâtiments avec le logiciel ArchiWIZARD</p>
            <div class="details" style="display: none">
                <ul>
                    <li>Modélisation 3D de bâtiments (SketchUp) puis modélisation énergétique (ArchiWIZARD)</li>
                    <li>Réalisation d'études paramétriques (Bbio/Cep/Tic) selon la méthode de calcul imposée par la RT 2012</li>
                    <li>Réalisation d'étude d'ensoleillement (FLJ, besoins et consommations de chauffage) selon les normes HQE et RT 2012</li>
                    <li>Etude de l'impact du choix des vitrages (TL, FS et sélectivité) sur les besoins d'un bâtiment</li>
                    <li>Rédaction de rapports : bilan et conseils</li>
                    <li>Différents clients : Bouygues Immobilier, expertise judiciaire, HPC-SA, etc.</li>
                </ul>
            </div>
        </div>
            
        <div id="exp-3" class="experience" style="width: 310px; height: 300px;">
	        <h2>2013-2014</h2>
	        <h3>Graphic web Designer</h3>
            <h4><i>Smart'Unity (Toulouse, 31)</i></h4>
            <p>Conception du site smartunity.fr</p>
            <div class="details" style="display: none">
                <ul>
                    <li>Définition de la charte graphique du site</li>
                    <li>Maquettage du site</li>
                    <li>Développement de la partie front-end (HTML5, CSS3, JSON, Javascript)</li>
                </ul>
            </div>
        </div>
	       
        <div id="exp-4" class="experience" style="width: 310px; height: 300px;">
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
	        
<?php
include('script.php');
?>   

    <script type="text/javascript">
    /* --------------- Fonctions de test si div ouvert ----------------- */
        function test1() {
            if (mod1 == true) {
				$("#exp-1").animate({
					width: originWidth,
					height: originHeight						
				});
                   $("#exp-1 > .details").hide();
				mod1 = false;
			}
        }
        
        function test2() {
            if (mod2 == true) {
				$("#exp-2").animate({
					width: originWidth,
					height: originHeight						
				});
                   $("#exp-2 > .details").hide();
				mod2 = false;
			}
        }
        
        function test3() {
            if (mod3 == true) {
				$("#exp-3").animate({
					width: originWidth,
					height: originHeight						
				});
                   $("#exp-3 > .details").hide();
				mod3 = false;
			}
        }
        
        function test4() {
            if (mod4 == true) {
				$("#exp-4").animate({
					width: originWidth,
					height: originHeight						
				});
                   $("#exp-4 > .details").hide();
				mod4 = false;
			}
        }
    /* -------------------- Changement taille div contenu au clic ----------------------- */
	    var mod1 = false;
	    var mod2 = false;
	    var mod3 = false;
        var mod4 = false;
		var originWidth = 310;
		var modWidth = 500;
		var originHeight = 300;
		var modHeight = 500;
	        
	    $("#exp-1").click(function() {
	    	if (mod1 == false) {
		    	$(this).animate({
			    	width: modWidth,
			    	height: modHeight
			    }, function() {
                    $("#exp-1 > .details").show();
                });
				mod1 = true;
				
				test2();
                test3();
                test4();
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
				
				test1();
                test3();
                test4();
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
				
				test1();
                test2();
                test4();
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
        
        $("#exp-4").click(function() {
	    	if (mod4 == false) {
		    	$(this).animate({
			    	width: modWidth,
			    	height: modHeight,
			    }, function() {
                    $("#exp-4 > .details").show();
                });
				mod4 = true;	
				
				test1();
                test2();
                test3();
			}			
			
			else {
				$(this).animate({
					width: originWidth,
					height: originHeight
				});
                $("#exp-4 > .details").hide();
				mod4 = false;
			}
		});
   
    </script>
