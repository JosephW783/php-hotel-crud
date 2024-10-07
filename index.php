<?php 
  include __DIR__ . '/partials/home/server.php';

  //Head html
  include __DIR__ . '/partials/templates/head.php';

  //Header
  include __DIR__ . '/partials/templates/header-index.php';
?>



<?php //allert 
  if( !empty( $_GET['del'])){ ?>
    <div class="alert alert-success reload">
      Stanza cancellata con successo
    </div>

  <?php } 
?>


<!-- Main -->
<main class="container mt-5">
  <div class="row">
    <div class="col-12 m-auto">

      
      <table class="table">
        <thead>
          <tr>
            <th class="text-center ">ID</th>
            <th class="text-center">Number</th>
            <th class="text-center">Floor</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php 
          if(!empty($rooms)){
              foreach($rooms as $room){ ?>
                <tr>
                  <td class="text-center align-middle"><?php echo $room['id']; ?></td>
                  <td class="text-center align-middle"><?php echo $room['room_number']; ?></td>
                  <td class="text-center align-middle"><?php echo $room['floor']; ?></td>
                  <td class="text-center" >
                    <a class="text-light btn btn-success" href="./show.php?id=<?php echo $room['id']; ?>">View</a>
                  </td>
                  <td class="text-center text-primary ">
                    <a class="text-light btn btn-primary" href="./edit.php?id=<?php echo $room['id']; ?>">Update</a>
                  </td>
                  <td class="text-center text-danger">
                    <form action="partials/delete/server.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                      <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                  </td>
                </tr>

              <?php }
            }
            ?>
        </tbody>
      </table>

      <div class="col-8 m-auto text-center">
        <a class="text-light btn btn-success m-4 " href=" <?php echo $base_path; ?>create.php">+ Add Room</a>
      </div>

    </div>
  </div>
</main>

<!-- Footer -->
<?php 
  include __DIR__ . '/partials/templates/footer.php';
?>