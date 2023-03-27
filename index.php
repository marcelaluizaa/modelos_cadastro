<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Cadastro-Modelo</title>
    </head>
    <body>
        <div class="container">
            
            <h1>Cadastro-Modelo</h1>
            <form action="recebidos.php" method="get">
                <div class="mb-3">
                    
                    <label for="bt_nome">Nome:</label>
                    <input type="text" name="bt_nome">
                </div>
                <div class="mb-3">               
                    <label for="bt_endereco">Endereço:</label>
                    <input type="text"name="bt_endereco">
                </div>
                <div class="mb-3">                
                    <label for="bt_estado">Estado:</label>
                    <input type="text" name="bt_estado">
                </div>
                <div class="mb-3">          
                    <label for="bt_cidade">Cidade:</label>
                    <input type="text"name="bt_cidade">
                </div>
                <div class="mb-3">
                    <label for="bt_pais">País:</label>
                    <input type="text"name="bt_pais">
                </div>
                <div class="mb-3">
                <input type="submit" class="btn btn-success">
                <button type="button" class="btn btn-danger">Limpar</button>
                </div>
            </form>
        
        </div>
    </body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>