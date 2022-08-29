<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Image;

class QuotationController extends Controller
{
    public function index()
    {

        $noticesCollection = Quotation::latest();

        if (request('search')) {
            $noticesCollection = $noticesCollection
                ->where('author_name', 'like', '%' . request('search') . '%')
                ->orWhere('title', 'like', '%' . request('search') . '%');
        }

        $quotations = $noticesCollection->paginate(10);

        return view('backend.quotations.index', [
            'quotations' => $quotations
        ]);
    }

    public function create()
    {
        // $this->authorize('create-quotation');

        return view('backend.quotations.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'author_name' => 'required',
            'title' => 'required',
            'quotation' => 'required | min:10 | max:1000',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        try {
            Quotation::create([
                'title' => $request->title,
                'img' => $this->uploadimg(request()->file('img')),
                'quotation' => $request->quotation,
                'author_name' => $request->author_name,
            ]);

            return redirect()->route('quotations.index')->withMessage('Successfully Created!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function show(Quotation $quotation)
    {
        return view('backend.quotations.show', [
            'quotation' => $quotation,
            'single_quotation' => $quotation
        ]);
    }

    public function edit(Quotation $quotation)
    {
        return view('backend.quotations.edit', [
            'quotation' => $quotation
        ]);
    }

    public function update(Request $request, Quotation $quotation)
    {
        try {
            $requestData = [
                'title' => $request->title,
                // 'img' => $this->uploadimg(request()->file('img')),
                'quotation' => $request->quotation,
                'author_name' => $request->author_name,
            ];

            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $name =  time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = storage_path('/app/public/quotations/');
                $img->move($destinationPath, $name);
                $quotation->img = $name;
            }

            $quotation->update($requestData);

            return redirect()->route('quotations.index')->withMessage('Successfully Updated!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function destroy(Quotation $quotation)
    {
        try {
            $quotation->delete();
            return redirect()->route('quotations.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    // Softdelete
    public function trash()
    {
        $quotations = Quotation::onlyTrashed()->get();

        return view('backend.quotations.trashed', [
            'quotations' => $quotations
        ]);
    }

    public function restore($id)
    {
        $quotation = Quotation::onlyTrashed()->findOrFail($id);
        $quotation->restore();
        return redirect()->route('quotations.trashed')->withMessage('Successfully Restored!');
    }

    public function delete($id)
    {
        $quotation = Quotation::onlyTrashed()->findOrFail($id);
        unlink(public_path('storage/quotations/' . $quotation->img));
        $quotation->forceDelete();
        return redirect()->route('quotations.trashed')->withMessage('Successfully Deleted Permanently!');
    }

    public function uploadimg($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(364, 105)
            ->save(storage_path() . '/app/public/quotations/' . $fileName);

        return $fileName;
    }
}
