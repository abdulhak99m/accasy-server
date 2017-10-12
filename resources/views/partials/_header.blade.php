 <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <div class="container-fluid relative">
          <!-- LEFT SIDE -->
          <div class="pull-left full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
                <span class="icon-set menu-hambuger"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
          <div class="pull-center hidden-md hidden-lg">
            <div class="header-inner">
              <div class="brand inline">
                <img src="{{url('/')}}/assets/img/logo.png" alt="logo" data-src="{{url('/')}}/assets/img/logo.png" data-src-retina="{{url('/')}}/assets/img/logo_2x.png" width="78" height="22">
              </div>
            </div>
          </div>
          <!-- RIGHT SIDE -->
          <div class="pull-right full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
                <span class="icon-set menu-hambuger-plus"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
        </div>
        <!-- END MOBILE CONTROLS -->
        <div class=" pull-left sm-table hidden-xs hidden-sm">
          <div class="header-inner">
            <div class="brand inline">
              <img src="{{url('/')}}/assets/img/logo.png" alt="logo" data-src="{{url('/')}}/assets/img/logo.png" data-src-retina="{{url('/')}}/assets/img/logo_2x.png" width="78" height="22">
            </div>
            <!-- START NOTIFICATION LIST -->
            
            <!-- END NOTIFICATIONS LIST -->
            <!--<a href="#" class="search-link" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a> --></div>
        </div>
        <div class=" pull-right">
          <div class="header-inner">
            <a href="#" class="btn-link icon-set menu-hambuger-plus m-l-20 sm-no-margin hidden-sm hidden-xs" data-toggle="quickview" data-toggle-element="#quickview"></a>
          </div>
        </div>
        <div class=" pull-right">
          <!-- START User Info-->
          <div class="visible-lg visible-md m-t-10">
            <div class="dropdown pull-right">
              <button class="profile-dropdown-toggle p-r-10 p-t-10 fs-16 font-heading" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="semi-bold">{{Auth::user()->name}}</span>
            </span>
              </button>
              <ul class="dropdown-menu profile-dropdown" role="menu">
                <li>
                  <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="clearfix">
                    <span class="pull-left">Logout</span>
                    <span class="pull-right"><i class="pg-power"></i></span>
                  </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </li>
              </ul>
            </div>
          </div>
          <!-- END User Info-->
        </div>
      </div>