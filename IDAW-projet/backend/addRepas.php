<?php
    require_once('config.php');
    try{
            $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query1 = "INSERT INTO repas(Date, Type, Email) 
            VALUES
            ( '$_POST[date]', '$_POST[type]', '$_POST[email]')
            ";
            
            $dbco -> exec($query1);

            
            $query2 = "INSERT INTO aliment(Nom) 
            VALUES
            ( '$_POST[aliment]')
            ";
            
            $dbco -> exec($query2);

            
            $query3 = "INSERT INTO consommation(Id_Aliment, Id_repas, Quantite) 
            VALUES
            ( '$_POST[id]', '$_POST[id]', '$_POST[qnt]')
            ";
            
            $dbco -> exec($query3);

            
        }
                
            catch(PDOException $e){
                    echo "Erreur : " . $e->getMessage();
                }
                
?>