<?php
            require_once('config.php');
            try{
                $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                
                $query3 = 
                "DELETE FROM consommation
                WHERE ID_repas = ".$_POST['id'];
            $dbco -> exec($query3);
            
                $query1 = 
                    "DELETE FROM Aliment
                     WHERE ID_Aliment = ".$_POST['id'];
                $dbco -> exec($query1);


                $query2 = 
                    "DELETE FROM repas
                    WHERE ID_repas = ".$_POST['id'];
                $dbco -> exec($query2);


            }
            
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
                
?>