
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
        <a class="navbar-brand" href="/">{{ config('app.name', 'IMELBO2077') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @each('nav.submenu', $menulist, 'menu', 'empty')
            </ul>
        </div>
    </div>
    </nav>
