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
            <h1 class="m-0">Data Gambar</h1>
          </div>
          <div class="col">
            <ol class="breadcrumb float-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Gambar</li>
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
                    <h3>Table Gambar</h3>
                  <a href="/create-gambar" class="btn float-left btn btn btn-primary" >Tambah Gambar <i class="fas fa-plus-square"></i></a>
                </div>
                <div class="card-body">
          <table class="table table-bordered">
            <tr>
                <th>No</th>

                <th>Nama Gambar</th>
                <th>Gambar</th>

                <th>Aksi</th>
            </tr>
            @foreach ($dataGambar as $item)


            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->nama }}</td>
                <td>
                    {{--  <a href="{{ asset('img/'. $item->gambar) }}" target="_black" rel="nooper noreferrer">Lihat Gambar</a>  --}}
                    <img src="{{ asset('img/'. $item->gambar) }}" height="100px" width="100px" alt="" srcset="">
                </td>
                <td>
                    <a href="{{ url('edit-gambar', $item->id) }}">Edit</a> | <a href="{{ url('delete-gambar', $item->id) }}" style="color: red" >Delete </a>
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
