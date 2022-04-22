<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mkmahasiswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari nama.." name="keyword" id="keyword" autocomplete="off">
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
                <th scope="col">Nama</th>
                <th scope="col">NRP</th>
                <th scope="col">Kelas</th>
                <th scope="col">Matakuliah</th>
            </tr>
        </thead>
        <?php
        $i = 1;
        foreach ($data['mkmhs'] as $mkmhs) : ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $mkmhs['nama']; ?></td>
                    <td><?= $mkmhs['nrp']; ?></td>
                    <td><?= $mkmhs['kelas']; ?></td>
                    <td><?= $mkmhs['matakuliah']; ?></td>
                </tr>
            </tbody>
        <?php
            $i++;
        endforeach; ?>
    </table>

</div>