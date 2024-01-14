<?php $this->extend('layouts/base') ?>
<?php $this->section('style') ?>
<?php $this->endSection() ?>
<?php $this->section('script') ?>
<?php $this->endSection() ?>
<?php $this->section('content') ?>
<main class="rbt-main-wrapper">
    <div class="rbt-create-course-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="rbt-accordion-style rbt-accordion-01 rbt-accordion-06 accordion">
                        <div class="accordion" id="tutionaccordionExamplea1">
                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="accThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accCollapseThree" aria-expanded="false" aria-controls="accCollapseThree">
                                        Kurs Başlıklarını Aç ve Videoları Yükle
                                    </button>
                                </h2>

                                <div id="accCollapseThree" class="accordion-collapse collapse" aria-labelledby="accThree" data-bs-parent="#tutionaccordionExamplea1">
                                    <?php


                                    foreach ($topics as $topic) {
                                        $topicName = str_replace(" ", "", $topic['name']);
                                        echo <<< EOT
                                            <h2 class="accordion-header card-header" id="$topicName">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{$topicName}Collapse" aria-expanded="false" aria-controls="{$topicName}Collapse">
                                                    {$topic['name']}
                                                </button>
                                            </h2>
                                            <div id="{$topicName}Collapse" class="accordion-collapse collapse" aria-labelledby="$topicName">
                                                <div class="accordion-body card-body">
                                            EOT;
                                                if(isset($topic["urls"]))
                                                    foreach ($topic["urls"] as $url) {
                                                        echo "<small class=\"d-block mt_dec--5 mb--20\"><i class=\"feather-info\"></i> $url </small>";
                                                    }

                                            echo <<< EOT
                                                    <button id="{$topicName}-btn" class="rbt-btn btn-sm btn-gradient hover-icon-reverse" type="button" data-bs-toggle="modal" data-bs-target="#videoUploadModal">
                                                                    <span class="icon-reverse-wrapper">
                                                                        <span class="btn-text">Video Ekle</span>
                                                                    <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                                                                    <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                                                                    </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <script>
                                                    document.getElementById("{$topicName}-btn").onclick = () => {
                                                        const addedTopicVideoUploadBtn = document.getElementById('video-upl-btn');
                                                        addedTopicVideoUploadBtn.onclick = async () => {
                                                            await sendFileAndTopic(uploadVideoInput.files[0], "{$topic['name']}");  
                                                        }
                                                    }
                                            </script>
                                        EOT;
                                    }


                                    ?>

                                    <div class="accordion-body card-body">
                                        <button class="rbt-btn btn-md btn-gradient hover-icon-reverse" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Konu Başlığı Ekle</span>
                                                <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                                                <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                                                </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="rbt-create-course-sidebar course-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                        <div class="inner">
                            <div class="section-title mb--30">
                                <h4 class="title">Kurs Yükleme Detayları</h4>
                            </div>
                            <div class="rbt-course-upload-tips">
                                <ul class="rbt-list-style-1">
                                    <li><i class="feather-check"></i> Kurs fiyatlandırmasını yapın</li>
                                    <li><i class="feather-check"></i> Öğrenci sayısını ayarlayın.</li>
                                    <li><i class="feather-check"></i> Zorluk seviyesini ayarlayın.</li>
                                    <li><i class="feather-check"></i> Kurs Görünürlüğü ayarlayın.</li>
                                    <li><i class="feather-check"></i> Kurs dilini konuştuğunuz dil ve kaynaklara göre seçiniz.</li>
                                    <li><i class="feather-check"></i> Kurs kapağı 700x430 olmalı.</li>
                                    <li><i class="feather-check"></i> Konu başlıklarını eklemeyi unutmayın.</li>
                                    <li><i class="feather-check"></i> Kurs gereksinimlerini ve kazanımları eklemeyi unutmayın.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Modal Area  -->
    <div class="rbt-default-modal modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="feather-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="inner rbt-default-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="modal-title mb--20" id="exampleModalLabel">Başlık Ekle</h5>
                                <div class="course-field mb--20">
                                    <label for="modal-field-1">Başlık Adı</label>
                                    <input id="modal-field-1" type="text">
                                    <small><i class="feather-info"></i> Konu başlıkları gerekli olan yerlerde herkese açık olarak görüntülenir. Her konu bir veya daha fazla ders, sınav ve ödev içerebilir.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-circle-shape"></div>
                <div class="modal-footer pt--30">
                    <button id="topic-add-btn" type="button" class="rbt-btn btn-border btn-md radius-round-10" data-bs-dismiss="modal">Ekle</button>
                </div>
            </div>
        </div>
    </div>
    <div class="rbt-default-modal modal fade" id="videoUploadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="rbt-round-btn" data-bs-dismiss="modal" aria-label="Close">
                        <i class="feather-x"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="inner rbt-default-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="course-field mb--20">
                                    <label for="modal-field-2">Ders Adı</label>
                                    <input id="modal-field-2" type="text">
                                    <small><i class="feather-info"></i> Dersin adını açıklayıcı giriniz.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="course-field mb--20">
                                <h6>Video Seçin</h6>
                                <div class="rbt-create-course-thumbnail upload-area">
                                    <div class="upload-area">
                                        <div class="brows-file-wrapper" data-black-overlay="9">
                                            <!-- actual upload which is hidden -->
                                            <input name="uploadvideo" id="uploadvideo" type="file" class="inputfile" />
                                            <img id="uploadvideoImage" src="<?php echo base_url()?>assets/images/others/thumbnail-placeholder.svg" alt="file image">
                                            <!-- our custom upload button -->
                                            <label class="d-flex" for="uploadvideo" title="Video Seçilmedi">
                                                <i class="feather-upload"></i>
                                                <span id="video-name" class="text-center">Video Seçiniz</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <small><i class="feather-info"></i> <b>Maks Boyut:</b> 2GB, <b>Desteklenen Dosyalar:</b> MP4, MOV </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-circle-shape"></div>
                <div class="modal-footer pt--30">
                    <button id="video-upl-btn" type="button" class="rbt-btn btn-border btn-md radius-round-10" data-bs-dismiss="modal">Yükle</button>
                </div>
            </div>
        </div>
    </div>
