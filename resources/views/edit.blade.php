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

    <title>Edit Data Karyawan</title>
</head>

<body>
    <div class="container">
        <div style="margin-top: 40px; width: 500px">
            <h1 class="mb-3">Edit Data Karyawan</h1>
            <form action="/user/{{$useredit->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" aria-describedby="emailHelp"
                        value="{{ $useredit->nama }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                        value="{{ $useredit->email }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                        <option value="">Pilih</option>
                        <option @if ($useredit->jenis_kelamin == 'laki-laki') selected @endif value="laki-laki">Laki-Laki</option>
                        <option @if ($useredit->jenis_kelamin =='perempuan') selected @endif value="perempuan">Perempuan</option>
                        {{-- <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option> --}}
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">No Hp</label>
                    <input type="number" class="form-control" name="no_hp" aria-describedby="emailHelp"
                        value="{{ $useredit->no_hp }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Salary</label>
                    <input type="number" class="form-control" name="salary" aria-describedby="emailHelp"
                        value="{{ $useredit->salary }}">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto Profil</label><br>
                    <img style="width: 100px; margin-bottom: 10px" src="/img/{{ $useredit->image }}" alt="">
                    <input class="form-control" type="file" id="formFile" name="image"
                    value="{{ $useredit->image }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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
