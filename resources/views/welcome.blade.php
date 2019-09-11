<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agenda</title>

    <link rel="stylesheet" href="{{ asset('templates/https://fonts.googleapis.com/css?family=Open+Sans:300,400,600') }}">
    <link rel="stylesheet" href="{{ asset('templates/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/css/tooplate.css') }}">
    <link href="{{ asset('templated/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templated/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('templated/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('templated/css/plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('templated/css/plugins/fullcalendar/fullcalendar.print.css') }}" rel='            stylesheet' media='print'>
    <link href="{{ asset('templated/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('templated/css/style.css') }}" rel="stylesheet">

    <style>
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .links >a{
            color: #000;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase; 
        }
    </style>
    </head>
<body id="reportsPage">
    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon"></i>
                            <h1 class="tm-site-title mb-0">Agenda</h1>
                            <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                            <div class="top-right links">
                    @auth
                                 <a href="{{ url('/log_out') }}">Log out</a>
                    @else
                                 <a href="{{ route('login') }}">Login</a>
                                 <a href="{{ route('register') }}">Register</a>
                    @endauth
                            </div>
            @endif
                         </div>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Daily Report</a>
                                        <a class="dropdown-item" href="#">Weekly Report</a>
                                        <a class="dropdown-item" href="#">Yearly Report</a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                            </ul>
                        </div>
                    </nav>
                </div>
            </div><div class="wrapper wrapper-content">
    <div class="row animated fadeInDown">
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Events on this month</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div id='external-events'>
                        <p>Daftar agenda</p>
                        <div class='external-event navy-bg'>Pembukaan kantor cabang</div>
                        <div class='external-event navy-bg'>Kunjungan kantor cabang</div>
                        <div class='external-event navy-bg'>Meeting</div>
                        <div class='external-event navy-bg'>Penggalangan dana untuk fakir</div>
                        <div class='external-event navy-bg'>Pemberian dana untuk fakir</div>
                        <p class="m-t">
                            <input type='checkbox' id='drop-remove' class="i-checks" checked /> <label for='drop-remove'>Hapus setelah dipindah</label>
                        </p>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-lg-9">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Calender</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="/" class="dropdown-item">Soul Setting</a>
                            </li>
                            <li><a href="youtube.com" class="dropdown-item">Mind Setting</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
            <!-- row -->
            <div class="row tm-content-row tm-mt-big">
            <footer class="row tm-mt-small">
            </footer>
        </div>
    </div>
<script src="{{ asset('templated/js/plugins/fullcalendar/moment.min.js') }}"></script>
<script src="{{ asset('templated/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('templated/js/popper.min.js') }}"></script>
<script src="{{ asset('templated/js/bootstrap.js') }}"></script>
<script src="{{ asset('templated/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('templated/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('templated/js/inspinia.js') }}"></script>
<script src="{{ asset('templated/js/plugins/pace/pace.min.js') }}"></script>

<!-- jQuery UI  -->
<script src="{{ asset('templated/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- iCheck -->
<script src="{{ asset('templated/js/plugins/iCheck/icheck.min.js') }}"></script>

<!-- Full Calendar -->
<script src="{{ asset('templated/js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>

<script>

    $(document).ready(function() {

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

        /* initialize the external events
         -----------------------------------------------------------------*/


        $('#external-events div.external-event').each(function() {

            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 1111999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });


        /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1)
                },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d-5),
                    end: new Date(y, m, d-2)
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d-3, 16, 0),
                    allDay: false
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d+4, 16, 0),
                    allDay: false
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d+1, 19, 0),
                    end: new Date(y, m, d+1, 22, 30),
                    allDay: false
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/'
                }
            ]
        });


    });

</script>
</body> 
</html>
