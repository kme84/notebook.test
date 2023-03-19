<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\Notebook;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\NotebookResource;
use App\Http\Resources\V1\NotebookCollection;
use App\Http\Requests\V1\StoreNotebookRequest;
use App\Http\Requests\V1\UpdateNotebookRequest;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new NotebookCollection(Notebook::paginate());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNotebookRequest $request)
    {
        return new NotebookResource(Notebook::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new NotebookResource(Notebook::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotebookRequest $request, string $id)
    {
        Notebook::findOrFail($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Notebook::destroy($id);
    }
}
