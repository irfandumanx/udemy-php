<?php $this->extend('layouts/base') ?>
<?php $this->section('style') ?>
<?php $this->endSection() ?>
<?php $this->section('script') ?>
<?php $this->endSection() ?>
<?php $this->section('content') ?>
<div class="rbt-lesson-area bg-color-white">
    <div class="rbt-lesson-content-wrapper">
        <div class="rbt-lesson-leftsidebar">
            <div class="rbt-course-feature-inner rbt-search-activation">
                <div class="section-title">
                    <h4 class="rbt-title-style-3">Kurs İçeriği</h4>
                </div>
                <div class="rbt-accordion-style rbt-accordion-02 for-right-content accordion">
                    <div class="accordion" id="accordionExampleb2">
                        <?php

                        foreach ($topics as $topic) {
                            $topicName = str_replace(" ", "", $topic['name']);
                            echo '
                                        <div class="accordion-item card">
                                            <h2 class="accordion-header card-header" id="'. $topicName .'">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#'. $topicName .'Collapse" aria-expanded="true" aria-controls="'. $topicName .'Collapse">'
                                .
                                $topic['name']
                                .
                                '</button>
                                            </h2>
                                            <div id="'.$topicName .'Collapse" class="accordion-collapse collapse" aria-labelledby="'. $topicName .'">
                                                <div class="accordion-body card-body pr--0">
                                                    <ul class="rbt-course-main-content liststyle">';
                            if(isset($topic['names']))
                                foreach ($topic['names'] as $key => $name) {
                                    echo '<li><a href="#" onclick="startVideo('. $key .')">
                                                                <div class="course-content-left">
                                                                    <i class="feather-play-circle"></i> <span
                                                                            class="text">'. $name .'</span>
                                                                </div>
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

        <div class="rbt-lesson-rightsidebar overflow-hidden lesson-video">
            <div class="lesson-top-bar">
                <div class="lesson-top-left">
                    <div class="rbt-lesson-toggle">
                        <button class="lesson-toggle-active btn-round-white-opacity" title="Toggle Sidebar"><i class="feather-arrow-left"></i></button>
                    </div>
                    <h5><?php echo $course['name'] ?></h5>
                </div>
                <div class="lesson-top-right">
                    <div class="rbt-btn-close">
                        <a href="course-details.html" title="Go Back to Course" class="rbt-round-btn"><i class="feather-info"></i></a>
                    </div>
                </div>
            </div>
            <div class="inner">
                <div class="plyr__video-embed rbtplayer">
                    <video id="course-video-plyr" style="height: 600px;width: 100%" src="<?php echo base_url().'uploads/videos/irfandumanx/Java/a10 thunderbolt.mp4' ?>" controls autoplay></video>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rbt-progress-parent">
    <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<script>
    const videoPlayer = document.getElementById('course-video-plyr');
    const startVideo = async (videoId) => {
        let response = await fetch(location.origin + "/course/getVideoUrl/" + videoId);
        let data = await response.json();
        videoPlayer.src = data['video_url'];
    }

</script>

<?php $this->endSection() ?>
