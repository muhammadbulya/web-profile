<?php

namespace App\Http\Controllers;

use App\About;
use App\Slider;
use App\Service;
use App\Team;
use App\Contact;
use App\Portfolio;
use App\Testimonial;
use App\Client;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        $services = Service::all();
        $abouts = About::all();
        $sliders = Slider::all();
        $teams = Team::all();
        $contacts = Contact::all();
        $portfolios = Portfolio::all();
        $testimonials = Testimonial::all();
        $clients = Client::all();
        return view('welcome', compact('sliders', 'abouts','services','teams','contacts','portfolios','testimonials','clients'));
    }
}
