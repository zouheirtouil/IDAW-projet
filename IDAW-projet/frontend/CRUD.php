
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
            <title>tabletest</title>
        <style>
            body{ margin-top: 5em; }
            .table {
            margin-top: 100px;
            margin-bottom: 100px;
            }
        </style>
    </head>

    
<div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom de l'aliment</th>
                    <th scope="col">Type</th>
                    <th scope="col">Protéines (g/100g)</th>
                    <th scope="col">Glucides (g/100g)</th>
                    <th scope="col">Lipides (g/100g)</th>
                    <th scope="col">Sucre (g/100g)</th>
                 </tr>
            </thead>


            <tbody id="alimentsTableBody">
            </tbody>
        </table>

        <form id="addAlimentForm" action="" onsubmit="onFormSubmit();">
            <div class="form-group row">
                <label for="inputNomAliment" class="col-sm-2 col-form-label">Nom de l'aliment*</label>
                <div class="col-sm-3">
                <input type="text" class="form-control" id="inputNomAliment" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputType" class="col-sm-2 col-form-label">Type*</label>
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
                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                </div>
            </div>
        </form>






        <script>


            let currentMaxId = 1; 
            let aliments = [];
            let currentEditeAlimentId =-1;
            let urlbackend = "http://localhost/IDAW_projet/backend/";



            //Partie AJAX

            $(document).ready(function(){
                $.getJSON(urlbackend+"aliments.php", function(data){ 
                    aliments = data;
                    $.each(aliments, function(i, a){
                        let aliment = {};
                        aliment.nom = a.Nom;
                        aliment.type = a.Type; 
                        aliment.proteines = a.Proteines;
                        aliment.glucides = a.Glucides;
                        aliment.lipides = a.Lipides;
                        aliment.sucre = a.Sucre;
                        addAliment(aliment);
                    });
                });
            });


            



            function formValue(nom,type,prot,gluc,lip,suc){
                $("#inputNomAliment").val(nom);
                $("#inputType").val(type);
                $("#inputProt").val(prot);
                $("#inputGluc").val(gluc);
                $("#inputLip").val(lip);
                $("#inputSuc").val(suc);
            }


            



            function Edit(Id){
                currentEditedAlimentId = Id;
                formValue(aliments[currentEditedAlimentId-1].Nom,
                        aliments[currentEditedAlimentId-1].Type,
                        aliments[currentEditedAlimentId-1].Proteines,
                        aliments[currentEditedAlimentId-1].Glucides,
                        aliments[currentEditedAlimentId-1].Lipides,
                        aliments[currentEditedAlimentId-1].Sucre,
                        
                    );
                
            }


            function remove(Id){
                currentMaxId = currentMaxId - 1;
                aliments.c(Id,1);
                $("#aliments-"+Id).empty();
                //AjaxSupprimeAliment(Id);
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
                //newStudent.Id = studentMaxId;
                //studentMaxId++;

                aliments.push(newAliment);
                
                ajouteAliment(newAliment);
                
                formValue("","","","","","");
                       
                    
            }


            function addAliment(newAliment){
                newAliment.id = currentMaxId;
                $("#alimentsTableBody").append
                        (`<tr id=aliments-${newAliment.id}> 
                        <td> ${newAliment.nom}  </td> <td> 
                        ${newAliment.type}  </td> <td> 
                        ${newAliment.pro}  </td> <td> 
                        ${newAliment.gluc} </td> <td>
                        ${newAliment.lip}  </td> <td> 
                        ${newAliment.suc}  </td> <td>  `)
                if (newFood.id<50){
                    $("#aliments-"+newAliment.id).append
                        (`</tr>`)
                }
                else{
                    $("#aliments-"+newAliment.id).append(`<button onclick="edit(${newAliment.id})" style="color:blue">Edit</button>  <button onclick="remove(${newFood.id})" style="color:blue">Remove</button> </td> </tr>`);
                }         
                currentMaxId++;
            }
        

           
            
        </script>


</div>