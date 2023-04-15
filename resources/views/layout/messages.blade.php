@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
        @break
    @endforeach
@endif
@if (session())
    @foreach ($errors->all() as $error)
        <div>
            {{session('success')}}
        </div>
        @break
    @endforeach
@endif
@if (session())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
        @break
    @endforeach
@endif

