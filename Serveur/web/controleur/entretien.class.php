<?php

require_once dirname(__FILE__) . '/../commun/php/base.inc.php';
inclure_fichier('commun', 'bd.inc', 'php');

class Entretien {

    //****************  Attributs  ******************//
    private $ID_ENTRETIEN;
    private $ID_CONTACT;
	private $DATE;
	private $ETAT;


    //****************  Fonctions statiques  ******************//
    // R�cuperation de l'objet Entretien par l'ID
    public static function GetEntretienByID($_id) {
        if (is_numeric($_id)) {
            return BD::Prepare('SELECT * FROM Entretien WHERE ID = :id', array('id' => $_id), BD::RECUPERER_UNE_LIGNE, PDO::FETCH_CLASS, __CLASS__);
        }
        return NULL;
    }

	// R�cuperation des ids et noms de l'ensemble des entretien
	public static function GetListeEntretien() {
        return BD::Prepare('SELECT et.id_entretien, et.date, et.etat, e.nom
			FROM Entretien et, Contact c, Entreprise e
			WHERE et.id_contact = c.id_contact
			AND c.id_entreprise = e.id', array(), BD::RECUPERER_TOUT);
    }

	// R�cuperation des entretiens valides par l'administration
	public static function GetListeEntretiensValides() {
		$_etat = 1;
        return BD::Prepare('SELECT * FROM Entretien where ETAT = :etat', array('etat' => $_etat), BD::RECUPERER_TOUT);
    }
	
	// R�cuperation des entretiens NON valides
	public static function GetListeEntretiensNonValides() {
		$_etat = 0;
        return BD::Prepare('SELECT * FROM Entretien where ETAT = :etat', array('etat' => $_etat), BD::RECUPERER_TOUT);
    }
	
	// Suppression d'un entretien par ID
    public static function SupprimerEntretienByID($_id) {
        if (is_numeric($_id)) {
            BD::Prepare('DELETE FROM Entretien WHERE ID_ENTRETIEN = :id', array('id' => $_id));
        }
    }

	// Ajout ($_id <= 0) ou �dition ($_id > 0) d'un entretien
    public static function UpdateEntretien($_id, $_id_contact, $_date){

		$info = array(
			'id'=> $_id,
			'id_contact'=>$_id_contact,
			'date'=>$_date
		);
		
        if ($_id < 0 && is_numeric($_id)) {
            //Si l'etudiant � d�j� un CV
            BD::executeModif('UPDATE Entretien SET 
					ID_CONTACT = :id_contact,
                    DATE = :date
                    WHERE ID_ENTRETIEN = :id', $info);
              BD::MontrerErreur();
			return $_id;
        } else {
			
            $retour = BD::executeModif('INSERT INTO Entretien SET 
					ID_ENTRETIEN = :id,
					ID_CONTACT = :id_contact,
                    DATE = :date
					', $info);

            if ($retour != null ) {
                echo $retour;
            } else {
                echo "Erreur 2 veuillez contacter l'administrateur du site";
                return;
            }
        }
		
    }
	
	// Permet de valider un entretien demande par une entreprise
	public static function ValiderEntretien($_id){
		$etat = 1;
		$info = array(
			'id'=> $_id,
			'etat'=> $etat,
		);
		BD::executeModif('UPDATE Entretien SET 
				ETAT = :etat
				WHERE ID_ENTRETIEN = :id', $info);
		  BD::MontrerErreur();
		return $_id;
	
	}

    //****************  Fonctions  ******************//


    //****************  Getters & Setters  ******************//
    public function getId() {
        return $this->ID;
    }
    
    public function getIdContact() {
        return $this->ID_CONTACT;
    }
	
    public function getDate() {
        return $this->DATE;
    }

}

?>
