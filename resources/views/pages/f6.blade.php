<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style1.css">
    
    <link rel="stylesheet" href="style1.css" />
   
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>  
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      showOn: "button",
      buttonImage: "calendar.png",
      buttonImageOnly: true,
      buttonText: "Select date"
    });
  } );
  </script>
  
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>    
        <script type="text/javascript" src="jquery.js"></script>

    <script type="text/javascript" src="navsticky.js"></script>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">
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

    @include('pages.partials.navigation')
        <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="container">
                <div class="row">
                  <h1 style="color:orange">Sign Up</h1>
                  <div class="col-md-6">
                    <form  style="color:orange" class="form-horizontal" role="form" method="POST" /*action="{{ url('/register') }}"*/>
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label  for="name" class="col-md-4 control-label">First name:</label>
                            <div class="col-md-6">
                            <input  id="name" type="text" class="form-control" name="name" placeholder="Enter your First name" value="{{ old('name') }}">
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
                            <input id="name" type="text" class="form-control" name="name" placeholder="Enter your Lastname" value="{{ old('name') }}">
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
                          <input id="male" type="checkbox" name="male">&nbsp;MALE
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

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Enter your E-mail Address">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Phone:</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control" name="phone" placeholder="Enter your Contact number" >
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="branch" class="col-md-4 control-label">Branch:</label>

                            <div class="col-md-6">
                                <input id="branch" type="text" class="form-control" name="branch" placeholder="Enter your Branch name " >
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="amountdeposited" class="col-md-4 control-label">Deposited Amount:</label>

                            <div class="col-md-6">
                                <input id="amount" type="number" class="form-control" name="amount" placeholder="Enter your Deposited Amount">
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

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter Same Password">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                      
                    </form>
                  </div>

                  <div class="col-md-3" >

                   <h4 style="color:orange">Permanent Address:</h4>
                      <textarea rows="5" cols="40" placeholder="Enter your Complete Address"></textarea>
                    

                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>                    
                    <button type="submit" class="btn btn-lg" style="height:50px; width:100px">Sign Up</button>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp;
                    <button type="submit" class="btn btn-lg" style="height:50px; width:100px">Cancel</button>
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