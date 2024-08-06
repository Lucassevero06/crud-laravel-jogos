<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Olá Mundo!</title>
</head>
<body class="container-fluid">
    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center min-vh-100">
        <div class="w-100" style="max-width: 450px;">
            <form action="" method="post" class="shadow-lg p-3 mb-5 bg-body-tertiary rounded mx-auto w-100">
                @csrf
                <div class="row mb-3 w-100 mx-auto">
                    <h1 class="text-center">Fala seu lindu</h1>
                </div>
                <div class="row mb-3 w-100 mx-auto">
                    <input placeholder="Lucas" type="text" class="form-control" id="nome">
                </div>
                <div class="row mb-3 w-100 mx-auto">
                    <input placeholder="example@example.com" type="email" class="form-control" id="email">
                </div>
                <div class="row mb-3 w-100 mx-auto">
                    <input placeholder="1234" type="password" class="form-control" id="senha">
                </div>
                <button type="submit" class="btn btn-primary w-100 mx-auto">Sign in</button>
            </form>
        </div>
    </div>
</body>
</html>
