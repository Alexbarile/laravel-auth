@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <div class="d-flex justify-content-between">
                    <div>
                        <h1>ELENCO POST</h1>
                    </div>
                    <div>
                        <a class="btn btn-primary" href="{{route('admin.posts.create')}}">Aggiungi Post</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message')}}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titolo</th>
                            <th>Slug</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                            <td>
                                {{-- segnaposto per azioni --}}
                            </td>
                        </tr>                 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection