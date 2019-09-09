<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Agenda</title>

  <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700" rel="stylesheet">
  <!--
      CSS
      ============================================= -->
  <link rel="stylesheet" href="{{ asset('templates/css/linearicons.css') }}">
  <link rel="stylesheet" href="{{ asset('templates/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('templates/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('templates/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('templates/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('templates/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('templates/css/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('templates/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('templates/css/main.css') }}">
</head>

<body>
  <!-- start header Area -->
  <header id="header">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">

            <a class="book-now" href="{{ asset('templates/member.html') }}">Login</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container main-menu">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a class="active" href="#">Home</a></li>
            <li><a href="{{ asset('templates/about.html') }}">About</a></li>
            <li><a href="trainers.html">Note</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
    </div>
  </header>
  <!-- end header Area -->

  <!-- start banner Area -->
  <section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container-fluid">
      <div class="row fullscreen d-flex align-items-center justify-content-between">
        <div class="col-lg-6 col-md-6 banner-img">
          <img class="img-fluid" src="img/banner-img.png" alt="">
        </div>
        <div class="banner-content col-lg-6 col-md-6">
      </div>
    </div>
  </section>
  <!-- End banner Area -->

  <!-- Start About Us Area -->
  <section class="about-area section-gap">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-12">
          <div class="section-title-wrap text-center">
            <h1>Don't miss important things in your life</h1>
            <p>Jangan sampai lupa hal yang penting dalam hidupmu.</p>
            <p>          
 <meta charset='utf-8' />
<link href="{{ asset (' templates/packages/core/main.css' ) }} "rel='stylesheet' />
<link href="{{ asset (' templates/packages/daygrid/main.css' ) }} "rel='stylesheet' />
<link href="{{ asset (' templates/packages/timegrid/main.css' ) }} "rel='stylesheet' />
<link href="{{ asset (' templates/packages/list/main.css' ) }} "rel='stylesheet' />
<script src="{{ asset (' templates/packages/core/main.js') }} "></script>
<script src="{{ asset (' templates/packages/interaction/main.js') }}"></script>
<script src="{{ asset (' templates/packages/daygrid/main.js') }}"></script>
<script src="{{ asset (' templates/packages/timegrid/main.js') }}"></script>
<script src="{{ asset (' templates/packages/list/main.js') }}"></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      height: 'parent',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      defaultView: 'dayGridMonth',
      defaultDate: '2019-08-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2019-08-01',
        },
        {
          title: 'Long Event',
          start: '2019-08-07',
          end: '2019-08-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2019-08-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2019-08-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2019-08-11',
          end: '2019-08-13'
        },
        {
          title: 'Meeting',
          start: '2019-08-12T10:30:00',
          end: '2019-08-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2019-08-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2019-08-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2019-08-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2019-08-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2019-08-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2019-08-28'
        }
      ]
    });

    calendar.render();
  });

</script></p>
          </div>
        </div>
      </div>
        <div class="col-lg-6 about-left">
          <img class="img-fluid" src="img/about-img.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- End About Us Area -->

  <!-- Start Features Area -->
  <!-- End Features Area -->

  <!-- Start schedule Area -->
  <section class="schedule-area section-gap">
    <img class="featured-img img-fluid" src="img/featured-class/feature-img.png" alt="">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-12">
          <div class="section-title-wrap text-center">
            <h1>Jadwal mu hari ini</h1>
          </div>
        </div>
      </div>
            <center>
              <div class="col-md-6">
                <div class="card card-tasks">
                  <div class="card-header ">
                    <h4 class="card-title">Catatan</h4>
                    <p class="card-category">Jalanin aja dulu</p>
                  </div>
                  <div class="card-body ">
                    <div class="table-full-width">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
