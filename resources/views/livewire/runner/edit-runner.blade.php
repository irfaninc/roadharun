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
           <div class="row justify-content-center mb-6">
              <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                <h3 class="display-5 fw-bold mb-3 ls-sm">Edit <span class="text-primary">Runner</span></h3>
                 <div class="card shadow-sm mb-3">
                    <div class="card-body">
                       <form wire:submit.prevent="updateRunner">
                          <div class="mb-3">
                             <label for="signupFullnameInput" class="form-label">Runner Name</label>
                             <input type="text" class="form-control" id="signupFullnameInput" wire:model="name">
                             @error('name')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                          </div>

                          <div class="mb-3">
                             <label for="signupPPInput" class="form-label">
                                Profile Picture
                                <span class="text-danger">*</span>
                             </label>
                             <input type="file" class="form-control" id="signupPPInput" wire:model="profile_picture">
                             @error('profile_picture')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                          </div>    
                          <div class="d-grid">
                             <button class="btn btn-primary" type="submit">Add Runner</button>
                          </div>
                       </form>
                    </div>
                 </div>     
              </div>
            </div>
        </div>
     </section>

    
</div>
