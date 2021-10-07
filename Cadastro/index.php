<!DOCTYPE html>
 <html lang="pt_BR">
 <head>
     <meta charset="UTF-8">
     <title>Cadastro Nome e CPF</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
     <style type="text/css">
         body{ font: 14px sans-serif; }
         .wrapper{
                width: 350px; 
                padding: 20px;
                margin: 30px auto;
                width: 350px;
                border-radius: 5%;
                background-color: blue;
                color: white;
                font-weight: bold;
             }
     </style>
 </head>
 <body>
     <div class="wrapper">
         <h2>Cadastro Nome e CPF</h2>
         <p>Favor inserir Nome e CPF.</p>
         <form action="cadastro_texto.php" method="post">
             <div class="form-group">
                 <label for="nome"> Nome:</label>
                 <input type="text" id ="nome" name="nome" class="form-control">
              
             </div>    
             <div class="form-group">
                 <label>CPF:</label>
                 <input type="number" name="CPF" id="cpf" class="form-control" >
            
             </div>
             <div class="form-group">
                 <input type="submit" class="btn btn-primary" value="Registrar">
             </div>
         </form>
     </div>    
 </body>
 </html>