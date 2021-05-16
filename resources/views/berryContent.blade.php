<h1 class="text-center">Berries</h1>
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
<table class="table table-striped table-bordered table-hover w-50 text-center m-auto">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Info</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data->results as $berry)
        <tr>
            <td>{{$berry->name}}</td>
            <td onclick="getBerryInfo('{{$berry->url}}')"><a href="#">Get info</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
<ul class="pagination justify-content-center">
    @if($data->previous == null)
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
    @else
        <li class="page-item" onclick="pagination('{{$data->previous}}')"><a class="page-link" href="#">Previous</a></li>
    @endif
    @if($data->next == null)
        <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
    @else
        <li class="page-item" onclick="pagination('{{$data->next}}')"><a class="page-link" href="#">Next</a></li>
    @endif
</ul>
