<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    public function index()
{

    $internshipCollection = Internship::latest();

    if (request('search')) {
        $internshipCollection = $internshipCollection
            ->where('name', 'like', '%' . request('search') . '%');
    }

    $internship = $internshipCollection->paginate(10);

    return view('backend.internship.index', [
        'internships' => $internship
    ]);
}

public function create()
{
    // $this->authorize('create-internship');

    return view('backend.internship.create');
}

public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        'student_reg_no' => 'required',
        'current_position' => 'required',
        'address' => 'required',
        'passing_year' => 'required',
        'internship_role' => 'required',
    ]);
    //  @dd($request);
    try {
        Internship::create([
            'student_reg_no' => $request->student_reg_no,
            'name' => $request->name,
            'current_position' => $request->current_position,
            'address' => $request->address,
            'passing_year' => $request->passing_year,
            'internship_role' => $request->internship_role,
            'internship_start_date' => $request->internship_start_date,
        ]);
    } catch (QueryException $e) {
        return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
    } catch (Exception $e) {
        return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
    }

    return redirect()->route('internship.index')->withMessage('Successfully Created!');
}


public function edit(Internship $internship)
{
    return view('backend.internship.edit', [
        'single_internship' => $internship
    ]);
}

public function show(Internship $internship)
{
    return view('backend.internship.show', [
        'show_internship' => $internship
    ]);
}

public function update(Request $request, $id)
{
    $internship = Internship::find($id);

    $internship->update([
     
        'student_reg_no' => $request->student_reg_no,
        'name' => $request->name,
        'current_position' => $request->current_position,
        'address' => $request->address,
        'passing_year' => $request->passing_year,
        'internship_role' => $request->internship_role,
        'internship_start_date' => $request->internship_start_date,

    ]);

    $internship->update();


    return redirect()->route('internship.index');
}

public function destroy(Internship $internship)
{
    try {
        $internship->delete();
        return redirect()->route('internship.index')->withMessage('Successfully Deleted!');
    } catch (QueryException $e) {
        return redirect()->back()->withErrors($e->getMessage());
    }
}
}
