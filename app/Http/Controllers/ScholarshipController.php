<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Scholarship;
use App\Models\Student;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Image;

class ScholarshipController extends Controller
{
    public function index()
    {

        $scholarshipCollection = Scholarship::latest();

        if (request('search')) {
            $scholarshipCollection = $scholarshipCollection
                ->where('scholarship_name', 'like', '%' . request('search') . '%')
                ->orWhere('scholarship_commitment', 'like', '%' . request('search') . '%');
        }

        $scholarship = $scholarshipCollection->paginate(10);

        return view('backend.scholarship.index', [
            'scholarships' => $scholarship
        ]);
    }

    public function create()
    {
        // $this->authorize('create-scholarship');

        return view('backend.scholarship.create');
    }

    public function store(Request $request)
    {
        //  @dd($request);
        $this->validate($request, [
            'scholarship_name' => 'required',
            'scholarship_commitment' => 'required',
            'doner_name' => 'required',
        ]);
        try {
            Scholarship::create([
                'student_reg_no' => $request->student_reg_no,
                'scholarship_name' => $request->student_name,
                'scholarship_amount' => $request->scholarship_amount,
                'scholarship_duration' => $request->scholarship_duration,
                'scholarship_description' => $request->scholarship_description,
                'scholarship_status' => $request->scholarship_status,
                'scholarship_commitment' => $request->scholarship_commitment,
                'doner_name' => $request->doner_name,
                'year' => $request->year,
                'image' => $this->uploadimg1(request()->file('image')),
            ]);
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }

        return redirect()->route('scholarship.index')->withMessage('Successfully Created!');
    }


    public function edit(Scholarship $scholarship)
    {
        return view('backend.scholarship.edit', [
            'single_scholarship' => $scholarship
        ]);
    }

    public function show(Scholarship $scholarship)
    {
        return view('backend.scholarship.show', [
            'show_scholarship' => $scholarship
        ]);
    }

    public function update(Request $request, $id)
    {
        $scholarship = Scholarship::find($id);

        $scholarship->update([

            'student_reg_no' => $request->student_reg_no,
            'scholarship_name' => $request->student_name,
            'scholarship_amount' => $request->scholarship_amount,
            'scholarship_duration' => $request->scholarship_duration,
            'scholarship_description' => $request->scholarship_description,
            'scholarship_status' => $request->scholarship_status,
            'scholarship_commitment' => $request->scholarship_commitment,
            'doner_name' => $request->doner_name,
            'year' => $request->year,
            // 'image' => $this->uploadimg1(request()->file('image')),

        ]);

        if ($request->hasFile('image')) {
            $scholarship->image = $this->uploadimg6(request()->file('image'));
        }

        $scholarship->update();


        return redirect()->route('scholarship.index');
    }
    public function uploadimg1($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(300, 300)
            ->save(storage_path() . '/app/public/news/' . $fileName);

        return $fileName;
    }
    public function destroy(Scholarship $scholarship)
    {
        try {
            $scholarship->delete();
            unlink(public_path('storage/news/' . $scholarship->image));
            return redirect()->route('scholarship.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
