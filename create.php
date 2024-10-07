<?php 
  
  //Head html
  include __DIR__ . '/partials/templates/head.php';

  //Header
  include __DIR__ . '/partials/templates/header.php';
?>


<!-- main -->
<main>
  <h1 class="text-secondary text-center my-4">Create New Rooms</h1>
  <div class="container d-flex flex-column align-items-center ">

    <form class="col-7" action="partials/create/server.php" method="POST">
      <div class="form-group ">
        <label for="room_number">Room Number</label>
        <input class="form-control" type="number" name="room_number" id="room_number" value="" placeholder="Insert room number">
      </div>

      <div class="form-group">
        <label for="beds">Beds Number</label>
        <input class="form-control" type="number" name="beds" id="beds" value="" placeholder="Insert beds Number">
      </div>

      <div class="form-group">
        <label for="floor">Floor</label>
        <input class="form-control" type="number" name="floor" id="floor" value="" placeholder="Insert floor number">
      </div>

      <div class="form-group text-center">
        <input class="btn btn-success" type="submit" value="Create New Room">
      </div>

    </form>
    
  </div>
</main>


<!-- Footer -->
<?php 
  include __DIR__ . '/partials/templates/footer.php';
?>