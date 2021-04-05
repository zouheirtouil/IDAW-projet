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
                 </tr>
            </thead>


            <tbody id="utilisateursTableBody">
            </tbody>
        </table>
        <h1>Formulaire pour ajouter  un utilisateur</h1>
        <form  id="addUtilisateurForm" action="" onsubmit="onFormSubmit();">
            <div class="form-group row">
                <label for="inputLogin" class="col-sm-2 col-form-label">Login Utilisateur</label>
                <div class="col-sm-3">
                <input type="email" class="form-control" id="inputLogin" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNom" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputNom" required="required">
                </div>
            </div>
  
            <div class="form-group row">
                <label for="inputPrenom" class="col-sm-2 col-form-label">Prenom</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputPrenom">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAge" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-3">
                <input type="number" class="form-control" id="inputAge" min="1" max="100">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputSexe" class="col-sm-2 col-form-label">Sexe</label>
                <div class="col-sm-3">
                <select type="text" class="form-control" id="inputSexe">
                <option value="">--Please choose an option--</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                    <option value="Autre">Autre</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputNiveau_sportif" class="col-sm-2 col-form-label">Niveau_sportif</label>
                <div class="col-sm-3">
                <select type="text" class="form-control" id="inputNiveau_sportif">
                <option value="">--Please choose an option--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
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
            let utilisateurs = [];
            let urlbackend = "http://localhost/IDAW-projet/backend/";



            //Partie AJAX

            $(document).ready(function(){
                $.getJSON(urlbackend+"utilisateurs.php", function(data){ 
                    utilisateurs = data;
                    $.each(utilisateurs, function(i, a){
                        let utilisateur = {};
                        utilisateur.login = a.Login;
                        utilisateur.nom = a.Nom; 
                        utilisateur.prenom = a.Prenom;
                        utilisateur.age = a.Age;
                        utilisateur.sexe = a.Sexe;
                        utilisateur.niveau = a.Niveau_sportif;
                        addUtilisateur(utilisateur);
                    });
                });
            });


            

            function sendUtilisateur(utilisateur){
                $.ajax({
                        url: urlbackend+"addUtilisateur.php",
                        method: "POST",
                        dataType : "json",
                        data : utilisateur
                    })
                    .always(function(response){
                        console.log(response);
                    });
            }
            
        



            function formValue(login,nom,prenom,age,sexe,niveau){
                $("#inputLogin").val(login);
                $("#inputNom").val(nom);
                $("#inputPrenom").val(prenom);
                $("#inputAge").val(age);
                $("#inputSexe").val(sexe);
                $("#inputNiveau_sportif").val(niveau);
            }

            function onFormSubmit() {
                // prevent the form to be sent to the server
                event.preventDefault();

                let newUtilisateur = {};

                newUtilisateur.login = $("#inputLogin").val();
                newUtilisateur.nom = $("#inputNom").val();
                newUtilisateur.prenom = $("#inputPrenom").val();
                newUtilisateur.age = $("#inputAge").val();
                newUtilisateur.sexe = $("#inputSexe").val();
                newUtilisateur.niveau = $("#inputNiveau_sportif").val();
                
                   
                        utilisateurs.push(newUtilisateur);
                        addUtilisateur(newUtilisateur);
                        sendUtilisateur(newUtilisateur);
                        formValue("","","","","","");
                        window.location.reload();            

            }


            function addUtilisateur(newUtilisateur){
                newUtilisateur.id = currentMaxId;
                $("#utilisateursTableBody").append(`
                        <tr scope="row"> 
                            <td> ${newUtilisateur.login}  </td> 
                            <td> ${newUtilisateur.nom}  </td>  
                            <td> ${newUtilisateur.prenom}  </td>  
                            <td> ${newUtilisateur.age} </td> 
                            <td> ${newUtilisateur.sexe}  </td>  
                            <td> ${newUtilisateur.niveau}  </td> 
                        `)


                if (newUtilisateur.id<19){
                    $("#aliments-"+newUtilisateur.id).append
                        (`</tr>`)
                }       
                currentMaxId++;
            }
        

            
           
            
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</div>
</body>