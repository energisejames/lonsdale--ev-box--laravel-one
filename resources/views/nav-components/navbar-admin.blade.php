<header class="es-header-navbar bg-dark">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="/">Admin Area</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <!-- ESJF : need to add 'active' class to "current Laravel route" -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('page.account-details') }}">Admin One</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('page.my-contracts') }}">Admin Two</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('page.browse-contracts') }}">List All Engineers</a>
          </li>
          <li class="nav-item">
            <!-- ESJF : disabled or hidden if no active contracts ? disabled -->
            <a class="nav-link " href="{{ route('job.details',['id' => 1]) }}">List All Jobs</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>