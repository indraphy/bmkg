

    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-md-12">
              
                <div class="card-header">
                    <h1 class="card-title">Data Surat Masuk</h1>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                        <i class="fas fa-plus"> Tambah Data</i>
                        </button>
                    </div>
                </div>
            </div>
            
          </div>
        </div>
      </section>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
            <h6 style="font-size: medium;" ><?php 
        if (session()->getFlashdata('pesan')) { 
            echo '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        }
        ?></h6>
              <div class="card card-outline card-primary">
                <!-- <div class="card-header">
                  <h3 class="card-title">Data Surat Masuk</h3>
                </div> -->

                <div class="card-body" >
                  <table
                    id="example1"
                    class="table table-bordered table-hover">
                    <thead style="text-align: center; background-color:mediumseagreen">
                      <tr>
                        <th>No</th>
                        <th>No Agenda</th>
                        <th>No Surat</th>
                        <th>Tgl Terima</th>
                        <th>Asal Surat</th>
                        <th>File</th>
                        <th width="150px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <?php $no = 1;
                                foreach ($kategori as $key => $value){ ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['no_agenda']; ?></td>
                                            <td><?= $value['no_surat']; ?></td>
                                            <td><?= $value['tanggal_penerimaan']; ?></td> 
                                            <td><?= $value['asal_surat']; ?></td>
                                            <td><?= $value['file']; ?></td>
                                            <td class="text-center">
                                                <button class="btn btn-sm bg-olive">view</button>
                                                <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit<?= $value['id_suratmasuk']; ?>">edit</button>
                                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_suratmasuk']; ?>">delete</button>
                                                <!-- <a href="" class="btn btn-sm btn-danger">delete</a> -->
                                            </td>
                                        </tr>
                                <?php   } ?>
                      
                    </tbody>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
  

  <!-- modal add  -->
  
  <div class="modal fade" id="add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Surat Masuk</h4>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <?php echo form_open('Kategori/add') ?>
    <div class="card-body">
      <div class="form-group">
        <label>No Agenda</label>
        <input
          name="no_agenda"
          class="form-control"
          placeholder="No Agenda"
          required/> <br>

          <label>Tingkat Keamanan</label>
        <input
          name="tingkat_keamanan"
          class="form-control"
          placeholder="Tingkat Keamanan"
          required
        /> <br>
        <label>Tanggal terima</label>
        <input
          name="tanggal_penerimaan"
          type="date"
          class="form-control"
          required
        /> <br>
        <label>No Surat</label>
        <input
          name="no_surat"
          class="form-control"
          placeholder="No Surat"
          required
        /> <br>
        <label>Tanggal surat</label>
        <input
          name="tanggal_surat"
          type="date"
          class="form-control"
          placeholder="Tingkat Keamanan"
          required
        /> <br>
        <label>Asal Surat</label>
        <input
          name="asal_surat"
          class="form-control"
          placeholder="Asal Surat"
          required
        /> <br>
        <label>Perihal</label>
        <input
          name="perihal"
          class="form-control"
          placeholder="Perihal"
          required
        /> <br>
        <label>file</label>
        <input
          name="file"
          class="form-control"
          placeholder="file"
          required
        />

      <!-- <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <div class="input-group">
          <div class="custom-file">
            <input
              type="file"
              class="custom-file-input"
              id="exampleInputFile"
            />
            <label class="custom-file-label" for="exampleInputFile"
              >Choose file</label
            >
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
      </div> -->
      <!-- <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> -->
    </div>


      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">
          Batal
        </button>
        
        <button  type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php echo form_close() ?>
    </div>
  </div>
</div>
</div>

  <!-- modal edit   -->
  <?php foreach ($kategori as $key => $value) { ?>
  <div class="modal fade" id="edit<?= $value['id_suratmasuk']; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Surat Masuk</h4>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <?php echo form_open('Kategori/edit/'. $value['id_suratmasuk']) ?>
    <div class="card-body">
      <div class="form-group">
        <label>No Agenda</label>
        <input
          name="no_agenda"
          value="<?= $value['no_agenda']; ?>"
          class="form-control"
          placeholder="No Agenda"
          required/> <br>

          <label>Tingkat Keamanan</label>
        <input
          name="tingkat_keamanan"
          value="<?= $value['tingkat_keamanan']; ?>"
          class="form-control"
          placeholder="Tingkat Keamanan"
          required
        /> <br>
        <label>Tanggal terima</label>
        <input
          name="tanggal_penerimaan"
          value="<?= $value['tanggal_penerimaan']; ?>"
          type="date"
          class="form-control"
          required
        /> <br>
        <label>No Surat</label>
        <input
          name="no_surat"
          value="<?= $value['no_surat']; ?>"
          class="form-control"
          placeholder="No Surat"
          required
        /> <br>
        <label>Tanggal surat</label>
        <input
          name="tanggal_surat"
          value="<?= $value['tanggal_surat']; ?>"
          type="date"
          class="form-control"
          placeholder="Tingkat Keamanan"
          required
        /> <br>
        <label>Asal Surat</label>
        <input
          name="asal_surat"
          value="<?= $value['asal_surat']; ?>"
          class="form-control"
          placeholder="Asal Surat"
          required
        /> <br>
        <label>Perihal</label>
        <input
          name="perihal"
          value="<?= $value['perihal']; ?>"
          class="form-control"
          placeholder="Perihal"
          required
        /> <br>
        <label>file</label>
        <input
          name="file"
          value="<?= $value['file']; ?>"
          class="form-control"
          placeholder="file"
          required
        />

      <!-- <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <div class="input-group">
          <div class="custom-file">
            <input
              type="file"
              class="custom-file-input"
              id="exampleInputFile"
            />
            <label class="custom-file-label" for="exampleInputFile"
              >Choose file</label
            >
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
      </div> -->
      <!-- <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> -->
    </div>


      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">
          Batal
        </button>
        
        <button  type="submit" class="btn btn-primary">Update</button>
      </div>
      <?php echo form_close() ?>
    </div>
  </div>
</div>
</div>
<?php } ?>

<?php foreach ($kategori as $key => $value) { ?>
  <div class="modal fade" id="delete<?= $value['id_suratmasuk']; ?>">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title">Hapus Data Surat Masuk</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
    
        Apakah Yakin Ingin Hapus Data ini?

      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">
          Batal
        </button>
        
        <a href="<?= base_url('kategori/delete/' . $value['id_suratmasuk'])?>"  type="submit" class="btn btn-danger">Ya</a>
      </div>
      
    </div>
  </div>
</div>
<?php } ?>
</div>

