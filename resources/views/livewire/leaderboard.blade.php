<div>
        <!-- Navbar -->
        <header>
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-boxed mx-auto mt-lg-4">
                  <a class="navbar-brand" href="{{ route('dashboard') }}"><i class="bi bi-activity"></i> Roadha Run</a>
                  <button
                     class="navbar-toggler"
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
                        @endauth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('leaderboard') }}">Leaderboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('activity') }}">Activity</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>


         <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <h3 class="display-5 fw-bold mb-4 ls-sm text-center"><span class="text-primary">🏆 Leaderboard</span></h3>
                        
                            <div class="card p-4">
                                <table class="table table-responsive table-hoverable">
                                    <thead>
                                        <tr class="">
                                            <th>Rank</th>
                                            <th>Runner</th>
                                            <th>Total Distance (km)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($leaderboard as $index => $runner)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td><img src="{{ $runner->profile_picture ? asset('storage/' . $runner->profile_picture) : asset('default-profile.png') }}" 
                                                    alt="Profile Picture" class="avatar avatar-lg rounded-circle me-2"> {{ $runner->name }}</td>
                                                <td>{{ $runner->distances_sum_distance ?? 0 }} km</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
         </section>
        
        
        
</div>
