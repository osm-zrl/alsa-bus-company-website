<?php
    $ligne = $_GET['ligne'];
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/c1525e6996.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="img/favicon.ico" rel="icon" />
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ligne <?php echo $ligne;?> Alsa</title>
</head>
<!-- color palette:
#0A2647
#144272
#205295
#2C74B3
-->
<body>
    <header class="sticky-top">
        <div class="top-header">
            <div id="logoarea" style="margin: 0 1rem;" class="container">
                <a style="text-decoration:none;" id="logos" class="navbar-brand text-white" href="">
                    <img src="img/logo-alsa-blanco.svg" alt="">
                    <h1>AGADIR</h1>
                </a>
            </div>
        </div class="top-header">
        <div style="padding: 0; background-color: rgb(44, 116, 179);" class="navbar navbar-expand">
            <div style=" height: 100%; padding: 0 20px;">
                <ul  class="navbar-nav nav-pills">
                    <li style="border-bottom: 3px solid white;" class="nav-item"><a href="index.html" class="nav-link"><i class="icon fa-solid fa-house"></i></a></li>
                    <li class="nav-item"><a href="404.html" class="nav-link">à propos de nous</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="404.html" role="button" aria-expanded="false">LES Villes</a>
                        <ul style="border-radius: 0px; background-color: rgb(44, 116, 179);" class="dropdown-menu">
                          <li><a  class="dropdown-item" href="404.html">Agadir</a></li>
                          <li><a class="dropdown-item" href="404.html">Khouribga</a></li>
                          <li><a class="dropdown-item" href="404.html">Marrakech</a></li>
                          <li><a class="dropdown-item" href="404.html" >Tanger</a></li>
                          <li><a class="dropdown-item" href="404.html">Rabat</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="404.html" class="nav-link">Carte IKHLASS</a></li>
                    <li class="nav-item"><a href="404.html" class="nav-link">Carte etudiant</a></li>
                </ul>
            </div>
    
        </div>
    </header>
    <main>
        <div style="padding: 3rem 0 2rem 0;" class="container">
            <?php
            echo "<h2>Ligne ".$ligne."</h2>";
            ?>
            <div style="width: 100%; height:100%; margin: 4% 0 ; " class="table-div container-xl">
                <table id="info-table" class="table-responsive">
                    <tr>
                        <th>nombre</th>
                        <th>destinations</th>
                        <th>prix ticket</th>
                        <th>depart du premier bus</th>
                        <th>depart du dernier bus</th>
                    </tr>
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "bus_ligne");
                        if (isset($ligne)) {
                            $query = "SELECT * FROM lignes WHERE id='$ligne'";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['distination']; ?></td>
                                    <td><?php echo $row['cost']; ?> DH</td>
                                    <td><?php echo $row['first_bus']; ?></td>
                                    <td><?php echo $row['last_bus']; ?></td>
                                </tr>
                                <?php
                            }
                        }
                    ?>
                    
                </table>
                
            </div>
        </div>
    </main>
    <footer>
        <div id="footer_p1">
            <div style="padding-top: 3%;" class="container">
                <p id="footer_p1_p1">Service Client</p>
                <p id="footer_p1_p2">Si vous avez des questions, suggestions ou réclamations, n'hésitez pas à nous contacter</p>
                <a id="contact-us" href="#">Contact</a>
            </div>
        </div>
        <div id="footer_p2">
            <div id="footer_p2_p1L" style="display: flex; flex-direction: row; justify-content: space-between; " class="grid container">
                <div class="footer_info_holder g-col-6">
                    <p>Liens Rapides</p>
                    <a href="">Qui sommes-nous?</a>
                    <a href="">Formation</a>
                    <a href="">Sécurité</a>
                    <a href="">Activité sociale</a>
                    <a href="">Emplois et carrières</a>
                    <a href="">Technologie</a>
                    <a href="">ISOS</a>
                </div>
                <div class="footer_info_holder g-col-6">
                    <p>Autres villes</p>
                    <a href="">Khouribga</a>
                    <a href="">Marrakech</a>
                    <a href="">Tanger</a>
                    <a href="">Rabat</a>
                </div>
                <div class="footer_info_holder g-col-6">
                    <p>Prestations de services</p>
                    <a href="">Carte d'étudiant</a>
                    <a href="">Carte Ikhlas</a>
                    <a href="">Objects perdus</a>
                    <a href="">Suggestions</a>
                </div>
                <div class="footer_info_holder g-col-6">
                    <p>Contactez-nous!</p>
                    <p style="color: rgb(189, 189, 189); font-size:unset;">Adresse : E21 Avenue Ibn Lhaitame <br>Dcheira El Jihadia 80000</p>
                    <a href="mailto: attcliente@alsa.ma">Mail : attcliente@alsa.ma</a>
                    <p style="color: rgb(189, 189, 189); font-size:unset;">Tel : 05 28 32 18 45</p>    
                </div>
            </div>
            <div id="footer_p2_p1A">
                <div class="accordion" style="border-radius: 0;" id="accordionExample">
                    <div class="accordion-item" >
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Liens Rapides
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <a href="">Qui sommes-nous?</a>
                            <a href="">Formation</a>
                            <a href="">Sécurité</a>
                            <a href="">Activité sociale</a>
                            <a href="">Emplois et carrières</a>
                            <a href="">Technologie</a>
                            <a href="">ISOS</a> 
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Autres villes
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <a href="">Khouribga</a>
                            <a href="">Marrakech</a>
                            <a href="">Tanger</a>
                            <a href="">Rabat</a>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Prestations de services
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <a href="">Carte d'étudiant</a>
                            <a href="">Carte Ikhlas</a>
                            <a href="">Objects perdus</a>
                            <a href="">Suggestions</a>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Prestations de services
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <a href="">Carte d'étudiant</a>
                              <a href="">Carte Ikhlas</a>
                              <a href="">Objects perdus</a>
                              <a href="">Suggestions</a>
                          </div>
                        </div>
                      </div>
                    
                  </div>
            </div>
        </div>
        <div id="footer_p3">
            <div style="display: flex;
            flex-direction: row;
            justify-content: space-between;" class="container">
                <p>Alsa Maroc © 2019</p>
                <p>OSM_ZRL</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
<style>
    
    main{
        height: max-content;
    }
    #info-table{
        border-collapse: collapse;
        margin:0 auto;
    }
    
    th{
        background-color: #205295;
        color: white;
        text-align: center;
        border:2px solid lightgrey;
    }
    td{
        background-color: white;
        color: gray;
        text-align: center;
        border:2px solid lightgrey;

    }
    main h2{
        font-size:4vw;
    }
    @media screen and (max-width:630px){
        main h2{
            font-size: 30px;
            margin-left: 20px;
        }
    }
    @media screen and (max-width:440px){
        .table-div{
            overflow-x:scroll;
            padding:0;
        }
    }
    @media screen and (min-width:740px){
        #info-table{
            height:100px;
            width:100%;
        }
    }

</style>
</html>