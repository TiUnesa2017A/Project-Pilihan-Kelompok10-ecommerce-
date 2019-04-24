@extends('includes.brand')

@section('content')

           
    <div class="container contact-form">
          <h1>Contact form</h1>
          <hr>

          <div class="row">
           
               <div class="col-md-6">
                <a href="#form-group">
                  <img src="../image/cus.jpg">
                </a>
               </div>

               <div class="col-md-6">
                
                 <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control">
                 </div>

                 <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control">
                 </div>

                 <div class="form-group">
                  <label>Tujuan</label>
                  <input type="text" class="form-control">
                 </div>

                 <div class="form-group">
                  <label>Deskripsi Pesan</label>
                  <textarea  class="form-control" rows="7"></textarea>
                 </div>

                 <div class="form-group">
                  <a href="/home">
                    <button class="btn btn-primary btn-block">Kirim</button>
                  </a>
                 </div>
               </div>
            </div>
        </div>

        

@endsection


<style type="text/css">
    img:hover{
      transform: scale(1.05);
      z-index: 2;
      box-shadow: 0 15px 40px rgba(255, 255, 102,0.4);
      cursor: pointer;
      transition: 0.9s;
    }
    nav{
        position: fixed;
        height: 10%;
    }
    nav a{
        color: black;
        padding: 15px;
        text-align: center;
        font-size: 17px;
    }
    nav a:hover{
        color: white;
        background-color: none;
        text-decoration: none;
    }
    nav li .drop:hover{
        background-color: none;
        padding: 10px;
        height: 100%;
    }
    li a:hover{
            color: blue;
            font-size: 22px;
        }
      hr{
        background: white;  
      }

    .contact-form{
      background:rgba(0,0,0, .6);
      color:white;
      margin-top: 2%;
      margin-bottom: 2%;
      padding: 20px;
      box-shadow: 0px 0px 10px 3px grey;
      border-radius: 10px;
    }
   </style>








