@extends('includes.brand')

@section('content')

           
    <main class="py-4" id="particles-js">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <p class="atas" style="text-align: center;">Anda telah memilih metode Cash On Delivery, Silahkan bayarkan uang tunai dengan jumlah pas kepada kurir kami</p>
                            <div style="border-bottom: 1px solid black;">
                                <img src="../image/smile.png">
                            </div>
                            <br>
                            <p style="float: left;"> >>>>>>>Back To <a href="/home" class="btn btn-info btn-sm">Home</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        

@endsection

<style type="text/css">
        img{
            float: center;
            margin-left: 10%;
        }
        #particles-js{
            background: none;
        }

        .atas{
            font-size:40px;
            font-weight: 500;
        }
    </style>




