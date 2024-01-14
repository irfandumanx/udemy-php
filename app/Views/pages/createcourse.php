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
                                <h2 class="accordion-header card-header" id="accOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accCollapseOne" aria-expanded="true" aria-controls="accCollapseOne">Kurs Bilgileri
                                    </button>
                                </h2>
                                <div id="accCollapseOne" class="accordion-collapse collapse show" aria-labelledby="accOne" data-bs-parent="#tutionaccordionExamplea1">
                                    <div class="accordion-body card-body">
                                        <!-- Start Course Field Wrapper  -->
                                        <div class="rbt-course-field-wrapper rbt-default-form">
                                            <div class="course-field mb--15">
                                                <label for="field-1">Kurs Başlığı</label>
                                                <input id="field-1" type="text" placeholder="Kurs Başlığı">
                                                <small class="d-block mt_dec--5 mb--10"><i class="feather-info"></i> Başlık maksimum 50 karakterden oluşabilir.</small>
                                                <small class="d-block mt_dec--5"><i class="feather-info"></i> Videoları yüklemeye başlayınca lütfen kurs başlığını değiştirmeyiniz.</small>
                                            </div>
                                            <div class="course-field mb--15">
                                                <label for="aboutCourse">Kurs Hakkında</label>
                                                <textarea id="aboutCourse" rows="10"></textarea>
                                                <small class="d-block mt_dec--5"><i class="feather-info"></i> HTML ya da düz yazı destekler, anlaşılır ve sade bir açıklama sizi aramalarda öne çıkarabilir.</small>
                                            </div>

                                            <div class="course-field mb--15 edu-bg-gray">
                                                <h6>Kurs Ayarları</h6>
                                                <div class="rbt-course-settings-content">
                                                    <div class="row g-5">
                                                        <div class="col-lg-4">
                                                            <div class="advance-tab-button advance-tab-button-1">
                                                                <ul class="rbt-default-tab-button nav nav-tabs" id="courseSetting" role="tablist">
                                                                    <li class="nav-item" role="presentation">
                                                                        <a href="#" class="active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" role="tab" aria-controls="general" aria-selected="true">
                                                                            <span>Genel</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="tab-content">
                                                                <div class="tab-pane fade advance-tab-content-1 active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                                                    <div class="course-field mb--20">
                                                                        <label for="field-3">Öğrenci Sayısı</label>
                                                                        <div class="pro-quantity">
                                                                            <div class="pro-qty m-0"><input id="field-3" type="text" value="100"></div>
                                                                        </div>
                                                                        <small><i class="feather-info"></i> Bu kursa kayıt olabilecek maksimum öğrenci sayısı. 0 yazmanız öğrenci limitinin olmadığı anlamına gelir.</small>
                                                                    </div>

                                                                    <div class="course-field mb--20">
                                                                        <label for="field-4">Zorluk Seviyesi</label>
                                                                        <div class="rbt-modern-select bg-transparent height-45 mb--10">
                                                                            <select class="w-100" id="field-4">
                                                                                <option value="1">Tüm Seviyeler</option>
                                                                                <option value="2">Başlangıç Seviye</option>
                                                                                <option value="3">Orta Seviye</option>
                                                                                <option value="4">İleri Seviye</option>
                                                                                <option value="5">En İleri Seviye</option>
                                                                            </select>
                                                                        </div>
                                                                        <small><i class="feather-info"></i> Kurs Zorluk Seviyesi</small>
                                                                    </div>

                                                                    <div class="course-field mb--20">
                                                                        <label class="form-check-label d-inline-block" for="flexSwitchCheckDefault">Herkese Açık</label>
                                                                        <div class="form-check form-switch mb--10">
                                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                                                        </div>
                                                                        <small><i class="feather-info"></i> Kursunun görünürlük özelliğini değiştirir.</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="course-field mb--15 edu-bg-gray">
                                                <h6>Kurs Ücreti</h6>
                                                <div class="rbt-course-settings-content">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="advance-tab-button advance-tab-button-1">
                                                                <ul class="rbt-default-tab-button nav nav-tabs" id="coursePrice" role="tablist">
                                                                    <li class="nav-item w-100" role="presentation">
                                                                        <a href="#" class="active" id="paid-tab" data-bs-toggle="tab" data-bs-target="#paid" role="tab" aria-controls="paid" aria-selected="true">
                                                                            <span>Ücretli</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item w-100" role="presentation">
                                                                        <a href="#" id="free-tab" data-bs-toggle="tab" data-bs-target="#free" role="tab" aria-controls="free" aria-selected="false">
                                                                            <span>Ücretsiz</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="tab-content">
                                                                <div class="tab-pane fade advance-tab-content-1 active show" id="paid" role="tabpanel" aria-labelledby="paid-tab">
                                                                    <div class="course-field mb--15">
                                                                        <label for="regularPrice-1">Normal Fiyat (₺)</label>
                                                                        <input id="regularPrice-1" type="number" placeholder="Normal Fiyat ₺">
                                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Kurs fiyatı vergilendirmeye dahildir.</small>
                                                                    </div>

                                                                    <div class="course-field mb--15">
                                                                        <label for="discountedPrice-1">İndirimli Fiyat (₺)</label>
                                                                        <input id="discountedPrice-1" type="number" placeholder="İndirimli Fiyat ₺">
                                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> İndirimli kurs fiyatı vergilendirmeye dahildir.</small>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane fade advance-tab-content-1" id="free" role="tabpanel" aria-labelledby="free-tab">
                                                                    <div class="course-field">
                                                                        <p class="b3">Bu kurs herkes için ücretsiz olacaktır.</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="course-field mb--20">
                                                <h6>Kategori Seç</h6>
                                                <div class="rbt-modern-select bg-transparent height-45 w-100 mb--10">
                                                    <select id="course-category-slct" class="w-100" data-live-search="true" title="Kurs kategorisini seçiniz." data-size="7" data-actions-box="true" data-selected-text-format="count > 2">
                                                        <?php
                                                        $index = 0;
                                                        foreach ($data as $value) {
                                                            $index++;
                                                            echo  "<option value='$index'>$value->category</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="course-field mb--20">
                                                <h6>Kurs Kapağı</h6>
                                                <div class="rbt-create-course-thumbnail upload-area">
                                                    <div class="upload-area">
                                                        <div class="brows-file-wrapper" data-black-overlay="9">
                                                            <!-- actual upload which is hidden -->
                                                            <input name="createinputfile" id="createinputfile" type="file" class="inputfile" />
                                                            <img id="createfileImage" src="<?php echo base_url()?>assets/images/others/thumbnail-placeholder.svg" alt="file image">
                                                            <!-- our custom upload button -->
                                                            <label class="d-flex" for="createinputfile" title="Dosya Seçilmedi">
                                                                <i class="feather-upload"></i>
                                                                <span class="text-center">Dosya Seçiniz</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <small><i class="feather-info"></i> <b>Boyut:</b> 700x430 Pixel, <b>Desteklenen Dosyalar:</b> JPG, JPEG, PNG </small>
                                            </div>


                                        </div>
                                        <!-- End Course Field Wrapper  -->
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card rbt-course-field-wrapper">
                                <h2 class="accordion-header card-header" id="accSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accCollapseSix" aria-expanded="false" aria-controls="accCollapseSix">
                                        Ek Kurs Bilgileri
                                    </button>
                                </h2>
                                <div id="accCollapseSix" class="accordion-collapse collapse" aria-labelledby="accSix" data-bs-parent="#tutionaccordionExamplea1">
                                    <div class="accordion-body card-body rbt-course-field-wrapper rbt-default-form row row-15">
                                        <div class="col-lg-12">
                                            <div class="course-field mb--15">
                                                <label for="language">Dil</label>
                                                <div class="rbt-modern-select bg-transparent height-50 mb--10">
                                                    <select class="w-100" data-live-search="true" title="Türkçe" multiple data-size="7" data-actions-box="true" data-selected-text-format="count > 2" id="language">
                                                        <option value="1">Türkçe</option>
                                                        <option value="2">İngilizce</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="course-field mb--15">
                                                <label for="whatLearn">Kazanımlar</label>
                                                <textarea id="whatLearn" rows="5" placeholder="Kurs kazanımlarını buraya ekleyin."></textarea>
                                                <small class="d-block mt_dec--5"><i class="feather-info"></i> Satır geçişi için enter tuşunu kullanın.</small>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="course-field mb--15">
                                                <label for="description">Gereklilikler</label>
                                                <textarea id="description" rows="5" placeholder="Kurs gerekliliklerini buraya ekleyin."></textarea>
                                                <small class="d-block mt_dec--5"><i class="feather-info"></i> Satır geçişi için enter tuşunu kullanın.</small>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <hr class="mt--10 mb--20">
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="course-field mb--15">
                                                <label>Kurs Süresi</label>
                                                <div class="row row--15">
                                                    <div class="col-lg-6">
                                                        <input id="hours-inpt" type="number" placeholder="00">
                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Saat.</small>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input id="minutes-inpt" type="number" placeholder="00">
                                                        <small class="d-block mt_dec--5"><i class="feather-info"></i> Dakika.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt--10 row g-5">
                        <div class="col-lg-12">
                            <button id="create-crs-btn" class="rbt-btn btn-gradient hover-icon-reverse w-100 text-center">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Kursu Oluştur</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                            </button>
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

    <script>
    const createCourseBtn = document.getElementById('create-crs-btn');
    const courseNameInput = document.getElementById('field-1');
    const aboutCourseInput = document.getElementById('aboutCourse');
    const studentCountInput = document.getElementById('field-3');
    const courseLevelInput = document.getElementById('field-4');
    const courseVisibleInput = document.getElementById('flexSwitchCheckDefault');
    const paidTab = document.getElementById('paid-tab');
    const freeTab = document.getElementById('free-tab');
    const regularPriceInput = document.getElementById('regularPrice-1');
    const discountedPriceInput = document.getElementById('discountedPrice-1');
    const courseCategoryInput = document.getElementById('course-category-slct');
    const courseImageInput = document.getElementById('createinputfile');
    const courseLanguageInput = document.getElementById('language');
    const courseBenefitsInput = document.getElementById('whatLearn');
    const courseRequirementsInput = document.getElementById('description');
    const hoursInput = document.getElementById('hours-inpt');
    const minutesInput = document.getElementById('minutes-inpt');

    const courseImage = document.getElementById('createfileImage');
    const accThreeDiv = document.getElementById('accThree');

    createCourseBtn.onclick = async () => {
        let price = 0;
        let formData = new FormData();
        let languageOptions = Array.from(courseLanguageInput.selectedOptions).map(v=>v.value);
        console.log(languageOptions)
        languageOptions = languageOptions.length === 0 ? ["1"] : languageOptions;
        console.log(languageOptions)
        formData.append('name', courseNameInput.value);
        formData.append('bio', aboutCourseInput.value);
        formData.append('student', studentCountInput.value);
        formData.append('level', courseLevelInput.value);
        formData.append('visible', courseVisibleInput.checked);
        formData.append('category', courseCategoryInput.value);
        formData.append('benefits', courseBenefitsInput.value);
        formData.append('requirements', courseRequirementsInput.value);
        formData.append('languages', languageOptions);
        formData.append('hours', hoursInput.value);
        formData.append('minutes', minutesInput.value);
        formData.append('file', courseImageInput.files[0]);
        if (freeTab.classList.contains('active'))
            price = 0;
        else {
            if(discountedPriceInput.value.trim() !== '')
                price = discountedPriceInput.value.trim();
            else if(regularPriceInput.value.trim() !== '')
                price = regularPriceInput.value.trim();
        }
        formData.append('price', price);

        let response = await fetch('/course/create', {
            method: 'POST',
            body: formData
        });
        let json = await response.json();
        location.href = '/course/addvideo/' + json['course_id'];
    }

    courseNameInput.onkeyup = () => {
        if(courseNameInput.value.trim() === '')
            accThreeDiv.classList.add('disabled');
        else if(accThreeDiv.classList.contains('disabled'))
            accThreeDiv.classList.remove('disabled');

    }

    courseImageInput.onchange = (event) => {
        courseImage.src = URL.createObjectURL(event.target.files[0]);
    }

</script>
<?php $this->endSection() ?>
