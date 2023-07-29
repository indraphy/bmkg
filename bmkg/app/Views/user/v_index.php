<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
            <div class="col-md-12">
              
                <div class="card-header">
                    <h1 class="card-title">Data User</h1>
                    <div class="card-tools">
                        <a href="<?= base_url('user/add') ?>" class="btn btn-primary" >
                        <i class="fas fa-plus"> Tambah Data</i>
                        </a>
                    </div>
                </div>
            </div>
            
          </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
            <h6 style="font-size: medium;" ><?php

use CodeIgniter\Database\BaseUtils;

        if (session()->getFlashdata('pesan')) { 
            echo '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        }
        ?></h6>
              <div class="card card-outline card-primary">
                <div class="card-body" >
                  <table
                    id="example1"
                    class="table table-bordered table-hover">
                    <thead style="text-align: center; background-color:mediumseagreen">
                      <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>e-mail</th>
                        <th>level</th>
                        <th>foto</th>
                        <th width="150px">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <?php $no = 1;
                                foreach ($user as $key => $value){ ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['nama_user']; ?></td>
                                            <td><?= $value['email']; ?></td>
                                            <td><?php if ($value['level'] ==1){
                                                echo 'Admin';
                                            }else {
                                                echo 'User';
                                            } ?></td> 
                                            <td><img width="70px" src="<?= base_url('gambar/' . $value['foto']) ?>"></td>
                                            <td class="text-center">
                                            <!-- <button class="btn btn-sm bg-olive">view</button> -->
                                                <a href="" class="btn btn-sm btn-warning" >edit</a>
                                                <a href="" class="btn btn-sm btn-danger" >delete</a>
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

</div>