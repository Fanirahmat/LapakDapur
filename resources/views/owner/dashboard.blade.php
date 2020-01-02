@extends('layouts.templateUser')
@section('content')
    
     
<header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">LDR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
            <li class="nav-item">
              <a class="nav-link active" href="#">Menu</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#">Setting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Transaction</a>
            </li>
           
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown cta-btn">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Session Home Name</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="#">Setting</a>
                <a class="dropdown-item" href="#">logout</a>
                
              </div>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
  </header>
  <!-- END header -->
  
  <div class="slider-wrap">
    <div class="slider-item" style="background-image: url('{{ asset('assets/img/hero_1.jpg')}}');">
      
      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-8 text-center col-sm-12 ">
            <h1 data-aos="fade-up">Lapak Dapur</h1>
            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente et sed quasi.</p>
            <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Buka</a></p>
          </div>
        </div>
      </div>

    </div>
  <!-- END slider -->
  </div> 

  <section class="section bg-light pt-0 bottom-slant-gray">
    <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade">
            <div class="col-md-7 text-center heading-wrap">
              <h2 data-aos="fade-up">My Menu</h2>
              <p data-aos="fade-up" data-aos-delay="100">So far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <a href="#add_menu" data-toggle="modal" data-aos="fade-up" data-aos-delay="100" class="btn btn-success btn-sm">Add Menu</a>
              <a href="#tampilan" data-toggle="modal" data-aos="fade-up" data-aos-delay="100" class="btn btn-danger btn-sm">Tampilan</a>
              
              <br><br><div class="alert alert-danger">example</div>
            </div>
          </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="blog d-block">
            <a class="bg-image d-block" href="single.html" style="background-image: url('img/dishes_1.jpg');"></a>
            <div class="text">
              <h3><a href="#">Food_name</a></h3>
              <p class="sched-time">
                <span><span class="fa fa-shopping-cart"></span> food_status</span> <br>
              </p>
              <p>food_price : Rp,- <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut vero porro est non officia? Assumenda,?</p>
              
              <p><a href="#edit_menu" data-toggle="modal" class="btn btn-primary btn-sm">Edit Menu</a> <a href="#" class="btn btn-primary btn-sm">Delete</a></p>
              
            </div>
            
          </div>
        </div>
       

     
    </div>
  </section>
  
  
  <footer class="site-footer" role="contentinfo">
   
    <div class="container">
     
      <div class="row">
        <div class="col-12 text-md-center text-left">
          <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- END footer -->
  
 
  <div class="modal fade" id="add_menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-contact contact_form" action="" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="form-group">
                <input class="form-control" name="nama_modul" type="text" placeholder="Name" required="true">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input class="form-control" name="link_modul" type="text" placeholder="Price" required="true">
              </div>
            </div>
            
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="deskripsi" class="form-control" cols="30" rows="10" placeholder="Deskripsi" required="true"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input class="form-control" name="gambar" type="file" placeholder="Gambar Modul" required="true">
                <span style="color:red;">*format gambar(jpg/png/jpeg), max size 2MB</span>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input class="form-control" name="link_modul" type="text" placeholder="Status" required="true">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm btn_1">
                  Insert
                </button>
              </div>
            </div>
 
 
          </form>
        </div>
 
      </div>
    </div>
  </div>

  <div class="modal fade" id="edit_menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-contact contact_form" action="" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="form-group">
                <input class="form-control" name="nama_modul" type="text" placeholder="Name" required="true">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input class="form-control" name="link_modul" type="text" placeholder="Price" required="true">
              </div>
            </div>
            
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="deskripsi" class="form-control" cols="30" rows="10" placeholder="Deskripsi" required="true"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input class="form-control" name="gambar" type="file" placeholder="Gambar Modul" required="true">
                <span style="color:red;">*format gambar(jpg/png/jpeg), max size 2MB</span>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input class="form-control" name="link_modul" type="text" placeholder="Status" required="true">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm btn_1">
                  Insert
                </button>
              </div>
            </div>
 
 
          </form>
        </div>
 
      </div>
    </div>
  </div>

  <div class="modal fade" id="tampilan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Filter Tampikan Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-contact contact_form" action="" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="form-group">
                <select class="form-control" placeholder="Cari" name="">
                  <option>Semua</option>
                  <option>Makanan</option>
                  <option>Minuman</option>
                </select>
              </div>
            </div>
          
 
          </form>
        </div>
 
      </div>
    </div>
  </div>

  

@endsection