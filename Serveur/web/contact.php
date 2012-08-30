<?php
/**
 * -----------------------------------------------------------
 * Vue - CONTACT
 * -----------------------------------------------------------
 * Auteur : Benjamin (Bill) Planche - Aldream (4IF 2011/12)
 *          Contact - benjamin.planche@aldream.net
 * ---------------------
 * Page affichant les coordonnées de l'AEDI (emails des équipes, adresse, ...).
 */
?>

<div id="contact" class="row" style="margin-top: 20px;">

	<div id="contact-unit" class="span7 columns">
		<div class="hero-unit">
			<h1>Contact</h1>
			<p style="text-align:justify;">Vous souhaitez obtenir des informations sur les évènements organisés, entamer un partenariat, ou tout simplement nous dire bonjour ? <span class="hero_motcle" style="margin-left:10px;">L'échange est notre priorité !</span><br/>
			Voici nos coordonnées :</p>
			<h2>Emails</h2>
			<table id="contact-mails">
				<tr>
					<td>Bureau de l'Association : </td>
					<td>
						<a href="#" e-name="aedi.bureau" class="e-noBot btn btn-mini btn-info" e-domain="listes.insa-lyon.fr">
						<i class="icon-eye-open icon-white"></i> Afficher Email</a>
					</td>
				</tr>
				<tr>
					<td>Relations avec les Entreprises : </td>
					<td>
						<a href="#" e-name="aedi.entreprise.asso" class="e-noBot btn btn-mini btn-info" e-domain="listes.insa-lyon.fr">
							<i class="icon-eye-open icon-white"></i> Afficher Email
						</a>
					</td>
				</tr>
				<tr>
					<td>Animation : </td>
					<td>
						<a href="#" e-name="aedi.anim.asso" class="e-noBot btn btn-mini btn-info" e-domain="listes.insa-lyon.fr">
							<i class="icon-eye-open icon-white"></i> Afficher Email
						</a>
					</td>
				</tr>
				<tr>
					<td>Communications : </td>
					<td>
						<a href="#" e-name="aedi.com.asso" class="e-noBot btn btn-mini btn-info" e-domain="listes.insa-lyon.fr">
							<i class="icon-eye-open icon-white"></i> Afficher Email
						</a>
					</td>
				</tr>
			</table>
			<h2>Téléphone</h2>
			<p>+33 (0)4 78 896 902</p>
			
			<h2>Adresse</h2>
			<address>
				AEDI - INSA de Lyon<br />
				Département Informatique, Bat. 502<br />
				20, av. Albert Einstein<br />
				69621 Villeurbanne Cedex - France
			</address>
		</div>
	</div>
	<div class="span5 columns">
					<iframe style="border-radius:5px" id="gmap" class="width5" width="470" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=INSA+de+Lyon+-+d%C3%A9partement+Informatique&amp;aq=&amp;sll=45.781172,4.881234&amp;sspn=0.020202,0.052314&amp;ie=UTF8&amp;hq=INSA+de+Lyon+-+d%C3%A9partement+Informatique&amp;t=m&amp;ll=45.781038,4.87278&amp;spn=0.004115,0.005032&amp;z=17&amp;output=embed"></iframe>
					
					<p style="margin-top:10px; text-align:right;">
						<a id="gmap-lien" class="btn-primary btn" href="https://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=INSA+de+Lyon+-+d%C3%A9partement+Informatique&amp;aq=&amp;sll=45.781172,4.881234&amp;sspn=0.020202,0.052314&amp;ie=UTF8&amp;hq=INSA+de+Lyon+-+d%C3%A9partement+Informatique&amp;t=m&amp;ll=45.781038,4.87278&amp;spn=0.004115,0.005032&amp;z=17">
							<i class="icon-map-marker icon-white"></i> Agrandir le plan
						</a>
					</p>
	</div>
	
	<script>
		// Image resizing :
		$('.width5').attr('width', ($('#contact').width() / 12 * 5 - 30)+'px');
		// Caroussels :
		$('#photoCarousel').carousel({
			interval: 10000
		})
		
		$('#gmap').attr('height', ($('#contact-unit .hero-unit').height() - $('#gmap-lien').height()));
		
		
	</script>

</div>
