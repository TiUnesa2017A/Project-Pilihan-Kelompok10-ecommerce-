@extends('includes.brand')

@section('content')

           
     <section class="sec1">
          <div class="text">
           <h1>Tentang Kami</h1>
          </div>
          <div class="container-fluid" style="margin-top: 2%; border-bottom: 2px solid #30749D; padding-bottom: 50px;">
              <div class="row">
                <div class="col-sm-5 bg-success">
                  <img src="../image/bdg.jpg" width="546.5px" height="280px">
                </div>
                <div class="col-sm-4 " style="padding-left: 40px; color: black; font-size: 19px; border-left: 1px solid grey;">
                  <p>Kota kembang merupakan sebutan lain untuk kota ini, karena pada zaman dulu kota ini dinilai sangat cantik dengan banyaknya pohon-pohon dan bunga-bunga yang tumbuh di sana. Selain itu Bandung dahulunya disebut juga dengan Parijs van Java karena keindahannya. Selain itu kota Bandung juga dikenal sebagai kota belanja, dengan mall dan factory outlet yang banyak tersebar di kota ini, dan saat ini berangsur-angsur kota Bandung juga menjadi kota wisata kuliner.
                  </p>
                </div>
                <div class="col-sm-3" style="padding-left: 20px; color: black; font-size: 19px; border-left: 1px solid grey;">
                  <p style="text-decoration: underline;">Visi-Misi Kami</p>
                  <ul>
                      <li>Menjadi yang terbaik</li>
                      <li>Memuaskan permintaan pelanggan</li>
                      <li>Harga murah, Kualitas juara</li>
                      <li>sudah cukup lah!!!</li>
                  </ul>
                </div>
              </div>
            </div>
          <div class="container-fluid" style="padding-top: 35px;">
              <div class="row">
                <div class="col-sm-4 ">
                  <img src="../image/smile2.png" style="border-radius: 90%">
                  <span style="color: black; padding-left: 10px; padding-bottom: 40px;">Fahri Muhammad</span>
                </div>
                <div class="col-sm-4 ">
                 <img src="../image/smile2.png" style="border-radius: 90%">
                 <span style="color: black; padding-left: 10px; padding-bottom: 40px;">Esti IKa Maharana</span>
                </div>
                <div class="col-sm-4">
                  <img src="../image/smile2.png" style="border-radius: 90%">
                  <span style="color: black; padding-left: 10px; padding-bottom: 40px;">Vira Arum Syahputri</span>
                </div>
              </div>
            </div>
                <br><br>
           <a href="/contactus" class="btn btn-info" role="button" style="padding: 10px 50px; margin-left: 43%; text-align: center;">Contact Us</a>
          </div>
          <div class="under">
           <h1 style="text-align: center;">The Dagels Team Present</h1>
          </div>
         </section>

        

@endsection


<style type="text/css">
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

    .sec1{
         background:#344761;
         font-family:Arial, sans-serif;
         margin-bottom: 2%;
        }


        .text h1{
         font-size:32px;
         color:#fff;
         text-align:center;
         font-weight:bold;
         margin-top:2%;
         border-bottom:2px solid #30749D;
         padding-bottom:30px;
         padding-top: 50px;
        }

        .picture{
         text-align:center;
         padding-top:50px;
         padding-left: 50px;
         border-radius: 90px;
        }

        .under{
         border-top:2px solid #30749D;
         font-size:30px;
         font-weight: 700;
         background: none;
         color:gold;
         text-align:center;
         font-weight:bold;
         margin-top:5px;
         padding-top:5px;
         margin-bottom: 25px;
        }

        .par{
         width:620px;
         padding-left:390px;
         text-align:center;
         color:#fff;
        }﻿

</style>
