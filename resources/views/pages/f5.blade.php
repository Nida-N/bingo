<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style1.css" />
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>    
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
        @include('pages.partials.header')
            @include('pages.partials.bgimg')


    <div class="section">
      <div class="container">
        <div class="row">
          <div id="stickyNav" class="col-md-12">
            <ul class="nav nav-pills">
              <li class="">
                <a href="f1">Home</a>
              </li>
              <li>
                <a href="f2"><i class="fa fa-star fa-fw"></i>Mobile</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star fa-fw"></i>Tablets</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star fa-fw"></i>laptops</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star fa-fw"></i>Motherboards</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star fa-fw"></i>Processors</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star fa-fw"></i>Offers</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-star fa-fw"></i>Sale</a>
              </li>
              <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Order History<i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="#">Action</a>
                  </li>
                  <li>
                    <a href="#">Another action</a>
                  </li>
                  <li>
                    <a href="#">Something else here</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="#">Separated link</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="#">One more separated link</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown nav navbar-nav navbar-right">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false"><u>Jhon</u><i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="#">Action</a>
                  </li>
                  <li>
                    <a href="#">Another action</a>
                  </li>
                  <li>
                    <a href="#">Something else here</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="#">Separated link</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="#">One more separated link</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="stickyalias"></div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 style="color:orange">Order Confirmation</h3>
            <br>
            <br>
            <h3 style="color:orange">Congratulations</h3>
            <br>
            <p style="color:orange">
              <b>Your order for following products has been placed succesfully.it will
                be processed and dispatched
                <br>immediately. You are likely to receive it on 8-9 days.</b>
            </p>
            <br>
            <h3 style="color:orange">Thank YOU for Shopping with us!...</h3>
            <table class="table">
              <thead bgcolor="#A9A9A9">
                <tr>
                  <th>Sr no.</th>
                  <th>Product Name</th>
                  <th>Category</th>
                  <th>Ordered On</th>
                  <th>Price</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody bgcolor="#D3D3D3">
                <tr>
                  <td>1</td>
                  <td>Redmi Note 3</td>
                  <td>Mobiles</td>
                  <td>Dates</td>
                  <td>12000/-</td>
                  <td>Pending</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  
@include('pages.partials.backto')

</body></html>