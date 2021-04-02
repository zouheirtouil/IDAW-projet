<?php
require_once('config.php');
try{
                $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

                $infosUtilisateur = $dbco->prepare("SELECT Nom, Type, Pro.Ratio AS Proteines, Glu.Ratio As Glucides, Lip.Ratio As Lipides, Suc.Ratio As Sucres FROM `aliments` 
                LEFT JOIN a_pour_apport AS Pro ON aliments.ID_aliments = Pro.ID_aliments AND Pro.ID_apport=1
                LEFT JOIN a_pour_apport AS Glu ON aliments.ID_aliments = Glu.ID_aliments AND Glu.ID_apport=2
                LEFT JOIN a_pour_apport AS Lip ON aliments.ID_aliments = Lip.ID_aliments AND Lip.ID_apport=3
                LEFT JOIN a_pour_apport AS Suc ON aliments.ID_aliments = Suc.ID_aliments AND Suc.ID_apport=4
                ");
                $infosUtilisateur->execute();
                

                $resultatinfosUtilisateur = $infosUtilisateur->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($resultatinfosUtilisateur);
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
            ?>