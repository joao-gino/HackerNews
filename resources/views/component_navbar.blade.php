<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mr-auto">
        <li @if($current == 'home') class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/index">Top 10 Job/Stories</a>
        </li>
        <li @if($current == 'beststories') class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/best">Best 10 Stories</a>
        </li>
        {{-- <li @if($current == 'categorias') class="nav-item active" @else class="nav-item" @endif>
            <a class="nav-link" href="/categorias">Categorias</a>
        </li> --}}
      </ul>
    </div>
  </nav>