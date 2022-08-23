<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Image;

class ProfileController extends Controller
{
    public function index()
    {

        $profilesCollection = profile::latest();

        if (request('search')) {
            $profilesCollection = $profilesCollection
                ->where('student_id', 'like', '%' . request('search') . '%')
                ->orWhere('phone', 'like', '%' . request('search') . '%');
        }

        $profiles = $profilesCollection->paginate(10);

        return view('backend.profiles.index', [
            'profiles' => $profiles
        ]);
    }

    public function create()
    {
        // $this->authorize('create-profile');

        return view('backend.profiles.create');
    }

    public function store(Request $request)
    {

        try {
            profile::create([
                'user_id' => $request->user_id,
                'full_name' => $request->full_name,
                'phone' => $request->phone,
                'address' => $request->address,
                'session' => $request->session,
                'course_name' => $request->course_name,
                'current_status' => $request->current_status,
                'result' => $request->result,
                'nid' => $request->nid,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'blood_group' => $request->blood_group,
                'marital_status' => $request->marital_status,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'father_phone' => $request->father_phone,
                'parent_address' => $request->parent_address,
                'current_year' => $request->current_year,
                'current_semester' => $request->current_semester,
                'student_id' => $request->student_id,
                'image' => $this->uploadimg(request()->file('image')),
            ]);

            return redirect()->route('profiles.index')->withMessage('Successfully Created!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function show(profile $profile)
    {
        return view('backend.profiles.show', [
            'show_profile' => $profile
        ]);
    }

    public function edit(Profile $profile)
    {
        return view('backend.profiles.edit', [
            'edit_profile' => $profile
        ]);
    }

    public function update(Request $request, profile $profile)
    {
        try {
            $requestData = [
                'user_id' => $request->user_id,
                'full_name' => $request->full_name,
                'phone' => $request->phone,
                'address' => $request->address,
                'session' => $request->session,
                'course_name' => $request->course_name,
                'current_status' => $request->current_status,
                'result' => $request->result,
                'nid' => $request->nid,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'blood_group' => $request->blood_group,
                'marital_status' => $request->marital_status,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'father_phone' => $request->father_phone,
                'parent_address' => $request->parent_address,
                'current_year' => $request->current_year,
                'current_semester' => $request->current_semester,
                'student_id' => $request->student_id,
            ];

            // if ($request->hasFile('img')) {
            //     $img = $request->file('img');
            //     $name =  time() ;
            //     $destinationPath = storage_path('/app/public/profiles/');
            //     $img->move($destinationPath, $name);
            //     $profile->img = $name;
            // }
            if ($request->hasFile('image')) {
                $profile->image = $this->uploadimg(request()->file('image'));
            }

            $profile->update($requestData);

            return redirect()->route('admin.home')->withMessage('Successfully Updated!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function destroy(profile $profile)
    {
        try {
            $profile->delete();
            return redirect()->route('profiles.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    // Softdelete
    public function trash()
    {
        $profiles = profile::onlyTrashed()->get();

        return view('backend.profiles.trashed', [
            'profiles' => $profiles
        ]);
    }

    public function restore($id)
    {
        $profile = profile::onlyTrashed()->findOrFail($id);
        $profile->restore();
        return redirect()->route('profiles.trashed')->withMessage('Successfully Restored!');
    }

    public function delete($id)
    {
        $profile = profile::onlyTrashed()->findOrFail($id);
        unlink(public_path('storage/profiles/' . $profile->img));
        $profile->forceDelete();
        return redirect()->route('profiles.trashed')->withMessage('Successfully Deleted Permanently!');
    }

    public function uploadimg($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(270, 270)
            ->save(storage_path() . '/app/public/profiles/' . $fileName);

        return $fileName;
    }
}
