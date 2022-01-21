<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Checklist;
use Brian2694\Toastr\Facades\Toastr;

class ChecklistsController extends Controller
{
    public function index()
    {
        $checklists = auth()->user()->checklists();
        return view('checklist.checklists', compact('checklists'));
    }

    public function add()
    {
        return view('checklist.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'item' => 'required',
            'quantity' => 'required',
        ]);
        $checklist = new Checklist();
        $checklist->item = $request->item;
        $checklist->quantity = $request->quantity;
        $checklist->user_id = auth()->user()->id;
        $checklist->save();

        Toastr::success($checklist->item . ' is added successfully', 'Success', [
            'positionClass' => 'toast-top-right',
            'progressBar' => 'true',
            'closeButton' => 'true',
        ]);
        return redirect('/checklists');
    }

    public function edit(Checklist $checklist)
    {
        if (auth()->user()->id == $checklist->user_id) {
            return view('checklist.edit', compact('checklist'));
        } else {
            return redirect('/checklists');
        }
    }

    // public function update(Request $request, Checklist $checklist)
    // {
    //     if (isset($_POST['delete'])) {
    //         $checklist->delete();
    //         return redirect('/checklists');
    //     } else {
    //         $this->validate($request, [
    //             'item' => 'required',
    //             'quantity' => 'required'
    //         ]);
    //         $checklist->item = $request->item;
    //         $checklist->quantity = $request->quantity;
    //         $checklist->save();
    //         return redirect('/checklists');
    //     }
    // }

    public function delete($id)
    {
        Checklist::find($id)->delete();
        Toastr::warning('Item is deleted successfully', 'Warning', [
            'positionClass' => 'toast-top-right',
            'progressBar' => 'true',
            'closeButton' => 'true',
        ]);
        return back();
    }
}
