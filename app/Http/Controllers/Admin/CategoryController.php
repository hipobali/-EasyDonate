<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Category::latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) use ($request) {
                    $detail_btn = '';
                    $restore_btn = '';
                    $edit_btn = '<a class="edit text text-primary mr-2" href="' . route('admin.room_type.edit', ['room_type' => $row->id]) . '"><i class="far fa-edit fa-lg"></i></a>';

                    $trash_or_delete_btn = '<a class="trash text text-danger mr-2" href="' . route('admin.room_type.delete',$row->id) . '"><i class="fas fa-trash fa-lg"></i></a>';

                    return "${detail_btn} ${edit_btn} ${restore_btn} ${trash_or_delete_btn}";
                })

                ->rawColumns(['action'])
                ->make(true);

        }
        return view('Admin.category.index');
    }
}
