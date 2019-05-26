<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<style type="text/css">
	
	.footer{
	position: fixed;
	bottom: 0;
    margin-top: -4%;
}
i{
	padding-left: 40px;
}

body{
    color: grey;
}

div, p, span{
    color: grey;
}

/* background bubbles */
.bg-bubbles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}

.bg-bubbles li {
    position: absolute;
    list-style: none;
    display: block;
    border-radius: 50%;
    box-shadow:  -20px 22px 63px 3px rgba(155,209,242,1);
    width: 40px;
    height: 40px;
    background: rgb(219, 249, 246);
    background-image: linear-gradient(to right top, #13d6ff, #5ce0dc, #9de5be, #d1e5b2, #f8e5bc);
    bottom: -160px;
    -webkit-animation: circle 2s infinite;
    animation: circle infinite;
    -webkit-transition-timing-function: linear;
    transition-timing-function: linear;
}

.bg-bubbles li:nth-child(1) {
    left: 10%;
}

.bg-bubbles li:nth-child(2) {
    left: 20%;
    width: 80px;
    height: 80px;
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
    -webkit-animation-duration: 17s;
    animation-duration: 17s;
}

.bg-bubbles li:nth-child(3) {
    left: 25%;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
}

.bg-bubbles li:nth-child(4) {
    left: 40%;
    width: 60px;
    height: 60px;
    -webkit-animation-duration: 12s;
    animation-duration: 12s;
    background-color: rgba(255, 255, 255, 0.25);
}

.bg-bubbles li:nth-child(5) {
    left: 70%;
}

.bg-bubbles li:nth-child(6) {
    left: 80%;
    width: 120px;
    height: 120px;
    -webkit-animation-delay: 2s;
    animation-delay: 3s;
    background-color: rgba(255, 255, 255, 0.2);
}

.bg-bubbles li:nth-child(7) {
    left: 32%;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 5s;
    animation-delay: 5s;
}

.bg-bubbles li:nth-child(8) {
    left: 55%;
    width: 20px;
    height: 20px;
    -webkit-animation-delay: 6s;
    animation-delay: 6s;
    -webkit-animation-duration: 40s;
    animation-duration: 40s;
}

.bg-bubbles li:nth-child(9) {
    left: 25%;
    width: 10px;
    height: 10px;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
    -webkit-animation-duration: 40s;
    animation-duration: 40s;
    background-color: rgba(255, 255, 255, 0.3);
}

.bg-bubbles li:nth-child(10) {
    left: 90%;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 7s;
    animation-delay: 7s;
}
.bg-bubbles li:nth-child(11) {
    left: 70%;
}

.bg-bubbles li:nth-child(12) {
    left: 40%;
    width: 80px;
    height: 80px;
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
    -webkit-animation-duration: 17s;
    animation-duration: 17s;
}

.bg-bubbles li:nth-child(13) {
    left: 55%;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
}

.bg-bubbles li:nth-child(14) {
    left: 75%;
    width: 60px;
    height: 60px;
    -webkit-animation-duration: 12s;
    animation-duration: 12s;
    background-color: rgba(255, 255, 255, 0.25);
}

.bg-bubbles li:nth-child(15) {
    left: 15%;
}

.bg-bubbles li:nth-child(16) {
    left: 25%;
    width: 120px;
    height: 120px;
    -webkit-animation-delay: 2s;
    animation-delay: 3s;
    background-color: rgba(255, 255, 255, 0.2);
}

.bg-bubbles li:nth-child(17) {
    left: 62%;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 5s;
    animation-delay: 5s;
}

.bg-bubbles li:nth-child(18) {
    left: 35%;
    width: 20px;
    height: 20px;
    -webkit-animation-delay: 7s;
    animation-delay: 7s;
    -webkit-animation-duration: 40s;
    animation-duration: 40s;
}

.bg-bubbles li:nth-child(19) {
    left: 75%;
    width: 10px;
    height: 10px;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
    -webkit-animation-duration: 40s;
    animation-duration: 40s;
    background-color: rgba(255, 255, 255, 0.3);
}

.bg-bubbles li:nth-child(20) {
    left: 10%;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 6s;
    animation-delay: 6s;
}.bg-bubbles li:nth-child(21) {
    left: 10%;
}

.bg-bubbles li:nth-child(22) {
    left: 5%;
    width: 80px;
    height: 80px;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
    -webkit-animation-duration: 10s;
    animation-duration: 10s;
}

.bg-bubbles li:nth-child(23) {
    left: 95%;
    -webkit-animation-delay: 3s;
    animation-delay: 3s;
}

.bg-bubbles li:nth-child(24) {
    left: 10%;
    width: 60px;
    height: 60px;
    -webkit-animation-duration: 10s;
    animation-duration: 10s;
    background-color: rgba(255, 255, 255, 0.25);
}

.bg-bubbles li:nth-child(25) {
    left: 70%;
}

.bg-bubbles li:nth-child(26) {
    left: 15%;
    width: 120px;
    height: 120px;
    -webkit-animation-delay: 3s;
    animation-delay: 4s;
    background-color: rgba(255, 255, 255, 0.2);
}

.bg-bubbles li:nth-child(27) {
    left: 82%;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 7s;
    animation-delay: 7s;
}

.bg-bubbles li:nth-child(28) {
    left: 85%;
    width: 20px;
    height: 20px;
    -webkit-animation-delay: 7s;
    animation-delay: 7s;
    -webkit-animation-duration: 25s;
    animation-duration: 25s;
}

.bg-bubbles li:nth-child(29) {
    left: 18%;
    width: 10px;
    height: 10px;
    -webkit-animation-delay: 2s;
    animation-delay: 2s;
    -webkit-animation-duration: 15s;
    animation-duration: 15s;
    background-color: rgba(255, 255, 255, 0.3);
}

.bg-bubbles li:nth-child(30) {
    left: 10%;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 8s;
    animation-delay: 8s;
}
.bg-bubbles li:nth-child(31) {
    left: 40%;
}

.bg-bubbles li:nth-child(32) {
    left: 25%;
    width: 80px;
    height: 80px;
    -webkit-animation-delay: 3s;
    animation-delay: 3s;
    -webkit-animation-duration: 12s;
    animation-duration: 12s;
}

.bg-bubbles li:nth-child(33) {
    left: 25%;
    -webkit-animation-delay: 4s;
    animation-delay: 4s;
}

.bg-bubbles li:nth-child(34) {
    left: 35%;
    width: 60px;
    height: 60px;
    -webkit-animation-duration: 9s;
    animation-duration: 9s;
    background-color: rgba(255, 255, 255, 0.25);
}

.bg-bubbles li:nth-child(35) {
    left: 89%;
}

.bg-bubbles li:nth-child(36) {
    left: 65%;
    width: 120px;
    height: 120px;
    -webkit-animation-delay: 4s;
    animation-delay: 5s;
    background-color: rgba(255, 255, 255, 0.2);
}

.bg-bubbles li:nth-child(37) {
    left: 22%;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 6s;
    animation-delay: 6s;
}

.bg-bubbles li:nth-child(38) {
    left: 95%;
    width: 20px;
    height: 20px;
    -webkit-animation-delay: 9s;
    animation-delay: 9s;
    -webkit-animation-duration: 25s;
    animation-duration: 25s;
}

.bg-bubbles li:nth-child(39) {
    left: 21%;
    width: 10px;
    height: 10px;
    -webkit-animation-delay: 4s;
    animation-delay: 4s;
    -webkit-animation-duration: 28s;
    animation-duration: 28s;
    background-color: rgba(255, 255, 255, 0.3);
}

.bg-bubbles li:nth-child(40) {
    left: 90%;
    width: 160px;
    height: 160px;
    -webkit-animation-delay: 7.5s;
    animation-delay: 7.5s;
}

@-webkit-keyframes circle {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }

    100% {
        -webkit-transform: translateY(-700px) rotate(600deg);
        transform: translateY(-700px) rotate(600deg);
    }
}

