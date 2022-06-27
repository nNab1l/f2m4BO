<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `products`');

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
        <button id="js--menu" class="headerButton">≡</button>

        
      
    </header>
    <nav id="js--nav" class="mainNavigation">
        <ul class="mainNavigationList">
            <li class="mainNavigationListItem">
                <a href="">Home</a>
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
        <figure class="bigFigure">
            <img src="img/spot.jpg" alt="verschillende Shinto gates achter elkaar bij de Fox Shrine in Kyoto, Japan.">
            <h2 class="logo">Improving life with <br> robotics</h2>
            <button class="learnmore">Learn More</button>
            <h4></h4>
        </figure>
        <section class="info">
            <div id="what" class="block">
                <h2 class="infoTitle">What we do</h2>
            <p>Our main purpose is to better the quality of life <br> by harnessing the power of robotics. We believe in a world where human life<br> will be guided by robotics, but we would like to achieve this in a way <br> that is both safe and beneficial to our planet
             <br> this essentially means that we will be working towards a bright future <br> With the help of robotics and technology</p>
             <p id="lorem">We have this dream that some day, <br> Humans and robots will go hand in hand in society <br> whether it be construction, or health <br> we hope you find something to your liking!</p>
            <button id="buy1" class="buy">Read More</button>
            <button id="buy2" class="buy1">Read less</button>

            


            </div>
            
           
        </section>
        <section id="products" class="collections">
            <h2 class="collectionsTitle">products</h2>
            <section class="inputs">
                <h2 class="filter-text">filter</h2>
                <div>
                    <input class="input2" id="checkbox-robot" type="checkbox" class="filter">
                    <label for="checkbox-robot" class="label">Robot</label>
                </div>
                <div>
                    <input class="input2" id="checkbox-drone" type="checkbox" class="filter">
                    <label for="checkbox-drone" class="label">Drone</label>
                </div>
                <div>
                    <input class="input2" id="checkbox-sensor" type="checkbox" class="filter">
                    <label for="checkbox-sensor" class="label">Sensor</label>
                </div>    
            </section>
            <ul class="collectionsList">
            <?php foreach($result as $row):?>
                <li class="collectionsListItem">
                    <img src="img/<?php echo $row['foto']; ?>">
                    <h2 class="item"><?php echo $row['titel']; ?></h2>
                    <a href="details.php?id=<?php echo $row['id'];?>"><button class="buy-now1">buy</button></a>
                    <p class="prijs"><?php echo $row['prijs']; ?></p>
                </li>
            <?php endforeach; ?>
            </ul>
            <h2 class="collectionsTitle1">Featured: Mavic 2</h2>
            <article id="js--blueModal" class="modal2">
                <figure class="modal__figure">
                    <img src="img/mavic2.png" alt="Spot zij aanzicht" class="modal__image">
                </figure>
                <section class="modal__section">
                    <h2 class="modal__heading">Mavic 2</h2>
                    <p class="modal__text">
                    Meet the DJI Mavic 2 drone. Now with 24gb of intern memory, it returns better than it's predecessor with 31 minutes of flying time available. It also includes a RTK GPS Module for more accuracy. Get your mavic 2 now!
                    </p>
                    <a href="details.php?id=2"><button class="buy-now">buy</button></a>
                </section>
                <button id="js--closeBlue" class="modal__button">x</button>
            </article>
            <article id="js--blue" class="product product--lightblue">
                <figure class="product__figure product__figure--lightblue">
                    <img src="img/robot-spot.webp" alt="" class="product__image">
                </figure>
            </article>
        </section>
        <h2 class="collectionsTitle1">Customer Reviews</h2>
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
               
               
               
    </main>
    <footer id="contact" class="footer">

        <form>
            <h2>Get in touch with us!</h2>
            <div>
                <label for="Naam">Name</label>
                <input id="Naam" type="text">
            </div>
            <div>
            <label for="email">Email</label>
            <input id="email" type="email">
            </div>
            <div>
            <label for="vraag">Question</label>
            <textarea id="vraag" class="bigText"></textarea>
            </div>
            <input id="send" class="submit" type="submit" value="Send">
        </form>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2420.4892390042455!2d5.1070148155817225!3d52.65114023425479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c8a8936fe0db6b%3A0x3af534d1cba40772!2sBreitnerhof%2C%20Hoorn!5e0!3m2!1snl!2snl!4v1655110320987!5m2!1snl!2snl" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </footer>
    
    
</body>
</html>