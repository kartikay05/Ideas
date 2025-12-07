@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left_sidebar')
        </div>
        <div class="col-6">
            @include('shared.success_message')
            <div class="mt-3">
                @include('shared.idea_card', ['idea' => $idea])
            </div>
        </div>
        <div class="col-3">
            @include('shared.search_bar')
            @include('shared.follow_up')
        </div>
    </div>
@endsection