<?php $this->extend('layouts/base') ?>
<?php $this->section('style') ?>
<?php $this->endSection() ?>
<?php $this->section('script') ?>
<?php $this->endSection() ?>
<?php $this->section('content') ?>
<div class="rbt-page-banner-wrapper">
    <!-- Start Banner BG Image  -->
    <div class="rbt-banner-image"></div>
    <!-- End Banner BG Image  -->
</div>

<!-- Start Card Style -->
<div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Start Dashboard Top  -->
                <div class="rbt-dashboard-content-wrapper">
                    <div <?php if(session()->get('userData')['coverphotourl']) echo 'style="background-image: url(' . base_url().'uploads/photos/'.session()->get('userData')['username'].'/'.  session()->get('userData')['coverphotourl'] . ')"' ?>  class="tutor-bg-photo bg_image height-350 <?php if(!session()->get('userData')['coverphotourl']) echo 'bg_image--22' ?>"></div>
                    <!-- Start Tutor Information  -->
                    <div class="rbt-tutor-information">
                        <div class="rbt-tutor-information-left">
                            <div class="thumbnail rbt-avatars size-lg">
                                <img src="<?php if(isset(session()->get('userData')['photourl']) && session()->get('userData')['photourl'] !== null) echo base_url().'uploads/photos/'.session()->get('userData')['username'].'/'.session()->get('userData')['photourl']; else echo base_url().'assets/images/team/avatar.jpg'?>" alt="Instructor">
                            </div>
                            <div class="tutor-content">
                                <h5 class="title"><?php echo session()->get('userData')['name'].' '.session()->get('userData')['surname'] ?></h5>
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count"> (2 Yorum)</span>
                                </div>
                            </div>
                        </div>
                        <div class="rbt-tutor-information-right">
                            <div class="tutor-btn">
                                <a class="rbt-btn btn-md hover-icon-reverse" href="/course/create">
                                        <span class="icon-reverse-wrapper">
                        <span class="btn-text">Kurs Oluştur</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Tutor Information  -->
                </div>
                <!-- End Dashboard Top  -->

                <div class="row g-5">
                    <div class="col-lg-3">
                        <!-- Start Dashboard Sidebar  -->
                        <div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                            <div class="inner">
                                <div class="content-item-content">
                                    <div class="rbt-default-sidebar-wrapper">
                                        <div class="section-title mb--20">
                                            <h6 class="rbt-title-style-2">HOŞGELDİN, <?php echo session()->get('userData')["name"] . " " . session()->get('userData')["surname"]?></h6>
                                        </div>
                                        <nav class="mainmenu-nav">
                                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                <li><a href="instructor-dashboard.html"><i class="feather-home"></i><span>Kontrol Paneli</span></a></li>
                                                <li><a href="instructor-profile.html"><i class="feather-user"></i><span>Profil</span></a></li>
                                                <li><a href="instructor-enrolled-courses.html"><i class="feather-book-open"></i><span>Kurslar</span></a></li>
                                                <li><a href="instructor-reviews.html"><i class="feather-star"></i><span>Yorumlar</span></a></li>
                                                <li><a href="instructor-my-quiz-attempts.html"><i class="feather-help-circle"></i><span>Sınav Denemeleri</span></a></li>
                                                <li><a href="instructor-order-history.html"><i class="feather-shopping-bag"></i><span>Satın Alımlar</span></a></li>
                                            </ul>
                                        </nav>

                                        <div class="section-title mt--40 mb--20">
                                            <h6 class="rbt-title-style-2">Kullanıcı</h6>
                                        </div>

                                        <nav class="mainmenu-nav">
                                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                <li><a href="<?php echo base_url('settings') ?>"><i class="feather-settings"></i><span>Ayarlar</span></a></li>
                                                <li><a href="auth/logout"><i class="feather-log-out"></i><span>Çıkış</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Dashboard Sidebar  -->
                    </div>

                    <div class="col-lg-9">
                        <!-- Start Instructor Profile  -->
                        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                            <div class="content">

                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Ayarlar</h4>
                                </div>

                                <div class="advance-tab-button mb--30">
                                    <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4" role="tablist">
                                        <li role="presentation">
                                            <a href="#" class="tab-button <?php if (!session()->has("errors")) echo 'active' ?>" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                                <span class="title">Profil Bilgileri</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#" class="tab-button <?php if (session()->has("errors")) echo 'active' ?>" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" role="tab" aria-controls="password" aria-selected="false">
                                                <span class="title">Şifre Değiştir</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#" class="tab-button" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" role="tab" aria-controls="social" aria-selected="false">
                                                <span class="title">Sosyal Medyalar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane fade <?php if (!session()->has("errors")) echo 'active show' ?>" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="rbt-dashboard-content-wrapper">
                                            <div <?php if(session()->get('userData')['coverphotourl']) echo 'style="background-image: url(' . base_url().'uploads/photos/'.session()->get('userData')['username'].'/'.  session()->get('userData')['coverphotourl'] . ')"' ?>  class="tutor-bg-photo bg_image height-245 <?php if(!session()->get('userData')['coverphotourl']) echo 'bg_image--22' ?>"></div>
                                            <!-- Start Tutor Information  -->
                                            <div class="rbt-tutor-information">
                                                <div class="rbt-tutor-information-left">
                                                    <div class="thumbnail rbt-avatars size-lg position-relative">
                                                        <img src="<?php if(isset(session()->get('userData')['photourl']) && session()->get('userData')['photourl'] !== null) echo base_url().'uploads/photos/'.session()->get('userData')['username'].'/'.session()->get('userData')['photourl']; else echo base_url().'assets/images/team/avatar.jpg'?>" alt="Instructor">
                                                        <div class="rbt-edit-photo-inner">
                                                            <button class="rbt-edit-photo" title="Upload Photo">
                                                                <i class="feather-camera"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rbt-tutor-information-right">
                                                    <div style="cursor: pointer" id="cover-photo-btn" class="tutor-btn">
                                                        <a class="rbt-btn btn-sm btn-border color-white radius-round-10">Arka Planı Değiştir</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Tutor Information  -->
                                        </div>
                                        <!-- Start Profile Row  -->
                                        <form method="post" class="rbt-profile-row rbt-default-form row row--15">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="rbt-form-group">
                                                    <label for="firstname">İsim</label>
                                                    <input id="firstname" name="name" type="text" value="<?php echo $data['name'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="rbt-form-group">
                                                    <label for="lastname">Soyisim</label>
                                                    <input id="lastname" name="surname" type="text" value="<?php echo $data['surname'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="rbt-form-group">
                                                    <label for="username">Kullanıcı Adı</label>
                                                    <input id="username" name="username" type="text" value="<?php echo $data['username'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="rbt-form-group">
                                                    <label for="phonenumber">Telefon Numarası</label>
                                                    <input id="phonenumber" name="phonenumber" type="tel" value="<?php echo $data['phonenumber'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="rbt-form-group">
                                                    <label for="skill">Yetkin Olduğunuz Alan</label>
                                                    <input id="skill" name="skill" type="text" value="<?php echo $data['skill'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="rbt-form-group">
                                                    <label for="email">Mail Adresi</label>
                                                    <input id="email" name="email" type="text" value="<?php echo $data['email'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    <label for="bio">Bio</label>
                                                    <textarea id="bio" name="bio" cols="20" rows="5"><?php echo esc($data['bio']) ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 mt--20">
                                                <div class="rbt-form-group">
                                                    <button type="submit" class="rbt-btn btn-gradient">Bilgilerimi Güncelle</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Profile Row  -->
                                    </div>

                                    <div class="tab-pane fade <?php if (session()->has("errors")) echo 'active show' ?>" id="password" role="tabpanel" aria-labelledby="password-tab">

                                        <?php
                                        if (session()->has("errors"))
                                            foreach (session()->get("errors") as $key => $value) {
                                                echo '<label style="color: red; margin-bottom: 20px">'. $value . '</label>';
                                                break;
                                            }
                                        ?>
                                        <!-- Start Profile Row  -->
                                        <form method="post" class="rbt-profile-row rbt-default-form row row--15">
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    <label for="currentpassword">Mevcut Şifreniz</label>
                                                    <input name="password" id="currentpassword" type="password" placeholder="Mevcut Şifreniz">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    <label for="newpassword">Yeni Şifreniz</label>
                                                    <input name="newpassword" id="newpassword" type="password" placeholder="Yeni Şifreniz">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    <label for="retypenewpassword">Yeni Şifrenizi Onaylayın</label>
                                                    <input name="confirmnewpassword" id="retypenewpassword" type="password" placeholder="Yeni Şifrenizi Onaylayın">
                                                </div>
                                            </div>
                                            <div class="col-12 mt--10">
                                                <div class="rbt-form-group">
                                                    <button type="submit" class="rbt-btn btn-gradient">Şifreyi Güncelle</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Profile Row  -->
                                    </div>

                                    <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                        <!-- Start Profile Row  -->
                                        <form method="post" class="rbt-profile-row rbt-default-form row row--15">
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    <label for="facebook"><i class="feather-facebook"></i> Facebook</label>
                                                    <input id="facebook" name="facebook" type="text" <?php if(isset($data['facebook']) && $data['facebook'] != null && $data['facebook'] != '') echo 'value="'.$data['facebook'].'"'  ?> placeholder="https://facebook.com/">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    <label for="twitter"><i class="feather-twitter"></i> Twitter</label>
                                                    <input id="twitter" name="twitter" type="text" <?php if(isset($data['twitter']) && $data['twitter'] != null && $data['twitter'] != '') echo 'value="'.$data['twitter'].'"'  ?> placeholder="https://twitter.com/">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    <label for="linkedin"><i class="feather-linkedin"></i> Linkedin</label>
                                                    <input id="linkedin" name="linkedin" type="text" <?php if(isset($data['linkedin']) && $data['linkedin'] != null && $data['linkedin'] != '') echo 'value="'.$data['linkedin'].'"' ?> placeholder="https://linkedin.com/">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    <label for="website"><i class="feather-globe"></i> Website</label>
                                                    <input id="website" name="website" type="text" <?php if(isset($data['website']) && $data['website'] != null && $data['website'] != '') echo 'value="'.$data['website'].'"'  ?> placeholder="https://website.com/">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    <label for="github"><i class="feather-github"></i> Github</label>
                                                    <input id="github" name="github" type="text" <?php if(isset($data['github']) && $data['github'] != null && $data['github'] != '') echo 'value="'.$data['github'].'"'  ?> placeholder="https://github.com/">
                                                    <input style="display: none" name="socialmedia" value="true">
                                                </div>
                                            </div>
                                            <div class="col-12 mt--10">
                                                <div class="rbt-form-group">
                                                    <button type="submit" class="rbt-btn btn-gradient">Profili Güncelle</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Profile Row  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Profile  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="file" accept="image/png, image/jpeg" id="image-upload" style="display:none"/>
<script>
    let isCover = false;
    const photoUploadButton = document.querySelector(".rbt-edit-photo");
    const coverPhotoUploadButton = document.getElementById("cover-photo-btn");
    const fileUpload = document.getElementById("image-upload");
    photoUploadButton.onclick = () => {
        isCover = false;
        fileUpload.click();
    }

    coverPhotoUploadButton.onclick = () => {
        isCover = true;
        fileUpload.click();
    }

    fileUpload.onchange = async () => {
        const formData = new FormData();
        const file = fileUpload.files[0];
        formData.append('file', file);
        formData.append('isCover', isCover);
        await fetch('/settings', {
            method: 'POST',
            body: formData
        })
        location.reload();
    }

</script>
<!-- End Card Style -->
<?php $this->endSection() ?>
