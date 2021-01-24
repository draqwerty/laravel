<nav class="navbar navbar-expand-md navbar-dark bg-success">
  <a class="navbar-brand" href="#">{{config('app.name', 'IMELBO2077')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
        <a class="nav-link" href="/">home</a>
      </li>
      <li class="nav-item {{ (request()->is('wf')) ? 'active' : '' }}">
        <a class="nav-link" href="/wf">wf</a>
      </li>
      <li class="nav-item dropdown {{ (request()->is('graphs/*')) ? 'active' : '' }}">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          graphs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/graphs/current">current</a>
          <a class="dropdown-item" href="/graphs/last">last</a>
          <a class="dropdown-item" href="/graphs/mtd">month to date</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown {{ (request()->is('reports/*')) ? 'active' : '' }}">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          reports
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">forecast</a>
          <a class="dropdown-item disabled" aria-disabled="true" href="#">noaa</a>
          <a class="dropdown-item" href="#">metar</a>
        </div>
      </li>
      <li class="nav-item {{ (request()->is('moon')) ? 'active' : '' }}">
        <a class="nav-link" href="/moon">moon</a>
      </li>
      <li class="nav-item dropdown {{ (request()->is('records/*')) ? 'active' : '' }}">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          records
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/records/all">all time</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/records/month">current month</a>
          <a class="dropdown-item" href="/records/year">current year</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/records/2021">2021</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
