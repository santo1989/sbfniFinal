<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {

        $sectionCollection = Section::latest();

        if (request('search')) {
            $sectionCollection = $sectionCollection
                ->where('section_name', 'like', '%' . request('search') . '%');
        }

        $section = $sectionCollection->paginate(10);

        return view('backend.section.index', [
            'sections' => $section
        ]);
    }

    public function create()
    {
        // $this->authorize('create-section');

        return view('backend.section.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'section_name' => 'required',
        ]);
        //  @dd($request);
        try {
            Section::create([
                'section_name' => $request->section_name,
                // 'section_code' => $request->section_code,
            ]);
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }

        return redirect()->route('section.index')->withMessage('Successfully Created!');
    }


    public function edit(Section $section)
    {
        return view('backend.section.edit', [
            'single_section' => $section
        ]);
    }

    public function show(Section $section)
    {
        return view('backend.section.show', [
            'show_section' => $section
        ]);
    }

    public function update(Request $request, $id)
    {
        $section = Section::find($id);

        $section->update([
         
            'section_name' => $request->section_name,
            // 'section_code' => $request->section_code,

        ]);

        $section->update();


        return redirect()->route('section.index');
    }

    public function destroy(Section $section)
    {
        try {
            $section->delete();
            return redirect()->route('section.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