<!--                               <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input  select-all-checkbox" type="checkbox" data-select="checkbox" data-target=".task-select">
                                  <span class="form-check-sign"></span>
                                </label>
                              </div> -->
                            </th>
                            <th>Jadwal</th>
                            <th>tanggal</th>
                            <th></th>
                            <th>jam</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input task-select" type="checkbox">
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </td>
                            <td>Rapat kantor  </td>
                            <td>06-09 2019</td>
                            <td></td>
                            <td>10:10</td>
                            <td class="td-actions text-right">
                              <div class="form-button-action">
                                <button type="button" data-toggle="tooltip" title="Edit Task" class="btn btn-link <btn-simple-primary">
                                  <i class="la la-edit"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-link btn-simple-danger">
                                  <i class="la la-times"></i>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input task-select" type="checkbox">
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </td>
                            <td>Meeting</td>
                            <td>07-09 2019</td>
                            <td></td>
                            <td>09:10</td>
                            <td class="td-actions text-right">
                              <div class="form-button-action">
                                <button type="button" data-toggle="tooltip" title="Edit Task" class="btn btn-link <btn-simple-primary">
                                  <i class="la la-edit"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-link btn-simple-danger">
                                  <i class="la la-times"></i>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input task-select" type="checkbox">
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </td>
                            <td>Study tour</td>
                            <td>08-09 2019</td>
                            <td></td>
                            <td>08:00</td>
                            <td class="td-actions text-right">
                              <div class="form-button-action">
                                <button type="button" data-toggle="tooltip" title="Edit Task" class="btn btn-link <btn-simple-primary">
                                  <i class="la la-edit"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-link btn-simple-danger">
                                  <i class="la la-times"></i>
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input task-select" type="checkbox">
                                  <span class="form-check-sign"></span>
                                </label>
                              </div>
                            </td>
                            <td>Liburan ke monas</td>
                            <td>10-09 2019</td>
                            <td></td>
                            <td>07:006    </td>
                            <td class="td-actions text-right">
                              <div class="form-button-action">
                                <button type="button" data-toggle="tooltip" title="Edit Task" class="btn btn-link <btn-simple-primary">
                                  <i class="la la-edit"></i>
                                </button>
                                <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-link btn-simple-danger">
                                  <i class="la la-times"></i>
                                </button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </center>
  </section>
  <!-- End schedule Area -->

  <!-- Start testomial Area -->
  <!-- End testomial Area -->

  <!-- Start cta-one Area -->
  <section class="cta-one-area relative section-gap">
          <a class="primary-btn" href="#">Become a Member</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End cta-one Area -->

  <!-- Start blog Area -->

  <!-- End blog Area -->

  <!-- start footer Area -->
  <footer class="footer-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h4>Contact</h4>
            <p>
            0812-6532-568 <p>(Aji Imanudin)</p>
            <br> 
            021-1122-34 <P>(Amin Sukarjono)</P>
            </p>
           <p>
              Jalan kemerdekaan timur no 17, Jakarta timur, DKI Jakarta, Indonesia.
            </p>
          </div>
        </div>
        </div>
      <div class="footer-bottom row align-items-center">
        <p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        <div class="col-lg-6 col-sm-12 footer-social">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-behance"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer Area -->


  <script src="{{ asset('templates/js/vendor/jquery-2.2.4.min.js')}}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
   crossorigin="anonymous"></script>
  <script src="{{ asset('templates/js/vendor/bootstrap.min.js')}}"></script>
  <script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA') }}"></script>
  <script src="{{ asset('templates/js/easing.min.js')}}"></script>
  <script src="{{ asset('templates/js/hoverIntent.js')}}"></script>
  <script src="{{ asset('templates/js/superfish.min.js')}}"></script>
  <script src="{{ asset('templates/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{ asset('templates/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('templates/js/jquery.tabs.min.js')}}"></script>
  <script src="{{ asset('templates/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{ asset('templates/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('templates/js/mail-script.js')}}"></script>
  <script src="{{ asset('templates/js/main.js')}}"></script>
</body>

</html>