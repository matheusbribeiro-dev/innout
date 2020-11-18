<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">

    <!-- title -->
    <title>In N' Out</title>
</head>
<body>
    <form class="form-login" action="#" method="post">
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-travelling mr-2"></i>
                <span class="font-weight-light">In </span>
                <span class="font-weight-bold mx-1">N'</span>
                <span class="font-weight-light">Out</span>
                <i class="icofont-runner-alt-1 ml-2"></i>
            </div> 
            <div class="card-body">
                <?php include TEMPLATE_PATH . '/messages.php' ?>
                <!-- from email -->
                <div class="form-group">   
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email"
                        class="form-control"
                        value="<?=$email?>"
                        placeholder="Informe o e-mail" autofocus>
                </div>
                <!-- / from email -->

                <!-- from senha -->
                <div class="form-group">  
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password"
                        class="form-control"
                        placeholder="Informe a senha">
                </div>
                <!-- / from senha -->
            </div> 
            <div class="card-footer">
                <button class="btn btn-lg btn-primary ml-auto">Entrar</button>
            </div>
        </div>
    </form>
</body> 
</html>