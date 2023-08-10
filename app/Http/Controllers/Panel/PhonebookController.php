<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Phonebook;
use Illuminate\Http\Request;
use App\Models\PhonebookCategory;

class PhonebookController extends Controller
{
    public function index()
    {
        $phonebooks = Phonebook::all();
        return view('panel.phonebooks.index', compact('phonebooks'));
    }

    public function add()
    {
        $phonebooks = Phonebook::all();
        return view('panel.phonebooks.add', compact('phonebooks'));
    }

    public function doAdd(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required',
        ]);

        $phonebook = Phonebook::create([
            'user_id' => auth()->user()->id,
            'name' => $data['name'],
            'phonebook_category_id' => $data['type'],
        ]);

        return redirect()->route('panel.phonebooks.show', $phonebook->id);
    }

    public function addCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:phonebook_categories,name'
        ]);

        try {
            $category = new PhonebookCategory();
            $category->name = $request->input('name');
            $category->save();

            return response()->json([
                'message' => 'Category added successfully',
            ], 201);
        }catch (\Exception $e) {

            return response()->json([
                'message' => 'Error adding category',
            ], 500);
        }
    }

    public function show(Phonebook $phonebook)
    {
        return view('panel.phonebooks.show', compact('phonebook'));
    }
}
