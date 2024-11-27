<?php
include "database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <style>
        /* admin.css */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    color: #333;
}

.admin-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

header {
    background-color: #003366;
    color: #fff;
    padding: 20px;
    text-align: center;
}

header h1 {
    margin: 0;
    font-size: 24px;
}

header nav ul {
    list-style: none;
    padding: 0;
    margin: 10px 0 0;
    display: flex;
    justify-content: center;
}

header nav ul li {
    margin: 0 15px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
}

header nav ul li a:hover {
    text-decoration: underline;
}

.section {
    margin: 30px 0;
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.section h2 {
    margin-top: 0;
    color: #003366;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

table thead {
    background-color: #3e94a5;
    color: #fff;
}

table th, table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* table tr:hover {
    background-color: #f1f1f1;
} */

.btn {
    padding: 10px 15px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-weight: bold;
    margin-right: 5px;
}

.add-btn {
    background-color: #28a745;
    color: #fff;
}

/* .add-btn:hover {
    background-color: #218838;
} */

.edit-btn {
    background-color: #b3e8fa;
    color:#333;
}

.edit-btn:hover {
    background-color: #4099ed;
    color: #ddd;
}

.delete-btn {
    background-color: #f06c6c;
    color: #ddd;
}

.delete-btn:hover {
    background-color: #c82333;
    color: #ddd;
}
</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Organisio</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/pngtre.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Bienvenue sur Organisio</h5>
                                <h1 class="display-3 text-white animated slideInDown">Organisio, votre assistant scolaire numérique !</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Organisio est une plateforme conçue pour faciliter la gestion des devoirs et des tâches scolaires.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/pngtre.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Bienvenue sur Organisio</h5>
                                <h1 class="display-3 text-white animated slideInDown">Organisio, votre assistant scolaire numérique !</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Organisio est une plateforme conçue pour faciliter la gestion des devoirs et des tâches scolaires.</p>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="admin-container">
        <header style="background-color: #3e94a5;">
            <h1 style="background-color: #3e94a5;">Administration Organisio</h1>

        </header>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            <a href="#manage-teachers">Gérer les Professeurs</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            <a href="#manage-classes">Gérer les Classes</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Home Projects</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            <a href="#manage-teachers">Gérer les Professeurs</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Book Library</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            <a href="#manage-teachers">Gérer les Professeurs</a>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <main>
            
            <section id="manage-teachers" class="section">
                <h2>Gérer les Professeurs</h2>
                <?php
                    if (isset($_GET["msg"])) {
                    $msg = $_GET["msg"];
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    ' . $msg . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    }
                ?>
                <!-- <button class="btn add-btn" style="background-color: #3e94a5;">Ajouter un Professeur</button> -->
                <a href="add_prof.php" class="btn btn-dark mb-3" style="background-color: #3e94a5;">Ajouter un Professeur</a>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
class ProfManager
{
    private $conn;

    public function __construct($dbConnection)
    {
        $this->conn = $dbConnection;
    }

    public function getAllProfs()
    {
        $sql = "SELECT * FROM `prof`";
        $result = $this->conn->query($sql);
        $profs = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $profs[] = $row;
            }
        }
        return $profs;
    }
}

// Exemple d'utilisation :
$conn = new mysqli("localhost", "username", "password", "database"); // Remplacez par vos identifiants
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$profManager = new ProfManager($conn);
$profs = $profManager->getAllProfs();
?>

<table>
    <?php foreach ($profs as $prof): ?>
        <tr>
            <td><?php echo $prof["id"]; ?></td>
            <td><?php echo $prof["username"]; ?></td>
            <td><?php echo $prof["email"]; ?></td>
            <td><?php echo $prof["password"]; ?></td>
            <td><?php echo $prof["created_at"]; ?></td>
            <td>
                <a href="update.php?id=<?php echo $prof["id"]; ?>" class="btn edit-btn"><i>Modifier</i></a>
                <a href="delete.php?id=<?php echo $prof["id"]; ?>" class="btn delete-btn"><i>Supprimer</i></a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

                    </tbody>
                </table>
            </section>

            <section id="manage-classes" class="section">
                <h2>Gérer les Classes</h2>
                <button class="btn add-btn" style="background-color: #3e94a5;">Ajouter un Professeur</button>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom de la Classe</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Classe 6A</td>
                            <td>Classe des débutants</td>
                            <td>
                                <button class="btn edit-btn">Modifier</button>
                                <button class="btn delete-btn">Supprimer</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>