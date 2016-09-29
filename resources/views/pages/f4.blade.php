<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="navsticky.js"></script>
    <link rel="stylesheet" href="style1.css" />
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
        <style>
        .form-horizontal .control-label{
              /* text-align:right; */
              text-align:left;
              
              }
          textarea{
              resize: none;
            }
         /* #stickyalias{
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
          <div class="col-md-12">
            <h2 style="color:orange">You must Login or Sign Up before you can buy the product.</h2>
            <br>
            <button onclick="window.location.href='#'" style="height:80px; width:100px" type="submit" class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal" >Login</button>


            <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header" style="color:white; background-color:red;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3 style="text-align:center" class="modal- title"><strong>Login</strong></h3>
                  </div>
                                <div class="modal-body">
                           <form  style="color:orange" class="form-horizontal" role="form" method="POST" /*action="{{ url('/register') }}"*/>
                            {{ csrf_field() }}

                              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label  for="name" class="col-md-4 control-label">Username:</label>
                             <div class="col-md-6">
                               <input  id="name" type="text" class="form-control" name="name" placeholder="Enter your First name" value="{{ old('name') }}">
                                  @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                 </div>

                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Enter your Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                </div>  
                                </form>
                                <div class="modal-footer">
                              <div class="col-md-6" style="display: block; margin: 0 auto;">    
                              <button onclick="window.location.href='/f5'" type="submit" class="btn btn-lg" style="height:50px; width:100px">Sign In</button>
                              </div>
                         
                                <div onclick="window.location.href='/f4'" class="col-md-6" style="display: block; margin: 0 auto;">
                                <button type="submit" class="btn btn-lg" style="height:50px; width:100px">Cancel</button>       
                               </div>         
                               </div>
                    </div>
                  </div>
                </div>
              </div>

           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
            <button onclick="window.location.href='/f6'" type="submit" class="btn btn-lg btn-success" style="height:80px; width:100px">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 style="color:orange">CHECKOUT</h2>
            <table class="table">
              <thead bgcolor="#A9A9A9">
                <tr>
                  <th>Product name</th>
                  <th>Availibility</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Payment options</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody bgcolor="#D3D3D3">
                <tr>
                  <td>Xiaomi Redmi note 3</td>
                  <td>In Stock</td>
                  <td>3</td>
                  <td>3500</td>
                  <td>Cash on Deleivery</td>
                  <td>Remove</td>
                </tr>
              </tbody>
            </table>
            </div>
            <div class="col-md-4">
            <h2 style="color:orange">Shipping Address</h2>
            <textarea rows="4" cols="50"></textarea>
            </div>
            <div class="col-md-4">
            <br><br><br>
            <h4 style="color:orange">
            <input type="checkbox">&nbsp;
            Same as permanent address</h4>
              </div>
              <div class="col-md-4">
              <br><br>
              <button type="submit" style="height:80px; width:100px; float:right" class="btn btn-lg btn-success">Buy Now</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  @include('pages.partials.backto')


</body></html>