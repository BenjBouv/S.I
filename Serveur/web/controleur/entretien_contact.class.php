<?php

require_once dirname(__FILE__) . '/../commun/php/base.inc.php';
inclure_fichier('commun', 'bd.inc', 'php');

class Entretien {

    //****************  Attributs  ******************//
    private $ID;
    private $NOM;
    private $PRENOM;
    private $MAIL;
    private $TEL;


    //****************  Fonctions statiques  ******************//
    // R�cuperation de l'objet Intervenant par l'ID
    public static function GetIntervenantByID($_id) {
        if (is_numeric($_id)) {
            return BD::Prepare('SELECT * FROM Entretien_contact WHERE ID = :id', array('id' => $_id), BD::RECUPERER_UNE_LIGNE, PDO::FETCH_CLASS, __CLASS__);
        }
        return NULL;
    }

	// R�cuperation de l'ensemble des intervenants d'une journ�e pass�e en param�tre (ex: 27/03/2012)
	public static function GetListeIntervenantByDate(date) {
        return BD::Prepare('SELECT * FROM Entretien_contact WHERE id = (SELECT c.id FROM Entretien_creneau c, Entretien e WHERE c.id_entretien=e.id AND e.date ="'date'"'), array(), BD::RECUPERER_TOUT);
    }

	// Ajout ($_id <= 0) ou �dition ($_id > 0) d'un intervenant
    public static function UpdateIntervenant($_id, $_nom $_prenom, $_mail, $_tel){

		$info = array(
			'id'=> $_id,
			'nom'=>$_nom,
			'prenom'=>$_prenom,
			'mail'=>$_mail,
			'tel'=>$_tel
		);   
		
        if ($_id > 0 && is_numeric($_id)) {

            //Si l'etudiant � d�j� un CV
            BD::Prepare('UPDATE Entretien_contact SET 
                    NOM = :nom,
                    PRENOM = :prenom,
                    MAIL = :mail,
					TEL = :tel
                    WHERE ID = :id', $info);
            return $_id;
        } else {
            BD::Prepare('INSERT INTO Entretien_contact SET 
					ID = :id,
                    NOM = :nom,
                    PRENOM = :prenom,
                    MAIL = :mail,
					TEL = :tel'
                    , $info);

            $id = BD::GetConnection()->lastInsertId();
            if ($id > 0) {
                return $id;
            } else {
                echo "Erreur 2 veuillez contacter l'administrateur du site";
                return;
            }
        }
		
    }
	
    //****************  Fonctions  ******************//

    //****************  Getters & Setters  ******************//
    public function getId() {
        return $this->ID;
    }

    public function getNom() {
        return $this->NOM;
    }
    
    public function getPrenom() {
        return $this->HEURE_DEBUT;
    }

    public function getMail() {
        return $this->MAIL;
    }

}

?>
