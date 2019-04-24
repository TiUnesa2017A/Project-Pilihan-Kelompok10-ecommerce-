@extends('includes.head2')

@section('content')

           
     <main class="page cv-page" style="margin-top: 4%;">
        <section class="portfolio-block block-intro border-bottom" style="padding-bottom:20px;">
            <div class="container">
                <div class="avatar pull-center"><img src="../image/faqs.jpg" style="float: center; width:300px; height: 150px; border-radius: 40px; margin-left: 37%;"></div>
                <div class="about-me">
                    <p>Selamat datang di menu "Frequensi Ask Questions", berbagai pertanyaan seputar Tangan Bandung dapat anda temukan di sini</p>
                </div>
            </div>
        </section>
        <section class="portfolio-block cv" style="padding-top:20px;padding-bottom:20px;"><div class="container" style="padding-top:40px;padding-bottom:40px;">
    <div class="container">
        <div class="panel-group" id="accordion">
            <div class="faqHeader">General questions</div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1.  Apakah ready stock?</a></h4></div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">Barang yang berada di etalase adalah ready.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">5.    Barang yang rusak apa bisa dikembalikan?</a></h4></div>
                <div id="collapseTen" class="panel-collapse collapse">
                    <div class="panel-body">Kami mengirim barang yang berkualitas baik. Jadi jika ada kerusakan bukan kesalahan dari pihak kami</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">6. Barangnya produksi sendiri?</a></h4></div>
                <div id="collapseEleven" class="panel-collapse collapse">
                    <div class="panel-body">Kami adalah market place bagi para pengrajin di Kota Bandung</div>
                </div>
            </div>
            <div class="faqHeader">Sellers</div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Who cen sell items?</a></h4></div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">Any registed user, who presents a work, which is genuine and appealing, can post it on<strong>PrepBootstrap</strong>.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">I want to sell my items - what are the steps?</a></h4></div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">The steps involved in this process are really simple. All you need to do is:
                        <ul>
                            <li>Register an account</li>
                            <li>Activate your account</li>
                            <li>Go to the<strong>Themes</strong>section and upload your theme</li>
                            <li>The next step is the approval step, which usually takes about 72 hours.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How much do I get from each sale?</a></h4></div>
                <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">Here, at<strong>PrepBootstrap</strong>, we offer a great, 70% rate for each seller, regardless of any restrictions, such as volume, date of entry, etc.
                        <br />
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Why sell my items here?</a></h4></div>
                <div id="collapseSix" class="panel-collapse collapse">
                    <div class="panel-body">There are a number of reasons why you should join us:
                        <ul>
                            <li>A great 70% flat rate for your items.</li>
                            <li>Fast response/approval times. Many sites take weeks to process a theme or template. And if it gets rejected, there is another iteration. We have aliminated this, and made the process very fast. It only takes up to 72 hours
                                for a template/theme to get reviewed.</li>
                            <li>We are not an exclusive marketplace. This means that you can sell your items on<strong>PrepBootstrap</strong>, as well as on any other marketplate, and thus increase your earning potential.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">What are the payment options?</a></h4></div>
                <div id="collapseEight" class="panel-collapse collapse">
                    <div class="panel-body">The best way to transfer funds is via Paypal. This secure platform ensures timely payments and a secure environment.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">When do I get paid?</a></h4></div>
                <div id="collapseNine" class="panel-collapse collapse">
                    <div class="panel-body">Our standard payment plan provides for monthly payments. At the end of each month, all accumulated funds are transfered to your account. The minimum amount of your balance should be at least 70 USD.</div>
                </div>
            </div>
            <div class="faqHeader">Buyers</div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">I want to buy a theme - what are the steps?</a></h4></div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">Buying a theme on<strong>PrepBootstrap</strong>is really simple. Each theme has a live preview. Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                        <br />Once the transaction is complete, you gain full access to the purchased product.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Is this the latest version of an item</a></h4></div>
                <div id="collapseSeven" class="panel-collapse collapse">
                    <div class="panel-body">Each item in<strong>PrepBootstrap</strong>is maintained to its latest version. This ensures its smooth operation.</div>
                </div>
            </div>
        </div>
    </div>
</div></section>
    </main>

<br><br>    

        

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
</style>




