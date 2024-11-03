<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Via;
use App\Imports\ViasImport;
use App\Services\ExplodeService;

class ViaController extends Controller
{
    protected $explodeService;

    public function __construct(ExplodeService $explodeService)
    {
        $this->explodeService = $explodeService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Via::all();
        return view('via.index',compact('data'));
    }

    /**
     * Luồng lưu dữ liệu từ nhập file excel
     */
    public function import_txt(Request $request)
    {
        $raw = file_get_contents($request->file);
        $data = $this->explodeService->clearOrderName($raw);
        return view('via.index',compact('data'));
    }

    public function save_from_txt(Request $request)
    {
        $save_data = Via::created($request->all());
        $data = Via::all();
        return view('via.index',compact('data'));
    }


    /**
     * Luồng lưu dữ liệu từ nhập file excel
     */
    public function import_xlxs(Request $request)
    {
        $content = file_get_contents($request->file);
        $collection= Excel::toCollection(new UsersImport, request()->file);
        dd($content);
        // return redirect('/')->with('success', 'All good!');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
