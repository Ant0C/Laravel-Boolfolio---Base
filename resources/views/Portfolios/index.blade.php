@extends('layouts.app')

@section('content')
    <h1>index</h1>

    <div>
        <div>
            <h2>
                Portfolio
            </h2>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($portfolios as $item)
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Description</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Url</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $item->id}}</th>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->customer}}</td>
                                <td>{{ $item->description}}</td>
                                <td>{{ $item->slug}}</td>
                                <td>{{ $item->url}}</td>
                            </tr>
                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>
    </div>
@endsection