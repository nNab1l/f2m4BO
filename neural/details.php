<?php
require 'functions.php';
$connection = dbConnect();




$id = $_GET['id'];
$check_int = filter_var($id, FILTER_VALIDATE_INT);
if($check_int == false){
    echo "dit is geen getal (integer)";
    exit;
}





$statement = $connection->prepare('SELECT * FROM `products` WHERE id=?');
$params = [$id];
$statement->execute($params);
$product = $statement->fetch(PDO::FETCH_ASSOC);


$voornaam = '';
$achternaam = '';
$email = '';
$bericht = '';

//opslag variabele (array) voor errors
$errors = [];

//checken voor gegevens
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $voornaam = $_POST['Voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];
    $tijdstip = date('Y-m-d H:i:s');

    //fouten controleren / input valideren
    if(isEmpty($voornaam) ){
        $errors['Voornaam'] = 'Please provide a name';
    }

    if(isEmpty($achternaam) ){
        $errors['achternaam'] = 'Please provide a surname';
    }

    if(!isValidEmail($email)){
        $errors['email'] = 'Please provide a valid email';
    }

    if(!hasMinLength($bericht, 5)){
        $errors['bericht'] = 'question cannot be shorter than 5 characters';
    }

    //print_r($errors);

    if( count($errors) == 0){


    $sql = "INSERT INTO `berichten` (`Voornaam`, `achternaam`, `email`, `bericht`, `tijdstip`) 
            VALUES (:Voornaam, :achternaam, :email, :bericht, :tijdstip); ";
   $statement = $connection->prepare($sql);
   $params = [
    'Voornaam' => $voornaam,
    'achternaam' => $achternaam,
    'email' => $email,
    'bericht' => $bericht,
    'tijdstip' => $tijdstip
   ];
   $statement->execute($params);

}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neural</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" defer></script>
</head>


<body id="js--body">
    <header class="header">
        <img class="logo1" src="img/neaural.png" alt="">
        <input class="searchbar" list="products1" id="placeholder" type="text" placeholder="search for a product">
        <datalist id="products1">
            <option value="spot">
            <option value="mavic 2">
            <option value="ultimaker3">
            <option value="os0 lidar sensor">
            <option value="stretch">
            <option value="spot arm"></option>
          </datalist>
        <button id="js--menu" class="headerButton">x</button>

        
      
    </header>
    <nav id="js--nav" class="mainNavigation">
        <ul class="mainNavigationList">
            <li class="mainNavigationListItem">
                <a href="index.html">Home</a>
             </li>
             <li class="mainNavigationListItem">
                <a href="#products">Products</a>
             </li>
             <li class="mainNavigationListItem">
                <a href="#what">What we do</a>
             </li>
             <li class="mainNavigationListItem">
                <a href="#contact">Contact</a>
             </li>  
        </ul>
    </nav>
    <main>
       
            <article id="" class="modal">
                <figure class="modal__figure">
                    <img src="img/<?php echo $product['foto']; ?>" class="modal__image">
                </figure>
                <section class="modal__section">
                    <h2 class="modal__heading"><?php echo $product['titel']; ?></h2>
                    <p  class="modal__text"><?php echo $product['beschrijving']; ?></p>
                    <a href="buy.html"><button class="buy-now">buy</button></a>
                </section>
                <button id="" class="modal__button">x</button>
            </article>
            <article id="" class="product product--lightblue">
                <figure class="product__figure product__figure--lightblue">
                    <img src="img/robot-spot.webp" alt="" class="product__image">
                </figure>
                <section class="product__section product__section--lightblue">
                </section>
            </article>
        </section>
        <section class="section section--third">
            <ul class="reviews">
                <li class="review">
                    <p>The ultimaker3 has been a great asset to our business as it has helped us create accurate prototypes for our customers.</p>
                </li>
                <li class="review">
                    <p>Spot is one of our best assets yet. He can do heavy lifting for us while also being mobile. He also comes with a remote, and developer options.</p>
                </li>
                <li class="review">
                    <p>Stretch can do work for us that no human can do, it is a very benificial step to our business, and we can wholeheartedly recommend him.</p>
                </li>
            </ul>
        </section>

        <footer id="contact" class="footer">

        <form action="details.php?id=1" method="POST" novalidate>
            <h2 class="text-contact">Get in touch with us!</h2>
            <?php if(!empty($errors['Voornaam'])):?>
                    <p class="form__error"><?php echo $errors['Voornaam']?></p>
            <?php endif;?>
                    
            <div>
                <label for="Voornaam">Name</label>
                <input id="Voornaam" name="Voornaam" value="<?php echo $voornaam;?>" type="text" required>
            </div>
            <div>
                <?php if(!empty($errors['achternaam'])):?>
                        <p class="form__error"><?php echo $errors['achternaam']?></p>
                <?php endif;?>
                    
                <label for="achternaam">last name</label>
                <input id="achternaam" name="achternaam" type="text" value="<?php echo $achternaam;?>"  required>
            </div>
            <div>
            <?php if(!empty($errors['email'])):?>
                    <p class="form__error"><?php echo $errors['email']?></p>
            <?php endif;?>
                    
            <label for="Voornaam">Email</label>
            <input class="email" id="email" name="email" type="email" value="<?php echo $email;?>"  required>
            </div>
            <div>
            <?php if(!empty($errors['bericht'])):?>
                    <p class="form__error"><?php echo $errors['bericht']?></p>
            <?php endif;?>
                    
            <label for="Voornaam">Question</label>
            <textarea id="bericht" name="bericht" class="bigText"><?php echo $bericht;?></textarea>
            </div>
            <input id="send" class="submit" type="submit" value="Send">
        </form>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2420.4892390042455!2d5.1070148155817225!3d52.65114023425479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c8a8936fe0db6b%3A0x3af534d1cba40772!2sBreitnerhof%2C%20Hoorn!5e0!3m2!1snl!2snl!4v1655110320987!5m2!1snl!2snl" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </footer>
        
    
</body>
</html>