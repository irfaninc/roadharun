<div>
       
    <livewire:inc.navbar />


         <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <h3 class="display-5 fw-bold mb-4 ls-sm text-center"><span class="text-primary">🏆 Leaderboard</span></h3>
                        
                            <div class="card p-4">
                                <table class="table table-responsive table-hover">
                                    <thead>
                                        <tr>
                                            <th>Rank</th>
                                            <th>Runner</th>
                                            <th>Tot Dist (km)</th>
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
