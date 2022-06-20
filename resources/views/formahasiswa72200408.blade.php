<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>72200408</title>
  </head>
  <body>
    <div class="container-fluid mt-4 rounded">
        <form action="/mahasiswa/simpanmahasiswa" method="POST" class="pt-2 pb-2">
            @csrf
            <div class="form-group w-25">
                <label>NIM</label>
                <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM" required>
            </div> 
            <div class="form-group w-25">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
            </div> 
            <label>Gender</label>
            <div class="form-check w-25">  
                <input type="radio" name="gender" value="Pria" class="form-check-input">
                <label>Pria</label>
            </div> 
            <div class="form-check w-25">  
                <input type="radio" name="gender" value="Wanita" class="form-check-input">
                <label>Wanita</label>
            </div> 
            <div class="form-group w-25">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control">
                    <option value="0">--Pilih Jurusan--</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Kedokteran">Kedokteran</option>
                    <option value="Arsitektur">Arsitektur</option>
                    <option value="Manajemen">Manajemen</option>
                </select>
            </div> 
            <label>Bidang Minat</label>
            <div class="form-check w-25">  
                <input type="checkbox" name="minat[]" value="Pemograman" class="form-check-input">
                <label>Pemograman</label>
            </div> 
            <div class="form-check w-25">  
                <input type="checkbox" name="minat[]" value="Kesenian" class="form-check-input">
                <label>Kesenian</label>
            </div> 
            <div class="form-check w-25">  
                <input type="checkbox" name="minat[]" value="Literasi" class="form-check-input">
                <label>Literasi</label> 
            </div>
            <div class="form-group pt-4">
                <label>NIM</label>
                <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
            </div> 
            <nav aria-label="Page">
                <ul class="pagination">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body>
</html>