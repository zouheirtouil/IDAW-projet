<?php
    require_once('config.php');
    try{
            $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query1 = "INSERT INTO Aliment(ID_Aliment, Nom, Type, Protéines, Glucides, Lipides, Sucres) 
            VALUES
            ('$_POST[id]', '$_POST[nom]', '$_POST[type]','$_POST[prot]','$_POST[gluc]','$_POST[lip]','$_POST[suc]')
            ";
            
            $dbco -> exec($query1);
            
        }
                
            catch(PDOException $e){
                    echo "Erreur : " . $e->getMessage();
                }
                
?>