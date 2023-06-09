<!DOCTYPE html>
<html>
<head>
    <title>Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    <h2>Daftar Artikel</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materi as $manhaj)
                <tr>
                    <td>{{ $manhaj->id }}</td>
                    <td>{{ $manhaj->nama }}</td>
                    <td>{{ $manhaj->jabatan_id }}</td>
                    <td>{{ $manhaj->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
