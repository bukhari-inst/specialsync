<?= $this->include('parts/head') ?>
<div class="background-radial-gradient overflow-hidden slide-inner"
    style="background-image: url(<?= base_url() ?>/assets/images/slide-02.jpg)">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <!-- hero item -->
                <img class="img-fluid" style="width: 100%" src="assets/images/specialsync.png" alt="logo_unu" />
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="">
                    <div class="card-body px-4 py-5 px-md-5">
                        <div class="text-center">
                            <h1 class="h4 mb-4 text-white">Selamat datang kembali!</h1>
                        </div>
                        <form class="user border-bottom" action="" method="post">
                            <input type="hidden" name="csrf_test_name" value="93bd4fc00aa9f7b48fdcbcaba5c0eeb1" />
                            <div class="form-group mb-3">
                                <label class="form-label text-white" for="login">Email atau username</label>
                                <input type="text" class="form-control form-control-user rounded-pill py-2" name="login"
                                    placeholder="Email atau username" />
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label text-white" for="password">Password</label>
                                <input id="id_password" type="password" name="password"
                                    class="form-control form-control-user rounded-pill py-2" placeholder="Kata sandi" />
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-check form-group mb-3">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" class="form-check-input" />
                                    <span class="text-white">Ingat saya</span>
                                </label>
                            </div>

                            <div class="d-grid gap-2 mb-4">
                                <button type="submit" class="btn btn-success rounded-pill py-2">
                                    Masuk
                                </button>
                            </div>
                        </form>
                        <hr />
                        <div class="text-center">
                            <p class="small">
                                <a href="#">Belum punya akun?</a>
                            </p>
                            <p class="small">
                                <a href="#">Lupa kata sandi?</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('parts/endfooter') ?>