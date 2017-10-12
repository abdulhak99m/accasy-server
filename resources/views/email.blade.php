
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Reset password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="../assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="../css/pages.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
	<link href="assets/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->
  </head>
  <body class="fixed-header ">
    <!-- START PAGE-CONTAINER -->
    <div class="register-container full-height sm-p-t-30">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <div class="container-fluid relative">
          <!-- LEFT SIDE -->
          <div class="pull-left full-height visible-sm visible-xs">
          </div>
          <div class="pull-center hidden-md hidden-lg">
            <div class="header-inner">
              <div class="brand inline">
                <img src="../assets/img/logo_2x.png" alt="logo" data-src="../assets/img/logo_2x.png" data-src-retina="../assets/img/logo_2x.png" width="78" height="22">
              </div>
            </div>
          </div>
          <!-- RIGHT SIDE -->
          <div class="pull-right full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <span class="semi-bold fs-16"><a href="{{route('login')}}">Login</a></span>
            </div>
            <!-- END ACTION BAR -->
          </div>
        </div>
        <!-- END MOBILE CONTROLS -->
        <div class=" pull-left sm-table hidden-xs hidden-sm">
          <div class="header-inner">
            <div class="brand inline">
              <img src="../assets/img/logo_2x.png" alt="logo" data-src="../assets/img/logo_2x.png" data-src-retina="../assets/img/logo_2x.png" width="78" height="22">
            </div>
           </div>
        </div>
       
        <div class=" pull-right">
          <!-- START User Info-->
          <div class="visible-lg visible-md m-t-10">
            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
              <span class="semi-bold"><a href="{{route('login')}}">Login</a></span>
            </div>
          </div>
          <!-- END User Info-->
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <!-- BEGIN PlACE PAGE CONTENT HERE -->
                    <div class="container-sm-height full-height">
        <div class="row row-sm-height">
          <div class="col-sm-12 col-sm-height col-middle">
            <form id="form-register" class="p-t-75" role="form" method="post" action="{{route('password.email')}}"> 
                  {{ csrf_field() }}
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} form-group-default">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="We will send reset link to you" class="form-control" required>
                       @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  </div>
                </div>
              </div> 
              <button class="btn btn-primary btn-cons m-t-10" type="submit">Send Password Reset Link</button>
            </form>
          </div>
        </div>
      </div>
            <!-- END PLACE PAGE CONTENT HERE -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- BEGIN VENDOR JS -->
    <script src="../assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="../assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="../assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="../assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="../assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="../assets/plugins/classie/classie.js"></script>
    <script src="../assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="../js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="../assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>