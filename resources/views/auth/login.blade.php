
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dapurcity Apps</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>
  <body>
    
   
    <section class="section pt-5 top-slant-white2 relative-higher">
        <div class="container">
          <div class="row mb-5 justify-content-center" data-aos="fade">
              <div class="col-md-7 text-center heading-wrap">
                <h2 data-aos="fade-up">Login Apps</h2>
                <p data-aos="fade-up" data-aos-delay="100">So far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
            </div>
          

        </div>
        <div class="container mb-5">
            <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                <div class="row">
                  <form id="sign_in" class="col-12 mb-5" method="POST">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-md-6 form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username">                         
                          </div>
                        <div class="col-md-6 form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-12 form-group">
                          <input type="submit" value="Sign In" class="btn btn-success">
                          <a href="#" class="btn btn-danger">Cancel</a>
                          <br>                
                            <br>
                            <div id="pesan"></div>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </section>

   

   
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup-options.js') }}"></script>
    

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript">
      $('#sign_in').submit(function(event){
        event.preventDefault();
			  var datalogin = $('#sign_in').serialize();
        $.ajax({
          url:"{{ route('login') }}",
          data:datalogin,
          type:"post",
          dataType:"json",
          success:function(hasil)
          {
              if (hasil['level_id']==1) 
              {
                  $("#pesan").html("Berhasil Login Admin");
                  $("#pesan").show('animate');
                  $("#pesan").addClass("alert alert-success");
                  setTimeout(function() {
                    location.href = "{{ route('dashboard_admin') }}";
                  }, 500);
              } 
              else if(hasil['level_id']==2)
              {
                  $("#pesan").html("Berhasil Login Owner");
                  $("#pesan").show('animate');
                  $("#pesan").addClass("alert alert-success");
                  setTimeout(function() {
                    $("#pesan").hide('animate');
                    //location.href = "DashboardUser/modulPage";
                  }, 500);
              }
              else if(hasil['level_id']==3)
              {
                  $("#pesan").html("Berhasil Login Customer");
                  $("#pesan").show('animate');
                  $("#pesan").addClass("alert alert-success");
                  setTimeout(function() {
                    $("#pesan").hide('animate');
                    //location.href = "DashboardUser/modulPage";
                  }, 500);
              }
              else if(hasil['status']==0)
              {
                  $("#pesan").html("Username Atau Password Salah");
                  $("#pesan").show('animate');
                  $("#pesan").addClass("alert alert-danger");
                  setTimeout(function() {
                    $("#pesan").hide('animate');
                    $("#pesan").removeClass("alert alert-danger");
                  }, 2000);
              }
              else
              {
                  $("#pesan").html("No More Session");
                  $("#pesan").show('animate');
                  $("#pesan").addClass("alert alert-warning");
                  setTimeout(function() {
                    $("#pesan").hide('animate');
                    $("#pesan").removeClass("alert alert-danger");
                  }, 2000);
              }
          }
        });
      });
    </script>
    
  </body>
</html>