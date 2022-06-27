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
       
            <article id="" class="modal">
                <figure class="modal__figure">
                    <img src="/img/mavic2.png" alt="Spot zij aanzicht" class="modal__image">
                </figure>
                <section class="modal__section">
                    <h2 class="modal__heading"><?php echo $product['titel']; ?></h2>
                    <p class="modal__text">
                        Maak kennis met spot: een nieuwe geavanceerde, en intelligente robot
                        die overal heen kan.
                    </p>
        
                    <p class="modal__text">de robot is van boston dynamics, en komt een afstandsbediening, maar
                        het kan ook autonoom bewegen. 
                    </p>
                    <p class="modal__text">het heeft een geavanceerde camera die alles scherp kan vastleggen en zijn omgeving kan scannen</p>
                    <p class="modal__text">de knoppenlayout van de afstandsbediening is zeer comfortabel, en gemakkelijk te leren</p>
                    <a href="/index.html" class="modal__link">terug naar producten</a>
                </section>
                <button id="" class="modal__button">x</button>
            </article>
            <article id="" class="product product--lightblue">
                <figure class="product__figure product__figure--lightblue">
                    <img src="img/robot-spot.webp" alt="" class="product__image">
                </figure>
                <section class="product__section product__section--lightblue">
                   <a href="details.php">info</a>
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