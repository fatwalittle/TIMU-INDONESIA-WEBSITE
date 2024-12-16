<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?= base_url('back-end/') ?>css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- SweetAlert CDN -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-danger">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?= base_url('admin'); ?>">PT. TIMU INDONESIA</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <span style="color: white;"><?= $user['username']; ?></span>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">
                            <i class="fas fa-fw fa-sign-out-alt"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading mt-2" style="color: black;">Administrator</div>
                        <a class="nav-link" href="<?= base_url('admin'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="<?= base_url('admin/main_customer'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Main Customer
                        </a>
                        <a class="nav-link active" href="<?= base_url('admin/scope'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-crosshairs"></i></div>
                            Scope
                        </a>
                        <hr>
                        <div class="sb-sidenav-menu-heading" style="color: black;">Website</div>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fab fa-chrome"></i></div>
                            Visit Website
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Last Access :</div>
                    <div id="current-time"></div>
                </div>
                <script>
                    function updateTime() {
                        var currentDate = new Date();
                        var hours = currentDate.getHours();
                        var minutes = currentDate.getMinutes();
                        var seconds = currentDate.getSeconds();

                        // Format waktu menjadi HH:MM:SS
                        hours = hours < 10 ? '0' + hours : hours;
                        minutes = minutes < 10 ? '0' + minutes : minutes;
                        seconds = seconds < 10 ? '0' + seconds : seconds;

                        var timeString = hours + ":" + minutes + ":" + seconds + " WIB";

                        // Tampilkan waktu di elemen dengan id current-time
                        document.getElementById('current-time').innerText = timeString;
                    }

                    // Update waktu setiap detik
                    setInterval(updateTime, 1000);

                    // Panggil fungsi untuk menampilkan waktu pertama kali
                    updateTime();
                </script>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Scope</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Scope</li>
                    </ol>

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div id="flash-message" class="alert alert-success" role="alert">
                            <?= $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <script>
                        // Menghilangkan pesan flash setelah 3 detik (3000 ms)
                        setTimeout(function() {
                            var flashMessage = document.getElementById('flash-message');
                            if (flashMessage) {
                                flashMessage.style.display = 'none';
                            }
                        }, 3000); // 3000 ms = 3 detik
                    </script>

                    <a href="<?= site_url('admin/scope/create') ?>" class="btn btn-outline-primary">CREATE</a>

                    <div class="mt-5">
                        <!-- Tabel untuk menampilkan data customer -->
                        <table class="table table-striped table-hover table-bordered shadow-sm rounded-3">
                            <thead style="background-color: #f1f1f1; color: #333;">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Jenis</th>
                                    <th class="text-center">Penjelasan</th>
                                    <th class="text-center">Gambar</th>
                                    <th class="text-center">Created At</th>
                                    <th class="text-center">Updated At</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($scopes as $scope) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td class="text-center"><?= $scope->jenis_scope; ?></td>
                                        <td class="text-center"><?= $scope->penjelasan_scope; ?></td>
                                        <td class="text-center">
                                            <!-- Menampilkan gambar jika ada -->
                                            <img src="<?= base_url('uploads/gambar_scope/' . $scope->gambar_scope); ?>" alt="Gambar" width="50" class="rounded-circle">
                                        </td>
                                        <td class="text-center"><?= $scope->created_at; ?></td>
                                        <td class="text-center"><?= $scope->updated_at; ?></td>
                                        <td class="text-center">
                                            <!-- Tombol Edit -->
                                            <a href="<?= site_url('admin/scope/edit/' . $scope->id); ?>" class="btn btn-outline-info btn-sm rounded-3">
                                                Edit
                                            </a>
                                            <!-- Tombol Hapus dengan SweetAlert -->
                                            <a href="javascript:void(0);" class="btn btn-outline-danger btn-sm rounded-3 delete-btn" data-id="<?= $scope->id; ?>">
                                                Delete
                                            </a>
                                        </td>

                                        <script>
                                            // Script untuk SweetAlert Konfirmasi Hapus
                                            document.querySelectorAll('.delete-btn').forEach(function(button) {
                                                button.addEventListener('click', function() {
                                                    var scopeId = this.getAttribute('data-id');

                                                    Swal.fire({
                                                        title: 'Apakah Anda yakin?',
                                                        text: "Data ini akan dihapus secara permanen!",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Ya, hapus!',
                                                        cancelButtonText: 'Batal'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            // Jika pengguna mengonfirmasi, arahkan ke URL delete
                                                            window.location.href = '<?= site_url('admin/scope/delete/'); ?>' + scopeId;
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="justify-content-between small">
                        <div class="text-muted" style="text-align: center;">Copyright &copy; Timu Indonesia 2024</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('back-end/') ?>js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('back-end/') ?>assets/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('back-end/') ?>assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('back-end/') ?>js/datatables-simple-demo.js"></script>
</body>

</html>