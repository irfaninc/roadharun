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
     

    <!--Features start-->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="text-center">
                        <small
                        <h5 class="mb-1">Hello, {{ $user->name }}</h5>
                        <p class="mb-0 text-primary fs-4 mb-5">Welcome to Roadha Run Dashboard</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Features end-->

    <livewire:runner.addRunner />

    <livewire:runner.viewRunners />
    
</div>
