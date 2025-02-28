<div>
     <!-- Navbar -->
     <header>
        <div class="container">
           <nav class="navbar navbar-expand-lg navbar-boxed mx-auto mt-lg-4">
              <a class="navbar-brand" href="{{ route('dashboard') }}"><i class="bi bi-activity"></i> Roadha Run 1446</a>
              <button
                 class="navbar-toggler border-0"
                 type="button"
                 data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent"
                 aria-expanded="false"
                 aria-label="Toggle navigation">
                 <i class="bi bi-list"></i>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav ms-auto align-items-lg-center">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('addrun') }}">Add Run</a>
                    </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('leaderboard') }}">Leaderboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('activity') }}">Activity</a>
                    </li>
                 </ul>
                 @auth
                 <div class="mt-3 mt-lg-0 d-flex align-items-center">
                    <a wire:click="logout" class="btn btn-primary"><i class="bi bi-box-arrow-right"></i> Sign Out</a>
                 </div>
                 @endauth
              </div>
           </nav>
        </div>
     </header>
</div>
