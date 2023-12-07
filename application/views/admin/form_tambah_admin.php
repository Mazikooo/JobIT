

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

  
  <pre>
    <form action="<?php echo site_url('admin/menu_admin/aksi_simpan');?>" method="POST" >
    <table id="tambah" width='200' border='1' cellpadding="5" align="center" cellspacing="0">
<tr>
<td width="150" style="color:black">Id</td>
<td style="color:black">:</td>
    <td><input style="color:black" type="text" name="id_adm" size="60"></td>
    </tr>

    <tr>
    <td style="color:black">Username</td>
    <td style="color:black">:</td>
    <td><input style="color:black" name="username" size="60"></td>
</tr>

    <tr>
    <td style="color:black">Password</td>
    <td style="color:black">:</td>
    <td><input style="color:black" name="pw" size="60"></td>
</tr>

<tr>
    <td style="color:black">Email</td>
    <td style="color:black">:</td>
    <td><input style="color:black" name="email" size="60"></td>
</tr>


</table>

<input style="color:black" class="submit" type="submit" name="simpan" value="simpan">  <input style="color:black" class="reset" type="reset" value="reset">


</form>
</form>
</pre>
  