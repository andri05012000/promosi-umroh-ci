      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <a href="<?php echo base_url('Beranda'); ?>" class="nav-link ">
              <ion-icon name="home-outline" ></ion-icon>
              <p>
                Beranda
              </p>
          </a>
          <a href="<?php echo base_url('Promosi'); ?>"  class="nav-link ">
              <ion-icon name="earth-outline"></ion-icon>
              <p>
                Promosi
              </p>
          </a>
          <a href="<?php echo base_url('Berita'); ?>"  class="nav-link">
              <ion-icon name="newspaper-outline"></ion-icon>
              <p>
                Berita
              </p>
          </a>
          <a href="<?php echo base_url('Paket'); ?>"  class="nav-link active">
              <ion-icon name="book-outline"></ion-icon>
              <p>
                Paket
              </p>
          </a>
          <a href="<?php echo base_url('Tentang'); ?>"  class="nav-link">
              <ion-icon name="file-tray-outline"></ion-icon>
              <p>
                Tentang Kami
              </p>
          </a>
          </a><a href="<?php echo base_url('Kontak/tampildata'); ?>"  class="nav-link">
              <ion-icon name="call-outline"></ion-icon>
              <p>
                Kontak
              </p>
          </a>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA PAKET</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('Beranda'); ?>">Beranda</a></li>
              <li class="breadcrumb-item active">Paket</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Data Paket</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="toolbar" style="text-align: right; margin-bottom: 10px;">
                    <a href="<?=base_url('Paket/add')?>" class="on-default edit-row btn btn-info" class="col-sm-6 col-md-4 col-lg-3"><ion-icon name="add"></ion-icon></a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Paket</th>
                    <th>Detail Paket</th>
                    <th>Harga Termasuk</th> 
                    <th>Harga Tidak Termasuk</th>
                    <th>Catatan</th> 
                    <th>Gambar</th>
                    <th>Aksi</th>  
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      foreach($uploads as $upload) 
                        { 
                      ?>
                      <tr>
                        <td><?=$no++?></td>
                        <td><?=$upload->namapaket?></td>
                        <td><?=$upload->detailpaket?></td>
                        <td><?=$upload->hargatermasuk?></td>
                        <td><?=$upload->hargatidaktermasuk?></td>
                        <td><?=$upload->catatan?></td>
                        <td style="text-align: center; vertical-align: middle;">
                          <img src="<?=base_url()?>assets/upload/images/<?=$upload->image?>" width="100px" alt="<?=$upload->image?>">
                        </td>
                        <td>
                          <a href ="<?php echo base_url('Paket/edit/'.$upload->idpaket); ?>" class="on-default edit-row btn btn-primary" class="col-sm-6 col-md-4 col-lg-3">
                          <ion-icon name="pencil-outline"></ion-icon></a>
                          <a href="<?php echo base_url('Paket/delete/'.$upload->idpaket); ?>" class="on-default default-row btn btn-danger" class="col-sm-6 col-md-4 col-lg-3">
                          <ion-icon name="trash-outline"></ion-icon></a>
                          </td>
                      </tr>
                      <?php 
                      } 
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

  </div>
