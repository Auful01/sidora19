@include('web.header');
    <!-- Carousel
    ================================================== -->
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>

          </ol>

          <div class="carousel-inner" role="listbox">

            <div class="item active">

              <img src="{{url('web/assets/images/plasma.jpg')}}" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <h2 class="carousel-title bounceInDown animated slow">Karena mereka membutuhkan bantuan mu</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow ">Jangan biarkan mereka sampai kehilangan nyawa</h4>

                  <a href="#listhospital" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow scroll" >DONOR / CARI DONOR </a>

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->

          </div>

         

    </div><!-- /.carousel -->




    <div class="section-home our-causes animate-onscroll fadeIn" id="listhospital">

        <div class="container">
            <h2 class="title-style-1">Pencarian Ketersediaan Plasma Darah<span class="title-under"></span></h2>

            <form>
             <div class="row">

              <div class="col-md-3 col-sm-4">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tint"></i></span>
               <select class="form-control" name="blood_type">
                   <option disabled selected>Pilih golongan darah</option>
                   <option value="A">A</option>
                   <option value="AB">AB</option>
                   <option value="O">O</option>
                   <option value="B">B</option>
                   <option value="O+">O+</option>
                   <option value="O-">O-</option>
                   <option value="A+">A+</option>
                   <option value="A-">A-</option>
                   <option value="B+">B+</option>
                   <option value="B-">B-</option>
                   <option value="AB+">AB+</option>
                   <option value="AB-">AB-</option>
               </select>
              </div>
            </div>

            <div class="col-md-3 col-sm-4">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-plus"></i> <i class="fa fa-minus"></i></span>
               <select class="form-control" name="blood_type">
                   <option disabled selected>Pilih reshus darah</option>
                   <option value="+">+</option>
                   <option value="-">-</option>
               </select>
              </div>
            </div>

            <div class="col-md-5 col-sm-4">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <input id="address-input" type="text" class="form-control map-input" name="lokasi" 
                placeholder="Lokasi">

                <input type="hidden" name="latitude" id="address-latitude" value="0" />
                <input type="hidden" name="longitude" id="address-longitude" value="0" />
                <div id="address-map-container" style="display: none;">
                <div style="display: none;" id="address-map"></div>
                </div>
              </div>
            </div>

            <div class="col">
              <button class="btn" ><i class=" fa fa-search"></i> Cari</button>
               <button class="btn" style="display:none;"><i class=" fa fa-close"></i> Reset</button>
            </div>

          </div>
        </form>

            <h2 class="title-style-1">Daftar Rumah Sakit<span class="title-under"></span></h2>

            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <div class="cause">
                        <h4 class="cause-title">
                           <i class="fa fa-medkit" aria-hidden="true"></i>
                             Rumah Sakit Saiful Anwar
                            <a href=""></a></h4>
                        <div class="cause-details">
                            <p>Jl. Perintis Kemerdekaan No. 37 Medan</p>
                            <p>Maps :&nbsp; <a title="Google Maps" href="%20https://goo.gl/maps/S8bCiUdjm9mtVmy69" target="_blank" rel="noopener">https://goo.gl/maps/S8bCiUdjm9mtVmy69</a><br /><br />Setiap Hari Buka 24 Jam<br /><br />Contact:<br /><br />Dr. Eka - 08126335440<br /><br />Dr. Ira - 081265555548<br /><br />info@pmimedan.or.id</p>
                        </div>
                        <div class="btn-holder text-center">
                           <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> Detail Info</a>
                        </div>
                    </div> <!-- /.cause -->
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="cause">
                        <h4 class="cause-title">
                           <i class="fa fa-medkit" aria-hidden="true"></i>
                             Rumah Sakit Gatot Subroto
                            <a href=""></a></h4>
                        <div class="cause-details">
                            <p>Jl. Perintis Kemerdekaan No. 37 Medan</p>
                            <p>Maps :&nbsp; <a title="Google Maps" href="%20https://goo.gl/maps/S8bCiUdjm9mtVmy69" target="_blank" rel="noopener">https://goo.gl/maps/S8bCiUdjm9mtVmy69</a><br /><br />Setiap Hari Buka 24 Jam<br /><br />Contact:<br /><br />Dr. Eka - 08126335440<br /><br />Dr. Ira - 081265555548<br /><br />info@pmimedan.or.id</p>
                        </div>
                        <div class="btn-holder text-center">
                           <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> Detail Info</a>
                        </div>
                    </div> <!-- /.cause -->
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="cause">
                        <h4 class="cause-title">
                           <i class="fa fa-medkit" aria-hidden="true"></i>
                             Rumah Sakit Amar Ma'ruf
                            <a href=""></a></h4>
                        <div class="cause-details">
                            <p>Jl. Perintis Kemerdekaan No. 37 Medan</p>
                            <p>Maps :&nbsp; <a title="Google Maps" href="%20https://goo.gl/maps/S8bCiUdjm9mtVmy69" target="_blank" rel="noopener">https://goo.gl/maps/S8bCiUdjm9mtVmy69</a><br /><br />Setiap Hari Buka 24 Jam<br /><br />Contact:<br /><br />Dr. Eka - 08126335440<br /><br />Dr. Ira - 081265555548<br /><br />info@pmimedan.or.id</p>
                        </div>
                        <div class="btn-holder text-center">
                           <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> Detail Info</a>
                        </div>
                    </div> <!-- /.cause -->
                </div>

            </div>
        </div>
        
    </div> <!-- /.our-causes -->


    <!-- Donate Modal -->
    <div class="modal fade" id="donateModalauth" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">DONATE </h4>
          </div>
          <div class="modal-body">

                <form class="form-donation" method="post" action="">
                    @csrf
                        <h3 class="title-style-1 text-center">Thank you for your donate <span class="title-under"></span>  </h3>

                        <div class="row">

                            <div class="form-group col-md-12 ">
                                <label>Donor Name</label>
                                <input type="text" value="" class="form-control" name="name" id="amount" readonly placeholder="Full Name">
                            </div>

                        </div>


                         <div class="row">

                            <div class="form-group col-md-12 ">
                                <label>Donation Activity Name</label>
                                <p></p>
                            </div>
                        </div>

                         <div class="row" id="mustbeamoutn" style="display: none;">

                            
                        </div>

                         <div class="row">

                            <div class="form-group col-md-12 ">
                                <label>Amount</label>
                                <input type="text" required class="form-control" name="total_item" id="amount" placeholder="amount donation">
                            </div>
                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" name="donateNow" >DONATE NOW</button>
                            </div>
                        </div>
                </form>
          </div>
        </div>
      </div>
    </div> <!-- /.modal -->
@include('web.footer');
