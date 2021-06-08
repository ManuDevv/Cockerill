<?php

if(isset($_POST['mailform'])){

    $nom=htmlspecialchars($_POST['nom']);
    $email=htmlspecialchars($_POST['email']);
    $objet=htmlspecialchars($_POST['objet']);
    $message=htmlspecialchars($_POST['message']);

  

   mail("ambroise.gronowski@gmail.com",$objet,$message,);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.jpg" type="image/xl-icon" />
    <title>Cokerill n°18</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    

    
      

        
     
      
       <nav id="nav">
        <ul class="navigation" >
        <li class="icon-home" ><a href="index.html"><img src="img/pngegg.png" alt=""width="75%"></a></li>
            <li><a href="#">Couronne n°18</a>

                <ul class="submenu">
                
                    <li><a href="histo.html">L'histoire </a></li>
                    <li> <a href="tech.html">Informations Techniques</a> </li>
                    <li> <a href="img-epoque.html">Photos d'époque</a><li>

                </ul>

            </li>



            <li><a>L'association</a>
                <ul class="submenu">
                    <li><a href="seance.html">Séance de travail</a></li>
                    <li><a href="trombi.html">Trombinoscope</a></li>
                    <li><a href="adhesion.html">Adhésion</a></li>
                </ul>     
            </li>
            

            <li><a>Nos partenaires</a>
                         
            </li>


            <li><a href="https://www.helloasso.com/associations/chemin-de-fer-touristique-de-la-vallee-de-l-aa/formulaires/5">Faire un don</a></li>
            <li><a href="boutique.html">Boutique</a></li>
            <li><a href="contact.php">Contact</a></li>

         </ul>
      </nav>

         <div class="page-contact">
                <div class="title-page">
                    <h1>Contact</h1>
                </div>
        

                <div class="text-souligne">
                    <p>Via mail :</p>
                </div>

                <div class="text-page">
               <p>contact@coronne18.fr</p>
               </div>

                <div class="text-souligne">
                    <p>Via courrier:</p>
                </div>


                <div class="text-page">
                    <p>La couronne n°18</br>
                A l'attention de Mr Gronowski Ambroise</br>
                3 rue des machin chose</br>
                59687452 tatwouin les bains</p>
                </div>

                <div class="text-souligne">
                    <p>Via notre formulaire de contact:</p>
                    </div>


                 <form action=""  method="POST">
                <div class="espace-form">
                    <label for="" >Nom <span>*</span></label></br>
                    <input type="text" name="nom">
                </div>

                <div class="espace-form">
                    <label for="" >E-mail <span>*</span></label></br>
                    <input type="text"name="email">
                </div>
                <div class="espace-form">
                    <label for="" >Objet <span>*</span></label></br>
                    <input type="text" name="objet">
                </div>
                <div class="espace-form">
                    <label for="" >Message <span>*</span></label></br>
                    <input type="text" name="message">
                </div>

                <div class="btn">
                    
                    <input type="submit" value="Envoyer" class="btn" name="mailform">
                </div>
                 </form>
       </div>
     
    

</body>
</html>