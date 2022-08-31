<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class NoticeController extends Controller
{

    public function index()
    {

        $noticesCollection = Notice::latest();

        if (request('search')) {
            $noticesCollection = $noticesCollection
                ->where('subject', 'like', '%' . request('search') . '%')
                ->orWhere('title', 'like', '%' . request('search') . '%');
        }

        $notices = $noticesCollection->paginate(10);

        return view('backend.notices.index', [
            'notices' => $notices
        ]);
    }

    public function create()
    {
        // $this->authorize('create-notice');

        return view('backend.notices.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'subject' => 'required',
            'date' => 'required',
            'pdf' => 'required | mimes:pdf,doc,docx,xls,xlsx,ppt,pptx',
        ]);
        try {
            Notice::create([
                'title' => $request->title,
                'date' => $request->date,
                'pdf' => $this->uploadpdf(request()->file('pdf')),
                'subject' => $request->subject,
            ]);

            return redirect()->route('notices.index')->withMessage('Successfully Created!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function show(Notice $notice)
    {
        return view('backend.notices.show', [
            'notice' => $notice
        ]);
    }

    public function edit(Notice $notice)
    {
        return view('backend.notices.edit', ['notice' => $notice]);
    }

    public function update(Request $request, Notice $notice)
    {
        try {
            $requestData = [
                'title' => $request->title,
                'date' => $request->date,
            ];

            if ($request->hasFile('pdf')) {
                $pdf = $request->file('pdf');
                $name = time() . '.' . $pdf->getClientOriginalExtension();
                $destinationPath = storage_path('/app/public/notices/');
                $pdf->move($destinationPath, $name);
                $notice->pdf = $name;
            }

            $notice->update($requestData);

            return redirect()->route('notices.index')->withMessage('Successfully Updated!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function destroy(Notice $notice)
    {
        try {
            $notice->delete();
            return redirect()->route('notices.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    // Softdelete
    public function trash()
    {
        $notices = Notice::onlyTrashed()->get();

        return view('backend.notices.trashed', [
            'notices' => $notices
        ]);
    }

    public function restore($id)
    {
        $notice = Notice::onlyTrashed()->findOrFail($id);
        $notice->restore();
        return redirect()->route('notices.trashed')->withMessage('Successfully Restored!');
    }

    public function delete($id)
    {
        $notice = Notice::onlyTrashed()->findOrFail($id);
        unlink(public_path('storage/notices/' . $notice->pdf));
        $notice->forceDelete();
        return redirect()->route('notices.trashed')->withMessage('Successfully Deleted Permanently!');
    }

    public function uploadpdf($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $destinationPath = storage_path('/app/public/notices/');
        $file->move($destinationPath, $fileName);
        return $fileName;
    }
}
