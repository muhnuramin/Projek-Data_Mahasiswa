<div class="container">
    <div class="container mt-5">
        <div class="row">
            <div class="col-8">
                <h3>Form Pendaftaran Mahasiswa</h3>
                <form action="/Halaman/save" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="foto_mahasiswa" class="form-label">Foto Mahasiswa</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto_mahasiswa">
                            <label class="custom-file-label" for="foto_mahasiswa" name="foto_mahasiswa">Choose file</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto_ktp" class="form-label">Foto KTP</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto_ktp">
                            <label class="custom-file-label" for="foto_ktp" name="foto_ktp">Choose file</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>