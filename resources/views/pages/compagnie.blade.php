@extends("template.index")
@section('content')
    <p><strong>companyName:</strong>{{ $show->companyName }}</p>
    <p><strong>adress:</strong>{{ $show->adress }}</p>
    <p><strong>phone:</strong>{{ $show->phone }}</p>
    <p><strong>mail:</strong>{{ $show->mail }}</p>
    <p><strong>contactFirstName:</strong>{{ $show->contactFirstName }}</p>
    <p><strong>contactLastName:</strong>{{ $show->contactLastName }}</p>
    <p><strong>imgCompany:</strong>{{ $show->imgCompany }}</p>
@endsection
