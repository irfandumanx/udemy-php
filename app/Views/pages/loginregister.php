<div class="rbt-elements-area bg-color-white p-5">
    <div class="container">
        <div class="row gy-4 row--30 justify-content-center">
            <button id="login-button" class="col-lg-2 col-md-3 col-sm-4 text-center rbt-btn btn-gradient btn-gradient-3 btn-md mr--20">Giriş Yap</button>
            <button id="register-button" class="col-lg-2 col-md-3 col-sm-4 text-center rbt-btn btn-gradient btn-gradient-2 btn-md mr--20">Kayıt Ol</button>
            <div class="w-100"></div>
            <div id="login-form" class="<?php echo session()->get('isRegister') === 'true' ? 'd-none' : '' ?> col-lg-6">
                <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                    <span id="login-error" class="d-block text-center max-width-auto color-danger">
                        <?php
                        if (session()->has("errors"))
                            foreach (session()->get("errors") as $key => $value) {
                                echo $value;
                                break;
                            }
                        ?>
                    </span>
                    <h3 class="title">Giriş Yap</h3>
                    <form method="post" class="max-width-auto">
                        <div class="form-group">
                            <input name="login_username" type="text" />
                            <label>Kullanıcı adı veya Email *</label>
                            <span class="focus-border"></span>
                        </div>
                        <div class="form-group">
                            <input name="login_password" type="password">
                            <label>Şifre *</label>
                            <span class="focus-border"></span>
                        </div>

                        <input style="display: none" name="is_register" type="text" value="false" />

                        <div class="row mb--30">
                            <div class="col-lg-6">
                            </div>
                            <div class="col-lg-6">
                                <div class="rbt-lost-password text-end">
                                    <a class="rbt-btn-link" href="#">Şifremi hatırlamıyorum?</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-submit-group">
                            <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                        <span class="icon-reverse-wrapper">
                            <span class="btn-text">Giriş Yap</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="register-form" class="<?php echo session()->get('isRegister') === 'true' ? '' : 'd-none' ?> col-lg-6">
                <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                    <span id="register-error" class="d-block text-center max-width-auto color-danger">
                        <?php
                        if (session()->has("errors"))
                            foreach (session()->get("errors") as $key => $value) {
                                echo $value;
                                break;
                            }
                        ?>
                    </span>
                    <h3 class="title">Kayıt Ol</h3>
                    <form method="post" class="max-width-auto">
                        <div class="form-group">
                            <input name="register_email" type="text" />
                            <label>Email *</label>
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-group">
                            <input name="register_username" type="text">
                            <label>Kullanıcı Adı *</label>
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-group">
                            <input name="register_password" type="password">
                            <label>Şifre *</label>
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-group">
                            <input name="register_conpassword" type="password">
                            <label>Şifreyi Onayla *</label>
                            <span class="focus-border"></span>
                        </div>

                        <input style="display: none" name="is_register" type="text" value="true" />

                        <div class="form-submit-group">
                            <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                        <span class="icon-reverse-wrapper">
                            <span class="btn-text">Kayıt Ol</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
            <script>
                const loginButton = document.querySelector("#login-button");
                const registerButton = document.querySelector("#register-button");
                const loginForm = document.querySelector("#login-form");
                const registerForm = document.querySelector("#register-form");
                loginButton.onclick = () => {
                    console.log(loginForm.classList)
                    console.log(registerForm.classList)
                    loginForm.classList.remove("d-none");
                    registerForm.classList.add("d-none");
                }
                registerButton.onclick = () => {
                    loginForm.classList.add("d-none");
                    registerForm.classList.remove("d-none");
                }

            </script>
        </div>
    </div>
</div>