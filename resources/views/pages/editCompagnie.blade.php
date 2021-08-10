@extends("template.index")
@section('content')
    <div class="container">
        <form class="d-flex flex-column" action="/compagnie/{{ $edit->id }}" method="POST">
            @csrf
            @method("PUT")
            <input value="{{ $edit->companyName }}" placeholder="nom" type="text" name="companyName" id="">
            <input value="{{ $edit->adress }}" placeholder="age" type="text" name="adress" id="">
            <input value="{{ $edit->phone }}" placeholder="email" type="text" name="phone" id="">
            <input value="{{ $edit->mail }}" placeholder="telephone" type="text" name="mail" id="">
            <input value="{{ $edit->contactFirstName }}" placeholder="telephone" type="text" name="contactFirstName" id="">
            <input value="{{ $edit->contactLastName }}" placeholder="telephone" type="text" name="contactLastName" id="">
            <input value="{{ $edit->imgCompany }}" placeholder="telephone" type="text" name="imgCompany" id="">
            <input type="submit" name="" id="" value="Sauvegarder">
        </form>
    </div>
@endsection