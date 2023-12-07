

    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="indicator_box">
          <div>
            <span>
              01/
            </span>
          </div>
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
          </ol>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Find a <br>
                      Perfect job <br>
                      for you
                    </h1>
                    <div>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 ">
                  <div class="img-box">
                    <img src="<?php echo base_url('src/images/slider-img.png')?>" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Find a <br>
                      Perfect job <br>
                      for you
                    </h1>
                    <div>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 ">
                  <div class="img-box">
                    <img src="<?php echo base_url('src/images/slider-img.png')?>" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Find a <br>
                      Perfect job <br>
                      for you
                    </h1>
                    <div>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 ">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <h3 class="tampildata">TAMPIL DATA</h3>
<hr>
<button class="button buttontambah" style="color:black"><a href="<?php echo site_url('admin/menu_job/tambah_job');?>" style="color:black">Tambah Pekerjaan</a></button>
<table id="top" border="1" width='900' cellpadding="5" align="center" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Perusahaan</th>
        <th>Jabatan</th>
        <th>Lokasi</th>
        <th>Gaji</th>
        <th>Logo</th>
        <th>Keterangan</th>
        <th>Batas</th>
        <th>Aksi</th>
    </tr>
    <?php foreach($job as $list){?>
    <tr>
    <td><?php echo $list['id'];?></td>
    <td><?php echo $list['nama'];?></td>
    <td><?php echo $list['jabatan'];?></td>
    <td><?php echo $list['lokasi'];?></td>
    <td><?php echo $list['gaji'];?></td>
    <td><img src="<?=base_url('uploads/'.$list['logo']);?>" style="width: 80px; height: 80px;"></td>
    <td><?php echo $list['keterangan'];?></td>
    <td><?php echo $list['batas'];?></td>
    
    <td> <button class="button buttonubah" style="color:black"><a href="<?php echo site_url('admin/menu_job/edit/'.$list['id']);?>" style="color:black">Edit</a></button> <button class="button buttonhapus" style="color:black"><a href="<?php echo site_url('admin/menu_job/hapus/'.$list['id']);?>" onclick="return confirm('Yakin Menghapus Data?')" style="color:black">Hapus</a> </button></td>
    </tr>
    <?php } ?>
    </table>
  <!-- job section -->

  