<div>
    @if (session()->has('error'))
    <div class="alert alert-danger d-flex align-items-center justify-content-center rounded-0 border-0" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
         </svg>
         <div>{{session('error')}}</div>
    </div>
    @endif

    <section class="py-5">
        <div class="container">
           <div class="row">
              <div class="col-xl-4 offset-xl-4 col-md-12 col-12">
                 <div class="text-center">
                    <a href="index.html"><img class="rounded-circle p-5" src="https://geeksui.codescandy.com/geeks/assets/images/svg/price-icon-2.svg" alt="avatar"></a>
                    <h1 class="mb-1">Create Account</h1>
                    <p class="mb-0">
                        Already have an account?
                        <a href="{{route('login')}}" class="text-primary">Sign in</a>
                     </p>
                 </div>
              </div>
           </div>
        </div>
     </section>

     <section>
        <div class="container">
           <div class="row justify-content-center mb-6">
              <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                 <div class="card shadow-sm mb-3">
                    <div class="card-body">
                       <form wire:submit.prevent="register">
                          <div class="mb-3">
                             <label for="signupFullnameInput" class="form-label">Full Name</label>
                             <input type="text" class="form-control" id="signupFullnameInput" wire:model="name">
                             @error('name')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                          </div>

                          <div class="mb-3">
                             <label for="signupEmailInput" class="form-label">
                                Email
                                <span class="text-danger">*</span>
                             </label>
                             <input type="email" class="form-control" id="signupEmailInput" wire:model="email">
                             @error('email')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                          </div>
                          <div class="mb-3">
                             <label for="formSignUpPassword" class="form-label">Password</label>
                             <div class="password-field position-relative">
                                <input type="password" class="form-control fakePassword" id="formSignUpPassword" wire:model="password">
                                <span><i class="bi bi-eye-slash passwordToggler"></i></span>    
                             </div>
                             @error('password')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                          </div>
                          <div class="mb-3">
                             <label for="formSignUpConfirmPassword" class="form-label">Confirm Password</label>
                             <div class="password-field position-relative">
                                <input type="password" class="form-control fakePassword" id="formSignUpConfirmPassword" wire:model="password_confirmation">
                                <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                             </div>
                             @error('password_confirmation')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                          </div>
                          <div class="d-grid">
                             <button class="btn btn-primary" type="submit">Register</button>
                          </div>
                       </form>
                    </div>
                 </div>     
              </div>
           </div>
           <div class="row">
            <div class="col-lg-12">
               <div class="text-center">
                  <div class="small mb-3 mb-lg-0 text-body-tertiary">
                     Copyright © {{ now()->year }} | 
                     <span class="text-primary"><a href="#">Roadha Run</a></span>
                     | Designed by
                     <span class="text-primary"><a href="#">Irfan</a></span>
                  </div>
               </div>
            </div>
         </div>
        </div>
     </section>
</div>
