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
            <h1 class="m-0">Data Pegawai</h1>
          </div>
          <div class="col">
            <ol class="breadcrumb float-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
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
                    <h3> Edit Data </h3>
                </div>
                <div class="card-body">
                <form action="{{ url('update-artikel', $artikel->id) }}" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                    <label >Judul</label>
                    <input type="text" class="form-control" placeholder="masukkan judul" name="judul" value="{{ $artikel->judul}}">
                    <label >Kategori</label>
                    <select class="form-control select2" style="width:100%; border-color:rgb(213, 212, 212)" name="kategori" id="jabatan_id">
                        <option disabled value>Pilih Jabatan</option>
                        <option value="aqidah" {{ $artikel->kategori=='aqidah'? "selected" : "" }}>Aqidah</option>
                        <option value="manhaj" {{ $artikel->kategori=='manhaj'? "selected" : "" }}>Manhaj</option>
                        <option value="fiqih" {{ $artikel->kategori=='fiqih'? "selected" : "" }}>Fiqih</option>
                    </select>
                    <label >Link</label>
                    <input type="text" class="form-control" placeholder="masukkan link" name="link" value="{{ $artikel->link}}">
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
