<?php
include_once("config.php");
if (isset($_POST['no'])) {
    $no = $_POST['no'];
    $kode = $_POST['kode'];
    $nama_matkul = $_POST['nama_matkul'];
    $kelas = $_POST['kelas'];
    $sks = $_POST['sks'];
    $waktu = $_POST['waktu'];
    $sql = "DELETE FROM krs WHERE NO=$no";
    if (mysqli_query($con, $sql)) {
        header("Location: krs.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Siakad</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../mainmenu.html" class="nav-link">Main Menu</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../mainmenu.html" class="brand-link">
                <img src="../../dist/img/LogoUntagSurabaya.png" alt="LogoUntagSurabaya" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>Siakad Untag</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/user8-128x128.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><b>User</b></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">Dashboard</li>
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="datadiri.html" class="nav-link">
                                <i class="fas fa-address-book"></i>
                                <p>
                                    Data Diri
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="krs.php" class="nav-link">
                                <i class='fas fa-file-alt'></i>
                                <p>
                                    KRS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="transkripnilai.html" class="nav-link">
                                <i class='fas fa-bold'></i>
                                <p>
                                    Transkrip Nilai
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Kartu Rencana Studi</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../../mainmenu.html">Main Menu</a></li>
                                <li class="breadcrumb-item active">Kartu Rencana Studi</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><b>Delete Data</b></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    $no = $_GET['no'];
                                    $result = mysqli_query($con, "SELECT * FROM krs WHERE NO=$no");
                                    while ($user_data = mysqli_fetch_array($result)) {
                                    ?>
                                        <form action="deletekrs.php" method="POST">
                                            <table id="delete data" class="table table-bordered">
                                                <thead>
                                                    <tr style="text-align: center">
                                                        <th class="col-1">No.</th>
                                                        <th class="col-1">Kode</th>
                                                        <th class="col-4">Nama Matakuliah</th>
                                                        <th class="col-1">Kelas</th>
                                                        <th class="col-1">SKS</th>
                                                        <th class="col-3">Waktu</th>
                                                        <th class="col-1">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <td>
                                                        <div>
                                                            <input type="text" class="form-control" id="no" name="no" value="<?php echo $user_data['NO']; ?>" readonly>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $user_data['KODE']; ?>" readonly>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" value="<?php echo $user_data['NAMA_MATKUL']; ?>" readonly>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $user_data['KELAS']; ?>" readonly>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" class="form-control" id="sks" name="sks" value="<?php echo $user_data['SKS']; ?>" readonly>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" class="form-control" id="waktu" name="waktu" value="<?php echo $user_data['WAKTU']; ?>" readonly>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group" style="display: grid;align-items:  flex-end;">
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </td>
                                                </tbody>
                                            </table>
                                        </form>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><b>Kartu Rencana Studi Semester Genap 2023-2024</b></h3>
                                </div>
                                <table id="krs" class="table table-bordered table-hover">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th>No.</th>
                                            <th>Kode</th>
                                            <th>Nama Matakuliah</th>
                                            <th>Kelas</th>
                                            <th>SKS</th>
                                            <th>Waktu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include_once("config.php");

                                        $result = mysqli_query($con, "SELECT * FROM krs");
                                        while ($user_data = mysqli_fetch_array($result)) {
                                            echo '<tr>';
                                            echo '<td class="col-1" style="text-align: center">', $user_data['NO'], '</td>';
                                            echo '<td class="col-1" style="text-align: center">', $user_data['KODE'], '</td>';
                                            echo '<td class="col-4">', $user_data['NAMA_MATKUL'], '</td>';
                                            echo '<td class="col-1" style="text-align: center">', $user_data['KELAS'], '</td>';
                                            echo '<td class="col-1" style="text-align: center">', $user_data['SKS'], '</td>';
                                            echo '<td class="col-4">', $user_data['WAKTU'], '</td>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
</body>

</html>