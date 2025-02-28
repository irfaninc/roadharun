<div>
    
    <livewire:inc.navbar />


     <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 class="display-5 fw-bold mb-4 ls-sm text-center"><span class="text-primary">🏃🏽‍♀️‍➡️ Activity 🏃‍♂️</span></h3>
                    
                        <div class="card p-4">
                            <table class="table table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Runner</th>
                                        <th>Date (km)</th>
                                        <th>Distance (km)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($runs as $run)
                                        <tr>
                                            <td>{{ $run->id }}</td>
                                            <td><img src="{{ $run->runner->profile_picture ? asset('storage/' . $run->runner->profile_picture) : asset('default-profile.png') }}" 
                                                alt="Profile Picture" class="avatar avatar-lg rounded-circle me-2"> {{ $run->runner->name }}</td>
                                            <td>{{ $run->date }}</td>
                                            <td>{{ $run->distance }} km</td>
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
