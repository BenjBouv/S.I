<?php
/***************************************
* Author : Sébastien Mériot	       *
* Date   : 27.03.2012                  *
* Description : Classe gestion l'auth- *
* entification des utilisateurs.       *
***************************************/

/* Considère que les sessions sont déjà initialisées */

inclure_fichier( 'commun', 'config.inc', 'php' );
inclure_fichier( 'commun', 'CAS',    'php' );
inclure_fichier( 'commun', 'bd.inc',     'php' );


class Authentification {

	/* Constantes partagées concernant le mode d'authentification */
	const AUTH_CAS 		= 1;	
	const AUTH_NORMAL	= 2;

	/* La même mais pour les indices de session */
	const S_AUTH_METHOD	= 'AUTH_METHOD';
	const S_IS_USER_AUTH	= 'IS_USER_AUTH';
	const S_USER_OBJ	= 'USER_OBJ';

	/* Code d'erreur */
	const ERR_OK		= 0;
	const ERR_ID_INVALIDE   = 1;
	const ERR_AMBIGUITE     = 2;
	const ERR_BD		= 3;


	/* Constructeur */
	public function __construct() {
		global $CONFIG;

		/* On fixe les paramètre du serveur CAS à interroger (contenus dans config.inc.php) */
		phpCAS::client( CAS_VERSION_2_0, $CONFIG['sso']['server'], $CONFIG['sso']['port'], $CONFIG['sso']['root'] );
		phpCAS::setNoCasServerValidation();
	}



	/* Force l'authentification par le CAS */
	public function authentificationCAS() {

		$_SESSION[self::S_AUTH_METHOD] = self::AUTH_CAS;
		phpCAS::forceAuthentication();
	}

	/**
	* Force l'authentification normale avec le couple login/passwd
	* $utilisateur : chaîne de caractère contenant l'utilisateur
	* $mdp : mot de passe codé en SHA1
	* @return ERR_OK si l'auth a réussi, ERR_ID_INVALIDE si les identifiants sont incorrectes, ERR_AMBIGUITE s'il y a plusieurs tuples identiques en base
	*/
	public function authentificationNormale( $utilisateur, $mdp ) {

		$_SESSION[self::S_AUTH_METHOD] = self::AUTH_NORMAL;

		/* Requête à la base de données pour essayer de trouver l'utilisateur */
		$result = BD::Prepare( 'SELECT COUNT(*) AS CPT FROM UTILISATEUR WHERE LOGIN = :login AND MDP = :passwd', 
			array( 'login' => $utilisateur, 'passwd' => $mdp ) );


		BD::MontrerErreur();

		/* On regarde que l'on a bien un objet et on fait la vérification */
		if( $result != null ) {
			return self::ERR_BD;
		}


		print_r( $result );
			

		if( $result['CPT'] == 1 )
			return self::ERR_OK;
		else if( $result['CPT'] > 1 )
			return self::ERR_AMBIGUITE;

		return self::ERR_ID_INVALIDE;
	}

	/**
	* Vérifie que l'utilisateur est bien authentifié (soit via le CAS, soit via l'auth classique)
	* @return True s'il l'est, false sinon
	*/
	public function isAuthentifie() {

		/* Test de la variable de session dans un premier temps */
		if( @$_SESSION[self::S_IS_USER_AUTH] == true ) {
			return true;
		}

		/* Si le test échoue, on regarde auprès du CAS au cas où */
		if( $_SESSION[self::S_AUTH_METHOD] == self::AUTH_CAS ) {
			if( phpCAS::isAuthenticated() == true ) {

				/* On fixe la variable de session pour éviter de redemander à CAS */
				$_SESSION[self::S_IS_USER_AUTH] = true;
				return true;
			}
		}

		return false;
	}


	/**
	* Force la déconnexion de l'utilisateur
	*/
	public function forcerDeconnexion() {

		/* On bascule le flag à faux */
		$_SESSION[self::S_IS_USER_AUTH] = false;
		$_SESSION[self::S_USER_OBJ]	= null;

		/* On demande à CAS de déconnecter l'utilisateur */
		if( @$_SESSION[self::S_AUTH_METHOD] == self::AUTH_CAS ) {
		        phpCAS::logoutWithUrl(  ); /* A améliorer */
		}
		else {
			/* On enlève le flag relatif au username */
		}
	}


	/**
	* Retourne l'objet utilisateur correspondant à l'utilisateur actuel ou null, s'il n'existe pas.
	*/
	public function getUtilisateur() {

		if( @$_SESSION[self::S_IS_USER_AUTH] == true )
			return $_SESSION[self::S_USER_OBJ];

		return null;
	}

};

?>