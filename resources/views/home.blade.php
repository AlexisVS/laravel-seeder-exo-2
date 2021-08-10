@extends('template.index')
@section('content')
    <div class="container mx-auto">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">companyName</th>
                    <th scope="col">adress</th>
                    <th scope="col">phone</th>
                    <th scope="col">mail</th>
                    <th scope="col">contactFirstName</th>
                    <th scope="col">contactLastName</th>
                    <th scope="col">imgCompany</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($compagnies as $compagnie)
                    <tr>
                        <th scope="row">{{ $compagnie->id }}</th>
                        <td>{{ $compagnie->companyName }}</td>
                        <td>{{ $compagnie->adress }}</td>
                        <td>{{ $compagnie->phone }}</td>
                        <td>{{ $compagnie->mail }}</td>
                        <td>{{ $compagnie->contactFirstName }}</td>
                        <td>{{ $compagnie->contactLastName }}</td>
                        <td><img src="{{ asset("img/" . $compagnie->imgCompany) }}" alt=""></td>
                        <td class="d-flex">
                            <a href="/compagnie/{{ $compagnie->id }}" class="btn btn-success text-white">SHOW</a>
                            <a href="/compagnie/{{ $compagnie->id }}/edit" class="btn btn-primary text-white mx-3">Editer</a>
                            <form action="/compagnie/{{ $compagnie->id }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" class="btn btn-danger text-white" value="X">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/compagnie/create" class="btn btn-primary text-white">Create compagnie</a>
        <form action="/compagnie/destroy-all" method="POST">
            @csrf
            <input type="submit" class="btn btn-danger text-white" value="Delete all compagnies">
        </form>
    </div>
@endsection
