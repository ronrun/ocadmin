<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <link href="{{ asset('vendor/ocadmin/stylesheet/bootstrap.css') }}" rel="stylesheet" media="screen"/>
    <link href="{{ asset('vendor/ocadmin/stylesheet/fonts/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/ocadmin/stylesheet/stylesheet.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('vendor/ocadmin/javascript/jquery/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/ocadmin/javascript/common.js') }}" type="text/javascript" ></script>
  </head>
  <body>
    <div id="alert"></div>
    <div id="container">
      <header id="header" class="navbar navbar-expand navbar-light bg-light">
        <div class="container-fluid">
          <a href="http://opencart.test/backend/index.php?route=common/dashboard&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4" class="navbar-brand d-none d-lg-block">
          <img src="{{ asset('vendor/ocadmin/image/logo.png') }}" alt="OpenCart" title="OpenCart"/></a>
          <button type="button" id="button-menu" class="btn btn-link d-inline-block d-lg-none"><i class="fa-solid fa-bars"></i></button>
          <ul class="nav navbar-nav">
            <li id="nav-notification" class="nav-item dropdown">
              <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle"><i class="fa-regular fa-bell"></i></a>
              <div class="dropdown-menu dropdown-menu-end">
                <span class="dropdown-item text-center">No results!</span>
              </div>
            </li>
            <li id="nav-language" class="nav-item dropdown">
              <a href="en-gb" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img src="http://opencart.test/catalog/language/en-gb/en-gb.png" alt="English" title="English"/></a>
              <ul class="dropdown-menu">
                <li><a href="en-gb" class="dropdown-item"><img src="http://opencart.test/catalog/language/en-gb/en-gb.png" alt="English" title="English"/> English</a></li>
              </ul>
              <input type="hidden" name="redirect" value="http://opencart.test/backend/index.php?route=common/dashboard&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4" id="input-redirect"/>
            </li>
            <li id="nav-profile" class="nav-item dropdown">
              <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle"><img src="{{ asset('vendor/ocadmin/image/profile.png') }}" alt="John Doe" title="John Doe" class="rounded-circle"/><span class="d-none d-md-inline d-lg-inline">&nbsp;&nbsp;&nbsp;John Doe <i class="fa-solid fa-caret-down fa-fw"></i></span></a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a href="http://opencart.test/backend/index.php?route=user/profile&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4" class="dropdown-item"><i class="fa-solid fa-user-circle fa-fw"></i> Your Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <h6 class="dropdown-header">Stores</h6>
                </li>
                <a href="http://opencart.test/" target="_blank" class="dropdown-item">Your Store</a>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <h6 class="dropdown-header">Help</h6>
                </li>
                <li><a href="https://www.opencart.com" target="_blank" class="dropdown-item"><i class="fa-brands fa-opencart fa-fw"></i> OpenCart Homepage</a></li>
                <li><a href="https://docs.opencart.com" target="_blank" class="dropdown-item"><i class="fa-solid fa-file fa-fw"></i> Documentation</a></li>
                <li><a href="https://forum.opencart.com" target="_blank" class="dropdown-item"><i class="fa-solid fa-comments fa-fw"></i> Support Forum</a></li>
              </ul>
            </li>
            <li id="nav-logout" class="nav-item"><a href="http://opencart.test/backend/index.php?route=common/logout&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4" class="nav-link"><i class="fa-solid fa-sign-out"></i> <span class="d-none d-md-inline">Logout</span></a></li>
          </ul>
        </div>
      </header>
      @yield('columnLeft')
      @yield('content')
      <script type="text/javascript"><!--
        $('#button-setting').on('click', function() {
          $.ajax({
            url: 'index.php?route=common/developer&user_token=3d4e47ac8ed96d232ac26566905a44e4',
            dataType: 'html',
            beforeSend: function() {
              $('#button-setting').button('loading');
            },
            complete: function() {
              $('#button-setting').button('reset');
            },
            success: function(html) {
              $('#modal-developer').remove();
    
              $('body').prepend(html);
    
              $('#modal-developer').modal('show');
            },
            error: function(xhr, ajaxOptions, thrownError) {
              console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
          });
        });
        //-->
      </script>
      <footer id="footer"><a href="https://www.opencart.com">OpenCart</a> &copy; 2009-2025 All Rights Reserved.<br/>Version 4.1.0.0</footer>
    </div>
    <script src="{{ asset('vendor/ocadmin/javascript/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
  </body>
</html>