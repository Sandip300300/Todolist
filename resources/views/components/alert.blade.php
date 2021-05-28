<div>
    @if(session()->has('success'))
    {{ session()->get('success') }}


    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </ul>
    </div>
@endif

</div>
