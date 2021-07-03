<?php require_once("assets/header.php"); ?>

    <?php 

        session_start();
        
        if(!isset($_SESSION['email'])) {
            header("location: index.php");
        }

    ?>

    <main id="admin-area">
        <section class="admin-content">
            <img src="images/sayan-nath-QsakDnBNE2Q-unsplash (1).jpg" alt="photo">
            <div class="link">
                <a href="logout.php" title="logout">Logout</a>
            </div>
        </section>
    </main>

<?php require_once("assets/footer.php"); ?>