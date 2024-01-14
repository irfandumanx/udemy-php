<?php $this->extend('layouts/base') ?>
<?php $this->section('style') ?>
<?php $this->endSection() ?>
<?php $this->section('script') ?>
<?php $this->endSection() ?>
<?php $this->section('content') ?>
<div class="rbt-breadcrumb-default rbt-breadcrumb-style-3">
    <div class="breadcrumb-inner">
        <img src="<?php echo base_url() ?>assets/images/bg/bg-image-10.jpg" alt="Education Images">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="content">
                    <div class="content text-start">
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="/">Anasayfa</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active"><?php echo $course['category']?></li>
                        </ul>
                        <h2 class="title"><?php echo $course['name']?></h2>
                        <p class="description"><?php echo $course['bio']?></p>
                        <div class="d-flex align-items-center mb--20 flex-wrap rbt-course-details-feature">
                            <div class="feature-sin best-seller-badge">
                                    <span class="rbt-badge-2">
                                            <span class="image"><img src="<?php echo base_url() ?>assets/images/icons/card-icon-1.png"
                                                                     alt="Best Seller Icon"></span> En Çok Satan
                                    </span>
                            </div>

                            <div class="feature-sin rating">
                                <a href="#">4.8</a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>

                            <div class="feature-sin total-rating">
                                <a class="rbt-badge-4" href="#">6 Puanlayan</a>
                            </div>

                            <div class="feature-sin total-student">
                                <span>10 Öğrenci</span>
                            </div>

                        </div>

                        <div class="rbt-author-meta mb--20">
                            <div class="rbt-avater">
                                <a href="#">
                                    <img src="<?php if(isset($owner['photourl'])) echo base_url().'uploads/photos/'.$owner['username'].'/'.$owner['photourl']; else echo base_url().'assets/images/team/avatar.jpg'?>" alt="adam olin oglieeem">
                                </a>
                            </div>
                            <div class="rbt-author-info">
                                Eğitmen <?php echo "<a href='profile.html'>{$owner['name']} {$owner['surname']}</a>" ?>
                            </div>
                        </div>

                        <ul class="rbt-meta">
                            <li><i class="feather-globe"></i><?php echo implode(', ', $course['languages'])?></li>
                            <li><i class="feather-award"></i>Sertifikalı Kurs</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rbt-course-details-area ptb--60">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="course-details-content">
                    <div class="rbt-course-feature-box rbt-border-with-box thuumbnail">
                        <img class="w-100" src="<?php if(isset($course['coursephoto'])) echo base_url(). "uploads/photos/{$owner['username']}/{$course['name']}/{$course['coursephoto']}"; else echo base_url().'assets/images/course/course-01.jpg' ?>" alt="Course image">
                    </div>

                    <div class="rbt-inner-onepage-navigation sticky-top mt--30">
                        <nav class="mainmenu-nav onepagenav">
                            <ul class="mainmenu">
                                <li class="current">
                                    <a href="#overview">Genel Görünüm</a>
                                </li>
                                <li>
                                    <a href="#coursecontent">Kurs İçeriği</a>
                                </li>
                                <li>
                                    <a href="#details">Detaylar</a>
                                </li>
                                <li>
                                    <a href="#intructor">Eğitmen</a>
                                </li>
                                <li>
                                    <a href="#review">Yorumlar</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Start Course Content  -->
                    <div class="course-content rbt-border-with-box coursecontent-wrapper mt--30" id="coursecontent">
                        <div class="rbt-course-feature-inner">
                            <div class="section-title">
                                <h4 class="rbt-title-style-3">Kurs İçeriği</h4>
                            </div>
                            <div class="rbt-accordion-style rbt-accordion-02 accordion">
                                <div class="accordion" id="accordionExampleb2">
                            <?php

                            foreach ($topics as $topic) {
                                $topicName = str_replace(" ", "", $topic['name']);
                                echo '
                                        <div class="accordion-item card">
                                            <h2 class="accordion-header card-header" id="'. $topicName .'">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#'. $topicName .'Collapse" aria-expanded="false" aria-controls="'. $topicName .'Collapse">'
                                                    .
                                                    $topic['name']
                                                    .
                                                '</button>
                                            </h2>
                                            <div id="'.$topicName .'Collapse" class="accordion-collapse collapse" aria-labelledby="'. $topicName .'" data-bs-parent="#accordionExampleb2">
                                                <div class="accordion-body card-body pr--0">
                                                    <ul class="rbt-course-main-content liststyle">';
                                                    if(isset($topic['names']))
                                                    foreach ($topic['names'] as $name) {
                                                        echo '<li><a>
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                            class="text">'. $name .'</span>
                                                                </div>
                                                                <div class="course-content-right">';
                                                                    if (($course['price'] != 0)) echo '<span class="course-lock"><i class="feather-lock"></i></span>';
                                                                echo '</div>
                                                        </a></li>';
                                                    }
                                                   echo '</ul>
                                                </div>
                                            </div>
                                        </div>
                                ';
                            }
                            ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Course Content  -->

                    <!-- Start Course Feature Box  -->
                    <div class="rbt-course-feature-box rbt-border-with-box details-wrapper mt--30" id="details">
                        <div class="row g-5">
                            <!-- Start Feture Box  -->
                            <div class="col-lg-6">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3 mb--20">Gereklilikler</h4>
                                </div>
                                <ul class="rbt-list-style-1">
                                    <li><i class="feather-check"></i><?php echo $course['requirements'] ?></li>
                                </ul>
                            </div>
                            <!-- End Feture Box  -->

                            <!-- Start Feture Box  -->
                            <div class="col-lg-6">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3 mb--20">Kazanımlar</h4>
                                </div>
                                <ul class="rbt-list-style-1">
                                    <li><i class="feather-check"></i><?php echo $course['benefits'] ?></li>
                                </ul>
                            </div>
                            <!-- End Feture Box  -->
                        </div>
                    </div>
                    <!-- End Course Feature Box  -->

                    <!-- Start Intructor Area  -->
                    <div class="rbt-instructor rbt-border-with-box intructor-wrapper mt--30" id="intructor">
                        <div class="about-author border-0 pb--0 pt--0">
                            <div class="section-title mb--30">
                                <h4 class="rbt-title-style-3">Eğitmen</h4>
                            </div>
                            <div class="media align-items-center">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="<?php if(isset($owner['photourl'])) echo base_url().'uploads/photos/'.$owner['username'].'/'.$owner['photourl']; else echo base_url().'assets/images/team/avatar.jpg'?>" alt="Author Images">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="author-info">
                                        <h5 class="title">
                                            <a class="hover-flip-item-wrapper" href="author.html"><?php echo $owner['name'] . ' ' . $owner['surname'] ?></a>
                                        </h5>
                                        <span class="b3 subtitle">Deneyimli Eğitmen</span>
                                        <ul class="rbt-meta mb--20 mt--10">
                                            <li><i class="fa fa-star color-warning"></i>2 Yorum <span class="rbt-badge-5 ml--5">4.8 Yıldız</span></li>
                                            <li><i class="feather-users"></i>10 Öğrenci</li>
                                            <li><a href="#"><i class="feather-video"></i>1 Kurs</a></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <p class="description"><?php echo $owner['bio']?></p>

                                        <ul class="social-icon social-default icon-naked justify-content-start">
                                            <?php
                                                if (isset($owner['socialmedias']['facebook']) && $owner['socialmedias']['facebook'] !== '')
                                                 echo "<li><a href='{$owner['socialmedias']['facebook']}'>
                                                            <i class='feather-facebook'></i>
                                                            </a>
                                                        </li>";

                                                if (isset($owner['socialmedias']['twitter']) && $owner['socialmedias']['twitter'] !== '')
                                                     echo "<li><a href='{$owner['socialmedias']['twitter']}'>
                                                                <i class='feather-twitter'></i>
                                                                </a>
                                                            </li>";

                                                if (isset($owner['socialmedias']['linkedin']) && $owner['socialmedias']['linkedin'] !== '')
                                                     echo "<li><a href='{$owner['socialmedias']['linkedin']}'>
                                                                <i class='feather-linkedin'></i>
                                                                </a>
                                                            </li>";

                                            if (isset($owner['socialmedias']['website']) && $owner['socialmedias']['website'] !== '')
                                                echo "<li><a href='{$owner['socialmedias']['website']}'>
                                                            <i class='feather-link'></i>
                                                            </a>
                                                        </li>";
                                            if (isset($owner['socialmedias']['github']) && $owner['socialmedias']['github'] !== '')
                                                echo "<li><a href='{$owner['socialmedias']['github']}'>
                                                            <i class='feather-github'></i>
                                                            </a>
                                                        </li>";
                                            ?>

                                        </ul>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Intructor Area  -->

                    <!-- Start Edu Review List  -->
                    <div class="rbt-review-wrapper rbt-border-with-box review-wrapper mt--30" id="review">
                        <div class="course-content">
                            <div class="section-title">
                                <h4 class="rbt-title-style-3">Yorumlar</h4>
                            </div>
                            <div class="row g-5 align-items-center">
                                <div class="col-lg-3">
                                    <div class="rating-box">
                                        <div class="rating-number">5.0</div>
                                        <div class="rating">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                        </div>
                                        <span class="sub-title">Kurs Puanı</span>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="review-wrapper">
                                        <div class="single-progress-bar">
                                            <div class="rating-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="value-text">63%</span>
                                        </div>

                                        <div class="single-progress-bar">
                                            <div class="rating-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="value-text">29%</span>
                                        </div>

                                        <div class="single-progress-bar">
                                            <div class="rating-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 6%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="value-text">6%</span>
                                        </div>

                                        <div class="single-progress-bar">
                                            <div class="rating-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="value-text">1%</span>
                                        </div>

                                        <div class="single-progress-bar">
                                            <div class="rating-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                </svg>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="value-text">1%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Edu Review List  -->


                    <div class="about-author-list rbt-border-with-box featured-wrapper mt--30 has-show-more">
                        <div class="section-title">
                            <h4 class="rbt-title-style-3">Öne Çıkan Yorumlar</h4>
                        </div>
                        <div class="has-show-more-inner-content rbt-featured-review-list-wrapper">
                            <div class="rbt-course-review about-author">
                                <div class="media">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="https://placehold.co/494x494?text=Ömer+Ali+Duman" alt="Author Images">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="author-info">
                                            <h5 class="title">
                                                <a class="hover-flip-item-wrapper" href="#">
                                                    Ömer Ali Duman
                                                </a>
                                            </h5>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <p class="description">Ön yargıyla satın aldığım bu eğitimde, eğitmen bu yargımı çok güzel kırdı! Herkese öneririm.</p>
                                            <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                <li><a href="#">
                                                        <i class="feather-thumbs-up"></i>
                                                    </a>
                                                </li>
                                                <li><a href="#">
                                                        <i class="feather-thumbs-down"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rbt-course-review about-author">
                                <div class="media">
                                    <div class="thumbnail">
                                        <a href="#">
                                            <img src="https://placehold.co/494x494?text=Duru+Ulu" alt="Author Images">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="author-info">
                                            <h5 class="title">
                                                <a class="hover-flip-item-wrapper" href="#">
                                                    Duru Ulu
                                                </a>
                                            </h5>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <p class="description">Online eğitim için beklentim düşüktü. Beklentimin çok üstünde verim alıdığım bir eğitim oldu.</p>
                                            <ul class="social-icon social-default transparent-with-border justify-content-start">
                                                <li><a href="#">
                                                        <i class="feather-thumbs-up"></i>
                                                    </a>
                                                </li>
                                                <li><a href="#">
                                                        <i class="feather-thumbs-down"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="course-sidebar sticky-top rbt-border-with-box course-sidebar-top rbt-gradient-border">
                    <div class="inner">
                        <div class="content-item-content">
                            <div class="rbt-price-wrapper d-flex flex-wrap align-items-center justify-content-between">
                                <div class="rbt-price">
                                    <span class="current-price"><?php if ($course['price'] == 0) echo 'Ücretsiz'; else echo $course['price'].'₺' ?></span>
                                </div>
                            </div>

                            <div class="add-to-card-button mt--15">
                                <a class="rbt-btn btn-gradient icon-hover w-100 d-block text-center" href="#">
                                    <span class="btn-text"> <?php if($course['price'] == 0) echo 'Kaydol'; else echo 'Satın Al' ?></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </a>
                            </div>
                            <span class="subtitle">
                            <?php
                                if($course['price'] != 0) echo '<i class="feather-rotate-ccw"></i> 30 gün içerisinde iade hakkınız vardır.'
                            ?>
                            </span>
                            <div class="rbt-widget-details has-show-more">
                                <ul class="has-show-more-inner-content rbt-course-details-list-wrapper">
                                    <li><span>Ders Uzunluğu</span><span class="rbt-feature-value rbt-badge-5">5 Saat 20 Dakika</span>
                                    </li>
                                    <li><span>Ders Sayısı</span><span class="rbt-feature-value rbt-badge-5"><?php echo $lectureCount ?></span></li>
                                    <li><span>Seviye</span><span class="rbt-feature-value rbt-badge-5"><?php echo $course['level'] ?></span></li>
                                    <li><span>Dil</span><span class="rbt-feature-value rbt-badge-5"><?php echo implode(', ', $course['languages'])?></span></li>
                                    <li><span>Sertifika</span><span class="rbt-feature-value rbt-badge-5">Evet</span></li>
                                </ul>
                                <div class="rbt-show-more-btn">Daha Fazla Göster</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>
