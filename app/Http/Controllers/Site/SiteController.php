<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\SliderFooter;
use App\Models\WhoWeAreDetail;
use App\Models\WhoWeAreSide;
use App\Models\WhoWeAreFaq;
use App\Models\ServiceDetail;
use App\Models\ServiceItem;
use App\Models\ProjectDetail;
use App\Models\ProjectItem;
use App\Models\CourseItem;

class SiteController extends Controller
{
    public function index()
    {
        $slider         = Slider::latest()->get();
        $sliderFooter   = SliderFooter::latest()->get()->take(3);
        
        $whoWeAreDetail = WhoWeAreDetail::first();
        $whoWeAreSides  = WhoWeAreSide::latest()->get()->take(4);
        $whoWeAreFaqs   = WhoWeAreFaq::latest()->get();
        
        $serviceDetail  = ServiceDetail::first();
        $serviceItems   = ServiceItem::latest()->get()->take(3);
        
        $projectDetail  = ProjectDetail::first();
        $projectItems   = ProjectItem::latest()->get()->take(3);
        
        return view('site.pages.index', compact(['slider','sliderFooter','whoWeAreDetail','whoWeAreSides','whoWeAreFaqs','serviceDetail','serviceItems','projectDetail','projectItems']));
    }



    public function projects()
    {
        $projectItems = ProjectItem::latest()->get();
        return view('site.pages.projects', compact('projectItems'));
    }



    public function projectItem($name)
    {
        $projectItem = ProjectItem::where('name_ar', $name)->orWhere('name_en', $name)->first();
        return view('site.pages.project-item', compact('projectItem'));
    }



    public function courses()
    {
        $courseItems = CourseItem::latest()->get();
        return view('site.pages.courses', compact('courseItems'));
    }



    public function contactUs()
    {
        return view('site.pages.contact-us');
    }
}
