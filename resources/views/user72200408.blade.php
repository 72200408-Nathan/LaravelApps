<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">id</th>
                <th scope="col">nik_user</th>
                <th scope="col">nama_user</th>
                <th scope="col">no_hp</th>
                <th scope="col">password</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $no => $u)
            <tr>
                <th scope="row">{{$user -> firstItem() + $no }}</th>
                <td>{{ $u->nik_user}}</td>
                <td>{{ $u->nama_user}}</td>
                <td>
                    <a href="/user72200408/edituser/{{ $u->id}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                    <a href="/user72200408/hapususer/{{ $u->id}}" class="btn btn-outline-primary"><i class="bi bi-x-square"></i></a>
                </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <span class="float-right">{{ $user-> links()}}</span>
    <form action="/user72200408/ceklogin" method="POST">
        @csrf
        <img class="mb-4" src="" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Form Login</h1>
        <div class="form-floating">
            <input type="nik_user" name="nik_user" class="form-control" id="floatingInput" required autofocus>
            <label for="floatingInput">nik_user</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" required autofocus>
            <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>