<?php
/*if (!Utilisateur_connecter('entreprise')) {
    inclure_fichier('', '401', 'php');
    die;
}
*/
?>

<legend>Entreprises</legend>
<br />
<p> Voici la liste des entreprises souhaitant participer aux futures sessions de simulations d'entretiens.
Vous pouvez accepter ou refuser celles qui ne sont pas encore inscrite. 
</p>
<br />
			
<table class="table table-striped">
</table>

<p> Si vous souhaitez ajouter manuellement une entreprise, utilisez le boutton ci-dessous afin de renseigner les informations necessaires. 
</p>
<a class="reservation btn btn-primary offset5" data-toggle="modal" href="#myModal">Ajouter Entretien</a>


<br />
<br />

<form class="form-horizontal" id="formChoixDate" action="#" method="post">
	<fieldset>
		<legend>Etudiants</legend>
		<br />
		<p> Vous pouvez visualiser ici les etudiants inscrits a chaque creneau prevu.
</p>
		<br />
		<div class="control-group" id="control_date">
		<label class="offset1 control-label">Date</label>
		<div class="controls">
		  <input name="date1" id="date_creneaux" class="input-medium date-pick"/>
		<button type="submit" class="btn btn-primary offset1">Rechercher</button>
		</div>
		 </div>
	</fieldset>
</form>
		
		
<div class="accordion" id="accordion_creneau">

</div>


<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<a class="close" data-dismiss="modal">�</a>
	<h3>Entretien</h3>
	</div>
	<div class="modal-body">
	   <form class="form-horizontal" id="formValiderEntretien" method="post" action="#" >
			<input type="hidden" id="id_entretien"/>
			<p>Etes-vous sur de vouloir vous valider cet entretien ?</p>
			<div class="modal-footer">
			<input type="submit" class="btn btn-primary" value="Valider"/>
			<a href="#" class="btn" data-dismiss="modal">Annuler</a>
			</div>
		</form>
	</div>
</div>


<script type="text/javascript" charset="utf-8">


</script>


<?php
inclure_fichier('entretien', 'inscription', 'js');
inclure_fichier('entretien', 'jquery.datePicker', 'js');
inclure_fichier('entretien', 'date', 'js');
inclure_fichier('entretien', 'datePicker', 'css');
?>