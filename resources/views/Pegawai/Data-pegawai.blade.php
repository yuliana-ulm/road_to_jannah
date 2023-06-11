<!DOCTYPE html>
<html lang="en">
<head>
    @include('Template.head')
  </head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    @include('Template.navbar')
  <!-- Main Sidebar Container -->
    @include('Template.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h1 class="m-0">Artikel Islam</h1>
          </div>
          <div class="col">
            <ol class="breadcrumb float-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Artikel</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3>Table Aqidah</h3>
                  <a href="/create-pegawai" class="btn float-left btn btn btn-primary" >Tambah Data <i class="fas fa-plus-square"></i></a>
                </div>
                <div class="card-body">
          <table class="table table-bordered">
            <tr>
                <th>No</th>

                <th>Judul</th>
                <th>Isi</th>
                <th>Link</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
            @foreach ($dtPegawai as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->nama }}</td>
                <td>{{ $item->jabatan->jabatan }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{date('d-m-Y', strtotime($item->tgllhr)) }}</td>
                <td>
                    <a href="{{ url('edit-pegawai', $item->id) }}">Edit</a> | <a href="{{ url('delete-pegawai', $item->id) }}" style="color: red" >Delete </a>
                </td>
            </tr>
            @endforeach

          </table>
        </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
    @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
    @include('Template.script')
</body>
</html>
