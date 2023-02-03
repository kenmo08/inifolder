<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Mo-App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">-</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index.php?page=berita" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Data Siswa
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="index.php?page=input">Input Data barang</a></li>
                  <li><a class="dropdown-item" href="index.php?page=view">View Data barang</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">???</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container">




      <input type="hidden" name="id_barang" class="form-control" placeholder="Masukan ID Barang">
    <div class="form-group">





    if(isset($_POST["delete"]))
            {
            {
               mysqli_query($kon"DELETE FROM barang WHERE id_barang='$_POST[id_barang]'") or die(mysqli_error($kon));
            }
                ?>
                <script type="text/javascript">
                window.location.href=window.location.href;
                </script>
                <?php
            }