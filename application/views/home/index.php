<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative mb-5">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="<?= base_url('frontend/timu/'); ?>img/bg-timu.png" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Trans-Logistics Services</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">PT TERMINAL <span class="text-primary">INTIMODA</span> UTAMA</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container about py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url('frontend/timu/'); ?>img/peta-timu.jpg" style="object-fit:contain" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="text-primary text-uppercase mb-3">About Us</h6>
                <h1 class="mb-5">Vision and Mission</h1>
                <div class="row g-4 mb-5">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                        <h5>Vision</h5>
                        <p class="m-0">To increase the value of our business, do marketing on a global scale closely coordinate our network of business development</p>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                        <h5>Mission</h5>
                        <p class="m-0">To become the most competitive Indonesian company that always move forward by increasing the values of our company</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">Our Services</h6>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4">
            <?php foreach ($scope as $s) : ?>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4 content-box">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="<?= base_url('uploads/gambar_scope/') . $s['gambar_scope']; ?>" alt="">
                        </div>
                        <h4 class="mb-3"><?= $s['jenis_scope']; ?></h4>
                        <a class="btn-slide mt-2" href="<?= base_url('home/scope_of_work'); ?>"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Feature Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container feature py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-3">Our Features</h6>
                <h1 class="mb-5">We Are Trusted Logistics Company Since 1996</h1>
                <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Import / Export Service</h5>
                    </div>
                </div>
                <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-shipping-fast text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Local / Inter-Island Shipment</h5>
                    </div>
                </div>
                <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                    <i class="fa fa-headphones text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Door to Door Shipment</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url('frontend/timu/'); ?>img/about.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Core Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">Our Core</h6>
            <h1 class="mb-5">Core</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="price-item content-box">
                    <div class="border-bottom p-4 mb-4">
                        <h5 class="text-primary mb-1">CORE</h5>
                        <h1 class="display-5 mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>Integrity
                        </h1>
                    </div>
                    <div class="p-4 pt-0">
                        <img src="<?= base_url('frontend/timu/'); ?>img/yoiii.png" alt="" class="img-fluid mt-3">
                        <a class="btn-slide mt-2" href="<?= base_url('home/about'); ?>"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="price-item content-box">
                    <div class="border-bottom p-4 mb-4">
                        <h5 class="text-primary mb-1">CORE</h5>
                        <h1 class="display-5 mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>Understanding
                        </h1>
                    </div>
                    <div class="p-4 pt-0">
                        <img src="<?= base_url('frontend/timu/'); ?>img/understanding.png" alt="" class="img-fluid mt-3">
                        <a class="btn-slide mt-2" href="<?= base_url('home/about'); ?>"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="price-item content-box">
                    <div class="border-bottom p-4 mb-4">
                        <h5 class="text-primary mb-1">CORE</h5>
                        <h1 class="display-5 mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>Excellence
                        </h1>
                    </div>
                    <div class="p-4 pt-0">
                        <img src="<?= base_url('frontend/timu/'); ?>img/excellence.png" alt="" class="img-fluid mt-3">
                        <a class="btn-slide mt-2" href="<?= base_url('home/about'); ?>"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="price-item">
                    <div class="border-bottom p-4 mb-4">
                        <h5 class="text-primary mb-1">CORE</h5>
                        <h1 class="display-5 mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>Unity
                        </h1>
                    </div>
                    <div class="p-4 pt-0">
                        <img src="<?= base_url('frontend/timu/'); ?>img/unity.png" alt="" class="img-fluid mt-3">
                        <a class="btn-slide mt-2" href="<?= base_url('home/about'); ?>"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="price-item">
                    <div class="border-bottom p-4 mb-4">
                        <h5 class="text-primary mb-1">CORE</h5>
                        <h1 class="display-5 mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>Responsibility
                        </h1>
                    </div>
                    <div class="p-4 pt-0">
                        <img src="<?= base_url('frontend/timu/'); ?>img/respon.png" alt="" class="img-fluid mt-3">
                        <a class="btn-slide mt-2" href="<?= base_url('home/about'); ?>"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Core End -->


<!-- Main Customer Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center">
            <h6 class="text-primary text-uppercase">Customer</h6>
            <h1 class="mb-0">OUR MAIN CUSTOMER AND PARTNERS</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s" data-autoplay="true" data-autoplay-timeout="3000">
            <?php foreach ($main_customer as $m) : ?>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="<?= base_url('uploads/logos/') . $m->logo_customer; ?>" style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1"><?= $m->nama_customer; ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
</div>
<!-- Main Customer End -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>