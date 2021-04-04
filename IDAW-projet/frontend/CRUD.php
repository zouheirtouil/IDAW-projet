
     <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

            <title>tabletest</title>
        <style>
            body{ margin-top: 5em; }
            .table {
            margin-top: 100px;
            margin-bottom: 100px;
            }
        </style>
    </head>

 <body>
     
 <H1>Table des aliments</H1>

<div>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Nom de l'aliment</th>
                    <th scope="col">Type</th>
                    <th scope="col">Protéines (g/100g)</th>
                    <th scope="col">Glucides (g/100g)</th>
                    <th scope="col">Lipides (g/100g)</th>
                    <th scope="col">Sucre (g/100g)</th>
                    <th scope="col">Edit/Remove</th>
                 </tr>
            </thead>


            <tbody id="alimentsTableBody">
            </tbody>
        </table>
        <h1>Formulaire pour ajouter un aliment</h1>
        <form id="addAlimentForm" action="" onsubmit="onFormSubmit();">
            <div class="form-group row">
                <label for="inputNomAliment" class="col-sm-2 col-form-label">Nom de l'aliment</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputNomAliment" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputType" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputType" required="required">
                </div>
            </div>
  
            <div class="form-group row">
                <label for="inputProt" class="col-sm-2 col-form-label">Protéines(g/100g)</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputProt">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGluc" class="col-sm-2 col-form-label">Glucides (g/100g)</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputGluc">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputLip" class="col-sm-2 col-form-label">Lipides (g/100g)</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputLip">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputSuc" class="col-sm-2 col-form-label">Sucre (g/100g)</label>
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
            let urlbackend = "http://localhost/IDAW-projet/backend/";



            //Partie AJAX

            $(document).ready(function(){
                $.getJSON(urlbackend+"aliments.php", function(data){ 
                    aliments = data;
                    $.each(aliments, function(i, a){
                        let aliment = {};
                        aliment.nom = a.Nom;
                        aliment.type = a.Type; 
                        aliment.prot = a.Protéines;
                        aliment.gluc = a.Glucides;
                        aliment.lip = a.Lipides;
                        aliment.suc = a.Sucres;
                        addAliment(aliment);
                    });
                });
            });


            

            function sendAliment(aliment){
                $.ajax({
                        url: urlbackend+"addAliment.php",
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
                        url: urlbackend+"editAliment.php",
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
                        url: urlbackend+"deleteAliment.php",
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
                formValue(aliments[currentEditeAlimentId-1].Nom,
                        aliments[currentEditeAlimentId-1].Type,
                        aliments[currentEditeAlimentId-1].Proteines,
                        aliments[currentEditeAlimentId-1].Glucides,
                        aliments[currentEditeAlimentId-1].Lipides,
                        aliments[currentEditeAlimentId-1].Sucres,
                        
                    );
                
            }


            function remove(id){
                currentMaxId = currentMaxId - 1;
                aliments.splice(id,1);
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
                

                if (currentEditeAlimentId >= 0){
                        editAliment(newAliment);
                        ChangeAliment(newAliment);
                        currentAlimentId = -1;
                        formValue("","","","","","");
                    }
                    else{
                        aliments.push(newAliment);
                        addAliment(newAliment);
                        sendAliment(newAliment);
                        formValue("","","","","","");
                    }                    

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


                if (newAliment.id<50){
                    $("#aliments-"+newAliment.id).append
                        (`</tr>`)
                }       
                currentMaxId++;
            }
        

            function editAliment(newAliment){
                newAliment.id = currentEditeAlimentId;
                aliments[newAliment.id-1] = newAliment;
                $("#aliments-"+newAliment.id).empty();
                $("#aliments-"+newAliment.id).append(`<td> ${newAliment.nom}  </td> <td> 
                        ${newAliment.type}  </td> <td> 
                        ${newAliment.prot}  </td> <td> 
                        ${newAliment.gluc} </td> <td>
                        ${newAliment.lip}  </td> <td> 
                        ${newAliment.suc}  </td>`);
            }
           
            
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</div>
</body>   