<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->

    
    <div class="container bg-white p-4">
        <div class="row">
            <div class="col-lg-8">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>
        <div class="row mb-4 ml-1">
            <form class="d-flex" action="<?= base_url($this->uri->segment(1)) ?>" method="get">
                <input type="search" class="form-control my-auto" id="search" name="search">
                <button type="submit" class="btn btn-primary my-auto ml-2">Cari</button>
            </form>
            <?php if ($user['role'] == 'Admin'): ?>
                <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#input">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Tambah Data</span>
                </button>
            <?php endif; ?>
        </div>
        
        <div class="modal fade" id="input" tabindex="-1" aria-labelledby="input" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="input">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url($this->uri->segment(1)) ?>" method="post">
                            <div class="form-group" >
                                <label for="nama">Nama</label>
                                <input type="name" class="form-control" id="nama" name="nama">
                                <?= form_error('nama', '<small class="text-danger ml-0">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col" class="w-75">Nama</th>
                    <th scope="col" class="text-center text-nowrap">Buka Folder</th>
                    <?php if ($user['role'] == 'Admin'): ?>
                        <th scope="col" class="text-center text-nowrap">Hapus Folder</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($list as $list) : ?>
                    <tr>
                        <th scope="row" ><?= $no++ ?></th>
                        <td class="w-75"><span><?= $list['nama']; ?></span></td>
                        <td>
                            <a href="<?= base_url($this->uri->slash_segment(1) . $list['id']) ?>" class="btn btn-primary d-block mx-auto">Buka</a>
                        </td>
                        <?php if ($user['role'] == 'Admin'): ?>
                            <td>
                                <a href="<?= base_url($this->uri->slash_segment(1) ."hapus/". $list['id']) ?>" class="btn btn-danger d-block mx-auto">Hapus</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 