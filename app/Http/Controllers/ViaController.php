<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Via;
use App\Imports\ViasImport;
use App\Services\ExplodeService;
use Illuminate\Http\Session;

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
        $data = Via::orderBy('id', 'desc')->take(50)->get();
        return view('via.index',compact('data'));
    }

    /**
     * Luồng lưu dữ liệu từ nhập file excel
     */
    public function import_txt(Request $request)
    {
        $raw = file_get_contents($request->file);
        switch ($request->keys) {
            case 1:
                $key = $keys= array('uid','name','pass','token','email');
                break;

            case 2:
                $key = $keys= array('uid','pass','2fa','cookie','email');
                break;

            case 3:
                $key = $keys= array('uid','pass','cookie');
                break;

            case 4:
                $key = $keys= array('uid','pass','2fa','birthday','email','email_password','cookie');
                break;

            default:
                $key = null; // Hoặc giá trị mặc định khác nếu cần
                break;
        }

        $data = $this->explodeService->clearOrderName($raw,$keys);

        // dd($data);
        session()->put('data', $data);

        return view('via.index',compact('data'));
    }

    public function save_from_txt(Request $request)
    {
        $data = session('data');
        collect($data)->each(function ($info) {
            Via::create($info); // Sử dụng create() để thêm dữ liệu
        });
        session()->flush();
        $data = Via::orderBy('id', 'desc')->take(50)->get();

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
