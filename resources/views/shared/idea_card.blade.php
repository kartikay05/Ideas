<div class="card mt-4">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="{{ $idea->user->getImageURL() }}"
                    alt="{{ $idea->user->name }}">
                <div>
                    <h5 class="card-title mb-0"><a href="{{ route('users.show', $idea->user->id) }}">{{ $idea->user->name }}</a></h5>
                </div>
            </div>
            <div class="d-flex gap-4 flex-row-reverse">
                @auth
                    @if (auth()->id() === $idea->user_id)
                        <form action="{{ route('ideas.destroy', $idea->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm">X</button>
                        </form>
                        <a class="text-decoration-none" href="{{ route('ideas.edit', $idea->id) }}">✏️</a>
                        <a class="text-decoration-none" href="{{ route('ideas.show', $idea->id) }}">👁️</a>
                    @else
                        <a class="text-decoration-none" href="{{ route('ideas.show', $idea->id) }}">👁️</a>
                    @endif
                @endauth

                @guest
                    <a class="text-decoration-none" href="{{ route('ideas.show', $idea->id) }}">👁️</a>
                @endguest

            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($editing ?? false)
            <form action="{{ route('ideas.update', $idea->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <textarea class="form-control" name="content" id="idea" rows="3">{{ $idea->content }}</textarea>
                    @error('content')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="">
                    <button type="submit" class="btn btn-dark mb-2 btn-sm"> Update </button>
                </div>
            </form>
        @else
            <p class="fs-6 fw-light text-muted">
                {{ $idea->content }}
            </p>
        @endif
        <div class="d-flex justify-content-between">
            <div>
                <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                    </span> {{ $idea->likes }} </a>
            </div>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $idea->created_at->format('d M, Y') }} </span>
            </div>
        </div>
        @include('shared.comment_box')
    </div>
</div>