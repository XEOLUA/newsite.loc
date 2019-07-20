@extends ('layouts.app')
@section('title')

{{--    перевірка чи авторизований користувач--}}
    @if (Auth::check())
{{--        повернення типу користувача 0, 1, 2, ...--}}
        {{Auth::user()->isAdmin()}}
    @else
{{--        не авторизований, значить гість--}}
        guest
    @endif

@section('content')
{{--    v 1.2   --}}
        @if(isset($page))
            {{$pages->firstWhere('page_id',$page->page_id )->page_text}}
        @else
            {{$pages->firstWhere('page_id',1 )->page_text}}
    @endif
@endsection


