<?php
    session_start();
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/1vooralles.css">
</head>
<body>
    <main>
        <section class="inlogSect">
            <div>  
                <h1 class="titleLog">inloggen</h1>
                <form method="post" class="logInOutForm">
                    <label for="username">Gebruikersnaam</label>
                    <input type="text" name="username" id="username" required>
                    <label for="password">wachtwoord</label>
                    <input type="password" name="password" id="password" required>
                    <input type="submit" id="btn" value="Login" name="submit">
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        $sql = $conn->prepare("SELECT * FROM gebruikers WHERE username = ?");
                        $sql->bind_param("s", $username);
                        $sql->execute();
                        $result = $sql->get_result();

                        if($result->num_rows > 0){
                            $row = $result->fetch_assoc();
                            if(password_verify($password, $row['password'])){
                                $_SESSION['username'] = $username;
                                header("Location: index.php");
                                exit();
                            } else {
                                echo "Invalid password";
                            }
                        } else {
                            echo "User not found";
                        }
                    }
                ?>
            </div>
            <div>
                <p>Heb je nog geen account? <a href="signUp.php"><button>Maak hier aan</button></a></p>
            </div>
        </section>
    </main>
    
</body>
</html>