﻿<?php
/**
 * -----------------------------------------------------------
 * Vue - A PROPOS
 * -----------------------------------------------------------
 * Auteur : Benjamin (Bill) Planche - Aldream (4IF 2011/12)
 *          Contact - benjamin.planche@aldream.net
 * ---------------------
 * Page présentant l'équipe actuelle.
 */
 
 // In order to handle tabs, page reloads & browser forward/back history :
 inclure_fichier('commun', 'jquery.ba-hashchange.min', 'js');
?>


<div id="a-propos">
	<div class="row" style="margin-top: 20px;">
		<div class="tabbable tabs-left">
			<div class="span2">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="#about-asso" data-toggle="tab">L'association</a></li>
					<li><a href="#about-team" data-toggle="tab">L'équipe</a></li>
					<li><a href="#about-site" data-toggle="tab">Le site-web</a></li>
				</ul>
			</div>
			<div class="span10">
				<div class="tab-content">
					<div class="tab-pane active" id="about-asso">
						<div class="hero-unit">
							<h1>L'Association</h1>
							<p class="justify">L'<span class="hero_motcle">AEDI</span>, l'Association des Etudiants du Departement Informatique, est une figure incontournable de la vie du Departement, et de la faune associative de l'INSA-Lyon. Depuis 30 ans, celle-ci accompagne les etudiants en Informatique a travers leur parcours, prodiguant de multiples services.<br/>
							Comme toute association Loi 1901, l'AEDI n'est pas a but lucratif. L'inscription est <em>gratuite</em> pour tous les etudiants IF, l'association vivant grace aux actions qu'elle mene, ainsi qu'aux multiples partenariats tisses, notamment avec le Departement et les <a title="En savoir plus sur le parrainage" href="index.php?page=Parrainage">parrains de promotion</a>.<br/>
							Chaque annee, une equipe d'etudiants volontaires est elue pour reprendre sa tete, apportant ainsi de nouvelles pierres a l'edifice.</p>
						</div>
						<div style="position:relative;">
							<h2 class="bleuBur"><i class="icon icon-star icon-white"></i> Notre Mission</h2>
							<p class="justify">L'AEDI a pour role de <span class="hero_motcle">renforcer la cohésion entre les étudiants du Département Informatique, les aider dans leur cursus, et établir des contacts privilégiés avec les entreprises</span>.
							Pour cela, l'AEDI profite aujourd'hui d'un riche reseau construit au cours des ans, regroupant anciens eleves investis, entreprises cles du monde informatique, et enseignants motives. Ces ressources, mises a disposition a travers de nombreux evenements federateurs comme les Rencontre IF ou les conferences, offrent d'enormes opportunites aux etudiants de decouvrir les acteurs de l'Informatique, ou leur futur employeur. Reciproquement, cela permet aux entreprises de renforcer leur presence et decouvrir des profils interessants.<br/>
							S'il est primordial pour les eleves de profiter de ces occasions et de se projeter dans le futur, L'AEDI a aussi conscience de l'importance, parfois, de simplement profiter du present, de ces annees etudiantes qui passent bien trop vite. Dans cette optique sont regulierement organises des evenements recreatifs. Integration des nouveaux venus, sorties en ville, gouters, activites sportives, ... Toutes les occasions sont bonnes pour renforcer les liens au sein du Departement, mais aussi avec l'exterieur, grace aux bonnes relations developpees avec d'autres associations etudiantes lyonnaises.<br/>
							L'AEDI s'est donc donnee comme vocation d'etre un <span class="hero_motcle">acteur cle</span> du Departement, en aidant les etudiants dans tous les aspects de leurs etudes.</p>
							
							<h2 class="bleuEntr" ><i class="icon icon-heart icon-white"></i> Nos Valeurs</h2>
							<p class="justify">L'AEDI a fait le voeu de croire profondement dans le potentiel des etudiants du Departement Informatique. C'est pourquoi nous nous efforcons d'apporter le terreau, les opportunites, destines a faire valoir ces talents. La diversite des profils au sein des promotions est egalement une caracteristique que nous cherissons et encourageons, afin de favoriser une atmosphere d'echanges et de camaraderie plutot que de competition.<br/>
							Enfin, pur produit de l'esprit associatif de l'INSA-Lyon, l'AEDI a a coeur de faire prosperer celui-ci, en encourageant les initiatives etudiantes et les partenariats inter et extra-campus.</p>
						</div>
					</div>
					<div class="tab-pane" id="about-team">
						<div class="hero-unit">
							<h1>L'Equipe</h1>
							<p class="justify">L'AEDI est gérée par une équipe d'étudiants bénévoles et actifs, élus pour un an. Chacun y apporte ses propres compétences, permettant ainsi à l'association de proposer un éventail riche et varié d'évènements et de services.</p>
						</div>
						<div class="row">
							<p class="span4"><img src="commun/img/equipe/bureau.jpg" title="Le Bureau" width=350 /></p>
							<div class="span6">
								<h2 class="bleuBur" >Le Bureau <i class="icon icon-tag icon-white"></i></h2>
								<p class="justify">A la tête de l'association, le Bureau coordonne les différentes équipes.<br/>
								<small>De gauche à droite :</small></p>
								<ul>
									<li><span class="hero_motcle">Charlotte Pigeon</span> : Trésorière</li>
									<li><span class="hero_motcle">Romain Gérard</span> : Vice-Président</li>
									<li><span class="hero_motcle">Prisca Bonnet</span> : Présidente</li>
									<li><span class="hero_motcle">Caroline Monin</span> : Secrétaire</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="span6">
								<h2 class="bleuEntr" ><i class="icon icon-flag icon-white"></i>L'équipe Entreprise</h2>
								<p class="justify">Chargée des relations Entreprises, l'équipe organise notamment les <a href="index.php?page=RIFs_Entreprise" title="Rencontres IF">RIFs</a>.<br/>
								<small>De gauche à droite :</small></p>
								<ul>
									<li><strong>Alina Ghermann</strong></li>
									<li><strong>Quentin Veyret</strong></li>
									<li><strong>Margot Selosse</strong> (Responsable)</li>
									<li><strong>Yahya Kane</strong></li>
									<li><strong>Elodie Talbot</strong></li>
								</ul>
							</div>
							<p class="span4"><img src="commun/img/equipe/equipe_entreprise.jpg" title="L'Equipe Entreprise" width=350 /></p>
						</div>
						<div class="row">
							<p class="span4"><img src="commun/img/equipe/equipe_animation.jpg" title="L'équipe Animation" width=350 /></p>
							<div class="span6">
								<h2 class="bleuAnim" >L'équipe Animation <i class="icon icon-music icon-white"></i></h2>
								<p class="justify">Cette équipe organise toute l'année des <a href="index.php?page=Evenements_Etudiant" title="Présentation des évènements">évènements</a> à destination des étudiants.<br/>
								<small>De gauche à droite :</small></p>
								<ul>
									<li><strong>Cédric Morin</strong></li>
									<li><strong>Arthur Hamon</strong> (Responsable)</li>
									<li><strong>Guillaume Fort</strong></li>
									<li><strong>Nicolas Mauti</strong></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="span6">
								<h2 class="bleuCom" ><i class="icon icon-envelope icon-white"></i>L'équipe Communication</h2>
								<p class="justify">Affiches, newsletters, réseaux sociaux, ... Cette équipe rend visible l'association et ses évènements sur le campus.<br/>
								<small>De gauche à droite :</small></p>
								<ul>
									<li><strong>Benoit Delerue</strong></li>
									<li><strong>Pierre Brunisholz</strong></li>
									<li><strong>Jean-Baptiste Ghoul</strong></li>
								</ul>
							</div>
							<p class="span4"><img src="commun/img/equipe/equipe_communication.jpg" title="L'Equipe Entreprise" width=350 /></p>
						</div>
						<div class="row">
							<p class="span4"><img src="commun/img/equipe/equipe_admin.jpg" title="L'équipe Admin" width=350 /></p>
							<div class="span6">
								<h2 class="bleuAnim" >L'équipe Admin <i class="icon icon-eye-open icon-white"></i></h2>
								<p class="justify">En charge du patrimoine informatique de l'AEDI, ils veillent sur le bon fonctionnement et l'amélioration des services.<br/>
								<small>De gauche à droite :</small></p>
								<ul>
									<li><strong>Pierre-Henri Shoffit</strong></li>
									<li><strong>Gautier Di Folco</strong></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<p class="centre label label-inverse" style="margin-top:15px;" >Tu souhaites toi-aussi t'investir dans la vie du Département ? <a href="index.php?page=Contact" title="Contact">Contacte-nous !</a></p>
						</div>
					</div>
					<div class="tab-pane" id="about-site">
						<div class="hero-unit">
							<h1>Le Site-Web</h1>
							<p class="justify">Ce site ne se résume pas à être une vitrine de notre Association et Département. Il propose l'ensemble des services informatiques de l'AEDI, à destination des étudiants et entreprises.</p>
						</div>
						
						<div class="accordion" id="accordion-site">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-site" href="#services-etudiant">
									  <h2 class="bleuEtudiant" ><i class="icon icon-user icon-white"></i> Etudiant</h2>
									</a>
								</div>
								<div id="services-etudiant" class="accordion-body collapse">
									<div class="accordion-inner">
										<p>Tu trouveras ici deux catégories de services offerts par l'AEDI :</p>
										<h3>Relations professionnelles</h3>
										<p>Au cours des années, l'AEDI et le Département ont développé des relations privilégiées avec un grand nombre d'entreprises, afin de t'offrir un maximum d'opportunités pour bien débuter ta carrière. Une fois identifié <small>(bouton en haut à droite)</small>, tu pourras ainsi accéder aux pages suivantes :</p>
										<div class="span8" style="width:100%;">
											<div class="row categ-services">
												<div class="span4">
													<div>
														<h4>Catalogue de stages</h4>
														<p class="justify">Il contient les descriptions de l'ensemble des stages et PFE proposés par des entreprises au Département Informatique dans l'année.<br/>
														Grâce aux outils de recherche, tu ne pourras que trouver ton bonheur ...</p>
														<p class="centre"><a class="btn btn-inverse" href="index.php?page=Stages_Etudiant">Accéder</a></p>
													</div>
												</div>
												<div class="span4">
													<div>
														<h4>Inscription aux simulations d'entretiens</h4>
														<p class="justify">Ces simulations, proposées gracieusement par des entreprises partenaires, te permettent de t'entrainer à l'incontournable exercice de l'entretien professionnel, face à des RH expérimentés et là pour te conseiller.<br/>
														Inscris-toi rapidement aux différentes sessions proposées !</p>
														<p class="centre"><a class="btn btn-inverse" href="index.php?page=Entretiens_Etudiant">Accéder</a></p>
													</div>
												</div>
											</div>
										</div>
										
										<h3>Outils de projet</h3>
										<p>Tout au long de ta scolarité (et surtout à partir de la 4ème année), tu seras amener à travailler sur des projets, avec d'autres étudiants. Afin de t'aider dans la gestion de projets, l'AEDI héberge deux plateformes de services recommandées :</p>
										<div class="span8" style="width:100%;">
											<div class="row categ-services">
												<div class="span4">
													<div>
														<h4>Redmine</h4>
														<p class="justify">Cet outil de gestion permet un suivi en temps réel de l'avancement du projet. Permettant notamment d'identifier des tâches puis de logger le temps de travail, il offre un tableau de bord très utile aux chefs de projets.</p>
														<p class="centre"><a class="btn btn-inverse" href="http://shareif.insa-lyon.fr/redmine">Accéder</a></p>
													</div>
												</div>
												<div class="span4">
													<div>
														<h4>Share'IF</h4>
														<p class="justify">Il s'agit d'une plateforme Svn/Git mis à disposition par l'AEDI, permettant le travail collaboratif et le versionnage des évolutions de vos projets. La création et le partage de dépôts se font en quelques clics !</p>
														<p class="centre"><a class="btn btn-inverse" href="https://shareif.insa-lyon.fr/">Accéder</a></p>
													</div>
												</div>
											</div>
										</div>
										
										<h3>Des idées ?</h3>
										<p>Tu aimerais voir de nouveaux services proposés par l'AEDI ? Nous sommes toujours partant ! <a href="index.php?page=Contact" title="Contact">Contacte-nous</a></p>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-site" href="#services-entreprise">
										<h2 class="bleuEntr" ><i class="icon icon-flag icon-white"></i> Entreprise</h2>
									</a>
								</div>
								<div id="services-entreprise" class="accordion-body collapse">
									<div class="accordion-inner">
										<p>De nombreux contenus de ce site web sont à destination des entreprises, partenaires privilégiés.</p>
										<h3>Nos offres</h3>
										<p>Vous trouverez sur cette <a href="index.php?page=Offres_Entreprise">page web</a> la présentation des multiples offres de l'AEDI à destination des entreprises. <br/>
										Si vous avez des questions par rapport à celles-ci, ou si vous souhaitez organiser un évènement particulier, <a href="index.php?page=Contact">contactez-nous</a> et nous nous ferons un plaisir d'échanger avec vous.</p>
										<p class="centre"><a class="btn btn-primary btn-large" href="index.php?page=Offres_Entreprise">Accédez à nos offres</a></p>
										
										<h3>Inscription aux évènements</h3>
										<p>Parmi les évènements proposés, deux nécéssitent une organisation particulière, de part leur logistique ou leur fréquentation importante : les <a href="index.php?page=Offres_Entreprise#simulations-entretiens">Simulations d'entretiens</a> et les <a href="index.php?page=Offres_Entreprise#rif">Rencontres IF</a>. Afin d'assurer, à vous et aux étudiants, un service optimal, nous mettons à votre disposition les outils d'inscription suivants :
										<div class="span8" style="width:100%;">
											<div class="row categ-services">
												<div class="span4">
													<div>
														<h4>Rencontres IF</h4>
														<p class="justify">Vous trouverez sur la page indiquée ci-dessous l'ensemble des informations sur cet évènement, ainsi que l'adresse pour nous contacter et discuter des détails de votre candidature. N'hésitez pas à nous joindre le plus tôt possible, afin d'être sûr d'obtenir un stand !</p>
														<p class="centre"><a class="btn btn-inverse" href="index.php?page=RIFs_Entreprise">Accéder</a></p>
													</div>
												</div>
												<div class="span4">
													<div>
														<h4>Simulations d'entretiens</h4>
														<p class="justify">En quelques clics, préinscrivez-vous pour organiser des simulations d'entretiens dans notre Département ! Votre demande sera traitée dans les délais les plus brefs, et transmise à l'administration du Département qui se chargera des détails logistiques.</p>
														<p class="centre"><a class="btn btn-inverse" href="index.php?page=Entretiens_Entreprise">Accéder</a></p>
													</div>
												</div>
											</div>
										</div>
										
										<h3>CVthèque</h3>
										<p>Fiers de notre formation et des talents dont nos promos regorgent, nous proposons aux entreprises un <em>book</em> contenant les CV des étudiants actuels, offrant ainsi un point de vue unique sur l'ensemble de ces profils.</p>
										<p class="centre"><a class="btn btn-primary btn-large" href="index.php?page=CV_Entreprise">Accédez à l'offre</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {

			// Gist from chainer and lili262 : https://github.com/twitter/bootstrap/pull/581#issuecomment-4966967
			// Allow to save the navigation with the tabs (reloads, back, fav, ...)
			// -------
			$(function(){
				// Function to activate the tab
				function activateTab() {
					var activeTab = $('[href=' + window.location.hash.replace('/', '') + ']'); // The antislash added before the anchor's name prevents to scroll until the anchor's element. 
					activeTab && activeTab.tab('show');
				}

				// Trigger when the page loads
				activateTab();

				// Trigger when the hash changes (forward / back)
				$(window).hashchange(function(e) {
					activateTab();
				});

				// Change hash when a tab changes
				$('a[data-toggle="tab"], a[data-toggle="pill"]').on('shown', function () {
					window.location.hash = '/' + $(this).attr('href').replace('#', '');
				}); 
			});
			// -------

			
			// Caroussels :
			$('#photoCarousel').carousel({
				interval: 10000
			})
			

		});

	</script>

</div>
