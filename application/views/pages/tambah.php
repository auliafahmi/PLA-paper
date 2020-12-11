<div class="container">
    <div class="col-md-4 offset-md-4">
        <h2 class="text-center"><?= $title; ?></h2>
        <?= form_open('users/tambah_dosen', 'class="m-2"'); ?>
        <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Dosen">
            </div>
            <div class="form-group">
                <label>Scopus</label>
                <input type="text" class="form-control" name="scopus" placeholder="URL Scopus">
            </div>
            <div class="form-group">
                <label>Publikasi Paper</label>
                <input type="text" class="form-control" name="publikasi_paper" placeholder="Publikasi Paper">
            </div>
            <button type="submit" class="btn btn-block btn-primary">Submit</button>
        </form>
    </div>
</div>