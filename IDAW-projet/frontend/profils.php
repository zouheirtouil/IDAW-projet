
<H1>Table des Utilisateurs</H1>

<div>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Login</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom </th>
                    <th scope="col">Age </th>
                    <th scope="col">Sexe </th>
                    <th scope="col">Niveau_sportif </th>
                    <th scope="col">Edit/Remove</th>
                 </tr>
            </thead>


            <tbody id="alimentsTableBody">
            </tbody>
        </table>
        <h1>Formulaire pour ajouter  un utilisateur</h1>
        <form id="addAlimentForm" action="" onsubmit="onFormSubmit();">
            <div class="form-group row">
                <label for="inputNomAliment" class="col-sm-2 col-form-label">Login Utilisateur</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputNomAliment" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputType" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputType" required="required">
                </div>
            </div>
  
            <div class="form-group row">
                <label for="inputProt" class="col-sm-2 col-form-label">Prenom</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputProt">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGluc" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputGluc">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputLip" class="col-sm-2 col-form-label">Sexe</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputLip">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputSuc" class="col-sm-2 col-form-label">Niveau_sportif</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputSuc">
                </div>
            </div>


            <div class="form-group row">
                <span class="col-sm-2"></span>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary form-control">Envoyer</button>
                </div>
            </div>
        </form>






        <script>


            let currentMaxId = 1; 
            let aliments = [];
            let currentEditeAlimentId =-1;
            let urlbackend = "http://localhost:8888/IDAW-projet/IDAW-projet/backend/";



            //Partie AJAX

            $(document).ready(function(){
                $.getJSON(urlbackend+"utilisateurs.php", function(data){ 
                    aliments = data;
                    $.each(aliments, function(i, a){
                        let aliment = {};
                        aliment.nom = a.Login;
                        aliment.type = a.Nom; 
                        aliment.prot = a.Prenom;
                        aliment.gluc = a.Age;
                        aliment.lip = a.Sexe;
                        aliment.suc = a.Niveau_sportif;
                        addAliment(aliment);
                    });
                });
            });


            

            function sendAliment(aliment){
                $.ajax({
                        url: urlbackend+"addUtilisateur.php",
                        method: "POST",
                        dataType : "json",
                        data : aliment
                    })
                    .always(function(response){
                        console.log(response);
                    });
            }
            
            function DeleteAliment(id){
                $.ajax({
                        url: urlbackend+"deleteUtilisateur.php",
                        method: "POST",
                        dataType : "json",
                        data : {'id': id}
                    })
                    .always(function(response){
                        console.log(response);
                    });
            }



            function formValue(nom,type,prot,gluc,lip,suc){
                $("#inputNomAliment").val(nom);
                $("#inputType").val(type);
                $("#inputProt").val(prot);
                $("#inputGluc").val(gluc);
                $("#inputLip").val(lip);
                $("#inputSuc").val(suc);
            }

            function Edit(id){
                currentEditeAlimentId = id;
                formValue(aliments[currentEditeAlimentId-1].Login,
                        aliments[currentEditeAlimentId-1].Nom,
                        aliments[currentEditeAlimentId-1].Prenom,
                        aliments[currentEditeAlimentId-1].Age,
                        aliments[currentEditeAlimentId-1].Sexe,
                        aliments[currentEditeAlimentId-1].Niveau_sportif,
                        
                    );
                
            }

            function remove(id){
                $("#aliments-"+id).empty();
                DeleteAliment(id);
            }

            function onFormSubmit() {
                // prevent the form to be sent to the server
                event.preventDefault();

                let newAliment = {};

                newAliment.nom = $("#inputNomAliment").val();
                newAliment.type = $("#inputType").val();
                newAliment.prot = $("#inputProt").val();
                newAliment.gluc = $("#inputGluc").val();
                newAliment.lip = $("#inputLip").val();
                newAliment.suc = $("#inputSuc").val();
                
                   
                        aliments.push(newAliment);
                        addAliment(newAliment);
                        sendAliment(newAliment);
                        formValue("","","","","","");
                                     

            }


            function addAliment(newAliment){
                newAliment.id = currentMaxId;
                $("#alimentsTableBody").append(`
                        <tr scope="row"> 
                            <td> ${newAliment.nom}  </td> 
                            <td> ${newAliment.type}  </td>  
                            <td> ${newAliment.prot}  </td>  
                            <td> ${newAliment.gluc} </td> 
                            <td> ${newAliment.lip}  </td>  
                            <td> ${newAliment.suc}  </td>
                            <td><button onclick="Edit(${newAliment.id})" style="color:blue">Edit</button> <button onclick="remove(${newAliment.id})" style="color:blue">Remove</button> </td> 
                        `)


                if (newAliment.id<19){
                    $("#aliments-"+newAliment.id).append
                        (`</tr>`)
                }       
                currentMaxId++;
            }
        

            
           
            
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</div>
</body>