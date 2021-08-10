@extends("template.index")
@section('content')
    <div class="container">
        <form class="d-flex flex-column" action="/compagnie" method="POST">
            @csrf
            <input placeholder="companyName" type="text" name="companyName" id="">
            <input placeholder="adress" type="text" name="adress" id="">
            <input placeholder="phone" type="text" name="phone" id="">
            <input placeholder="mail" type="text" name="mail" id="">
            <input placeholder="contactFirstName" type="text" name="contactFirstName" id="">
            <input placeholder="contactLastName" type="text" name="contactLastName" id="">
            <input placeholder="imgCompany" type="text" name="imgCompany" id="">
            <input type="submit" name="" id="" value="Sauvegarder">
        </form>
    </div>
@endsection
