<div class="card text-center w-50 m-auto">
    <h5 class="card-header">Berry Details</h5>
    <div class="card-body">
        <h5 class="card-title">Name: {{$data['name']}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Size: {{$data['size']}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">Smoothness: {{$data['smoothness']}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">Soil Dryness: {{$data['soil_dryness']}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">Max Harvest: {{$data['max_harvest']}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">Growth Time: {{$data['growth_time']}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">Natural Gift Power: {{$data['natural_gift_power']}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">Natural Gift Type: {{$data['natural_gift_type']['name']}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">Firmness: {{$data['firmness']['name']}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">Flavors:</h6>
        <p class="card-text">For each flavor the information will be presented in the format: &ltFlavor Name - Potency&gt</p>
        @foreach($data['flavors'] as $flavor)
            <p class="card-text">{{$flavor['flavor']['name']}} - {{$flavor['potency']}}</p>
        @endforeach
        <a href="" class="card-link">Back to berries</a>
    </div>
</div>
