<div>
    <section>
        <div class="container">
           <div class="row justify-content-center mb-6">
              <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                <h3 class="display-5 fw-bold mb-3 ls-sm">Add <span class="text-primary">Runner</span></h3>
                 <div class="card shadow-sm mb-3">
                    <div class="card-body">
                       <form wire:submit.prevent="addRunner">
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
