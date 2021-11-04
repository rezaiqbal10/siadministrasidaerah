<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Perencanaan SDA
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('sda/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Perencanaan SDA
                    </span>
                </a>
            </div>
        </div>
    </div>
	
    <div class="table-responsive">
        <table class="table table-striped" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Paket Pekerjaan</th>
                    <th>Penyedia Jasa</th>
                    <th>Tahun Anggaran</th>
                     <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($sda) :
                    foreach ($sda as $j) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $j['paket_pekerjaan']; ?></td>
                             <td><?= $j['penyedia_jasa']; ?></td>
                             <td><?= $j['tahun_anggaran']; ?></td>
                            <td>
                                <a href="<?= base_url('sda/edit/') . $j['id'] ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('sda/delete/') . $j['id'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>