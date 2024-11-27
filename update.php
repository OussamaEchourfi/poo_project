<?php
include "database.php";
public function updateProfile($id, $username, $email, $password) {
    $stmt = $this->conn->prepare("UPDATE prof SET username=?, email=?, password=? WHERE id=?");
    $stmt->bind_param("sssi", $username, $email, $password, $id);

    if ($stmt->execute()) {
        return true;
    } else {
        return $stmt->error;
    }
}

// Vérification des paramètres et soumission du formulaire
if (isset($_GET["id"]) && isset($_POST["submit"])) {
$id = $_GET["id"];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Créer une instance de la classe Database
$db = new Database();

// Appeler la méthode pour mettre à jour le profil
$result = $db->updateProfile($id, $username, $email, $password);

// Vérifier le résultat
if ($result === true) {
    header("Location: admin.php?msg=Record updated successfully");
    exit();
} else {
    echo "Failed: " . $result;
}

// Fermer la connexion
$db->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - add prof</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="" src="img/pngtre.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <!-- <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Bienvenue sur Organisio</h5>
                                <h1 class="display-3 text-white animated slideInDown">Organisio, votre assistant scolaire numérique !</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Organisio est une plateforme conçue pour faciliter la gestion des devoirs et des tâches scolaires.</p>
                                <a href="login_admin.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">JOIN ADMINI</a>
                                <a href="signin_prof.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">JOIN PROFESSEUR</a>
                            </div>
                        </div>
                    </div> -->
                    <div class="container d-flex justify-content-center">
                    <form action="" method="post" style="width:50vw; min-width:300px;">
                    <h1 class="display-3 text-white animated slideInDown">Organisio, votre assistant scolaire numérique !</h1>
                    <h5 style="color: #3e94a5;">modifier professeur : <?php echo $id; ?></h5>


               <div class="col">
                  <label style="color: white;" class="form-label">userName:</label>
                  <input style="color: clack;" type="text" class="form-control" name="username" placeholder="last name">
               </div>

            <div class="mb-3">
               <label style="color: white;" class="form-label">Email:</label>
               <input style="color: black;" type="email" class="form-control" name="email" placeholder="EMAIL">
            </div>
            <div class="row mb-3">
               <div class="col">
                  <label style="color: white;"; class="form-label">Password:</label>
                  <input style="color: black;"; type="text" class="form-control" name="password" placeholder="password">
               </div>
            </div>
            

            <div>
               <button style="background-color: #3e94a5;" type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="admin.php" class="btn btn-danger">Cancel</a>
            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


 


    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>