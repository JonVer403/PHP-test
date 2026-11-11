<?php
    require 'auth.php';
    include 'connection.php';

    $username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/reviewPage.css">
</head>
<body>
    <header class="mainReviewNav">
        <nav>
            <a href="index.php"><button>Home</button></a>
        </nav>
        <nav>
            <?php
                $target_username = 'Admin';

                if (isset($_SESSION['username']) && $_SESSION['username'] === $target_username) {
                    echo '<a href="adminReview.php"><button>Admin</button></a>';
                }
            ?>
        </nav>
    </header>
    <main>
        <section>
            <h1>Reviews</h1>
        </section>
        <section class="albums">
            <div class="albumRow">
                <a href="ReviewPage.php?album=A Farewell to Kings">
                    <button class="albumButton">
                        <img src="Fotos/farewell-to-kings-cover-600x600.jpg" alt="A Farewell to Kings" class="albumPic">
                        <h4>A Farewell to Kings - 1997</h4>
                        <p>Rush</p>
                    </button>
                </a>
                <a href="ReviewPage.php?album=Meddle">
                    <button class="albumButton">
                        <img src="Fotos/echoes-pink-floyd.jpg" alt="Echoes" class="albumPic">
                        <h4>Meddle - 1971</h4>
                        <p>Pink Floyd</p>
                    </button>
                </a>
                <a href="ReviewPage.php?album=Trout Mask Replica">
                    <button class="albumButton">
                        <img src="Fotos/trout-mask-replica.jpg" alt="Trout Mask Replica" class="albumPic">
                        <h4>Trout Mask Replica - 1969</h4>
                        <p>Captain Beefheart & His Magic Band</p>
                    </button>
                </a>
                <a href="ReviewPage.php?album=The War On Errorism">
                    <button class="albumButton">
                        <img src="Fotos/the-war-on-errorism.jpg" alt="The War On Errorism" class="albumPic">
                        <h4>The War On Errorism - 2003</h4>
                        <p>NOFX</p>
                    </button>
                </a>
            </div>
            <div class="albumRow">
                <a href="ReviewPage.php?album=Temple of the Dog">
                    <button class="albumButton">
                        <img src="Fotos/temple-of-the-dog.jpg" alt="Temple of the Dog" class="albumPic">
                        <h4>Temple of the Dog - 1990</h4>
                        <p>Temple of the Dog</p>
                    </button>
                </a>
                <a href="ReviewPage.php?album=In the Wake of Poseidon">
                    <button class="albumButton">
                        <img src="Fotos/in-the-wake-of-poseidon.jpg" alt="In the Wake of Poseidon" class="albumPic">
                        <h4>In the Wake of Poseidon - 1970</h4>
                    <p>King Crimson</p>
                    </button>
                </a>
                <a href="ReviewPage.php?album=Sailing the Seas of Cheese">
                    <button class="albumButton">
                        <img src="Fotos/sailing-the-seas-of-cheese.jpg" alt="Sailing the Seas of Cheese" class="albumPic">
                        <h4>Sailing the Seas of Cheese - 1991</h4>
                        <p>Primus</p>
                    </button>
                </a>
                <a href="ReviewPage.php?album=Down On The Upside">
                    <button class="albumButton">
                        <img src="Fotos/down-on-the-upside.jpg" alt="Down On The Upside" class="albumPic">
                        <h4>Down On The Upside - 1996</h4>
                        <p>Soundgarden</p>
                    </button>
                </a>
            </div>
            <div class="albumRow">
                <a href="ReviewPage.php?album=Far Beyond Driven">
                    <button class="albumButton">
                        <img src="Fotos/far-beyond-driven.jpg" alt="Far Beyond Driven" class="albumPic">
                        <h4>Far Beyond Driven - 1994</h4>
                        <p>Pantera</p>
                    </button>
                </a>
            </div>
        </section>
    </main>
</body>
</html>