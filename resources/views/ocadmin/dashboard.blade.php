@extends('ocadmin.layout.app')

@section('pageJsCss')
@endsection

@section('columnLeft')
  @include('ocadmin.common.column_left')
@endsection

@section('content')
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
              <div class="float-end">
          <button type="button" id="button-setting" data-bs-toggle="tooltip" title="Developer Setting" class="btn btn-info"><i class="fa-solid fa-cog"></i></button>
        </div>
            <h1>Dashboard</h1>
      <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="http://opencart.test/backend/index.php?route=common/dashboard&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Home</a></li>
                  <li class="breadcrumb-item"><a href="http://opencart.test/backend/index.php?route=common/dashboard&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">Dashboard</a></li>
              </ol>
    </div>
  </div>
  <div class="container-fluid">
          <div class="row">
                                                                                                                              <div class="col-lg-3 col-md-3 col-sm-6 mb-3"><div class="tile tile-primary">
  <div class="tile-heading">Total Orders <span class="float-end">
          0%</span></div>
  <div class="tile-body"><i class="fa-solid fa-shopping-cart"></i>
    <h2 class="float-end">0</h2>
  </div>
  <div class="tile-footer"><a href="http://opencart.test/backend/index.php?route=sale/order&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">View more...</a></div>
</div>
</div>
                                                                                                                              <div class="col-lg-3 col-md-3 col-sm-6 mb-3"><div class="tile tile-primary">
  <div class="tile-heading">Total Sales <span class="float-end">
        0%</span>
  </div>
  <div class="tile-body"><i class="fa-solid fa-credit-card"></i>
    <h2 class="float-end">0</h2>
  </div>
  <div class="tile-footer"><a href="http://opencart.test/backend/index.php?route=sale/order&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">View more...</a></div>
</div>
</div>
                                                                                                                              <div class="col-lg-3 col-md-3 col-sm-6 mb-3"><div class="tile tile-primary">
  <div class="tile-heading">Total Customers <span class="float-end">
          0%</span></div>
  <div class="tile-body"><i class="fa-solid fa-user"></i>
    <h2 class="float-end">0</h2>
  </div>
  <div class="tile-footer"><a href="http://opencart.test/backend/index.php?route=customer/customer&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">View more...</a></div>
</div>
</div>
                                                                                                                              <div class="col-lg-3 col-md-3 col-sm-6 mb-3"><div class="tile tile-primary">
  <div class="tile-heading">People Online</div>
  <div class="tile-body"><i class="fa-solid fa-users"></i>
    <h2 class="float-end">0</h2>
  </div>
  <div class="tile-footer"><a href="http://opencart.test/backend/index.php?route=report/online&amp;user_token=3d4e47ac8ed96d232ac26566905a44e4">View more...</a></div>
</div>
</div>
              </div>
          <div class="row">
                                                                                                                                      <div class="col-lg-6 col-md-12 col-sm-12 mb-3"><div class="card mb-3">
  <div class="card-header"><i class="fa-solid fa-globe"></i> World Map</div>
  <div class="card-body">
    <div id="vmap" style="width: 100%; height: 260px;"></div>
  </div>
