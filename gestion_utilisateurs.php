<?php
include 'header.php';
?>

<body>

  <?php
  include 'navbar.php';
  ?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Firstname</th>
        <th scope="col">Email</th>
        <th scope="col">City</th>
        <th scope="col">Phone tel</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <!-- Beggining of PHP Request -->
      <?php
      $reponse = $dbs->query("SELECT * FROM utilisateur");

      while ($donnees = $reponse->fetch()) {
        ?>
        <tr>
          <th scope="row"><?php echo $donnees['usr_id']; ?></th>
          <td><?php echo $donnees['usr_nom']; ?></td>
          <td><?php echo $donnees['usr_prenom']; ?></td>
          <td><?php echo $donnees['usr_email']; ?></td>
          <td><?php echo $donnees['usr_ville']; ?></td>
          <td><?php echo $donnees['usr_tel']; ?></td>
          <td>
            <form action="queries/handleUser.php" method="get">
              <input type="hidden" name="row_id" value="<?php echo $donnees['usr_id']; ?>">
              <button type="submit" class="btn btn-primary">Edit</button>
            </form>
          </td>
          <td>
            <form action="queries/deleteUser.php" method="get">
              <input type="hidden" name="row_id" value="<?php echo $donnees['usr_id']; ?>">
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>

      <?php
      }
      $reponse->closeCursor(); // Termine le traitement de la requête
      ?>
    </tbody>
  </table>
  <!-- Ending of PHP Request -->

  <button type="submit" class="btn btn-success">Add new</button>

  <?php
  include 'footer.php';
  ?>