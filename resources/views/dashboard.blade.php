@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left_sidebar')
        </div>
        <div class="col-6">
            @include('shared.success_message')
            @include('shared.submit_idea')
            <hr>
            @forelse ($ideas as $idea)
                <div class="mt-3">
                    @include('shared.idea_card', ['idea' => $idea])
                </div>
            @empty
                <div class="text-center mt-5 fs-1">No Result Found.</div>    
            @endforelse
            <div class="mt-3">
                {{ $ideas->withQueryString()->links() }}
            </div>
        </div>
        <div class="col-3">
            @include('shared.search_bar')
            @include('shared.follow_up')
        </div>
    </div>
@endsection