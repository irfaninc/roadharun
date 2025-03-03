<div>
    
    <livewire:inc.navbar />


     <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <h3 class="display-5 fw-bold mb-4 ls-sm text-center"><span class="text-primary">🏃🏽‍♀️‍➡️ Activity 🏃‍♂️</span></h3>
                    
                        <div class="card p-4">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Runner</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Distance</th>
                                            <th>Type</th>
                                            <th>Desc</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($activitys as $activity)
                                            <tr>
                                                <td>{{ $activity->id }}</td>
                                                <td><img src="{{ $activity->runner->profile_picture ? asset('storage/' . $activity->runner->profile_picture) : asset('default-profile.png') }}" 
                                                    alt="Profile Picture" class="avatar avatar-lg rounded-circle me-2"> {{ $activity->runner->name }}</td>  
                                                <td>{{ date('d-m-y', strtotime($activity->date)) }}</td>
                                                <td>{{ date('H:i', strtotime($activity->time)) }}</td>
                                                <td>{{ $activity->distance }} km</td>
                                                <td>{{ $activity->type }}</td>
                                                <td>{{ $activity->description }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Pagination Links -->
                            <div class="mt-4">
                                {{ $activitys->links('pagination::bootstrap-5') }} 
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
     </section>
    
    
    
</div>