</div>
<link type="text/css" href="view/javascript/jquery/jqvmap/jqvmap.css" rel="stylesheet" media="screen"/>
<script type="text/javascript" src="{{ asset('vendor/ocadmin/javascript/jquery/jqvmap/jquery.vmap.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/ocadmin/javascript/jquery/jqvmap/maps/jquery.vmap.world.js') }}"></script>
<script type="text/javascript"><!--
$(document).ready(function() {
    $.ajax({
        url: 'index.php?route=extension/opencart/dashboard/map.map&user_token=3d4e47ac8ed96d232ac26566905a44e4',
        dataType: 'json',
        success: function(json) {
            data = [];

            for (i in json) {
                data[i] = json[i]['total'];
            }

            $('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: '#FFFFFF',
                borderColor: '#FFFFFF',
                color: '#9FD5F1',
                hoverOpacity: 0.7,
                selectedColor: '#666666',
                enableZoom: true,
                showTooltip: true,
                values: data,
                normalizeFunction: 'polynomial',
                onLabelShow: function(event, label, code) {
                    if (json[code]) {
                        label.html('<strong>' + label.text() + '</strong><br />' + 'Orders ' + json[code]['total'] + '<br />' + 'Sales ' + json[code]['amount']);
                    }
                }
            });
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});
//--></script>
</div>
                                                                                                                                      <div class="col-lg-6 col-md-12 col-sm-12 mb-3"><div class="card mb-3">
  <div class="card-header">
    <div class="float-end"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-regular fa-calendar"></i> <i class="fa-solid fa-caret-down"></i></a>
      <div id="range" class="dropdown-menu dropdown-menu-right">
        <a href="day" class="dropdown-item">Today</a> <a href="week" class="dropdown-item">Week</a> <a href="month" class="dropdown-item active">Month</a> <a href="year" class="dropdown-item">Year</a>
      </div>
    </div>
    <i class="fa-solid fa-chart-bar"></i> Sales Analytics
  </div>
  <div class="card-body">
    <div id="chart-sale" style="width: 100%; height: 260px;"></div>
  </div>
</div>
<script type="text/javascript" src="{{ asset('vendor/ocadmin/javascript/jquery/flot/jquery.flot.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/ocadmin/javascript/jquery/flot/jquery.flot.resize.min.js') }}"></script>
<script type="text/javascript"><!--
$('#range a').on('click', function(e) {
    e.preventDefault();

    $(this).parent().find('a').removeClass('active');

    $(this).addClass('active');

    $.ajax({
        type: 'get',
        url: 'index.php?route=extension/opencart/dashboard/chart.chart&user_token=3d4e47ac8ed96d232ac26566905a44e4&range=' + $(this).attr('href'),
        dataType: 'json',
        success: function(json) {
            if (typeof json['order'] == 'undefined') {
                return false;
            }

            var option = {
                shadowSize: 0,
                colors: ['#9FD5F1', '#1065D2'],
                bars: {
                    show: true,
                    fill: true,
                    lineWidth: 1
                },
                grid: {
                    backgroundColor: '#FFFFFF',
                    hoverable: true
                },
                points: {
                    show: false
                },
                xaxis: {
                    show: true,
                    ticks: json['xaxis']
                }
            }

            $.plot('#chart-sale', [json['order'], json['customer']], option);

            $('#chart-sale').bind('plothover', function(event, pos, item) {
                $('.tooltip').remove();

                if (item) {
                    $('<div id="tooltip" class="tooltip top show"><div class="tooltip-arrow"></div><div class="tooltip-inner">' + item.datapoint[1].toFixed(2) + '</div></div>').prependTo('body');

                    $('#tooltip').css({
                        position: 'absolute',
                        left: item.pageX - ($('#tooltip').outerWidth() / 2),
                        top: item.pageY - $('#tooltip').outerHeight(),
                        pointer: 'cursor'
                    }).fadeIn('slow');

                    $('#chart-sale').css('cursor', 'pointer');
                } else {
                    $('#chart-sale').css('cursor', 'auto');
                }
            });
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});

$('#range a.active').trigger('click');
//--></script>
</div>
              </div>
          <div class="row">
                                                                                                                                      <div class="col-lg-4 col-md-12 col-sm-12 mb-3"><div class="card mb-3">
  <div class="card-header"><i class="fa-regular fa-calendar"></i> Recent Activity</div>
  <ul class="list-group list-group-flush">
          <li class="list-group-item text-center">No results!</li>
      </ul>
</div>
</div>
                                                                                                                                      <div class="col-lg-8 col-md-12 col-sm-12 mb-3"><div class="card mb-3">
  <div class="card-header"><i class="fa-solid fa-shopping-cart"></i> Latest Orders</div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <td class="text-end">Order ID</td>
          <td>Customer</td>
          <td>Status</td>
          <td>Date Added</td>
          <td class="text-end">Total</td>
          <td class="text-end">Action</td>
        </tr>
      </thead>
      <tbody>
                  <tr>
            <td class="text-center" colspan="6">No results!</td>
          </tr>
              </tbody>
    </table>
  </div>
</div>
</div>
              </div>
      </div>
  <div id="security"></div>
<button type="button" id="button-refresh" class="btn btn-danger d-none"><i class="fa-solid fa-sync"></i></button>
<script type="text/javascript"><!--
  $(document).ready(function() {
      $('#modal-security').modal('show');

      $('#accordion .accordion-header:first button').trigger('click');
  });

  $('#button-refresh').on('click', function() {
      var element = this;

      $.ajax({
          url: 'index.php?route=common/security.list&user_token=3d4e47ac8ed96d232ac26566905a44e4',
          dataType: 'html',
          beforeSend: function() {
              $(element).button('loading');
          },
          complete: function() {
              $(element).button('reset');
          },
          success: function(html) {
              $('#modal-security').modal('dispose');

              $('#security').html(html);

              $('#modal-security').modal('show');

              $('#accordion .accordion-header:first button').trigger('click');
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
          }
      });
  });

  $('#security').on('click', '#button-install', function() {
      var element = this;

      $.ajax({
          url: 'index.php?route=common/security.install&user_token=3d4e47ac8ed96d232ac26566905a44e4',
          dataType: 'json',
          beforeSend: function() {
              $(element).button('loading');
          },
          complete: function() {
              $(element).button('reset');
          },
          success: function(json) {
              console.log(json);

              $('.alert-dismissible').remove();

              if (json['error']) {
                  $('#alert').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' + json['error'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
              }

              if (json['success']) {
                  $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');

                  $('#button-refresh').trigger('click');
              }
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
          }
      });
  });

  $('#security').on('click', '#button-storage', function() {
      var element = this;

      $(element).button('loading');

      var next = 'index.php?route=common/security.storage&user_token=3d4e47ac8ed96d232ac26566905a44e4&name=' + encodeURIComponent($('#input-storage').val()) + '&path=' + encodeURIComponent($('#input-path').val());

      var storage = function() {
          return $.ajax({
              url: next,
              dataType: 'json',
              contentType: 'application/x-www-form-urlencoded',
              success: function(json) {
                  console.log(json);

                  $('.alert-dismissible').remove();

                  if (json['error']) {
                      $('#alert').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' + json['error'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');

                      $(element).button('reset');
                  }

                  if (json['text']) {
                      $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-check-circle-circle"></i> ' + json['text'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
                  }

                  if (json['success']) {
                      $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');

                      $(element).button('reset');

                      $('#button-refresh').trigger('click');
                  }

                  if (json['next']) {
                      next = json['next'];

                      chain.attach(storage);
                  }
              },
              error: function(xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);

                  $(element).button('reset');
              }
          });
      };

      chain.attach(storage);
  });

  $('#security').on('click', '#button-storage-delete', function() {
      var element = this;

      $.ajax({
          url: 'index.php?route=common/security.delete&user_token=3d4e47ac8ed96d232ac26566905a44e4&remove=storage',
          dataType: 'json',
          beforeSend: function() {
              $(element).button('loading');
          },
          complete: function() {
              $(element).button('reset');
          },
          success: function(json) {
              console.log(json);

              $('.alert-dismissible').remove();

              if (json['error']) {
                  $('#alert').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' + json['error'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
              }

              if (json['success']) {
                  $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');

                  $('#button-refresh').trigger('click');
              }
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
          }
      });
  });

  $('#security').on('click', '#button-admin', function() {
      var element = this;

      $(element).button('loading');

      var next = 'index.php?route=common/security.admin&user_token=3d4e47ac8ed96d232ac26566905a44e4&name=' + encodeURIComponent($('#input-admin').val());

      var admin = function() {
          return $.ajax({
              url: next,
              dataType: 'json',
              contentType: 'application/x-www-form-urlencoded',
              success: function(json) {
                  console.log(json);

                  $('.alert-dismissible').remove();

                  if (json['redirect']) {
                      location = json['redirect'];
                  }

                  if (json['error']) {
                      $('#alert').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' + json['error'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');

                      $(element).button('reset');
                  }

                  if (json['text']) {
                      $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-check-circle-circle"></i> ' + json['text'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
                  }

                  if (json['success']) {
                      $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');

                      $(element).button('reset');

                      $('#button-refresh').trigger('click');
                  }

                  if (json['next']) {
                      next = json['next'];

                      chain.attach(admin);
                  }
              },
              error: function(xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);

                  $(element).button('reset');
              }
          });
      };

      chain.attach(admin);
  });

  $('#security').on('click', '#button-admin-delete', function() {
      var element = this;

      $.ajax({
          url: 'index.php?route=common/security.delete&user_token=3d4e47ac8ed96d232ac26566905a44e4&remove=admin',
          dataType: 'json',
          beforeSend: function() {
              $(element).button('loading');
          },
          complete: function() {
              $(element).button('reset');
          },
          success: function(json) {
              console.log(json);

              $('.alert-dismissible').remove();

              if (json['error']) {
                  $('#alert').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa-solid fa-circle-exclamation"></i> ' + json['error'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');
              }

              if (json['success']) {
                  $('#alert').prepend('<div class="alert alert-success alert-dismissible"><i class="fa-solid fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>');

                  $('#button-refresh').trigger('click');
              }
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
          }
      });
  });
//--></script>

</div>
@endsection