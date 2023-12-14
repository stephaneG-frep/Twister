<?php 
    
    class UtilisateursManager
    {

        private $bddPDO;

// constructeur de connexion a la base de donnees
    public function __construct(PDO $bddPDO)
        {
            $this->bddPDO = $bddPDO;
        }
//fonction d'insertion a la bdd
    public function inserer(Utilisateurs $utilisateur)
    {
        $requete = $this->bddPDO->prepare('INSERT INTO 
        utilisateurs(nom, prenom, tel, mail) VALUES
        (:nom, :prenom, :tel, :mail)');
        $requete->bindvalue(':nom', $utilisateur->getNom());
        $requete->bindvalue(':prenom', $utilisateur->getPrenom());
        $requete->bindvalue(':tel', $utilisateur->getTel());
        $requete->bindvalue(':mail', $utilisateur->getMail());

        $requete->execute();
    }








    }












?>