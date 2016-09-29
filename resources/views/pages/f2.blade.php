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
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <style>
          /*#stickyalias{
                  display: none;
                  height: 10px;
                }*/
            #stickyNav{
              background-image: url('images/28.jpg');
            }
    </style>
  </head><body>
            @include('pages.partials.bgimg')

        @include('pages.partials.header')
    @include('pages.partials.navigation')
   
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <h3 style="color:orange">Search Filters</h3>
            <p style="color:orange">Search filters will be specific to the product Category type. These are
              nothing but the attributes that are set in the backend while creating categories
              and adding their attributes</p>
          </div>
          <div class="col-md-10">
            <h3 style="color:orange">Search results</h3>
            <br>
            <div style="color:orange" class="dropdown">SORT
              <select>
                <option>XIAOMI</option>
                <option>SAMSUNG</option>Prev 1 2 3 4 5 Next
                <option>MOTOROLA</option>
              </select>
              <h5 align="right">
                <ul class="pagination">
                  <li>
                    <a href="#">Prev</a>
                  </li>
                  <li>
                    <a href="#">1</a>
                  </li>
                  <li>
                    <a href="#">2</a>
                  </li>
                  <li>
                    <a href="#">3</a>
                  </li>
                  <li>
                    <a href="#">4</a>
                  </li>
                  <li>
                    <a href="#">5</a>
                  </li>
                  <li>
                    <a href="#">Next</a>
                  </li>
                </ul>
              </h5>
              <div class="row">
              

               <div class="row">
                <div class="col-md-4">
                  <a href="f3"><img src="images/xiaomi.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-4">
                  <a href="f3"><img src="images/n5.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-4">
                  <a href="f3"><img src="images/robin.jpg" class="img-responsive"></a>
                </div> 
              </div>
              
                
              </div>
              <br>
              <div class="row">
              

               <div class="row">
                <div class="col-md-4">
                  <a href="f3"><img src="images/xiaomi.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-4">
                  <a href="f3"><img src="images/n5.jpg" class="img-responsive"></a>
                </div>
                <div class="col-md-4">
                  <a href="f3"><img src="images/robin.jpg" class="img-responsive"></a>
                </div> 
              </div>
              
                
              </div>




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
          <div class="row">0
            <div class="col-md-3">
              <a href="f3"><img src="images/mi5.jpg" class="img-responsive"></a>
            </div>
            <div class="col-md-3">
              <a href="f3"><img src="images/s2.jpg" class="img-responsive"></a>
            </div>
            <div class="col-md-3">
              <a href="f3"><img src="images/one.jpg" class="img-responsive"></a>
            </div>
            <div class="col-md-3">
              <a href="f3"><img src="images/turing.jpg" class="img-responsive"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @include('pages.partials.backto')


</body></html>