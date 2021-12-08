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
          <a href="<?php echo base_url('Promosi'); ?>"  class="nav-link">
              <ion-icon name="earth-outline"></ion-icon>
              <p>
                Promosi
              </p>
          </a>
          <a href="<?php echo base_url('Berita'); ?>"  class="nav-link ">
              <ion-icon name="newspaper-outline"></ion-icon>
              <p>
                Berita
              </p>
          </a>
          <a href="<?php echo base_url('Paket'); ?>"  class="nav-link ">
              <ion-icon name="book-outline"></ion-icon>
              <p>
                Paket
              </p>
          </a>
          <a href="<?php echo base_url('Tentang'); ?>"  class="nav-link active">
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
            <h1>DATA TENTANG KAMI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('Beranda'); ?>">Beranda</a></li>
              <li class="breadcrumb-item active">Tentang Kami</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Update Data Tentang Kami</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                <form action="<?=base_url('Tentang/update')?>" method="post" enctype="multipart/form-data">
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-outline card-info">
                  <div class="card-header">
                    <h3 class="card-title">
                      Tentang Kami
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <textarea id="summernote"  name="isi" >
                    <?=$upload->isi?>                      
                    </textarea>
                  </div>
                </div>
              </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
         <div class="card-footer">
                <input type="hidden" name="id" value="<?=$upload->idtentangkami?>">
                <td></td>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>