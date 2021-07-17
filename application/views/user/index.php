<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <img class="img-fluid w-100 my-4" src="<?= base_url('assets/img/profile/bg.jpg')?>" alt="">
    

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 