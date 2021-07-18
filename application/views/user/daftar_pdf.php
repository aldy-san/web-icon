<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $tex; ?></h1> -->

    
    <div class="container bg-white p-4">
        <div class="row">
            <div class="col-lg-8">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>
        <?php if ($user['role'] == 'Admin'): ?>
            <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#input">
                <i class="fas fa-fw fa-plus"></i>
                <span>Tambah Dokumen</span>
            </button>
        <?php endif; ?>
        <div class="modal fade" id="input" tabindex="-1" aria-labelledby="input" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="input">Tambah Dokumen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= form_open_multipart($this->uri->slash_segment(1).$this->uri->segment(2)) ?>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="dokumen">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="dokumen" name="dokumen" aria-describedby="dokumen">
                                    <label class="custom-file-label" for="dokumen">Choose file</label>
                                    <?= form_error('dokumen', '<small class="text-danger ml-0">', '</small>'); ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col" class="w-75">Nama Pdf</th>
                    <th scope="col" class="text-center text-nowrap">Lihat Folder</th>
                    <?php if ($user['role'] == 'Admin'): ?>
                        <th scope="col" class="text-center text-nowrap">Hapus Folder</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($list as $list) : ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td  class="w-75"><span><?= $list['pdf']; ?></span></td>
                        <td>
                            <a href="<?= base_url('assets/')."data_pdf/".$list['pdf'] ?>" class="btn  d-block mx-auto btn-primary" download>Download</a>
                        </td>
                        <?php if ($user['role'] == 'Admin'): ?>
                            <td>
                                <a href="<?= base_url($this->uri->slash_segment(1) ."hapus_pdf/". $list['id']) ?>" class="btn btn-danger d-block mx-auto">Hapus</a>
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