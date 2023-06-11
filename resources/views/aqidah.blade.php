<!DOCTYPE html>
<html>
<head>
    <title>Belajar Aqidah</title>
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
    <h2>Belajar Aqidah</h2>
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
            @foreach($materi as $aqidah)
                <tr>
                    <td>{{ $materi->id }}</td>
                    <td>{{ $materi->judul }}</td>
                    <td>{{ $materi->isi }}</td>
                    <td>{{ $materi->link }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
