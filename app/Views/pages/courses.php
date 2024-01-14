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
    <div class="rbt-banner-content">
        <!-- Start Banner Content Top  -->
        <div class="rbt-banner-content-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Start Breadcrumb Area  -->
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="/">Anasayfa</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Tüm Kurslar</li>
                        </ul>
                        <!-- End Breadcrumb Area  -->

                        <div class=" title-wrapper">
                            <h1 class="title mb--0">Tüm Kurslar</h1>
                            <a href="#" class="rbt-badge-2">
                                <div class="image">🎉</div> <?php echo $courseCount ?> Kurs
                            </a>
                        </div>

                        <p class="description">Çalışmak istediğiniz alanda alacağınız kurslar size ciddi katkı sağlayacaktır. </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Content Top  -->
    </div>
</div>
<div class="rbt-section-overlayping-top rbt-section-gapBottom">
    <div class="container">
        <!-- Start Card Area -->
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="rbt-myTabContent">
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="rbt-course-grid-column active-list-view">
                            <!-- Start Single Course  -->
                            <?php

                                foreach ($courses as $course) {
                                    $fakeCount = rand(1, 50);
                                    echo '
                                    <div class="course-grid-3">
                                        <div class="rbt-card variation-01 rbt-hover card-list-2">
                                            <div class="rbt-card-img">
                                                <a href="course/' . $course->id . '">
                                                    <img src="';
                                        if (isset($course->coursephoto)) echo base_url() . 'uploads/photos/' . $course->owner->username . '/' . $course->name .'/'.$course->coursephoto; else echo base_url() . 'assets/images/course/language-academy-02.jpg';
                                    echo '" alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <div class="rbt-card-top">
                                                    <div class="rbt-review">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <span class="rating-count"> '. rand(1, $fakeCount - 1) . ' Yorumlar</span>
                                                    </div>
                                                    <div class="rbt-bookmark-btn">
                                                        <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                                class="feather-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="rbt-card-title"><a href="course/' . $course->id . '">'. $course->name .'</a>
                                                </h4>
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>'. $course->lessonCount .' Ders</li>
                                                    <li><i class="feather-users"></i>'. $fakeCount .' Öğrenci</li>
                                                </ul>
        
                                                <p class="rbt-card-text">'. $course->bio .'</p>
                                                <div class="rbt-author-meta mb--10">
                                                    <div class="rbt-avater">
                                                        <a href="#">
                                                            <img src="';
                                             if (isset($course->owner->photourl)) echo base_url() . 'uploads/photos/' . $course->owner->username . '/' . $course->owner->photourl; else echo base_url() . 'assets/images/team/avatar.jpg';
                                    echo '" alt="Eğitmen Fotosu">
                                                        </a>
                                                    </div>
                                                    <div class="rbt-author-info">
                                                        Eğitmen <a href="profile.html">'. $course->owner->name . ' ' . $course->owner->surname .'</a>
                                                    </div>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <span class="current-price">';
                                    if ($course->price == 0)
                                        echo 'Ücretsiz';
                                    else
                                        echo $course->price.'₺';
                                    echo '</span>
                                                    </div>
                                                    <a class="rbt-btn-link left-icon" href="course-details.html">';
                                    if ($course->price == 0) echo '<i class="feather-user-plus"></i> Kayıt Ol'; else echo '<i class="feather-shopping-cart"></i> Satın Al';
                                    echo '
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    ';
                                }


                            ?>

                            <!-- End Single Course  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>
