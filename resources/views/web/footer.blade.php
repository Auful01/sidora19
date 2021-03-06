  


    <footer class="main-footer">

        <div class="footer-top">
            
        </div>




        <div class="footer-bottom">

            <div class="container text-right">
                SIDORA19 @ copyrights {{date('Y')}} - by  Tawakkal Techt Team and template BY
                <a href="https://medialoot.com/m" target="_blank">Medialoot</a>
            </div>
        </div>
        
    </footer> <!-- main-footer -->




    <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">REGISTER NOW FOR DONATE</h4>
          </div>
          <div class="modal-body">

                <form class="form-donation" method="post" action="{{url('register_auth')}}">
                    @csrf
                        <h3 class="title-style-1 text-center">Thank you for your participation <span class="title-under"></span>  </h3>

                        <div class="row">

                            <div class="form-group col-md-12 ">
                                <input type="text" class="form-control" name="name" id="amount" placeholder="Full Name">
                            </div>

                        </div>


                        <div class="row">

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="email" placeholder="Email*">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="phone_contributor" placeholder="Phone">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="address_contributor" placeholder="Address">
                            </div>

                             <div class="form-group col-md-6">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" name="donateNow" >REGISTER NOW</button>
                            </div>

                        </div>
                </form>
            
          </div>
        </div>
      </div>

    </div> <!-- /.modal -->





    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="{{url('web/assets/js/jquery-1.11.1.min.js')}}">'+
    '<\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="{{url('web/assets/js/bootstrap.min.js')}}"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="{{url('web/assets/js/owl.carousel.min.js')}}"></script>

    <!-- Template main javascript -->
    <script src="{{url('web/assets/js/main.js')}}"></script>
          <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js "></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        $(document).ready(function() {
    $('#tableok').DataTable();
} );
         $(".scroll").click(function(event){
         event.preventDefault();
         //calculate destination place
         var dest=0;
         if($(this.hash).offset().top > $(document).height()-$(window).height()){
              dest=$(document).height()-$(window).height();
         }else{
              dest=$(this.hash).offset().top;
         }
         //go to destination
         $('html,body').animate({scrollTop:dest}, 1000,'swing');
     });

         // maps

    </script>

  <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjYuCk7ItOOZpam6TrP5fQfHPA0DYnDos&libraries=places&callback=initialize" async defer></script>
<script src="{{url('js/mapInput.js')}}"></script>
<script type="text/javascript">
    
</script>
    </body>
</html>