<?php
            require_once('config.php');
            try{
                $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query1 = 
                    "DELETE FROM Utilisateur
                     WHERE Login = ".$_POST['nom'];
                $dbco -> exec($query1);

            }
            
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
                
?>