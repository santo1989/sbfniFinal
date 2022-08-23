<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Event;
use App\Models\Message;
use App\Models\News;
use App\Models\Notice;
use App\Models\Teacher;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function home()
    {
        // $notices = Notice::get()->latest(3);
        // $events = Event::get()->latest(4);
        // $news = News::get()->latest(3);
        // $quotations = Quotation::get()->latest(3);
        return view('frontend.homenew');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function history()
    {
        return view('frontend.history');
    }

    public function courses()
    {
        return view('frontend.courses');
    }

    public function home_teachers()
    {
        return view('frontend.teachers');
    }

    public function home_alumni()
    {
        return view('frontend.alumni');
    }

    public function career_page()
    {
        return view('frontend.career_page');
    }

    public function home_teacher_details($id)
    {
        $teacher = Teacher::find($id);
        return view('frontend.teacher_details', ['teacher' => $teacher]);
    }

    public function home_alumni_details($id)
    {
        $alumni = Alumni::find($id);
        return view('frontend.alumni_details', ['alumni' => $alumni]);
    }

    public function admission_information()
    {
        return view('frontend.admission_information');
    }

    public function admission_procedure()
    {
        return view('frontend.admission_procedure');
    }


    public function home_notices()
    {
        $notices = Notice::all();
        return view('frontend.notices', ['notices' => $notices]);
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function internship()
    {
        return view('frontend.internship');
    }

    public function events()
    {
        $events = Event::all();
        return view('frontend.events', ['events' => $events]);
    }

    public function event_details($id)
    {

        $newevent = Event::where('id', $id)->firstOrFail();

        $otherEvents = Event::where('id', '!=', $id)->limit(4)->get();


        return view('frontend.event_details', ['newevent' => $newevent, 'otherEvents' => $otherEvents]);
    }
    public function news()
    {
        $newses = News::all();
        // dd($newses);
        return view('frontend.news', ['newses' => $newses]);
    }

    public function news_details($id)
    {
        $newnews = News::where('id', $id)->first();
        // dd($news);
        return view('frontend.news_details', ['newnews' => $newnews]);
    }

    public function int_advisors()
    {
        return view('frontend.intadvisor');
    }
    public function guest_teachers()
    {
        return view('frontend.guestteachers');
    }

    public function guestmessage()
    {
        return view('frontend.guestmessage');
    }
    
    public function guestmessage_vp()
    {
        return view('frontend.guestmessage_vp');
    }
    
    public function guestmessage_coo()
    {
        return view('frontend.guestmessage_coo');
    }

    public function labothers()
    {
        return view('frontend.lab&others');
    }
    public function tution_fee()
    {
        return view('frontend.tutionfee');
    }
    public function scholarship()
    {
        return view('frontend.scholarship');
    }

    public function scholarship_details($id)
    {
        $scholarship = Scholarship::find($id);
        return view('frontend.scholarship_details', ['scholarship' => $scholarship]);
    }

    public function guidelines()
    {
        return view('frontend.guidelines');
    }
    public function management_committee()
    {
        return view('frontend.management-committee');
    }
    public function governing_body()
    {
        return view('frontend.governing_body');
    }
    public function curriculam()
    {
        return view('frontend.curriculam');
    }
    public function payment_guidelines()
    {
        return view('frontend.payment-guidelines');
    }
    
    public function download()
    {
        return view('frontend.fileupload');
    }
    

}
