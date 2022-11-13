<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Mail\ContactMail;
use App\Mail\Email;
use App\Mail\OfferMail;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Location;
use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{
    public function index(){
        $banners = Banner::where(['active'=>1])->get();
        $blogers = Blog::where(['active'=>1])->take(3)->get();
        return view('frontend.home',compact('banners','blogers'));
    }

    public function aboutUs(){
        return view('frontend.about.index');
    }

    public function contactUs(){

        // $locations = [

        //     ['جدة', 21.4491899,38.6506632],
        //     ['شارع الريل مجمع الشايع <br> صناع الحلول الدولية', 24.6438753,46.7273219],
        // ];
        $locations = Location::get([0,1,2,3])->toArray();
        // post::pluck('title', 'id')->toArray();
        // dd($locations);
        return view('frontend.contact.index',compact('locations'));
    }

    public function faqs(){

        $faqs = Faq::where(['active'=>1])->get();
        return view('frontend.faqs.index',compact('faqs'));
    }
    public function blog(){

        return view('frontend.blogs.index');
    }
    public function blogDetails($url){
        $blog = Blog::where('url',$url)->first();
        return view('frontend.blogs.details',compact('blog'));
    }

    public function services(){

        return view('frontend.services.index');
    }

    public function news(){

        return view('frontend.news.index');
    }
    public function gallery(){
        $gallery = Gallery::where(['active'=>1])->get();
        return view('frontend.gallery.index',compact('gallery'));
    }

    public function servicesDetails($url){
        $service = Service::where('url',$url)->first();
        return view('frontend.services.details',compact('service'));
    }

    public function newsDetails($url){
        $new = News::where('url',$url)->first();
        return view('frontend.news.details',compact('new'));
    }



    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'email'         => 'required|email',
            'phone'        => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'       => 'required',
            'message'       => 'required',
        ]);
        if ($validator->passes()) {

            $data = $request->all(); // it store data to the DB
             Mail::to('omarabosamaha@gmail.com')->send(new ContactMail($data));
            return response()->json(['success' => __('site.success'), 'status' => true]);
        }
        return response()->json(['error' => $validator->errors()]);
    }


    public function email(Request $request)
    {
            $validator = Validator::make($request->all(), [
                'mail'         => 'required|email',
            ]);
            if ($validator->passes()) {

                $data = $request->all();
              Mail::to('omarabosamaha@gmail.com')->send(new Email($data));
                if($data){
                    toastr()->success(__('site.success'));
                    return redirect()->back();
                }else{
                    return back()->with('success','message sent successfully');
                }

        }
      return response()->json(['error'=>$validator->errors()]);
    }
    public function offer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'email'         => 'required|email',
            'phone'         => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'company_name'  => 'required',
            'type'          => 'required',
            'message'       => 'required',
        ]);
        if ($validator->passes()) {

            $data = $request->all(); // it store data to the DB
            Mail::to('omarabosamaha@gmail.com')->send(new OfferMail($data));
            return response()->json(['success' => __('site.success'), 'status' => true]);
        }
        return response()->json(['error' => $validator->errors()]);
    }
    public function getQuote(){

        return view('frontend.offer.index');
    }
}