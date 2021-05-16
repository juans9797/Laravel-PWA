<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Final Web - Berries</title>
    @laravelPWA
</head>
<div id="berrydata">
    @include('berryContent')
</div>

<script>
    let berryDetailsURL = '{{ route('berryDetails') }}';
    let berryPaginationURL = '{{route('berryPagination')}}'
</script>
<script src="{{ asset('js/berry.js')}}"></script>
