<?php
 require_once "function.php";
require_once 'db.php';
$errors=[];
if(isset($_POST['submit'])){
    
    $email = sanitaze($_POST['email']);
    $password = sanitaze($_POST['password']);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email invalide";
    }

    if(empty($password)){
        $errors['password'] = "Champ obligatoire";
    }else if(mb_strlen($password)<6){
        $errors['password'] = "Doit avoir au moins 6 caractères";
    }
    if(empty($email)){
        $errors['email'] = "Champ obligatoire";
    }

    
    if(empty($errors)){
        $qry = array("email" => $email,"password" => $password);
        $result = $collection->findOne($qry);
        if(!empty($result)){
            header('location:index.php');
        }else{
            $errors['global']="Adresse email ou mot de passe invalide";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
   <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row">
                        <img src="https://i.imgur.com/CXQmsmF.png" class="logo">
                    </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                        <img src="https://i.imgur.com/uNGdWHi.png" class="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                       
                        
                    </div>
                    <div class="row px-3 mb-4">
                        <center><h6>Connexion</h6></center>
                                
                    </div>
                    <?= display_errors($errors, 'global')?>      
                   <form method="POST">
                   <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Email </h6></label>
                        <input class="mb-4" type="email" name="email" placeholder="Enter a valid email address">
                        <?= display_errors($errors, 'email')?>
                    </div>
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Mot de passe</h6></label>
                        <input type="password" name="password" placeholder="Enter password">
                        <?= display_errors($errors, 'password')?>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> 
                            <label for="chk1" class="custom-control-label text-sm">Se souvenir de moi</label>
                        </div>
                        <a href="#" class="ml-auto mb-0 text-sm">Mot de passe oublier ?</a>
                    </div>
                    <div class="row mb-3 px-3">
                        <button type="submit" class="btn btn-blue text-center" name="submit">Login</button>
                    </div>
                    <div class="row mb-4 px-3">
                        <small class="font-weight-bold">Vous n'avez pas de compte ? <a href="register.php" class="text-danger" >Cree un compte</a></small>
                    </div>
                   </form>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3">
                <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2024.</small>
                <div class="social-contact ml-4 ml-sm-auto">
                    <span class="fa fa-facebook mr-4 text-sm"></span>
                    <span class="fa fa-google-plus mr-4 text-sm"></span>
                    <span class="fa fa-linkedin mr-4 text-sm"></span>
                    <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
                </div>
            </div>
        </div>
    </div>
</div>
   </div> 
</body>
</html>