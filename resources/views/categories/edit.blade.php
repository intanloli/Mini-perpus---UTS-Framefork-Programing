@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-7">
        <h1 class="h3 page-title mb-3">Edit Kategori</h1>

        <div class="card card-table shadow-sm">
            <div class="card-body p-4">
                <form action="{{ route('categories.update', $category) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('categories._form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection