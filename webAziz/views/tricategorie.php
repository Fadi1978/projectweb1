<HTML>
	 <head><!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/gijgo.min.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!--::header part start::--> 
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="../img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="../index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../food_menu.html">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../chefs.html">Chefs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../try/views/afficherpanier.php">Panier</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../try/ajoutClient.html">S'inscrire</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="../blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="../blog.html">Blog</a>
                                        <a class="dropdown-item" href="../single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="../elements.html">Elements</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_btn">
                            <a href="#" class="single_page_btn d-none d-sm-block">book a tabel</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
<?PHP
include "../core/categorieC.php";
$categoriesC=new categorieC();
$listecategorie=$categoriesC->afficheOrderNom();

?>
<form method="post" action="recherchercategorie.php">
	<input type="text" name="recherche_id">
	<input type="submit" class="single_page_btn d-none d-sm-block" name="recherche" value="recherche">
</form>
<table border="1">
<tr>
<td>id_categorie</td>
<td>nom_categorie</td>
<td>description</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listecategorie as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_categorie']; ?></td>
	<td><?PHP echo $row['nom_categorie']; ?></td>
	<td><?PHP echo $row['description']; ?></td>

		
	<td><form method="POST" action="supprimerproduit.php">
	<input type="submit" class="single_page_btn d-none d-sm-block" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_categorie']; ?>" name="id_categorie">
	</form>
	</td>
	
	
	
	<td><a class="single_page_btn d-none d-sm-block" href="modifiercategorie.php?id=<?PHP echo $row['id_categorie']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>



