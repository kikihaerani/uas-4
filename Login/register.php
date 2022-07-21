<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Registerasi</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>

              <div class="card-body">
                <form method="POST" action="simpan_register.php">
                  <div class="form-group">
                    <label for="exampleFormControlInputl" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextareal" class="form-label">NIK</label>
                    <input type="text" name="nik" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextareal" class="form-label">Jenis Kelamin</label>
                    <input type="text" name="jk" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextareal" class="form-label">Alamat Rumah</label>
                    <input type="text" name="alamat" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextareal" class="formlabel">No Tlp/Hp</label>
                    <input type="text" name="tlp" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampelFormControlTextareal" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextareal" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                  </div>
                  <div class="form-groub">
                    <button type="submit" class="btn btn-sm btn-primary">Register</button>
                  </div>
                  <div class="form-group"> 
                    <p>Sudah punya akun? pergi ke <a href="login_admin.php" class="card-link">from Login ></a></p>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <!-- Page Specific JS File -->
</body>

</html>