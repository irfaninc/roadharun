<div>

    @if (session()->has('success'))
    <div class="alert alert-success d-flex align-items-center justify-content-center rounded-0 border-0" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
         </svg>
         <div>{{session('success')}}</div>
    </div>
    @endif

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
                 <ul class="navbar-nav mx-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('leaderboard') }}">Leaderboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Activity</a>
                    </li>
                 </ul>
                 <div class="mt-3 mt-lg-0 d-flex align-items-center">
                    <a wire:click="logout" class="btn btn-primary"><i class="bi bi-box-arrow-right"></i> Sign Out</a>
                 </div>
              </div>
           </nav>
        </div>
     </header>

     <section class="my-5">
        <div class="container">
           <div class="row justify-content-center mb-6">
              <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                <h3 class="display-5 fw-bold mb-3 ls-sm">Add <span class="text-primary">Run (KM)</span></h3>
                 <div class="card shadow-sm mb-3">
                    <div class="card-body">
                       <form wire:submit.prevent="addRunDistance">
                        <div class="mb-3">
                            <label class="form-label">Runner</label>
                            <select wire:model="runner_id" class="form-select">
                                <option value="">Select Runner</option>
                                @foreach($runners as $runner)
                                    <option value="{{ $runner->id }}">{{ $runner->name }}</option>
                                @endforeach
                            </select>
                            @error('runner_id')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                        </div>

                          <div class="mb-3">
                             <label class="form-label">Select Date</label>
                             <input type="date" class="form-control" wire:model="date">
                             @error('date')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Distance (KM)</label>
                             <input type="number" step="0.1" class="form-control" wire:model="distance">
                             @error('distance')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                          </div>    
                          <div class="d-grid">
                             <button class="btn btn-primary" type="submit">Add Run</button>
                          </div>
                       </form>
                    </div>
                 </div>     
              </div>
            </div>
        </div>
     </section>


     <section class="my-5">
        <div class="container">
           <div class="row justify-content-center mb-6">
              <div class="col-12">
                <h3 class="display-5 fw-bold mb-3 ls-sm">View <span class="text-primary">Runs (KM)</span></h3>
    
                    <div class="card border-0 mb-4">
                        <div class="card-body p-0">
                        @foreach($runs as $run)
                        <div class="border py-3 px-4 rounded-3 mb-3">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <img src="{{ $run->runner->profile_picture ? asset('storage/' . $run->runner->profile_picture) : asset('default-profile.png') }}" alt="avatar" class="rounded-circle icon-shape icon-xl me-2">
                                    <div>
                                    <h6 class="mb-0">{{ $run->runner->name }}</h6>
                                            <small>{{ $run->date }}</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="#">{{ $run->distance }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach        
                        </div>
                    </div>
                    
              </div>
           </div>
        </div>
     </section>

    
</div>
