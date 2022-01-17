<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Checklist;

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

    public function update(Request $request, Checklist $checklist)
    {
        if(isset($_POST['delete'])) {
            $checklist->delete();
            return redirect('/checklists');
        }
        else {
            $this->validate($request, [
                'item' => 'required',
                'quantity' => 'required'
            ]);
            $checklist->item = $request->item;
            $checklist->quantity = $request->quantity;
            $checklist->save();
            return redirect('/checklists');
        }
    }
}
