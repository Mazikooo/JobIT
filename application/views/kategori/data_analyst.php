

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

  <!-- find section -->
  <section class="find_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 offset-lg-1 col-md-9 offset-md-1">
          <form action="">
            <div class="form_container">
              <div class="box b-1">
                <input type="text" class="form-control" placeholder="Job Title or Keywords ">
              </div>
              <div class="box b-2">
                <input type="text" class="form-control" placeholder="Where ">
              </div>
              <div class="box b-3">
                <input type="text" class="form-control" placeholder="All Category">
              </div>
              <div class="btn-box">
                <button type="submit" class="">
                  Search
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end find section -->

        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                   

                <?php foreach($data_analyst as $list){?>

                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img src="<?=base_url('uploads/'.$list['logo']);?>" class="flex-shrink-0 img-fluid border rounded rounded-circle"  alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3"><?php echo $list['jabatan'];?></h5>
                                            <span class="text-truncate me-3"> &ensp; <i class='fas fa-map-marker-alt' style='font-size:18px;color:#ff9f01'> </i>  <?php echo $list['lokasi'];?></span>
                                            <span class="text-truncate me-3"> &ensp; <i class='far fa-clock'  style='font-size:18px;color:#ff9f01'> </i> <?php echo $list['keterangan'];?></span>
                                            <span class="text-truncate me-0"> &ensp; <i class='far fa-money-bill-alt' style='font-size:18px;color:#ff9f01'></i> <?php echo $list['gaji'];?></span>
                                        </div> 
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""></a>
                                            <a class="btn btn-primary" href="<?php echo site_url('dashboard/apply/');?>">Apply Now</a>
                                        </div>
                                        <small class="text-truncate">Batas <?php echo $list['batas'];?></small>
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                            <?php } ?>

                            <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                        </div>

                     
                      
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Jobs End -->

  

  <!-- job section -->

  <section class="job_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Recommended jobs <br>
          <span>
            15000+ Job Available For you
          </span>
        </h2>
      </div>
      <div class="handler_btn-box" id="myTab" role="tablist">
        
        

      </div>
      <div class="tab-content" id="myTabContent">
        <div class="job_board tab-pane fade show active" id="jb-1" role="tabpanel" aria-labelledby="jb-1-tab">
          <div class="content-box">
            <div class="content layout_padding2-top">
              <div class="box">
              <h3>
                  Graphic <br>
                  Design
                </h3>
                <a href="<?php echo site_url('kategori/graphic_design/');?>">
                  Apply Now
                </a>
              </div>
              <div class="box">
                <h3>
                  Data <br>
                  Analyst
                </h3>
                <a href="<?php echo site_url('kategori/data_analyst/');?>">
                  Apply Now
                </a>
              </div>
              <div class="box">
                <h3>

                  Web <br>
                  Design
                </h3>
                <a href="<?php echo site_url('kategori/web_design/');?>">
                  Apply Now
                </a>
              </div>
              <div class="box">
                <h3>
                  UI <br>
                  Design
                </h3>
                <a href="<?php echo site_url('kategori/ui_designer/');?>">
                  Apply Now
                </a>
              </div>
            </div>
            <div class="btn-box">
              <a href="">
                See More
              </a>
            </div>
          </div>
        </div>
       
        </div>
      </div>
    </div>
  </section>


  <!-- end job section -->


  <!-- client section -->

  <section class="client_section ">
    <div class="container layout_padding">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="https://i.pravatar.cc/300"  alt="" class="avatar rounded-circle">
              </div>
              <div class="detail-box">
                <h5>
                  @Rahman_wahyu 
                </h5>
                <p>
                Saya sangat terbantu dengan adanya aplikasi JobIT ini. Proses pendaftaran yang mudah dan cepat membuat saya tidak perlu repot mengisi banyak formulir. Terima kasih JobIT!
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="https://i.pravatar.cc/400"  alt="" class="avatar rounded-circle">
              </div>
              <div class="detail-box">
                <h5>
                  @Edoo
                </h5>
                <p>
                Setelah menggunakan JobIT, saya langsung diterima bekerja di perusahaan yang sesuai dengan keinginan saya. Saya sangat bersyukur dengan bantuan yang diberikan oleh aplikasi JobIT.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="https://i.pravatar.cc/500" alt="" class="avatar rounded-circle">
              </div>
              <div class="detail-box">
                <h5>
                  @Rega_Imoet
                </h5>
                <p>
                Saya sangat puas dengan aplikasi JobIT. Proses pencarian pekerjaan yang cepat dan mudah membuat saya tidak perlu repot mencari informasi di berbagai sumber. Terima kasih aplikasi JobIT!
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end client section -->

