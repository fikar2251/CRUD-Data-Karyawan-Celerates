<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>Data Karyawan</title>
</head>

<body>
    <div class="container">
        <div style="margin-top: 110px">
            <h1 class="mb-3">Data Karyawan</h1>
            <a href="{{ route('user.create') }}">
                <button type="button" class="btn btn-primary mb-3">Add Data</button>
            </a>
            <table class="table table-bordered border-dark">
                <thead class="table-success border border-dark">
                    <tr>
                        <th style="text-align: center" scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Foto Profil</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row" style="width: 30px; text-align: center">{{ $loop->iteration }}</th>
                            <td style="width: 150px">{{ $user->nama }}</td>
                            <td style="width: 150px">{{ $user->email }}</td>
                            <td style="width: 100px"><img src="/img/{{ $user->image }}" alt=""
                                    style="width: 100px; height: 100px"></td>
                            <td style="width: 50px">
                                <div class="d-flex " style="width: 70px">
                                    <a href="/user/{{ $user->id }}" style="text-decoration: none">
                                        <button type="button" class="btn btn-warning ms-3"><i class="bi bi-info-circle"
                                                style="color: white"></i></button>
                                    </a>
                                    <a href="/user/{{ $user->id }}/edit" style="text-decoration: none">
                                        <button type="button" class="btn btn-success me-1 ms-1"><i
                                                class="bi bi-pencil-square"></i></button>
                                    </a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
