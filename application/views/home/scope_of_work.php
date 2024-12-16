<!-- Page Header Start -->
<div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

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
                        <p><?= $s['penjelasan_scope']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>