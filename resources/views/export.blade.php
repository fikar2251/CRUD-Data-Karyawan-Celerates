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

    <title>Detail Data Karyawan</title>
</head>

<body>

    <?php
    header('Content-type: application/vnd.ms-word');
    header('Content-Disposition: attachment;Filename=Karyawan.docx');
    ?>

    <div class="container">
        <div style="margin-top: 110px">
            <table class="table table-bordered border-dark" style="width: 50%">
                <thead class="table-success border border-dark">
                    <tr>
                        <th style="text-align: center; width: 30%" scope="col">Field</th>
                        <th scope="col" style="width: 70%">Value</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>

                        <td>Nama</td>
                        <td>{{ $userdetail->nama }}</td>

                    </tr>
                    <tr>

                        <td>Jenis Kelamin</td>
                        <td>{{ $userdetail->jenis_kelamin }}</td>

                    </tr>
                    <tr>

                        <td>Nomor HP</td>
                        <td>{{ $userdetail->no_hp }}</td>

                    </tr>
                    <tr>

                        <td>Email Aktif</td>
                        <td>{{ $userdetail->email }}</td>

                    </tr>
                    <tr>

                        <td>Current Salary</td>
                        <td>{{ $userdetail->salary }}</td>

                    </tr>
                    <tr>

                        <td>Foto Profil</td>
                        <td><img src="/img/{{ $userdetail->image }}" style="width: 50px; height: 50px" alt=""></td>

                    </tr>
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
