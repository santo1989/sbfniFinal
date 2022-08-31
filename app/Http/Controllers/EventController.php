<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Exception;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Image;

class EventController extends Controller
{


    public function index()
    {

        $eventsCollection = Event::latest();

        if (request('search')) {
            $eventsCollection = $eventsCollection
                ->where('description', 'like', '%' . request('search') . '%')
                ->orWhere('lecturer_name', 'like', '%' . request('search') . '%');
        }

        $events = $eventsCollection->paginate(10);

        return view('backend.events.index', [
            'events' => $events
        ]);
    }

    public function create()
    {
        // $this->authorize('create-event');

        return view('backend.events.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'lecturer_name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',
            'img1' => 'required',
        ]);
        
        try {
            Event::create([

                'img1' => $this->uploadimg(request()->file('img1')),
                'description' => $request->description,
                'date' => $request->date,
                'time' => $request->time,
                'fee' => $request->fee,
                'location' => $request->location,
                'bring' => $request->bring,
                'lecturer_name' => $request->lecturer_name,
                'lecturer_phone' => $request->lecturer_phone,
                'lecturer_email' => $request->lecturer_email,
                'lecturer_img'  => $this->uploadimg2(request()->file('lecturer_img')),
                'lecturer_description' => $request->lecturer_description,
                'title' => $request->title,
            ]);

            return redirect()->route('events.index')->withMessage('Successfully Created!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function show(Event $event)
    {
        return view('backend.events.show', [
            'events' => $event
        ]);
    }

    public function edit($event_id)
    {
        $event = Event::find($event_id);
        return view('backend.events.edit', [
            'single_event' => $event
        ]);
    }

    public function update(Request $request, $event_id)
    {
        
        // dd($request->all());
        try {
            $event = Event::find($event_id);
            $requestData = [
                // 'img1' => $this->uploadimg(request()->file('img1')),
                'description' => $request->description,
                'date' => $request->date,
                'time' => $request->time,
                'fee' => $request->fee,
                'location' => $request->location,
                'bring' => $request->bring,
                'lecturer_name' => $request->lecturer_name,
                'lecturer_phone' => $request->lecturer_phone,
                'lecturer_email' => $request->lecturer_email,
                // 'lecturer_img'  => $this->uploadimg(request()->file('lecturer_img')),
                'lecturer_description' => $request->lecturer_description,
                'title' => $request->title,
            ];
            if (request()->file('img1')) {
                $requestData['img1'] = $this->uploadimg(request()->file('img1'));
            }
            if (request()->file('lecturer_img')) {
                $requestData['lecturer_img'] = $this->uploadimg2(request()->file('lecturer_img'));
            }
            
            //  dd($requestData);
            $event->update($requestData);


            return redirect()->route('events.index')->withMessage('Successfully Updated!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    public function destroy(Event $event)
    {
        try {
            $event->delete();
            return redirect()->route('events.index')->withMessage('Successfully Deleted!');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    // Softdelete
    public function trash()
    {
        $events = Event::onlyTrashed()->get();

        return view('backend.events.trashed', [
            'events' => $events
        ]);
    }

    public function restore($id)
    {
        $event = Event::onlyTrashed()->findOrFail($id);
        $event->restore();
        return redirect()->route('events.trashed')->withMessage('Successfully Restored!');
    }

    public function delete($id)
    {
        $event = Event::onlyTrashed()->findOrFail($id);
        unlink(public_path('storage/events/' . $event->img1));
        unlink(public_path('storage/events/' . $event->lecturer_img));
        $event->forceDelete();
        return redirect()->route('events.trashed')->withMessage('Successfully Deleted Permanently!');
    }

    public function uploadimg($file)
    {
        
         $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(420, 420)
            ->save(storage_path() . '/app/public/events/' . $fileName);

        return $fileName;
    }

    public function uploadimg2($file)
    {
       sleep(1);
         $fileName = time() . '.' . $file->getClientOriginalExtension();

        Image::make($file)
            ->resize(420, 420)
            ->save(storage_path() . '/app/public/events/' . $fileName);

        return $fileName;
    }
}
