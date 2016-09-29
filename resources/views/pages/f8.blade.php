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
       @include('pages.partials.header')
           @include('pages.partials.bgimg')

     @include('pages.partials.navigation')
        <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 style="color:orange">Reset Password</h3>
            <div class="jumbotron" style="height:400px; width:500px">
              <h4 align="left">New password:</h4>
              <input type="password" name="usrname" size="50">
              <br>
              <br>
              <h4 align="left">Re-enter New password:</h4>
              <input type="password" name="usrname" size="50">
              <br>
              <br>
              <br>
              <a class="btn btn-block btn-large btn-primary">Reset password</a>
              <br>
              <a href="f9" class="btn btn-block btn-large btn-primary">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
@include('pages.partials.backto')

</body></html>