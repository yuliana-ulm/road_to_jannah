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
<<<<<<< HEAD
              <h1 class="m-0">Data Artikel</h1>
=======
              <h1 class="m-0">Data Pegawai</h1>
>>>>>>> 432168b (first commit)
            </div>
            <div class="col">
              <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
<<<<<<< HEAD
                <li class="breadcrumb-item active">Data Artikel Manhaj</li>
=======
                <li class="breadcrumb-item active">Data Pegawai</li>
>>>>>>> 432168b (first commit)
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
                    <h3> Buat Data </h3>
                </div>
                <div class="card-body">
                <form action="/simpan-pegawai" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
<<<<<<< HEAD
                    <label >Judul</label>
                    <input type="text" class="form-control" placeholder="masukkan judul" name="nama">
                    <label >Pengarang</label>
                    <select class="form-control select2" style="width:100%; border-color:rgb(213, 212, 212)" name="kategori" id="jabatan_id">
                        <option disabled value>Kategori</option>
=======
                    <label >Pegawai</label>
                    <input type="text" class="form-control" placeholder="masukkan nama pegawai" name="nama">
                    <label >Jabatan</label>
                    <select class="form-control select2" style="width:100%; border-color:rgb(213, 212, 212)" name="jabatan_id" id="jabatan_id">
                        <option disabled value>Pilih Jabatan</option>
>>>>>>> 432168b (first commit)
                        @foreach ($jab as $item)
                        <option value="{{ $item->id }}">{{ $item->jabatan }}</option>
                        @endforeach
                    </select>
<<<<<<< HEAD
                    <label >Link</label>
                    <input type="text" class="form-control" placeholder="masukkan link" name="alamat">
                    <label >Tanggal Publikasi</label>
                    <input type="date" class="form-control" placeholder="masukkan tanggal publikasi" name="tgllhr">
=======
                    <label >Alamat</label>
                    <input type="text" class="form-control" placeholder="masukkan alamat" name="alamat">
                    <label >Tanggal Lahir</label>
                    <input type="date" class="form-control" placeholder="masukkan tanggal lahir" name="tgllhr">
>>>>>>> 432168b (first commit)
                </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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
