<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets') ?>/user/css/materialize.min.css"  media="screen,projection"/>

      <!-- my css -->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets') ?>/user/css/style.css">

      <style type="text/css">
        .parallax-container{
          height: 400px;
        }

        .active{
          background-color: #0b94b8;
          color: #fff;
        }

        .clients h3{
          text-shadow: 2px 2px 4px rgba(0,0,0,1);
        }

        .warna{
          background-color: #0b94b8;
        }
      </style>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title><?php echo $title; ?></title>
    </head>

    <body id="home" class="scrollspy">

      <!-- navbar -->
      <div class="navbar-fixed">
        <nav class="warna">
          <div class="logo">
            <div class="container">
              <div class="nav-wrapper">
                <div class="text-darken-3">
                <?php foreach($identitas as $idn) : ?>
                  <a href="" class="brand-logo"><!-- <img src="img/logo/dnbs.png"> -->
                    <?php echo $idn->judul_website; ?>
                  </a>
                <?php endforeach; ?>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a class="list" href="#about">Pemerintah Desa</a></li>
                  <li><a class="list" href="#fasilitas">Fasilitas</a></li>
                  <li><a class="list" href="#sistem">Informasi</a></li>
                  <li><a class="list" href="#portfolio">Prestasi</a></li>
                  <li><a class="list" href="#contact">Pesan</a></li>
                  <li><a href="<?php echo base_url('login'); ?>">Admin</a></li>
                </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>

      <!-- sidenav mobile nav-->
      <ul class="sidenav" id="mobile-nav">
        <li><a href="#about">Pemerintah Desa</a></li>
        <li><a href="#fasilitas">Fasilitas</a></li>
        <li><a href="#sistem">Informasi</a></li>
        <li><a href="#portfolio">Prestasi</a></li>
        <li><a href="#contact">Pesan</a></li>
        <li><a href="<?php echo base_url('login'); ?>">Admin</a></li>
      </ul>


      

      <!-- ini adalah slider -->
      <div class="slider">
        <ul class="slides">
          <!-- <li>
            <img src="<?php echo base_url('assets') ?>/user/img/slider/company.jpg"> 
            <div class="caption center-align">
              <h1>WELCOME</h1>
              <h3>Sistem Informasi Kelurahan Arcawinangun</h3>
              <h5 class="light grey-text text-lighten-3">KECAMATAN PURWOKERTO TIMUR - KABUPATEN BANYUMAS</h5>
            </div>
          </li>  -->
           <li>
            <img src="<?php echo base_url('assets') ?>/user/img/slider/kelurahan_arcawinangun.jpg">  <!-- random image -->
            <div class="caption center-align">
              <h1>WELCOME</h1>
              <h3>Sistem Informasi Kelurahan Arcawinangun</h3>
              <h5 class="light grey-text text-lighten-3">KECAMATAN PURWOKERTO TIMUR - KABUPATEN BANYUMAS</h5>
            </div>
          </li>
        </ul>
      </div>


      <!-- about us -->
      <section id="about" class="about scrollspy">
        <div class="container">
          <div class="row">
            
            <h3 class="center"></h3>

            <?php foreach($about as $abt) : ?>
            <div class="col m12">
              <h5>Sejarah</h5>
              <p align="justify">
                <?php echo $abt->about_us; ?>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col m6">
              <h5>Visi</h5>
              <p align="justify">
                <?php echo $abt->visi; ?>
              </p>
              
            </div>

            <div class="col m6">
              <h5>Misi</h5>
              <p align="justify">
                <?php echo $abt->misi; ?>
              </p>
            </div>
            <?php endforeach; ?>

          
          </div>
        </div>
      </section>


      <!-- services -->
      <section id="fasilitas" class="blue services gray lighten-3 scrollspy">
        <div class="container">
          <div class="row">
            <div class="clients">
              <h3 class="light center grey-text white-text">Fasilitas Desa</h3>
            </div>
            <?php foreach($fasilitas as $row) { ?>
            <div class="col m6 s12">
              <div class="card-panel center">
                <img style="border-radius: 10%;" src="<?php echo base_url('assets/user/img/portfolio/'.$row->gambar) ?>" class="responsive-img materialboxed">
                <h5><?php echo $row->judul; ?></h5>
                <p>
                  
                </p>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="row">
            <?php foreach($fasilitas as $fs) { ?>
            <div class="text-darken-3">
              <div class="col m6">
                <h5><?php echo $fs->judul; ?></h5>
                <article>
                <p align="justify">
                  <?php echo $fs->isi; ?>
                </p>
                </article>
                <br>
              </div>

            </div>
            <?php } ?>
          </div>
        </div>
      </section>

      <!-- sistem -->
      <section id="sistem" class="contact grey lighten-3 scrollspy">
        <div class="container">
          <h3 class="center light grey-text text-darken-3">Informasi</h3>
          <div class="row">
              <?php foreach($kegiatan as $row) { ?>
               <div class="col m4 s12">
                  <div class="card-panel center">
                    <img style="border-radius: 10%;" src="<?php echo base_url('assets/user/img/'.$row->gambar) ?>" class="responsive-img materialboxed">
                    <h5><?php echo $row->judul; ?></h5>
                    <p>
                      <?php echo $row->isi; ?>
                    </p>
                  </div>
              </div>
              <?php } ?>
          </div>
        </div>
      </section>

      <!-- portfolio -->
      <section id="portfolio" class="portfolio scrollspy">
        <div class="container">
          <h3 class="light center grey-text text-darken-3">Prestasi</h3>
          <div class="row">
            <div class="col m3 s12">
              <img src="<?php echo base_url('assets') ?>/user/img/portfolio/ds.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="<?php echo base_url('assets') ?>/user/img/portfolio/f.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="<?php echo base_url('assets') ?>/user/img/portfolio/g.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="<?php echo base_url('assets') ?>/user/img/portfolio/h.png" class="responsive-img materialboxed">
            </div>
          </div>
          <div class="row">
            <div class="col m3 s12">
              <img src="<?php echo base_url('assets') ?>/user/img/portfolio/f.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="<?php echo base_url('assets') ?>/user/img/portfolio/as.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="<?php echo base_url('assets') ?>/user/img/portfolio/as.png" class="responsive-img materialboxed">
            </div>
            <div class="col m3 s12">
              <img src="<?php echo base_url('assets') ?>/user/img/portfolio/g.png" class="responsive-img materialboxed">
            </div>
          </div>
        </div>
      </section>

      <!-- contact -->
      <section id="contact" class="contact grey lighten-3 scrollspy">
        <div class="container">
          <h3 class="center light grey-text text-darken-3">Pesan</h3>
          <div class="row">
            <div class="col m5 s12">
              <div class="card-panel blue darken-3 center white-text">
                <i class="material-icons medium">email</i>
                <h3>Kontak</h3>
              </div>
              <?php foreach($identitas as $idn) : ?>
              <ul class="collection with-header">
                <li class="collection-header"><h4>Alamat</h4></li>
                <li class="collection-item"><?php echo $idn->judul_website; ?></li>
                <li class="collection-item"><?php echo $idn->alamat; ?></li>
                <li class="collection-item"><?php echo $idn->provinsi; ?></li>
                <li class="collection-item">Phone : <?php echo $idn->no_telepon; ?></li>
              </ul>
              <?php endforeach; ?>
            </div>

            <div class="col m7 s12">
              <form method="post" action="<?php echo base_url('user/message'); ?>">
                <div class=" card-panel">
                  <div class="input-field">
                    <input id="name" type="text" name="nama" required >
                    <label for="name">Nama</label>
                  </div>
                  <div class="input-field">
                    <input id="email" type="email" name="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field">
                    <input id="phone" type="text" name="no_telepon">
                    <label for="phone">Nomor Telepon</label>
                  </div>
                  <div class="input-field">
                    <textarea name="pesan" id="message" class="materialize-textarea"></textarea>
                    <label for="message">Pesan</label>
                  </div>

                  <button class="btn warna text-darken-2" type="submit">Kirim</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>


      <!-- footer -->
      <footer class="blue darken-3 white-text center">
        <p style="font-size: 15px;" class="flow-text">Copyright Arcawinangun || Purwokerto Timur <?php echo date('Y'); ?></p>
      </footer>

      <!-- JAVASCRIPT -->

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="<?php echo base_url('assets') ?>/user/js/materialize.min.js"></script>

      <!-- sidenav -->
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);
      

      //slider
     
        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          duration : 400,
          interval : 5000
        });

        const paralax = document.querySelectorAll('.parallax');
        M.Parallax.init(paralax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
          scrollOffset: 50
        });

      </script>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script type="text/javascript">
          $(document).ready(function(){
                $('ul li a').click(function(){
                  $('li a').removeClass("active");
                  $(this).addClass("active");
              });
          });
      </script>
    </body>
</html>