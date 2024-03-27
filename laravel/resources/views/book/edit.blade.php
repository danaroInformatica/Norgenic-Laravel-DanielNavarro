@extends('layouts.plantilla')

@section('template_title')
    {{ __('Update') }} Book
@endsection

@section('content')
    <div class="container margin-default">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Book</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('books.update', $book->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('book.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
