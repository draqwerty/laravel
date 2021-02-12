<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IMELBO2077' )}}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet "href="{{ asset('css/app.css') }}">

    <style>
        .dropdown-menu .nav-item a { color: #000 !important; }
        .dropdown-toggle:after { content: none; }
        .dropdown-menu .dropdown-menu { margin-left: 0; margin-right: 0; }
        .dropdown-menu li { position: relative }
        .nav-item .submenu { display: none; position: absolute; left: 100%; top: -7px; }
        .dropdown-menu>li:hover { background-color: #f1f1f1; }
        .dropdown-menu>li:hover>.submenu { display: block; }
        
    </style>

</head>

    <body>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

        @include('inc.navbar')

        <div class="container-fluid no-gutters">
            @yield('content')
        </div>

        <footer class="footer">
            @include('inc.footer')
        </footer>


        <script type="text/javascript">
            $(document).on('click', '.dropdown-menu', ($event) => $event.stopPropagation());
            if ($(window).width() < 992) {
                $('.dropdown-menu a').click(($event) => {
                    $event.preventDefault();
                    if ($(this).next('.submenu').length) {
                        $(this).next('.submenu').toggle();
                    }
                    $('.dropdown').on('hide.bs.dropdown', () => $(this).find('.submenu').hide());
                });
            }
        </script>

        <script type="text/javascript">
            const $dropdown = $(".dropdown");
            const $dropdownToggle = $(".dropdown-toggle");
            const $dropdownMenu = $(".dropdown-menu");
            const showClass = "show";

            $(window).on("load resize", function() {
              if (this.matchMedia("(min-width: 768px)").matches) {
                $dropdown.hover(
                  function() {
                    const $this = $(this);
                    $this.addClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "true");
                    $this.find($dropdownMenu).addClass(showClass);
                  },
                  function() {
                    const $this = $(this);
                    $this.removeClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "false");
                    $this.find($dropdownMenu).removeClass(showClass);
                  }
                );
              } else {
                $dropdown.off("mouseenter mouseleave");
              }
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
                var url = window.location;
                $('li.nav-item a[href="'+ url +'"]').parent().addClass('active');
                $('li.nav-item a').filter(function() {
                     return this.href == url;
                }).parent().addClass('active');
            });
        </script>


    </body>
</html>
