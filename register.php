<?php

require_once 'db.php';


if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    var_dump($_POST);
if($nom&&$password&&$email){
    $insertOneResult = $collection->insertOne([
        'name' => $nom,
        'email' => $email,
        'password' => $password,
    ]);
    printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
    var_dump($insertOneResult->getInsertedId());
    header('location:login.php');
    
}else{
    echo "remplissez tous les champs";
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
                    <form method="post">
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Nom </h6></label>
                        <input class="mb-4" type="text" name="nom" placeholder="Votre nom complet">
                    </div>
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Email </h6></label>
                        <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address">
                    </div>
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Mot de passe</h6></label>
                        <input type="password" name="password" placeholder="Enter password">
                    </div>
                    
                    <div class="row mb-3 px-3">
                        <button type="submit" class="btn btn-blue text-center" name="submit">Creer un compte</button>
                    </div>
                    <div class="row mb-4 px-3">
                        <small class="font-weight-bold">Vous avez deja un compte ? <a href="login.php" class="text-danger" >Connexion</a></small>
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