<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="jquery.js"></script>
            <link rel="stylesheet" href="style1.css" />
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script type="text/javascript" src="plusminus.js"></script>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
        <style>
          .tales {
                   width: 100%;
                  }
          .carousel-inner{
                   width:100%;
                   max-height: 200px;
                  }
        .qty {
                width: 40px;
                height: 30px;
                text-align: center;
              }
        input.qtyplus { width:30px; height:30px;}
        input.qtyminus { width:30px; height:30px;}
          /*#stickyalias{
                  display: none;
                  height: 10px;
                }*/
            #stickyNav{
              background-image: url('images/28.jpg');
            }
    </style>
  </head><body>
        @include('pages.partials.header')
            @include('pages.partials.bgimg')

        @include('pages.partials.navigation')
        <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
                        <h1 style="color:orange">Xiaomi Redmi Note 3</h1>
            <img src="images/xiaomi.jpg" class="img-responsive">
          </div>
          <div style="color:orange" class="col-md-3">
            <h1>ORDER NOW</h1>
            <h3 class="style">Quantity: &nbsp;
            <input type='text' name='quantity' value='0' class='qty' />
            <input type='button' value='+' class='qtyplus' field='quantity' />
            <input type='button' value='-' class='qtyminus' field='quantity' /></h3>
            <div class="product-header"> 
             <div class="title">  <h3>Availability:</h3>   </div>
            <div class="admin" align="right" style="color:green">In stock</div>
            <div align="right" style="color:red">Out of Stock</div>
            </div>
            <h3>Price &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Rs 12000/-</h3>
          </div>
          <div style="color:orange" class="col-md-3">
            <h2>Payment Options</h2>
            <br>
            <h3>
              <input type="radio">Cash On Deleivery</h3>
              <br>
              <br>
              <br>
              <a href="f4" class="btn btn-success">CHECKOUT</a>
            
          </div>
        </div>
      </div>
    </div>
    <div id="carousel-example" data-interval="1000" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item">
          
          <img  class="tales" src="images/robin.jpg">
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="item">
          <img class="tales" src="images/iphone.jpg">
          <div class="carousel-caption">
           
          </div>
        </div>
        <div class="item">
          <img class="tales" src="images/modular.jpg">
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="item">
          <img class="tales" src="images/one.jpg">
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="item active">
          <img class="tales" src="images/s2.jpg">
          <div class="carousel-caption"></div>
        </div>
      <a class="left carousel-control" href="#carousel-example" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
      <a class="right carousel-control" href="#carousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default text-left">
              <div class="panel-heading">
                <h1 class="panel-title text-left">Specifications</h1>
                
                <h4>NETWORK</h4> 
                Technology: GSM / HSPA / LTE
                <h4>LAUNCH</h4>
                Announced:  2015, November<br>
                Released: 2015, November
                <h4>BODY</h4>
                Dimensions: 150 x 76 x 8.7 mm (5.91 x 2.99 x 0.34 in)<br>
                Weight:   164 g (5.78 oz)<br>
                SIM:    Dual SIM (Micro-SIM, dual stand-by)
                <h4>DISPLAY</h4> 
                Type:   IPS LCD capacitive touchscreen, 16M colors<br>
                Size:   5.5 inches (~72.4% screen-to-body ratio)<br>
                Resolution: 1080 x 1920 pixels (~403 ppi pixel density)<br>
                Multitouch? Yes
                      - MIUI 7.0
                <h4>PLATFORM</h4>
                OS:     Android OS, v5.0.2 (Lollipop)<br>
                Chipset:  Mediatek MT6795 Helio X10<br>
                CPU:    Octa-core 2.0 GHz Cortex-A53<br>
                GPU:    PowerVR G6200
                <h4>MEMORY </h4> 
                Card slot:  None<br>
                Internal: 16 GB, 2 GB RAM, 32 GB, 3 GB RAM
                <h4>CAMERA</h4>
                Primary:  13 MP, f/2.2, phase detection autofocus, dual-LED (dual tone) flash, check quality<br>
                Features: Geo-tagging, touch focus, face/smile detection, HDR, panorama<br>
                Video:    1080p@30fps, check quality<br>
                Secondary:  5 MP, f/2.0, 1080p
              </div>
              <div class="panel-body">
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
@include('pages.partials.backto')

</body></html>