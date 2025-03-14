<div>

    @if (session()->has('success'))
    <div class="alert alert-success d-flex align-items-center justify-content-center rounded-0 border-0" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
         </svg>
         <div>{{session('success')}}</div>
    </div>
    @endif

    <livewire:inc.navbar />

     <section class="my-5">
        <div class="container">
           <div class="row mb-6">
              <div class="col-xl-6 col-lg-6 col-md-6 col-12">
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
                              <label class="form-label">Select Time</label>
                              <input type="time" class="form-control" wire:model="time">
                              @error('time')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                           </div>

                          <div class="mb-3">
                            <label class="form-label">Distance (KM)</label>
                             <input type="number" step="0.01" class="form-control" wire:model="distance">
                             @error('distance')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                          </div>
                          
                          <div class="mb-3">
                           <label class="form-label">Activity</label>
                            <select wire:model="type" class="form-select">
                              <option value="">Select Type of Activity</option>
                              <option value="Walk">Walk</option>
                              <option value="Run">Run</option>
                           </select>
                            @error('type')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                         </div>

                         <div class="mb-3">
                           <label class="form-label">Description</label>
                            <input type="text" class="form-control" wire:model="description">
                            @error('description')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                         </div>

                          <div class="d-grid">
                             <button class="btn btn-primary" type="submit">Add Run</button>
                          </div>
                       </form>
                    </div>
                 </div>     
              </div>

              <div class="col-xl-6 col-lg-6 col-md-6 col-12">
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
                                           <small>{{ date('d-m-y', strtotime($run->date)) }} - {{ date('H:i', strtotime($run->time)) }}</small>
                                   </div>
                               </div>
                               <div class="d-flex flex-column align-items-end">
                                 <div class="d-flex align-items-end">
                                     @if($run->type === 'Walk')
                                         <img src="{{ asset('images/walkicon.svg') }}" alt="Walk Icon" class="icon-size me-2">
                                     @elseif($run->type === 'Run')
                                         <img src="{{ asset('images/runicon.svg') }}" alt="Run Icon" class="icon-size me-2">
                                     @endif
                                     <small>
                                       {{ $run->description }}
                                    </small>
                                 </div>
                                 <a href="#" class="fw-bold">{{ $run->distance }}</a>
                             </div>
                           </div>
                       </div>
                       @endforeach        
                       </div>
                   </div>
                   <div class="mt-4">
                    {{ $runs->links('pagination::bootstrap-5') }} <!-- For Bootstrap -->
                    </div>
               </div>

            </div>
        </div>
     </section>
    
</div>
