

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
                    Pekerjaan IT  <br>
                    terbaik ada<br>
                      di sini 
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
<button class="button buttontambah" style="color:black"><a href="<?php echo site_url('admin/menu_admin/tambah_admin');?>" style="color:black">Tambah Admin</a></button>
<table id="top" border="1" width='900' cellpadding="5" align="center" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <?php foreach($admin as $list){?>
    <tr>
    <td><?php echo $list['id_adm'];?></td>
    <td><?php echo $list['username'];?></td>
    <td><?php echo $list['pw'];?></td>
    <td><?php echo $list['email'];?></td>
    
    <td> <button class="button buttonubah" style="color:black"><a href="<?php echo site_url('admin/menu_admin/editadm/'.$list['id_adm']);?>" style="color:black">Edit</a></button> <button class="button buttonhapus" style="color:black"><a href="<?php echo site_url('admin/menu_admin/hapus/'.$list['id_adm']);?>" onclick="return confirm('Yakin Menghapus Data?')" style="color:black">Hapus</a> </button></td>
    </tr>
    <?php } ?>
    </table>
 

  