<?php
    require 'auth.php';
    include 'connection.php';

    $username = $_SESSION['username'];

    $album = $_GET['album'] ?? '';

    if ($album === 'A Farewell to Kings') {
        $TitleColour = 'titleColourAFTK';
        $TextColour = 'textColourAFTK';
    } elseif ($album === 'Meddle') {
        $TitleColour = 'titleColourMeddle';
        $TextColour = 'textColourMeddle';
    } elseif ($album === 'Trout Mask Replica') {
        $TitleColour = 'titleColourTMR';
        $TextColour = 'textColourTMR';
    } elseif ($album === 'The War On Errorism') {
        $TitleColour = 'titleColourTWOE';
        $TextColour = 'textColourTWOE';
    } elseif ($album === 'Temple of the Dog') {
        $TitleColour = 'titleColourTOTD';
        $TextColour = 'textColourTOTD';
    } elseif ($album === 'In the Wake of Poseidon') {
        $TitleColour = 'titleColourITWOP';
        $TextColour = 'textColourITWOP';
    } elseif ($album === 'Sailing the Seas of Cheese') {
        $TitleColour = 'titleColourSTSOC';
        $TextColour = 'textColourSTSOC';
    } elseif ($album === 'Down On The Upside') {
        $TitleColour = 'titleColourDOTU';
        $TextColour = 'textColourDOTU';
    } elseif ($album === 'Far Beyond Driven') {
        $TitleColour = 'titleColourFBD';
        $TextColour = 'textColourFBD';
    } else {
        $TextColour = '';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/reviewPage.css">
</head>
<body class="<?php echo htmlspecialchars($album, ENT_QUOTES, 'UTF-8'); ?>">
    <header class="<?php echo htmlspecialchars($album, ENT_QUOTES, 'UTF-8'); ?>">
        <nav>
            <a href="index.php"><button>Home</button></a>
            <a href="reviewMain.php"><button>Back</button></a>
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
        <section class="albumName">
            <?php
            if(isset($_GET['album'])) {
                $album = $_GET['album'];
                echo "<h1 class='" . htmlspecialchars($TitleColour, ENT_QUOTES, 'UTF-8') . "'>$album</h1>";
            }
            else {
                echo "<h1>No album selected</h1>";
            }
            ?>
        </section>
        <section class="albumRevSect">
            <?php
            if(isset($_GET['album'])) {
                if($_GET['album'] === 'A Farewell to Kings') { 
                    echo '<img src="Fotos/farewell-to-kings-cover-600x600.jpg" alt="A Farewell to Kings" class="albumCover" width="300">';
                    echo '<div class="reviewText"><h3 class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">9/10</h3><p class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">This album is fucking awsome, Rush\'s best album in my opinion.</p></div>';
                } elseif($_GET['album'] === 'Meddle') { 
                    echo '<img src="Fotos/echoes-pink-floyd.jpg" alt="Meddle" class="albumCover" width="300">';
                    echo '<div class="reviewText"><h3 class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">8/10</h3><p class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">Great album but isn\'t as tonally connected as their other albums.</p></div>';
                } elseif($_GET['album'] === 'Trout Mask Replica') { 
                    echo '<img src="Fotos/trout-mask-replica.jpg" alt="Trout Mask Replica" class="albumCover" width="300">';
                    echo '<div class="reviewText"><h3 class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">10/10</h3><p class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">Only once in the existence of the universe could an album like this be made.</p></div>';
                } elseif($_GET['album'] === 'Temple of the Dog') { 
                    echo '<img src="Fotos/temple-of-the-dog.jpg" alt="Temple of the Dog" class="albumCover" width="300">';
                    echo '<div class="reviewText"><h3 class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">9/10</h3><p class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">Chris Cornell did some nice soul vocals on this. Also gives a glimpse into the future of Cornell\'s solo work.</p></div>';
                } elseif($_GET['album'] === 'In the Wake of Poseidon') { 
                    echo '<img src="Fotos/in-the-wake-of-poseidon.jpg" alt="In the Wake of Poseidon" class="albumCover" width="300">';
                    echo '<div class="reviewText"><h3 class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">8/10</h3><p class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">Solid first half reminding of their first album and that second half has got some crazy experimental stuff.</p></div>';
                } elseif($_GET['album'] === 'Sailing the Seas of Cheese') { 
                    echo '<img src="Fotos/sailing-the-seas-of-cheese.jpg" alt="Sailing the Seas of Cheese" class="albumCover" width="300">';
                    echo '<div class="reviewText"><h3 class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">8/10</h3><p class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">Some of my favourite Primus tracks are on here, but some of the other songs don\'t hold my attention as much.</p></div>';
                } elseif($_GET['album'] === 'The War On Errorism') { 
                    echo '<img src="Fotos/the-war-on-errorism.jpg" alt="The War On Errorism" class="albumCover" width="300">';
                    echo '<div class="reviewText"><h3 class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">7/10</h3><p class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">Good shit, some songs sound a little samey.</p></div>';
                } elseif($_GET['album'] === 'Down On The Upside') { 
                    echo '<img src="Fotos/down-on-the-upside.jpg" alt="Down On The Upside" class="albumCover" width="300">';
                    echo '<div class="reviewText"><h3 class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">8/10</h3><p class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">The weirdest Soundgarden album that doesn\'t try to be like their previous work. Lots of weird time signatures.</p></div>';
                } elseif($_GET['album'] === 'Far Beyond Driven') { 
                    echo '<img src="Fotos/far-beyond-driven.jpg" alt="Far Beyond Driven" class="albumCover" width="300">';
                    echo '<div class="reviewText"><h3 class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">8/10</h3><p class="' . htmlspecialchars($TextColour, ENT_QUOTES, 'UTF-8') . '">Heavy shit that makes me happy, love the choice to to end it with a cover of "Planet Caravan".</p></div>';
                } else {
                    echo "<p>No review</p>";
                }
            }
            ?>
        </section>
        <section class="spotifyEmbed">
            <?php
            if(isset($_GET['album']))
            {
                if($_GET['album'] === 'A Farewell to Kings') { 
                    echo '<iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/album/18i33u5FvfvgHjZMulpyO2?utm_source=generator&si=b320e4be2c7f4e00" width="50%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
                } elseif($_GET['album'] === 'Meddle') { 
                    echo '<iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/album/7yKRvvqspSxfLkr7C7RaAI?utm_source=generator&si=fc41ff8dd09448b9" width="50%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
                } elseif($_GET['album'] === 'Trout Mask Replica') { 
                    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/aF0g-2SeoMM?si=zB4fugoR4km5Dmns" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
                } elseif($_GET['album'] === 'Temple of the Dog') { 
                    echo '<iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/album/63HdXCn0Xz1pRZc2GzMw7k?utm_source=generator&si=5cf926f952444709" width="50%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
                } elseif($_GET['album'] === 'In the Wake of Poseidon') { 
                    echo '<iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/album/68W3ppXWhsOLOURmxzRkyA?utm_source=generator&si=3538948340c64499" width="50%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
                } elseif($_GET['album'] === 'Sailing the Seas of Cheese') { 
                    echo '<iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/album/2sjF68plsvYE7M3FaMf6rD?utm_source=generator&si=4f6f25c5c8904278" width="50%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
                } elseif($_GET['album'] === 'The War On Errorism') { 
                    echo '<iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/album/37cQZsmKwCUyTozX2HHgnQ?utm_source=generator&si=c41ffe2b94dc48e9" width="50%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
                } elseif($_GET['album'] === 'Down On The Upside') { 
                    echo '<iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/album/1IVa98im1RfxYp6qeOIg2B?utm_source=generator&si=22ce17c1c5c74c1f" width="50%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
                } elseif($_GET['album'] === 'Far Beyond Driven') { 
                    echo '<iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/album/70GAqt2avSiKBJ2IEymou1?utm_source=generator&si=c8a7d38f3ca342b7" width="50%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
                } else {
                    echo "<p>Nothing</p>";
                }
            }
            ?>
        </section>
    </main>
</body>
</html>