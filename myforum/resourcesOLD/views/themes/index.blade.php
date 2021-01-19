@extends ('layouts.layout')

@section ('content')
    <h1 class="text-center p-5">List Theme</h1>
    @forelse ($themes as $theme)
        <div class="row text-center divtitle" data-id="{{$theme->id}}">
            <div class="col-2 text-right">
                <a class="blacklink m-2" href="{{ route('themes.show',$theme->id) }}"><i class="fas fa-search-plus"></i></a>
            </div>
            <div class="col-2 text-left">
                {{ $theme->name }}
            </div>
        </div>
    @empty
        <div>Aucun</div>
    @endforelse
    <div class="row m-2">
        <a href="{{ route('themes.create') }}" class="btn btn-primary">Ajouter</a>
    </div>
@endsection
