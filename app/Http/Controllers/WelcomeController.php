<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;

class WelcomeController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        $experiences = Experience::with('experiences')
            ->latest('created_at')
            ->get();

        $projects = Project::with(['features', 'techs'])
            ->latest('created_at')
            ->get();

        $educations = Education::with('educations')
            ->latest('created_at')
            ->get();

        return view('welcome', [
            'skills' => $skills,
            'experiences' => $experiences,
            'projects' => $projects,
            'educations' => $educations
        ]);
    }

    public function findProject($id)
    {
        try {
            $projects = Project::findOrFail($id);
            return response()->json([
                'status' => 'success',
                'message' => 'Data Found',
                'projects' => $projects
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => 'failed',
                'message' => $e->getMessage()
            ], 404);
        }
    }

    public function downloadResume()
    {
        try {
            return Storage::download('resume/Wahyu Santoso-resume.pdf');
        } catch (\Exception $e) {
            return back()->with('error', "error while downloading. " . $e->getMessage());
        }
    }
}
