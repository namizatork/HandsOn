@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($all_users as $user)
                    <div class="card">
                        <div class="card-haeder p-3 w-100 d-flex">
                            <img src="https://placehold.jp/50x50.png" class="rounded-circle" width="50" height="50">
                            <div class="ml-2 d-flex flex-column">
                                <p class="mb-0">{{ $user->name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="my-4 d-flex justify-content-center">
            {{ $all_users->links() }}
        </div>
    </div>
@endsection