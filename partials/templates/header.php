<?php 
  include_once __DIR__ . '/../../env-example.php';
?>

<!-- Header -->
<header>
  <nav class="navbar navbar-dark navbar-expand  bg-dark">
    <a class="navbar-brand" href="#">Boolean Hotel</a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active m-1 ">
        <a class="nav-link btn btn-primary px-3 " href="<?php echo $base_path; ?>">Tutte le stanze</a>
      </li>
      <li class="nav-item active m-1">
        <a class="nav-link btn btn-success px-3" href="<?php echo $base_path; ?>create.php">+ Add Room</a>
      </li>
      </ul>
  </nav>
</header>