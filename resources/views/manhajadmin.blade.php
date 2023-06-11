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

<a href="" class="btn btn-success">Tambah Data</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Prodi</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp

        @foreach ($mahasiswa as $item)
        <tr>
            <th scope="row">{{ $no }}</th>
            <td>{{ $item->nim }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->prodi }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('mahasiswa.destroy',$item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="confirm('Anda yakin akan meenghapus data ini?')">Hapus</button>
               </form>

            </td>
        </tr>

        @php
            $no++;
        @endphp
        @endforeach
    </tbody>
</table>
