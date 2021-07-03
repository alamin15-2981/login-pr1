<?php require_once("assets/header.php"); ?>

    <?php
        session_start();
        $errmsg = null;

        if(isset($_SESSION['email'])) {
            header("location: admin.php");
        }
    
        if(isset($_REQUEST['btn'])) {

            define("EMAIL","admin@gmail.com");
            define("PASSWORD","admin");

            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];

            if($email == EMAIL) {
                if($password == PASSWORD) {
                    $_SESSION['email'] = $email;
                    header("location: admin.php");
                }else {
                    $errmsg = "Password is doesn't match !..";
                }
            }else {
                $errmsg = "Email is doesn't match !..";
            }

        }
    
    ?>


    <main id="main-area">
        <section class="login-form">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Password" required>

                <div class="btn-area">
                    <input type="submit" name="btn" value="Submit">
                    <input type="reset" name="btn2" value="Clear">

                    <p class="err-text"><?php echo $errmsg; ?></p>
                </div>
            </form>
        </section>
    </main>


<?php require_once("assets/footer.php"); ?>






    
