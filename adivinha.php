<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Adivinha</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Jogo da Adivinhação</h1>

        <p>Adivinhe o endereço informado anteriormente</p>

        <form method="POST" action="form_endereco.php">
            <div class="mb-3">
                <label for="palpite" class="form-label">Seu palpite:</label>
                <input type="text" class="form-control" id="palpite" name="palpite" min="1" max="100" required>
            </div>

            <button type="submit" class="btn btn-primary">Enviar Palpite</button>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>