<!DOCTYPE html>
<html>
<head>
    <title>Artikel</title>
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
                    <td>{{ $manhaj->judul }}</td>
                    <td>{{ $manhaj->isi }}</td>
                    <td>{{ $manhaj->link }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
