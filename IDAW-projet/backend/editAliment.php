<?php
            require_once('config.php');

            try{
                $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                
                $query2 = "UPDATE Aliment
                           SET Protéines = '$_POST[prot]'
                           WHERE ID_Aliment = '$_POST[id]' " ;

                $dbco -> exec($query2);
                
                $query3 = "UPDATE Aliment
                           SET  Glucides = '$_POST[gluc]'
                           WHERE ID_Aliment = '$_POST[id]' " ;
                $dbco -> exec($query3);
                
                $query4 = "UPDATE Aliment
                           SET Lipides = '$_POST[lip]'
                           WHERE ID_Aliment= '$_POST[id]' " ;
                $dbco -> exec($query4);
                
                $query5 = "UPDATE Aliment
                           SET Sucres = '$_POST[suc]'
                           WHERE ID_Aliment = '$_POST[id]' " ;
                $dbco -> exec($query5);
                

                
                $query13 = "UPDATE Aliment
                           SET Nom = '$_POST[nom]' , Type = '$_POST[type]'
                           WHERE ID_Aliment = '$_POST[id]'" ;
                $dbco -> exec($query13);

                
            }
            
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
                
?>