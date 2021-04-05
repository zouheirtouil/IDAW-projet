
<H1>Journale des Repsas</H1>

<div>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Email </th>
                    <th scope="col">Aliment</th>
                    <th scope="col">Quantite</th>
                    <th scope="col">Edit/Remove</th>
                 </tr>
            </thead>


        <tbody id="RepasTableBody">
        </tbody>

        </table>
        <h1>Formulaire pour ajouter  un Repas</h1>
        <form id="addRepasForm" action="" onsubmit="onFormSubmit();">
            <div class="form-group row">
                <label for="inputDateRepas" class="col-sm-2 col-form-label">Date</label>
                <div class="col-sm-3">
                <input type="date" class="form-control" id="inputDateRepas" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputType" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-3">
                <select type="text" class="form-control" id="inputType" required="required">
                    <option value="">--Please choose an option--</option>
                    <option value="Petit Dejouner">Petit Dejouner</option>
                    <option value="Dejouner">Dejouner</option>
                    <option value="Gouter">Gouter</option>
                    <option value="Dinner">Dinner</option>
                    <option value="Autre">Autre</option>
                </select>
                </div>
            </div>
  

            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputEmail">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAliment" class="col-sm-2 col-form-label">Aliment</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputAliment">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputQuantite" class="col-sm-2 col-form-label">Quantite</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputQuantite">
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
            let repas = [];
            let currentEditeAlimentId =-1;
            let urlbackend = "http://localhost/IDAW-projet/backend/";



            //Partie AJAX

            $(document).ready(function(){
                $.getJSON(urlbackend+"repas.php", function(data){ 
                    repas = data;
                    $.each(repas, function(i, a){
                        let aliment = {};
                        aliment.date = a.Date;
                        aliment.type = a.Type; 
                        aliment.email = a.Email;
                        aliment.aliment = a.Aliment;
                        aliment.qnt = a.Quantite;
                        addAliment(aliment);
                    });
                });
            });



            function sendAliment(aliment){
                $.ajax({
                        url: urlbackend+"addRepas.php",
                        method: "POST",
                        dataType : "json",
                        data : aliment
                    })
                    .always(function(response){
                        console.log(response);
                    });
            }
            function ChangeAliment(aliment){
                $.ajax({
                        url: urlbackend+"editRepas.php",
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
                        url: urlbackend+"deletRepas.php",
                        method: "POST",
                        dataType : "json",
                        data : {'id': id}
                    })
                    .always(function(response){
                        console.log(response);
                    });
            }



            function formValue(date,type,email,aliment,qnt){
                $("inputDateRepas").val(date);
                $("#inputType").val(type);
                $("#inputEmail").val(email);
                $("#inputAliment").val(aliment);
                $("#inputQuantite").val(qnt);
            }

            function Edit(id){
                currentEditeAlimentId = id;
                formValue(repas[currentEditeAlimentId-1].Date,
                        repas[currentEditeAlimentId-1].Type,
                        repas[currentEditeAlimentId-1].Email,
                        repas[currentEditeAlimentId-1].Aliment,
                        repas[currentEditeAlimentId-1].Quantite,
                        
                    );
                
            }

            function remove(id){
                $("#repas-"+id).empty();
                DeleteAliment(id);
            }



            function onFormSubmit() {
                // prevent the form to be sent to the server
                event.preventDefault();

                let newAliment = {};

                newAliment.date = $("#inputDateRepas").val();
                newAliment.type = $("#inputType").val();
                newAliment.email = $("#inputEmail").val();
                newAliment.aliment = $("#inputAliment").val();
                newAliment.qnt = $("#inputQuantite").val();

                
                if (currentEditeAlimentId >= 0){
                        editAliment(newAliment);
                        ChangeAliment(newAliment);
                        currentAlimentId = -1;
                        formValue("","","","","");
                    }
                    else{
                        repas.push(newAliment);
                        addAliment(newAliment);
                        sendAliment(newAliment);
                        formValue("","","","","");
                    }    
                                     

            }


            function addAliment(newAliment){
                newAliment.id = currentMaxId;
                $("#RepasTableBody").append(`
                        <tr scope="row"> 
                            <td> ${newAliment.date}  </td> 
                            <td> ${newAliment.type}  </td>  
                            <td> ${newAliment.email}  </td> 
                            <td> ${newAliment.aliment} </td> 
                            <td> ${newAliment.qnt}  </td>
                            <td><button onclick="Edit(${newAliment.id})" style="color:blue">Edit</button> <button onclick="remove(${newAliment.id})" style="color:blue">Remove</button> </td> 
                        `)


                if (newAliment.id<19){
                    $("#repas-"+newAliment.id).append
                        (`</tr>`)
                }       
                currentMaxId++;
            }


            function editAliment(newAliment){
                newAliment.id = currentEditeAlimentId;
                repas[newAliment.id-1] = newAliment;
                $("#repas-"+newAliment.id).empty();
                $("#repas-"+newAliment.id).append(`<td> 
                        ${newAliment.date}  </td> <td> 
                        ${newAliment.type}  </td> <td> 
                        ${newAliment.email}  </td> <td> 
                        ${newAliment.aliment} </td> <td>
                        ${newAliment.qnt}  </td>`);
            }
           
        

            
           
            
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</div>
</body>