<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCountry;
use App\Models\Fast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class FastController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:fasts-read')->only(['index']);
        $this->middleware('permission:fasts-create')->only(['create', 'store']);
        $this->middleware('permission:fasts-update')->only(['edit', 'update']);
        $this->middleware('permission:fasts-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Fast::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('active', function ($query) {
                    if ($query->active) {
                        $btn = '
                        <div class="container">
                        <label class="switch">
                          <input type="checkbox" data-id="' . $query->id . '" type="checkbox" id="check"  checked>
                          <div class="slider round"></div>
                        </label>
                      </div>
                      ';
                    } else {
                        $btn = '
                        <div class="container">
                        <label class="switch">
                          <input type="checkbox" data-id="' . $query->id . '" type="checkbox" id="check">
                          <div class="slider round"></div>
                        </label>
                      </div>
                      ';
                    }
                    return $btn;
                })

                ->addColumn('action', function ($row) {
                    if (Auth::guard('admin')->user()->hasPermission('fasts-update')) {
                        $Btn = '<a href="' . route("fasts.edit", $row->id) . '"><button type="button"
                    class="edit btn btn-success fa fa-edit" data-size="sm" title="Edit"></button></a> &nbsp';
                    }
                    if (Auth::guard('admin')->user()->hasPermission('fasts-delete')) {
                        $Btn = $Btn . '<form class="delete"  action="' . route("fasts.destroy", $row->id) . '"  method="POST" id="sa-params"
                    style="display: inline-block; right: 50px;" >
                    <input name="_method" type="hidden" value="DELETE">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <button type="submit" class="delete btn btn-danger fa fa-trash" title=" ' . 'Delete' . ' "></button>
                        </form>';
                    }
                    return $Btn;
                })
                ->rawColumns(['action', 'active'])
                ->make(true);
        }
        return view('admin.fasts.index');
    }
    public function fastsStatus(Request $request)
    {
        $fast = Fast::find($request->fast_id);
        $fast->active = $request->active;
        $fast->save();
        return response()->json(['status' => 'success', 'data' => $fast]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ['name_ar' => 'required|string', 'name_en' => 'required|string'];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['status' => 'fails', 'errors' => $validator->errors()->all()]);
        }
        $fast = Fast::create([
            'name_ar'   => $request->input('name_ar'),
            'name_en'   => $request->input('name_en'),
        ]);

        $fast->save();
        return response()->json(['status' => 'success', 'data' => $fast]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fast = Fast::findOrFail($id);
        return view('admin.fasts.edit', compact('fast'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCountry $request, $id)
    {
        $fast = Fast::findOrFail($id);
        $fast->update([
            'name_ar'       => $request->input('name_ar'),
            'name_en'       => $request->input('name_en'),
        ]);

        $fast->save();
        return response()->json(['status' => 'success', 'data' => $fast]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fast = Fast::findOrFail($id);
        $fast->delete();
        return response()->json(['status' => 'success']);
    }
}