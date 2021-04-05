<?php
    require_once('config.php');
    try{
            $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query1 = "INSERT INTO Utilisateur(Login , Nom, Prenom, Age, Sexe, Niveau_sportif) 
            VALUES
            ( '$_POST[login]', '$_POST[nom]','$_POST[prenom]','$_POST[age]','$_POST[sexe]','$_POST[niveau]')
            ";
            
            $dbco -> exec($query1);
            
        }
                
            catch(PDOException $e){
                    echo "Erreur : " . $e->getMessage();
                }
                
?>