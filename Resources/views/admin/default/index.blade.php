@extends(AdminTheme::wrapper(), ['title' => 'Artisan', 'keywords' => 'WemX Dashboard, WemX Panel'])


@section('container')
    <div class="row justify-content-center">
        @foreach(config('artisan.commands') as $command)
            <div class="card col-2 m-1">
                <div class="card-header p-1 justify-content-between">
                    {{ __($command['name']) }}
                    <form action="{{ route('artisan.command') }}" method="post">
                        @csrf
                        <input type="hidden" name="command" value="{{ $command['command'] }}">
                        <button type="submit" class="btn btn-primary">{{ __('Run') }}</button>
                    </form>
                </div>
                <div class="card-body p-1">
                    <p class="card-text">{{ __($command['description']) }}</p>
                </div>
            </div>

        @endforeach
    </div>
@endsection
