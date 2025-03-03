<div>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <h3 class="display-5 fw-bold mb-3 ls-sm">View <span class="text-primary">Runners</span></h3>
                @foreach($runners as $runner)
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body p-3 d-flex flex-column gap-3">
                            <div class="d-flex flex-column gap-6">    
                                <div class="d-flex flex-column gap-4">
                                    <div class="d-flex flex-row gap-3 align-items-center">
                                        <div><img src="{{ $runner->profile_picture ? asset('storage/' . $runner->profile_picture) : asset('default-profile.png') }}" alt="avatar" class="rounded-circle icon-shape icon-xl"></div>
                                        <div class="d-flex flex-column">
                                            <h4 class="mb-0">{{ $runner->name }}</h4>
                                            <a href="{{ route('edit-runner', $runner) }}">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
