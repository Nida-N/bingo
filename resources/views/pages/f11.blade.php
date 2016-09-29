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
            textarea{
              resize: none;
            }
            .form-horizontal .control-label{
              /* text-align:right; */
              text-align:left;
              
              }
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
              <li>
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Profile<i class="fa fa-caret-down"></i></a>
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><u>Jhon</u><i class="fa fa-caret-down"></i></a>
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
            <div class="section">
              <div class="container">
                <div class="row">
                  <h1 style="color:orange">My Profile</h1>
                  <div class="col-md-6">
                    <form  style="color:orange" class="form-horizontal" role="form" method="POST" /*action="{{ url('/register') }}"*/>
                        {{ csrf_field() }}

                        <div style="align: left" class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label  for="name" class="col-md-4 control-label">First name:</label>
                            <div class="col-md-6">
                            <input  id="name" type="text" class="form-control" name="name" placeholder="jhon" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="name" class="col-md-4 control-label">Last name:</label>
                            <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" placeholder="doe" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="gender" class="col-md-4 control-label">Gender:</label>
                          <div class="col-md-6">
                          <input id="male" type="checkbox" name="male" checked>&nbsp;MALE
                          &nbsp;&nbsp;&nbsp;&nbsp;                            
                          <input id="female" type="checkbox" name="female">&nbsp;FEMALE                      
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="date" class="col-md-4 control-label">Date of Birth:</label>
                          <div class="col-md-6">
                            <input id="date" type="date" class="form-control" name="date" placeholder="Enter your Date of Birth">
                          </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Phone:</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" name="phone" placeholder="9004834568" >
                                </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="jhon@gmail.com">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        </form>
                    <button  onclick="window.location.href='#'" style="height:50; width:100px;" type="submit" class="btn btn-block btn-success btn-xs"  data-toggle="modal" data-target="#myModal">Change Password</button>
                  </div>

                  
                  <div class="col-md-6" >
                    <button onclick="window.location.href='/f12'" type="submit" style="height:50px; width:100px; float:right" class="btn btn-lg btn-success">Edit</button>

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

                               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">New Password:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Enter your Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Re-enter Password:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter Same Password">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                                </div>  
                                </form>
                                <div class="modal-footer">
                              <div class="col-md-6" style="display: block; margin: 0 auto;">    
                              <button onclick="window.location.href='/f101'" type="submit" class="btn btn-lg" style="height:50px; width:100px">Change</button>
                              </div>
                         
                                <div onclick="window.location.href='/f11'" class="col-md-6" style="display: block; margin: 0 auto;">
                                <button type="submit" class="btn btn-lg" style="height:50px; width:100px">Cancel</button>       
                               </div>         
                               </div>
                    </div>
                  </div>
                </div>
              </div>







                    <br>
                    <br>
                    <br>
                    <h4 style="color:orange" >Permanent Address:
                      <textarea  style="float:right" rows="5" cols="40">Airoli,Navi Mumbai</textarea>
                    </h4>
                    <br><br><br>
                    <form style="color:orange" class="form-horizontal" role="form" method="POST"><br><br>
                    <div class="form-group">
                      <label for="picode" class="col-md-4 control-label">Pincode:</label>
                      
                      <div class="col-md-6">
                      <input type="number" name="pincode" class="form-control" placeholder="400809">
                    </div>
                    </div>

                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
@include('pages.partials.backto')

</body></html>