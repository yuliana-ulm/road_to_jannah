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
              <h1 class="m-0">Data Artikel</h1>
            </div>
            <div class="col">
              <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Artikel</li>
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
                <form action="{{ route('simpan-artikel') }}" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                    <label >Judul</label>
                    <input type="text" class="form-control" placeholder="masukkan judul" name="judul">
                    <label >Kategori</label>
                    <select class="form-control select2" style="width:100%; border-color:rgb(213, 212, 212)" name="kategori" id="kategori">
                        <option disabled selected>Pilih Kategori</option>
                        <option value="aqidah">Aqidah</option>
                        <option value="manhaj">Manhaj</option>
                        <option value="fiqih">Fiqih</option>
                    </select>
                    <label >Link</label>
                    <input type="text" class="form-control" placeholder="masukkan link" name="link">
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
