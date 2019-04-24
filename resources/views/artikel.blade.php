@extends('includes.brand')

@section('content')

           
    <div class="container">

          <div class="header" style="text-align: center;">
            <h1>TanganBandung.com</h1>
             --- <small>Get In Touch with Local Creativity</small>
          </div> <!--/ .header -->

          <div class="main">
            
            <div class="left">
              <h3>----&nbsp;Motto&nbsp;----</h3>
              <p>Cintailah produk - produk kerajinan lokal Mu</p>
            </div> <!--/ .header -->

            <div class="middle">
              <h3 style="text-align: center;">Kerajinan dari kawat dengan tangan sendiri</h3>
              <p><strong><a href="3" target="_blank">Melakukan kerajinan dari kawat dengan tangan</a></strong> – Kawatnya memiliki beberapa varietas, yang masing-masing bisa digunakan untuk membuat hiasan asli, mendekorasi interior atau membuat gizmos yang berguna. Produk apa pun yang dibuat dengan tangan sendiri dapat dipresentasikan ke keluarga Anda, dan pemberian ini akan memberi pemilik baru banyak emosi positif.</p>
              <p><img src="../image/bandung.jpg" alt=""></p>
              <p><a href="#">Kerajinan</a> Chenille, atau kawat berbulu, tidak diragukan lagi, adalah bahan ideal untuk membuat kerajinan. Dengan mudah bisa diberi bentuk apapun, karena bending sangat baik dan tidak pecah. Potong potongan panjang yang diinginkan dari kawat ini juga mudah - Anda bisa melakukannya dengan gunting yang paling biasa.</p>
              <p><img src="../image/bandung.jpg" alt=""></p>
             Selain itu, kerajinan yang terbuat dari kawat halus, dibuat dengan tangan sendiri, ternyata luar biasa cerah dan indah. Terutama di kalangan anak laki-laki dan perempuan muda, produksi figur berbagai hewan dari bahan ini sangat populer. Zverushki dibuat dari peregangan multi-warna berbulu, menjadi mainan anak-anak favorit dan sangat sesuai dengan interior apapun.
            </div> <!--/ .middle -->

            <div class="right">
              <h3><a href="/blog" style="text-decoration: none; color: black;">Artikel lainnya</a></h3>
              <p>
                <ul>
                  <li style="padding-bottom: 40px"><span>Artikel   0</span></li>
                  <li style="padding-bottom: 40px"><span>Artikel   1</span></li>
                  <li style="padding-bottom: 40px"><span>Artikel   2</span></li>
                  <li style="padding-bottom: 40px"><span>Artikel   3</span></li>
                  <li style="padding-bottom: 40px"><span>Artikel   4</span></li>
                  <li style="padding-bottom: 40px"><span>Artikel   5</span></li>
                </ul>
              </p>
            </div> <!--/ .right -->

          </div> <!--/ .main -->
         
        </div>

        

@endsection


<style type="text/css">
    nav{
        position: fixed;
        height: 80px;
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

    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }


      body{
        background: white;
        font-family: 'Helvetica', arial, sans-serif;
        font-size: 15px;
      }

      p{
        margin-bottom: 20px;
        line-height: 1.5em;
      }
      h3{
        margin-bottom: 20px;
        border-bottom: 1px solid #aaa;
      }

      a:hover{
        color: #666;
      }
      .container{
        max-width: 1080px;
        margin: 20px auto;
        background-size: cover;
        background-repeat: no-repeat;
        overflow: hidden;
        padding: 10px;
      }


        .header{
            border: 1px solid #dedede;
            padding: 10px;
            margin: 10px;
          }

          /* Main */
            .left{
              width: 250px;
              border: 1px solid #dedede;
              background: #e5e5e5;
              padding: 10px;
              margin: 10px;
              float: left;
            }
            .left h3{
              top: 0;
              left: 0;
              font-size: 19px;
              padding-bottom: 4px;
              text-align: center;
              text-shadow: 2px 2px 2px blue;
              font-weight: 900;
            }

            .middle{
              width: 500px;
              border: 1px solid #dedede;
              padding: 10px;
              margin: 10px;
              float: left;
            }
            .middle img{
              max-width: 100%;
              height: auto;
            }

            .middle a{
              font-weight: bold;
            }

            .right{
              width: 250px;
              border: 1px solid #dedede;
              padding: 10px;
              margin: 10px;
              float: left;
            }


            .right ul{
              list-style-type: none;
            }
            .right ul li{
              display: block;
            }
            .right ul li a{
              display: block;
              border-bottom: 1px solid #dedede;
              margin-bottom: 10px;
              padding: 10px 5px;
            }
            .right ul li a:hover{
              color: orange;
            }



        /*
        MEDIA QUERIES
        */
        @media screen and (max-width: 1080px) {
          
          .container {
            width: 100%;
          }
          #topbar{ 
            width: 100%;
          }
          .left {
            width: 25%;
            background: #fff000;
          }
          .middle {
            width: 68%;
            float: right;
          }
          
          .right {
            clear: both;
            padding: 1% 4%;
            width: auto;
            float: none;
          }
        }



        @media screen and (max-width: 780px) {
          
          .header, 
          .footer,{
            text-align: center;
          }
          #topbar{
            width: auto;
            float: none;
          }
          .left {
            width: auto;
            float: none;
          }
          
          .middle {
            width: auto;
            float: none;
          }
          
          .right {
            width: auto;
            float: none;
          }

        }

    
   </style>





