<?php

namespace App\Http\Controllers;

use App\Models\Ranking;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Image;

class RankingController extends Controller
{
    public function index()
    {

        $rankingCollection = Ranking::latest();

        if (request('search')) {
            $rankingCollection = $rankingCollection
                ->where('name', 'like', '%' . request('search') . '%');
        }

        $ranking = $rankingCollection->paginate(10);

        return view('backend.ranking.index', [
            'rankings' => $ranking
        ]);
    }

    public function create()
    {
        // $this->authorize('create-ranking');

        return view('backend.ranking.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'rank_name' => 'required',
            'rank_position' => 'required',

        ]);
        //  @dd($request);
        try {
            Ranking::create([
                'rank_position' => $request->rank_position,
                'rank_name' => $request->rank_name,
                'rank_description' => $request->rank_description,
                'rank_year' => $request->rank_year,
                'img' => $this->uploadimg(request()->file('img')),
            ]);
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }

        return redirect()->route('ranking.index')->withMessage('Successfully Created!');
    }


    public function edit(Ranking $ranking)
    {
        return view('backend.ranking.edit', [
            'single_ranking' => $ranking
        ]);
    }

    public function show(Ranking $ranking)
    {
        return view('backend.ranking.show', [
            'show_ranking' => $ranking
        ]);
    }

    public function update(Request $request, $id)
    {
        $ranking = Ranking::find($id);

        $ranking->update([

            'rank_position' => $request->rank_position,
            'rank_name' => $request->rank_name,
            'rank_description' => $request->rank_description,
            'rank_year' => $request->rank_year,

        ]);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $name =  time() . '.' . $img->getClientOriginalExtension();
            $destinationPath = storage_path('/app/public/ranking/');
            $img->move($destinationPath, $name);
            $ranking->img = $name;
        }

        $ranking->update();


        return redirect()->route('ranking.index');
    }

    public function destroy(Ranking $ranking)
    {
        try {
            $ranking->delete();
            unlink(public_path('storage/ranking/' . $ranking->img));
            return redirect()->route('ranking.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
    public function uploadimg($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(300, 300)
            ->save(storage_path() . '/app/public/ranking/' . $fileName);

        return $fileName;
    }
}
