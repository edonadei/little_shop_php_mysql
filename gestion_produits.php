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
        <th scope="col">User</th>
        <th scope="col">Category</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Picture</th>
        <th scope="col">Tags</th>
        <th scope="col">Date</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <!-- Beggining of PHP Request -->
      <?php
      $reponse = $dbs->query("SELECT * FROM produit");

      while ($donnees = $reponse->fetch()) {
        ?>
        <tr>
          <th scope="row"><?php echo $donnees['prd_id']; ?></th>
          <td><?php echo $donnees['prd_usr_id']; ?></td>
          <td><?php echo $donnees['prd_sct_id']; ?></td>
          <td><?php echo $donnees['prd_nom']; ?></td>
          <td><?php echo $donnees['prd_desc']; ?></td>
          <td><?php echo $donnees['prd_prix']; ?></td>
          <td><?php echo $donnees['prd_img']; ?></td>
          <td><?php echo $donnees['prd_tag']; ?></td>
          <td><?php echo $donnees['prd_date']; ?></td>
          <td>
            <button type="button" class="btn btn-primary">Edit</button>
          </td>
          <td>
            <form action="queries/deleteProduit.php" method="get">
              <input type="hidden" name="row_id" value="<?php echo $donnees['prd_id']; ?>">
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