<?php

namespace App\Http\Controllers;

use App\Models\News;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Image;

class NewsController extends Controller
{

    public function index()
    {

        $newsCollection = News::latest();

        if (request('search')) {
            $newsCollection = $newsCollection
                ->where('script1', 'like', '%' . request('search') . '%')
                ->orWhere('script2', 'like', '%' . request('search') . '%');
        }

        $archive = News::orderBy('created_at', 'desc')
            ->whereNotNull('created_at')
            ->get()
            ->groupBy(function (News $post) {
                return $post->created_at->format('Y');
            })
            ->map(function ($item) {
                return $item
                    ->sortByDesc('created_at')
                    ->groupBy(function ($item) {
                        return $item->created_at->format('F');
                    });
            });

        $news = $newsCollection->paginate(10);

        return view('backend.news.index', [
            'news' => $news,
            'archive' => $archive,
        ]);
    }

    public function create()
    {
        // $this->authorize('create-news');

        return view('backend.news.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'script1' => 'required',
            'script2' => 'required',
            'img1' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'img2' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);
        //  @dd($request);
        try {
            News::create([
                'title' => $request->title,
                'img1' => $this->uploadimg1(request()->file('img1')),
                'script1' => $request->script1,
                'img2' => $this->uploadimg2(request()->file('img2')),
                'script2' => $request->script2,
                'gl_img1' => $this->uploadimg3(request()->file('gl_img1')),
                'gl_img2' => $this->uploadimg4(request()->file('gl_img2')),
                'gl_img3' => $this->uploadimg5(request()->file('gl_img3')),
                'gl_img4' => $this->uploadimg6(request()->file('gl_img4')),
                'gl_img5' => $this->uploadimg7(request()->file('gl_img5')),
                'gl_img6' => $this->uploadimg8(request()->file('gl_img6')),
                'author' => $request->author,
                'author_img' => $this->uploadimg9(request()->file('author_img')),
                'author_details' => $request->author_details,
            ]);
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }

        return redirect()->route('news.index')->withMessage('Successfully Created!');
    }

    public function uploadimg1($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(770, 500)
            ->save(storage_path() . '/app/public/news/' . $fileName);

        return $fileName;
    }

    public function uploadimg2($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(770, 500)
            ->save(storage_path() . '/app/public/news/' . $fileName);

        return $fileName;
    }
    public function uploadimg3($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(770, 500)
            ->save(storage_path() . '/app/public/news/' . $fileName);

        return $fileName;
    }

    public function uploadimg4($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(770, 500)
            ->save(storage_path() . '/app/public/news/' . $fileName);

        return $fileName;
    }
    public function uploadimg5($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(770, 500)
            ->save(storage_path() . '/app/public/news/' . $fileName);

        return $fileName;
    }

    public function uploadimg6($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(770, 500)
            ->save(storage_path() . '/app/public/news/' . $fileName);

        return $fileName;
    }
    public function uploadimg7($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(770, 500)
            ->save(storage_path() . '/app/public/news/' . $fileName);

        return $fileName;
    }

    public function uploadimg8($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(770, 500)
            ->save(storage_path() . '/app/public/news/' . $fileName);

        return $fileName;
    }

    public function uploadimg9($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(170, 170)
            ->save(storage_path() . '/app/public/news/' . $fileName);

        return $fileName;
    }

    public function edit(News $news)
    {
        return view('backend.news.edit', [
            'single_news' => $news
        ]);
    }

    public function show(News $news)
    {
        return view('backend.news.show', [
            'show_news' => $news
        ]);
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);

        $news->update([
            // 'img1' => $this->uploadimg1(request()->file('img1')),
            'script1' => $request->script1,
            // 'img2' => $this->uploadimg2(request()->file('img2')),
            'script2' => $request->script2,
            // 'gl_img1' => $this->uploadimg3(request()->file('gl_img1')),
            // 'gl_img2' => $this->uploadimg4(request()->file('gl_img2')),
            // 'gl_img3' => $this->uploadimg5(request()->file('gl_img3')),
            // 'gl_img4' => $this->uploadimg6(request()->file('gl_img4')),
            // 'gl_img5' => $this->uploadimg7(request()->file('gl_img5')),
            // 'gl_img6' => $this->uploadimg8(request()->file('gl_img6')),
            'title' => $request->title,
            'author' => $request->author,
            'author_details' => $request->author_details,



        ]);
        if ($request->hasFile('img1')) {
            $news->img1 = $this->uploadimg1(request()->file('img1'));
        }
        if ($request->hasFile('img2')) {
            $news->img2 = $this->uploadimg2(request()->file('img2'));
        }
        if ($request->hasFile('gl_img1')) {
            $news->gl_img1 = $this->uploadimg3(request()->file('gl_img1'));
        }
        if ($request->hasFile('gl_img2')) {
            $news->gl_img2 = $this->uploadimg4(request()->file('gl_img2'));
        }
        if ($request->hasFile('gl_img3')) {
            $news->gl_img3 = $this->uploadimg5(request()->file('gl_img3'));
        }
        if ($request->hasFile('gl_img4')) {
            $news->gl_img4 = $this->uploadimg6(request()->file('gl_img4'));
        }
        if ($request->hasFile('gl_img5')) {
            $news->gl_img5 = $this->uploadimg7(request()->file('gl_img5'));
        }
        if ($request->hasFile('gl_img6')) {
            $news->gl_img6 = $this->uploadimg8(request()->file('gl_img6'));
        }

        if ($request->hasFile('author_img')) {
            $news->author_img = $this->uploadimg9(request()->file('author_img'));
        }

        $news->update();


        return redirect()->route('news.index');
    }

    public function destroy(News $news)
    {
        try {
            $news->delete();
            return redirect()->route('news.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    // Softdelete
    public function trash()
    {
        $news = News::onlyTrashed()->get();

        return view('backend.news.trashed', [
            'news' => $news
        ]);
    }

    public function restore($id)
    {
        $news = News::onlyTrashed()->findOrFail($id);
        $news->restore();
        return redirect()->route('news.trashed')->withMessage('Successfully Restored!');
    }

    public function delete($id)
    {
        $news = News::onlyTrashed()->findOrFail($id);
        unlink(public_path('storage/news/' . $news->img1));
        unlink(public_path('storage/news/' . $news->img2));
        unlink(public_path('storage/news/' . $news->gl_img1));
        unlink(public_path('storage/news/' . $news->gl_img2));
        unlink(public_path('storage/news/' . $news->gl_img3));
        unlink(public_path('storage/news/' . $news->gl_img4));
        unlink(public_path('storage/news/' . $news->gl_img5));
        unlink(public_path('storage/news/' . $news->gl_img6));
        unlink(public_path('storage/news/' . $news->author_img));

        $news->forceDelete();
        return redirect()->route('news.trashed')->withMessage('Successfully Deleted Permanently!');
    }
}
