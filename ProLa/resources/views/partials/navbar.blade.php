<nav class="navbar navbar-expand-lg bg-dark"  data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" class="nav-link" href="/">Diario ProLa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ request() -> routeIs('recuerdo.welcome')? 'text-white bg-danger fw-bold':''}}"  href="/">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request() -> routeIs('recuerdo.create')? 'text-white fw-bold bg-danger':''}}" href="/recuerdo/create">Formulario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request() -> routeIs('recuerdo.index')? 'text-white fw-bold bg-danger':''}}"  href="/recuerdos">Recuerdos</a>
          </li>
    
      </div>
    </div>
</nav>