<script>
    const videoName = document.getElementById('video-name');
    const topicAddButton = document.getElementById("topic-add-btn");
    const topicNameInput = document.getElementById("modal-field-1");
    const lessonNameInput = document.getElementById("modal-field-2");
    const accCollapseThree = document.getElementById("accCollapseThree");
    const uploadVideoInput = document.getElementById("uploadvideo");

    uploadVideoInput.onchange = (event) => {
        videoName.innerText = event.target.files[0].name;
    }
    topicAddButton.onclick = async () => {
        const topic = topicNameInput.value;
        const topicForElement = topic.replaceAll(" ", "");
        const accordionItem = document.createElement("div");
        accordionItem.classList.add("accordion-item", "card");
        accordionItem.innerHTML = `
            <h2 class="accordion-header card-header" id="${topicForElement}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#${topicForElement + 'Collapse'}" aria-expanded="false" aria-controls="${topicForElement + 'Collapse'}">
                    ${topic}
                </button>
            </h2>
            <div id="${topicForElement + 'Collapse'}" class="accordion-collapse collapse" aria-labelledby="${topicForElement}">
                <div class="accordion-body card-body">
                    <button id="${topicForElement + '-btn'}" class="rbt-btn btn-sm btn-gradient hover-icon-reverse" type="button" data-bs-toggle="modal" data-bs-target="#videoUploadModal">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">Video Ekle</span>
                            <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                            <span class="btn-icon"><i class="feather-plus-circle"></i></span>
                            </span>
                    </button>
                </div>
            </div>
            `
        accCollapseThree.insertBefore(accordionItem, accCollapseThree.childNodes[accCollapseThree.childNodes.length - 2]);
        const addedTopicBtn = document.getElementById(topicForElement + '-btn');
        addedTopicBtn.onclick = () => {
            const addedTopicVideoUploadBtn = document.getElementById('video-upl-btn');
            addedTopicVideoUploadBtn.onclick = async () => {
                await sendFileAndTopic(uploadVideoInput.files[0], topic);
            }
        }
        topicNameInput.value = "";

        let formData = new FormData();
        formData.append('name', topic);
        await fetch(location.pathname, {
            method: 'POST',
            body: formData
        });
    }

    async function sendFileAndTopic(file, topic) {
        const CHUNK_SIZE = 1024 * 1024 * 2; // 2MB
        let start = 0;
        let end = CHUNK_SIZE;
        let chunks = [];

        const topicForElement = topic.replaceAll(" ", "");
        const topicEl = document.getElementById(topicForElement + 'Collapse');
        const topicChild = topicEl.querySelector(".accordion-body");
        const smallEl = document.createElement('small');
        smallEl.classList.add('d-block', 'mt_dec--5', 'mb--20');
        smallEl.innerHTML = `<i class="feather-info"></i> ${file.name} yükleniyor lütfen bekleyiniz.`
        topicChild.insertBefore(smallEl, topicChild.childNodes[topicChild.childNodes.length - 3]);


        while (start < file.size) {
            let chunk = file.slice(start, end);
            chunks.push(chunk);
            start = end;
            end = start + CHUNK_SIZE;
        }

        await chunks.forEach((chunk, index) => {
            let formData = new FormData();
            formData.append('file', chunk);
            formData.append('name', file.name);
            formData.append('index', index);
            formData.append('topic', topic);
            formData.append('finish', false);
            fetch(location.pathname, {
                method: 'POST',
                body: formData
            });
        });
        let formData = new FormData();
        formData.append('name', file.name);
        formData.append('topic', topic);
        formData.append('finish', true);
        formData.append('lesson_name', lessonNameInput.value);
        setTimeout(async () => {
            let response = await fetch(location.pathname, {
                method: 'POST',
                body: formData
            });
            uploadVideoInput.value = '';
            lessonNameInput.value = '';
            videoName.innerText = 'Video Seçiniz';
            if(response.status !== 200) return;
            //<small class=\"d-block mt_dec--5 mb--20\"><i class=\"feather-info\"></i> $url </small>
            smallEl.innerHTML = `<i class="feather-info"></i> ${file.name}`
        }, 30000);
    }


</script>
<?php $this->endSection() ?>