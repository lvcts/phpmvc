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
                        <button class="btn btn-dark" type="submit" id="tombolCari">Cari</button>
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