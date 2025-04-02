  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php echo $this->session->flashdata('pesan'); ?>
      <?php echo $this->session->flashdata('pesan1'); ?>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Identitas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed table-bordered table-striped">
                <tbody>
                  <tr>
                    <th style="width: 60px;">Aksi</th>
                    <th>Judul Website</th>
                    <th>Alamat</th>
                    <th>Provinsi</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                  </tr>

                  <?php 
                    foreach($identitas as $idn) :
                   ?>
                  <tr>
                    <td>
                      <a title="Edit Identitas" href="<?php echo base_url('admin/identitas/editIdentitas/'.$idn->id); ?>" class="btn btn-sm btn-primary">
                        <i class="fa fa-edit"></i>
                      </a>
                    </td>
                    <td><?php echo $idn->judul_website; ?></td>
                    <td><?php echo $idn->alamat; ?></td>
                    <td><?php echo $idn->provinsi; ?></td>
                    <td><?php echo $idn->email; ?></td>
                    <td><?php echo $idn->no_telepon; ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tentang Lembaga</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed table-bordered table-striped">
                <tbody>
                  <tr>
                    <th style="width: 60px;">Aksi</th>
                    <th>Sejarah</th>
                    <th>Visi</th>
                    <th>Misi</th>
                  </tr>

                  <?php 
                    foreach($about as $abt) :
                   ?>
                  <tr>
                    <td>
                      <a title="Edit Tentang Perusahaan" href="<?php echo base_url('admin/identitas/editTentang/'.$abt->id); ?>" class="btn btn-sm btn-primary">
                        <i class="fa fa-edit"></i>
                      </a>
                    </td>
                    <td><?php echo $abt->about_us; ?></td>
                    <td><?php echo $abt->visi; ?></td>
                    <td><?php echo $abt->misi; ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Fasilitas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed table-bordered table-striped">
                <tbody>
                  <tr>
                    <th style="width: 60px;">Aksi</th>
                    <th>Judul</th>
                    <th>Isi</th>
                  </tr>

                  <?php 
                    foreach($fasilitas as $fs) :
                   ?>
                  <tr>
                    <td>
                      <a title="Edit Tentang Perusahaan" href="<?php echo base_url('admin/identitas/editFasilitas/'.$fs->id_fasilitas); ?>" class="btn btn-sm btn-primary">
                        <i class="fa fa-edit"></i>
                      </a>
                    </td>
                    <td><?php echo $fs->judul; ?></td>
                    <td><?php echo $fs->isi; ?></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->