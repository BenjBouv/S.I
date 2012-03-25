<?php

require_once dirname(__FILE__) . '/../../commun/php/base.inc.php';
inclure_fichier('commun', 'requete.inc', 'php'); // Ajouter dans base.inc ?

/**
 * Cette classe s'occupe de tous les appels pouvant être effectués
 * sur le module Stages, à savoir la recherche de stages.
 *
 * Auteur : benjamin.bouvier@gmail.com (2011/2012)
 */
class Stages {
	/**
	 * Recherche des stages appropriés selon les paramètres donnés.
	 *
	 * $mots_cles : tableau contenant les mots clés sous forme de
	 * chaînes (une case du tableau par mot clé)
	 * $annee : valeur parmi 3, 4 ou 5
	 * $duree : chaîne ('1 mois', '1 an',...) // TODO définir clairement 
	 * $lieu : chaîne
	 * $entreprise : chaîne
	 */

	// TODO ajouter domaine ?
	public static function rechercher($mots_cles, $annee, $duree,
				$lieu, $entreprise) {

		$requete = new Requete("SELECT * FROM Stage");

		if ( isset($annee) ) {
			$requete->ajouterConditionEgale('annee', $annee);	
		}

		if ( isset($duree) ) {
			$requete->ajouterConditionComme('duree', $duree);
		}

		if ( isset($lieu) ) {
			$requete->ajouterConditionComme('lieu', $lieu);
		}

		if ( isset($entreprise) ) {
			$requete->ajouterConditionComme('entreprise', $entreprise);
		}

		if ( isset($mots_cles) ) {
			$requete->rechercherSur(
				array('titre','description', 'mots_cles'),
				$mots_cles);	
		}

		return $requete->lire();
	}
};


// Tests à la va-vite pour l'instant... 
$resultats = Stages::rechercher(array('code'), NULL, NULL, NULL, NULL);

$count = count($resultats);
echo "<p>$count résultats trouvés.</p>";
for ($i = 0; $i < $count; $i++) {
	echo 'Titre : ' . $resultats[$i]->titre . '<br/>';
}

?>
