<?php

require_once __DIR__ . '/config.php';

// on verifie que toutes les constantes sont bien definies

if (
    !defined('DB_HOST') || 
    !defined('DB_NAME') || 
    !defined('DB_USER') || 
    !defined('DB_PASS') || 
    !defined('DB_PORT') || 
    !defined('DB_CHARSET')
    ) {
    throw new Exception('Configuration de base de donnees incomplte. Verifier le fichier config.php');
}

/**
 * Connexion a la base de donees: design pattern "singleton"
 * @return PDO|false
 */
function getDbConnection(){
    static $pdo = null;

    if ($pdo === null){
        try {
            $dsn = 'mysql:host='. DB_HOST .';port='. DB_PORT .';dbname='. DB_NAME .';charset='. DB_CHARSET;
            $pdo = new PDO($dsn, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gestion des erreurs
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // mode recuperation des data (tableau associatif)
                PDO::ATTR_EMULATE_PREPARES => false, // desactive les emulations de requetes preparees
            ]);
        
        } catch (PDOException $e) {
            error_log('Erreur de connexion a la base de donnees : ' . $e->getMessage());
            return false;
        }
    }
    return $pdo;
}
?>