<div class="container">
    <h1 class="my-2">Data Mahasiwa</h1>
    <a href="<?= base_url(); ?>pendaftaran" type="button" class="btn btn-primary mb-2">Tambah Data</a>
    <table class="table">
        <caption>List of users</caption>
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Foto Mahasiswa</th>
                <th scope="col">Foto KTP</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $m) : ?>
                <tr>
                    <th class="align-middle" scope="row"><?= $i++; ?></th>
                    <td class="align-middle"><?= $m['nim']; ?></td>
                    <td class="align-middle"><?= $m['nama']; ?></td>
                    <td><img src="./images/<?= $m['foto_mahasiswa'] ?>"  width="70px"></td>
                    <td><img src="./images/<?= $m['foto_ktp'] ?>"  width="70px"></td>
                    <td class="align-middle">
                        <a href="/Halaman/delete/<?= $m['id']; ?>" class="btn btn-danger">Delete</a>
                        <a href="/Halaman/edit/<?= $m['id']; ?>" type="button" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>