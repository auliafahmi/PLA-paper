<div class="col-md-10 dashboard-main">
  <div class="container">
    <div class="p-2">
      <h2 class="d-inline"><?= $title; ?></h2>
      <span><a href="<?= site_url(); ?>users/tambah_dosen" class="btn btn-primary"><i class="fa fa-plus px-1"></i></a></span>
    </div>        
        <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Scopus</th>
              <th scope="col">Publikasi Paper</th>
              <!-- <th scope="col">Edit</th> -->
            </tr>
          </thead>
          <tbody>
             <?php foreach($dosen as $d): ?> 
              <tr>
              <th scope="row"><?= $d['id']; ?></th>
                <td><?= $d['nama']; ?></td>
                <td><a href="<?= $d['scopus']; ?>">Scopus</a></td>
                <td><?= $d['publikasi_paper']; ?></td>
                <!-- <td><a href="#" class="btn btn-primary">Tambah</a></td> -->
              </tr>
             <?php endforeach; ?>
        </tbody>
        </table>
     </div>

</div>

</div>
    </div>
</div>