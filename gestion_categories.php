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
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <!-- Beggining of PHP Request -->
      <?php
      $reponse = $dbs->query("SELECT * FROM categorie");

      while ($donnees = $reponse->fetch()) {
        ?>
        <tr>
          <th scope="row"><?php echo $donnees['cat_id']; ?></th>
          <td><?php echo $donnees['cat_nom']; ?></td>
          <td>
            <button type="button" class="btn btn-primary">Edit</button>
          </td>
          <td>
            <form action="queries/deleteCategorie.php" method="get">
              <input type="hidden" name="row_id" value="<?php echo $donnees['cat_id']; ?>">
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


  <?php
  include 'footer.php';
  ?>