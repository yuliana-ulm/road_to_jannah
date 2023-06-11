<!DOCTYPE html>

<html lang="en">
<head>
    @include('Template.head')
  </head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('Template.sidebar')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                <h3>Data Pegawai</h3>
              </div>
              <div class="card-body">

                    <h5>Selamat datang di website data pegawai</h5>

            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    @include('Template.footer')
</div>
    @include('Template.script')
</body>
</html>
