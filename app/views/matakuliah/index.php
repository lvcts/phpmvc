<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/matakuliah/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari matakuliah.." name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Kode MK</th>
                <th scope="col">Matakuliah</th>
                <th scope="col">SKS</th>
                <th scope="col">Semester</th>
            </tr>
        </thead>
        <?php
        $i = 1;
        foreach ($data['mk'] as $mk) : ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $mk['kode_mk']; ?></td>
                    <td><?= $mk['nama_matakuliah']; ?></td>
                    <td><?= $mk['sks']; ?></td>
                    <td><?= $mk['semester']; ?></td>
                </tr>
            </tbody>
        <?php
            $i++;
        endforeach; ?>
    </table>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Matakuliah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/matakuliah/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama_matakuliah">Nama Matakuliah</label>
                        <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="kode_mk">Kode MK</label>
                        <input type="text" class="form-control" id="kode_mk" name="kode_mk" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <input type="text" class="form-control" id="sks" name="sks">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>