<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class AlumniController extends Controller
{

    public function index()
    {

        $alumniCollection = Alumni::latest();

        if (request('search')) {
            $alumniCollection = $alumniCollection
                ->where('name', 'like', '%' . request('search') . '%');
        }

        $alumni = $alumniCollection->paginate(10);

        return view('backend.alumni.index', [
            'alumnis' => $alumni
        ]);
    }

    public function create()
    {
        // $this->authorize('create-alumni');

        return view('backend.alumni.create');
    }

    public function store(Request $request)
    {
        //  @dd($request);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'image' => 'required',
        ]);
        try {
            Alumni::create([
                'student_reg_no' => $request->student_reg_no,
                'name' => $request->name,
                'current_position' => $request->current_position,
                'address' => $request->address,
                'passing_year' => $request->passing_year,
                'alumni_role' => $request->alumni_role,
                'img' => $this->uploadimg(request()->file('img')),
            ]);
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }

        return redirect()->route('alumni.index')->withMessage('Successfully Created!');
    }


    public function edit(Alumni $alumnus)
    {
        return view('backend.alumni.edit', [
            'single_alumni' => $alumnus
        ]);
    }

    public function show(Alumni $alumnus)
    {
        return view('backend.alumni.show', [
            'show_alumni' => $alumnus
        ]);
    }

    public function update(Request $request, $id)
    {
        $alumni = Alumni::find($id);

        $alumni->update([

            'student_reg_no' => $request->student_reg_no,
            'name' => $request->name,
            'current_position' => $request->current_position,
            'address' => $request->address,
            'passing_year' => $request->passing_year,
            'alumni_role' => $request->alumni_role,

        ]);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $name =  time() . '.' . $img->getClientOriginalExtension();
            $destinationPath = storage_path('/app/public/alumni/');
            $img->move($destinationPath, $name);
            $alumni->img = $name;
        }

        $alumni->update();


        return redirect()->route('alumni.index');
    }

    public function destroy(Alumni $id)
    {
        $alumni_dl = Alumni::find($id);
        try {

            $alumni_dl->delete();
            unlink(public_path('storage/alumni/' . $alumni_dl->img));
            return redirect()->route('alumni.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function uploadimg($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(300, 300)
            ->save(storage_path() . '/app/public/alumni/' . $fileName);

        return $fileName;
    }
}
