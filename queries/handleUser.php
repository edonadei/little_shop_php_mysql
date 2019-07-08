<?php
include '../header.php';
?>

<body>

    <?php
    include '../navbar.php';
    ?>

    <?php
    include('../db_connect.php');
    $id = $_GET['row_id'];
    $reponse = $dbs->query("SELECT * FROM utilisateur WHERE usr_id = '$id' ");

    while ($donnees = $reponse->fetch()) {
        ?>

        <form action="postUser.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputName">Name</label>
                    <input name="usr_name" value=<?php echo $donnees['usr_nom']; ?> type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputFirstName">First name</label>
                    <input name="usr_firstname" value=<?php echo $donnees['usr_prenom']; ?> type="text" class="form-control" id="inputFirstNAme" placeholder="FirstName">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    <input name="usr_email" value=<?php echo $donnees['usr_email']; ?> type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputCity">City</label>
                    <input name="usr_city" value=<?php echo $donnees['usr_ville']; ?> type="text" class="form-control" id="inputCity" placeholder="City">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPhone">Phone number</label>
                    <input name="usr_phone" value=<?php echo $donnees['usr_tel']; ?> type="tel" class="form-control" id="inputPhone" pattern="[0-9]{10}">
                </div>
                <div class="form-group col-md-4 d-none">
                    <label for="inputID">Hidden ID</label>
                    <input name="usr_id" value=<?php echo $donnees['usr_id']; ?> type="tel" class="form-control" id="inputPhone">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    <?php
    }
    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>


    <?php
    include '../footer.php';
    ?>