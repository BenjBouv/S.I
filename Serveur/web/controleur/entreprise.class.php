﻿<?php
/**
 * -----------------------------------------------------------
 * ENTREPRISE - CLASSE PHP
 * -----------------------------------------------------------
 * Auteur : Benjamin (Bill) Planche - Aldream (4IF 2011/12)
 *          Contact - benjamin.planche@aldream.net
 * ---------------------
 * Controleur associé à la table Entreprise
 */
 
require_once dirname(__FILE__) . '/../commun/php/base.inc.php';
inclure_fichier('commun', 'bd.inc', 'php');

class Entreprise {

	//****************  Attributs  ******************//
	private $ID_ENTREPRISE;
	private $NOM;
	private $DESCRIPTION;
	private $SECTEUR;
	private $COMMENTAIRE;

	//****************  Fonctions statiques  ******************//
	/**
	* Récupère une entreprise via son ID
	* $_id : Identifiant de l'entreprise à récupérer
	* @return L'instance de l'entreprise si tout est ok, ou NULL
	* @throws Une exception en cas d'erreur
	*/
	public static function GetEntrepriseByID($_id) {

		if (is_numeric($_id)) {
			return BD::executeSelect('SELECT * FROM ENTREPRISE WHERE ID_ENTREPRISE = :id', 
						array('id' => $_id), BD::RECUPERER_UNE_LIGNE, PDO::FETCH_CLASS, __CLASS__ );
		}

		return NULL;
	}

	/**
	* Récuperation des ids et noms de l'ensemble des entreprises, ordonné alphabétiquement
	* @return Un tableau d'instance ou NULL s'il n'a pas été possible d'en récupérer
	* @throws Une exception en cas d'erreur au niveau des requêtes
	*/
	public static function GetListeEntreprises() {

		$obj = array();

		/* Tentative de sélection de tous les ID ordonnés par nom */
		$result = BD::executeSelect( 'SELECT ID_ENTREPRISE FROM ENTREPRISE ORDER BY NOM', array(), BD::RECUPERER_TOUT );
		if( $result == null ) {
			return null;
		}

		/* Pour chacun, on construit l'objet */
		$i = 0;
		foreach( $result as $row ) {

			$obj[$i] = self::GetEntrepriseByID( $row['ID_ENTREPRISE'] );
			$i++;
		}

		return $obj;
	}

	/**
	* Suppression d'une entreprise par ID
	* $_id : Identifiant de l'entreprise à supprimer
	* @return Vrai si tout est ok, faux sinon
	* @throws Une exception en cas d'erreur au niveau de la base
	*/
	public static function SupprimerEntrepriseByID($_id) {

		if(! is_numeric($_id) ) {
			return false;
		}

		$result = BD::executeModif('DELETE FROM ENTREPRISE WHERE ID_ENTREPRISE = :id', array('id' => $_id));
		/* S'il y a 0 champs modifiés, bizarre... */
		if( $result == 0 ) {
			return false;
		}

		return true;
	}

	/**
	* Ajout ($_id <= 0) ou édition ($_id > 0) d'une entreprise
	* @return L'identifiant de l'entreprise ou false en cas d'erreur
	* @throws Une exception en cas d'erreur venant de la base
	*/
	public static function UpdateEntreprise( $_id, $_nom, $_desc, $_secteur, $_com ) {

		/* $_id > 0, on est dans le cas de la mise à jour d'une entreprise */
		if( $_id > 0 ) {

			/* Préparation du tableau */
			$info = array( 'id' => $_id, 'nom' => $_nom, 'desc' => $_desc, 'secteur' => $_secteur, 'commentaire' => $_com );

			/* On execute notre requête */
			$result = BD::executeModif( 'UPDATE ENTREPRISE SET NOM = :nom, DESCRIPTION = :desc, SECTEUR = :secteur, COMMENTAIRE = :commentaire WHERE ID_ENTREPRISE = :id', $info );

			if( $result == 0 ) {
				return false;
			}

		}
		/* Sinon on est dans le cas de l'ajout */
		else {
			/* Préparation du tableau associatif */
			$info = array( 'nom' => $_nom, 'desc' => $_desc, 'secteur' => $_secteur, 'commentaire' => $_com );

			/* Execution de la requête */
			$result = BD::executeModif( 'INSERT INTO ENTREPRISE( NOM, DESCRIPTION, SECTEUR, COMMENTAIRE) VALUES ( :nom, :desc, :secteur, :commentaire )', $info);

			if( $result == 0 ) {
				return false;
			}

			/* On récupère l'ID qui a été affecté */
			$_id = BD::GetConnection()->lastInsertId();
		}

		return $_id;
	}

	//****************  Getters & Setters  ******************//
	public function getId() {
		return $this->ID;
	}

	public function getNom() {
		return $this->NOM;
	}

	public function getDescription() {
		return $this->DESCRIPTION;
	}
    
	public function getSecteur() {
		return $this->SECTEUR;
	}

	public function getCommentaire() {
		return $this->COMMENTAIRE;
	}

	/**
	* Retourne un tableau avec tous les attributs
	* @return Un tableau avec les attributs
	*/
	public function toArrayObject() {
		$arrayEntr = array();
		$arrayEntr['id'] = intval($this->ID);
		$arrayEntr['nom'] = $this->NOM;
		$arrayEntr['description'] = $this->DESCRIPTION;
		$arrayEntr['secteur'] = $this->SECTEUR;
		$arrayEntr['commentaire'] = $this->COMMENTAIRE;

		return $arrayEntr;
	}
}

?>
