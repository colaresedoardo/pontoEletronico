<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <link rel="stylesheet" href="assets/css/comum.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/iconfont.min.css">
        <link rel="stylesheet" href="assets/css/login.css">
    <title>Document</title>
</head>
<body>


    <form class="form-login" action="" method="post">
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-travelling">
                
                </i>
                <span class="font-weight-light mr-2">In</span>
                <span class="font-weight-bold">N'</span>
                <span class="font-weight-light ml-2">OUT</span>
                <i class="icofont-runner-alt-1">
                
                </i>
            </div>
            <div class="card-body">
                <?php include(TEMPLATE_PATH.'/messages.php'); ?>
                <div class="form-group">
                    <label for="email">E-email</label>
                    <input type="email" name="email" id="email" class="form-control <?php echo $error['email'] ? 'is-invalid':'';?>"
                     value='<?= $email?>' placeholder="digite o email" autofocus>
                    <div class="invalid-feedback">
                         <?=$error['email']; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="senha">

                </div>
                
            </div>
            <div class="card-footer">
                    <button class="btn btn-lg btn-primary">Entrar</button>
                </div>
        </div>
    </form>

  
</body>
</html>