@keyframes square {
    0% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }

    100% {
        -webkit-transform: translateY(-700px) rotate(600deg);
        transform: translateY(-700px) rotate(600deg);
    }
}

p{
    color: black;
}

/* //background bubbles */



@media (max-height:800px){
	footer { position: static; }
	header { padding-top:40px; }
}


</style>

</head>
<body>

<div class="container-fluid footer" style="color: grey; background: #111;
    position: relative;
    overflow: hidden;
    z-index: 1; font-weight: 700;">
  <div class="container-fluid" style="padding-top: 10px;">
    <div class="row footer-distributed">
      <div class="col-sm footer-left">
      	<h3>Local<span>Shop</span></h3>
				<p class="text-secondary">The Dagel's Team &copy; 2015</p>
      </div>
      <div class="col-sm footer-center" style="border-left: 1px solid black;">
      	<div>
					<i class="fa fa-map-marker"></i>
					<p class="text-secondary">Surabaya Jawa Timur, Indonesia</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p class="text-secondary">+6281123456789</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p class="text-secondary">support@localShop.com</p>
				</div>
      </div>
      <div class="col-sm footer-right" style="border-left: 1px solid black;">
      	<p class="footer-company-about text-secondary">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				</p>

				<div class="footer-icons" style="margin-top: 9%; background-color: none; color:black; font-size: 22px;">

					<span><i class="fa fa-facebook" style="padding-left: 60px"></i></span>
					<span><i class="fa fa-twitter" style="padding-left: 60px"></i></span>
					<span><i class="fa fa-linkedin" style="padding-left: 60px"></i></span>
					<span><i class="fa fa-instagram" style="padding-left: 60px"></i></span>

				</div>
      </div>
    </div>  
  </div>
  <!-- <ul class="bg-bubbles">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul> -->
</div>

</body>
</html>
