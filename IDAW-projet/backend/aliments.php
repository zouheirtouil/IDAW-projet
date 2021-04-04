<?php
require_once('config.php');
try{
                $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

                $infosAliment = $dbco->prepare("SELECT Nom, Type, Protéines,  Glucides,  Lipides,  Sucres FROM `Aliment`
                ");
                $infosAliment->execute();
                

                $resultatinfosAliment = $infosAliment->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($resultatinfosAliment);
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
            ?>