<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <link rel="stylesheet" href="style1.css" />
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="navsticky.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="f11.css" rel="stylesheet" type="text/css">
    <style>
          /*#stickyalias{
                  display: none;
                  height: 10px;
                }*/
            #stickyNav{
              background-image: url('images/28.jpg');
            }
            /*.grow{
              overflow: auto;
            }
            .grow:hover{
              height: 800px;               
              width: 2000px;
            }*/
          /*#navbar{
              position: fixed;
              top: 0;
              left: 0;
              z-index: 999;
              width: 100%;
              height: 23px;
          }*/
        /*.effectfront {
                        border: none;
                        margin: 0 auto;
                      }
        .effectfront:hover {
          -webkit-transform: scale(1.2);
          -moz-transform: scale(0.0);
          -o-transform: scale(1.2);
          transform: scale(1.2);
          transition: all 0.3s;
          -webkit-transition: all 0.3s;
        }*/
    </style>
  </head><body>
    @include('pages.partials.bgimg')
    @include('pages.partials.header')
    @include('pages.partials.navigation')
   
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <img src="images/iphone.jpg" class="img-responsive">
          </div>
          <div class="col-md-4">
            <img src="images/n5.jpg" class="img-responsive">
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 style="color:orange">Top Selling Products</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <a><img src="images/mi5.jpg" class="img-responsive"></a>
          </div>
          <div class="col-md-3">
            <a><img src="images/s2.jpg" class="img-responsive"></a>
          </div>
          <div class="col-md-3">
            <a><img src="images/one.jpg" class="img-responsive"></a>
          </div>
          <div class="col-md-3">
            <a><img src="images/moto1.png" class="img-responsive"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 style="color:orange">New Products</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <a><img src="images/robin.jpg" class="img-responsive"></a>
          </div>
          <div class="col-md-3">
            <a><img src="images/MotoZ.jpg" class="img-responsive"></a>
          </div>
          <div class="col-md-3">
            <a><img src="images/modular.jpg" class="img-responsive"></a>
          </div>
          <div class="col-md-3">
            <a><img src="images/s7e.jpg" class="img-responsive"></a>
          </div>
        </div>
      </div>
    </div>
  
@include('pages.partials.backto')
</body></html>