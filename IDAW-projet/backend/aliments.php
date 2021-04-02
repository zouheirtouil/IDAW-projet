<?php
require_once('config.php');
try{
                $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

                $infosUtilisateur = $dbco->prepare("SELECT * FROM `aliments` 
                LIMIT 5");
                $infosUtilisateur->execute();
                

                $resultatinfosUtilisateur = $infosUtilisateur->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($resultatinfosUtilisateur);
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
            ?>

