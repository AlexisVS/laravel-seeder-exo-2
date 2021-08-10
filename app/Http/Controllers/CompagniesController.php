<?php

namespace App\Http\Controllers;

use App\Models\Compagnies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompagniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compagnies = Compagnies::all();
        return view("home", compact("compagnies"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createCompagnie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Compagnies;
        $store->companyName = $request->companyName;
        $store->adress = $request->adress;
        $store->phone = $request->phone;
        $store->mail = $request->mail;
        $store->contactFirstName = $request->contactFirstName;
        $store->contactLastName = $request->contactLastName;
        $store->imgCompany = $request->imgCompany;
        $store->save();
        return redirect('/compagnie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compagnies  $compagnies
     * @return \Illuminate\Http\Response $id
     */
    public function show(Compagnies $compagnies, $id)
    {
        $show = Compagnies::find($id);
        return view("pages.compagnie", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compagnies  $compagnies
     * @return \Illuminate\Http\Response $id
     */
    public function edit(Compagnies $compagnies, $id)
    {
        $edit = Compagnies::find($id);
        return view('pages.editCompagnie', compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compagnies  $compagnies
     * @return \Illuminate\Http\Response $id
     */
    public function update(Request $request, $id)
    {
        $compagnie = Compagnies::find($id);
        $compagnie->companyName = $request->companyName;
        $compagnie->adress = $request->adress;
        $compagnie->phone = $request->phone;
        $compagnie->mail = $request->mail;
        $compagnie->contactFirstName = $request->contactFirstName;
        $compagnie->contactLastName = $request->contactLastName;
        $compagnie->imgCompany = $request->imgCompany;
        $compagnie->save();
        return redirect("/compagnie/" . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compagnies  $compagnie
     * @return \Illuminate\Http\Response $id
     */
    public function destroy($id)
    {
        $compagnie = Compagnies::find($id);
        $compagnie->delete();
        return redirect("/compagnie");
    }

    /**
     * Remove all of the specified resource from storage.
     *
     * @param  \App\Models\Compagnies  $compagnies
     * @return \Illuminate\Http\Response
     */
    public function destroyAll()
    {
        $compagnies = DB::table("compagnies");
        $compagnies->delete();
        return redirect("/compagnie");
    }
}
