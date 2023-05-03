@extends('layouts.app')

@section('content')

<div class="container">

    <div class="title-wrapper py-5">
        <h1 class="mb-3">
            PROGETTI
        </h1>

        <a href="{{ route('projects.create') }}" class="btn btn-primary">
            CREA NUOVO
        </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">client</th>
                <th scope="col">URL</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($projects as $key=>$project)

            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->client }}</td>
                <td><a href="{{ route('projects.show', $project) }}">{{ $project->url }}</a></td>
                <td>
                    <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning btn-sm">edit</a>
                </td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection