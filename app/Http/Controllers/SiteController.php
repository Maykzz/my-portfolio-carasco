<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class SiteController extends Controller
{
    /**
     * Display the home page
     */
    public function home()
    {
        return view('site.home');
    }

    /**
     * Display the about page
     */
    public function about()
    {
        return view('site.about');
    }

    /**
     * Display the skills page
     */
    public function skills()
    {
        $skills = Skill::all();
        return view('site.skills', compact('skills'));
    }

    /**
     * Display the portfolio/projects page
     */
    public function portfolio()
    {
        $projects = Project::latest()->get();
        return view('site.portfolio', compact('projects'));
    }

    /**
     * Display the contact form
     */
    public function contact()
    {
        return view('site.contact');
    }

    /**
     * Store contact form submission
     */
    public function storeContact(ContactRequest $request)
    {
        Contact::create($request->validated());

        return redirect()->route('contact')
            ->with('success', 'Thank you for your message! I will get back to you soon.');
    }
}
