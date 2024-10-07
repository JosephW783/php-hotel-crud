<?php 
  //get room details from
  include __DIR__ . '/partials/show/server.php';

  //Head html
  include __DIR__ . '/partials/templates/head.php';

  //Header
  include __DIR__ . '/partials/templates/header.php';
?>


<!-- main -->

<main>
  <h1 class="text-secondary text-center my-4">Details Rooms</h1>
  <div class="container d-flex flex-column align-items-center">
    <table class="table col-md-8">
      <thead class="text-center">
        <tr>
          <th>ID</th>
          <th>Room number</th>
          <th>Floor</th>
          <th>Beeds</th>
        </tr>
      </thead>

      <tbody class="text-center">
        <tr>
          <th><?php echo $room['id'] ?></th>
          <td><?php echo $room['room_number'] ?></td>
          <td><?php echo $room['floor'] ?></td>
          <td><?php echo $room['beds'] ?></td>
        </tr>
      </tbody>
    </table>

    <table class="table col-md-8">
      <thead class="text-center">
        <tr>
          <th>Created</th>
          <th>Update</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <tr>
          <td><?php echo $room['created_at'] ?></td>
          <td><?php echo $room['updated_at'] ?></td>
        </tr>
      </tbody>

    </table>

    <div class="col-4 d-flex justify-content-between">
      <form action="partials/delete/server.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
        <input class="btn btn-danger" type="submit" value="Delete">
      </form>

      <a class="btn btn-primary" 
      href="<?php echo $base_path; ?>/edit.php?id=<?php echo $room['id']; ?>">Update</a>
    </div>
    
  </div>
</main>


<!-- Footer -->
<?php 
  include __DIR__ . '/partials/templates/footer.php';
?>