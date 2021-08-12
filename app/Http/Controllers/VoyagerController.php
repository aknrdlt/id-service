<?php
namespace App\Http\Controllers;

use App\Models\AboutCompany;
use App\Models\Contact;
use App\Models\ContactPage;
use App\Models\HowWeWork;
use App\Models\Menu;
use App\Models\OtherWords;
use App\Models\OurAbility;
use App\Models\OurExperience;
use App\Models\OurServices;
use App\Models\Services;
use App\Models\TypeOfServices;
use App\Models\WelcomePage;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class VoyagerController extends Controller
{
    public function index(){
        $welcome = WelcomePage::all();
        $about = AboutCompany::all();
        $services = Services::all();
        $details = OtherWords::all();
        $work = HowWeWork::all();
        $menu = Menu::all();
        $contacts = Contact::find(1);
        return view('index', compact('details','menu','welcome', 'work', 'services', 'about', 'contacts'));
    }
    public function services(){
        $types_of_services = TypeOfServices::all();
        $services = OurServices::all();
        $menu = Menu::all();
        $details = OtherWords::all();
        $contacts = Contact::find(1);
        return view('services', compact('details','menu','types_of_services','services', 'contacts'));
    }
    public function contacts(){
        $contacts = Contact::find(1);
        $contactPage = ContactPage::all();
        $menu = Menu::all();
        $details = OtherWords::all();
        return view('contacts', compact('details','menu','contactPage', 'contacts'));
    }
    public function work(){
        $work = OurExperience::all();
        $ability = OurAbility::all();
        $contacts = Contact::find(1);
        $menu = Menu::all();
        $details = OtherWords::all();
        return view('work', compact('details','menu','work', 'ability', 'contacts'));
    }
}
