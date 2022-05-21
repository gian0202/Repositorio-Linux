>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="min-vh-100">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <div class="container mt-5 p-4 col-md-6" style="border-radius: 10px; background-color: #cfa9eb;">
        <h1>Formulário</h1>
        <hr>

        <form action="destino.php" method="POST">
            <div class="row">
                <div class="form-group mb-3 col-md-6">
                    <label for="titulo">Título da página:</label>
                    <input type="text" class="form-control" name="titulo">
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label for="corpo">Corpo:</label>
                    <textarea type="text" class="form-control" name="corpo"></textarea>
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label for="corpo">URL de imagem:</label>
                    <input type="url" class="form-control" name="urlImagem">
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label for="corpo">URL de link:</label>
                    <input type="url" class="form-control" name="urlLink">
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label for="corTexto">Cor do texto:</label>
                    <input type="color" class="form-control" name="corTexto">
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label for="corPagina">Cor da página:</label>
                    <input type="color" class="form-control" name="corPagina">
                </div>

            </div>

            <div class="row mt-3 d-flex justify-content-around">
                <button class="btn-primary mx-4 col-md-3">Cadastrar</button>
                <button class="btn-warning col-md-3">Limpar</button>
            </div>


        </form>
    </div>
</body>

</html>