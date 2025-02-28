<div>
    @if (session()->has('success'))
    <div class="alert alert-success d-flex align-items-center justify-content-center rounded-0 border-0" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
         </svg>
         <div>{{session('success')}}</div>
    </div>
    @endif

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
                    <h1 class="mb-1">Sign In</h1>
                    <p class="mb-0">
                       Don’t have an account yet?
                       <a href="{{route('register')}}" class="text-primary">Register here</a>
                    </p>
                 </div>
              </div>
           </div>
        </div>
     </section>

     <section>
        <div class="container">
           <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                 <div class="card shadow-sm mb-6">
                    <div class="card-body">
                       <form wire:submit.prevent="login">
                          <div class="mb-3">
                             <label for="signinEmailInput" class="form-label">
                                Email
                                <span class="text-danger">*</span>
                             </label>
                             <input type="email" class="form-control" id="signinEmailInput" wire:model="email">
                             @error('email')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                          </div>
                          <div class="mb-3">
                             <label for="formSignUpPassword" class="form-label">Password</label>
                             <div class="password-field position-relative">
                                <input type="password" class="form-control fakePassword" id="formSignUpPassword" wire:model="password">
                                <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                @error('password')<div class="text-danger fs-6">{{ $message }}</div>@enderror
                             </div>
                          </div>

                          <div class="mb-4 d-flex align-items-center justify-content-end">
                             <div><a href="{{ route('forgot-password') }}" class="text-primary">Forgot Password</a></div>
                          </div>

                          <div class="d-grid">
                             <button class="btn btn-primary" type="submit">Sign In</button>
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
