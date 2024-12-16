<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Admin - Timu Indonesia</title>
        <link href="<?=base_url('back-end/')?>css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-danger">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4" style="margin-top: 100px;">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">LOGIN ADMIN</h3>
                                    <h6 class="text-center font-weight-light my-4">
                                        (Silahkan Masukkan Username dan Password Anda)
                                    </h6> 
                                </div>
                                <div class="text-center">
                                    <?php if ($this->session->flashdata('pesan')) : ?> 
                                        <div id="flash-message" class="alert alert-danger" role="alert">
                                            <?= $this->session->flashdata('pesan'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <script>
                                    // Menghilangkan pesan flash setelah 3 detik (3000 ms)
                                    setTimeout(function() {
                                        var flashMessage = document.getElementById('flash-message');
                                        if (flashMessage) {
                                            flashMessage.style.display = 'none';
                                        }
                                    }, 3000); // 3000 ms = 3 detik
                                </script>
                                    <div class="card-body">
                                        <form class="user" method="POST" action="<?= base_url('auth')?>">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="username" name="username" type="text" placeholder="Username" value="<?= set_value('username'); ?>" autocomplete="off" autofocus required/>
                                                <label for="inputUsername">Username</label>
                                                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="form-floating mb-3 position-relative">
                                                <input class="form-control" id="password" name="password" type="password" placeholder="Password" value="<?= set_value('password'); ?>" required/>
                                                <label for="password">Password</label>
                                                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>

                                                <!-- Ikon untuk toggle password visibility -->
                                                <span id="togglePassword" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                                    <i class="fa fa-eye" id="eyeIcon"></i>
                                                </span>
                                            </div>
                                            <script>
                                                const togglePassword = document.querySelector('#togglePassword');
                                                const passwordInput = document.querySelector('#password');
                                                const eyeIcon = document.querySelector('#eyeIcon');

                                                togglePassword.addEventListener('click', () => {
                                                    // Toggle the type attribute using getAttribute and setAttribute methods
                                                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                                                    passwordInput.setAttribute('type', type);
                                                    
                                                    // Toggle the eye icon
                                                    eyeIcon.classList.toggle('fa-eye');
                                                    eyeIcon.classList.toggle('fa-eye-slash');
                                                });
                                            </script>
                                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                                            <div style="text-align: center;">
                                                <button type="submit" class="btn btn-primary w-100 shadow" style="transition: 0.3s;">LOGIN</button>
                                            </div>
                                            <style>
                                                .btn-primary:hover {
                                                    background-color: #0056b3; /* Warna sedikit lebih gelap */
                                                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan */
                                                    transform: scale(1.05); /* Sedikit perbesar tombol */
                                                }
                                            </style>
                                        </form>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                            <div class="text-muted" style="text-align: center;">Copyright &copy; Timu Indonesia 2024</div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url('back-end/')?>js/scripts.js"></script>
    </body>
</html>
