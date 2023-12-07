

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

  
  <pre>
    <!--<form action=echo site_url('admin/menu_job/aksi_simpan');?> method="POST" >-->
    <?php echo form_open_multipart('admin/menu_job/aksi_simpan');?>

    <table id="tambah" width='200' border='1' cellpadding="5" align="center" cellspacing="0">
<tr>
<td width="150" style="color:black">Id</td>
<td style="color:black">:</td>
    <td><input style="color:black" type="text" name="id" size="60"></td>
    </tr>

    <tr>
    <td style="color:black">Nama Perusahaan</td>
    <td style="color:black">:</td>
    <td><input style="color:black" name="nama" size="60"></td>
</tr>

    <tr>
    <td style="color:black">Jabatan</td>
    <td style="color:black">:</td>
    <td><input style="color:black" name="jabatan" size="60"></td>
</tr>

<tr>
    <td style="color:black">lokasi</td>
    <td style="color:black">:</td>
    <td><input style="color:black" name="lokasi" size="60"></td>
</tr>

<tr>
    <td style="color:black">Gaji</td>
    <td style="color:black">:</td>
    <td><textarea style="color:black" name="gaji" rows="6"
cols="60"></textarea></td>
</tr>


    <tr>
    <td style="color:black">Logo</td>
    <td style="color:black">:</td>
    <td><input type="file" style="color:black" name="logo" style="color:white"> </td>
</tr>

<tr>
    <td style="color:black">Keterangan</td>
    <td style="color:black">:</td>
    <td><input style="color:black" type="radio" id="Full Time" name="keterangan" value="Full Time">
    <label for="html" style="color:black">Full Time</label>

    <input type="radio" id="Part Time" name="keterangan" value="Part Time">
    <label for="html" style="color:black">Part Time</label>
        </td>
    </tr>
<tr>
    <td style="color:black">batas</td>
    <td style="color:black">:</td>
    <td><input type="date" style="color:black" name="batas"> </td>
</tr>


</table>

<input style="color:black" class="submit" type="submit" name="simpan" value="simpan">  <input style="color:black" class="reset" type="reset" value="reset">


<?php echo form_close();?>
</form>
</pre>
  