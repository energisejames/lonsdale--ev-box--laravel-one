<header class="es-header-navbar bg-dark">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="/">LBL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <!-- ESJF : need to add 'active' class to "current Laravel route" -->
          <li class="nav-item">
            <a class="nav-link" href="/account-details">My Account </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/my-contracts">My Contracts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/browse-contracts/">Browse Contracts</a>
          </li>
          <li class="nav-item">
            <!-- ESJF : disabled or hidden if no active contracts ? -->
            <a class="nav-link disabled" href="#">Project Details</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>