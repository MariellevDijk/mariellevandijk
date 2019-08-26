<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Portfolio;
use App\Skills;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.welcome', [
            'experiences' => $this->getExperiences(),
            'portfolioItems' => $this->getPortfolioItems(),
            'skills' => $this->getSkills(),
        ]);
    }

    public function getExperiences()
    {
        return $experiences = Experience::orderBy('id', 'desc')->get();
    }

    public function getPortfolioItems()
    {
        return $portfolioItems = Portfolio::orderBy('id', 'desc')->get();
    }

    public function getSkills()
    {
        $skills = Skills::all()->toArray();

        // Lijst met alle skills
        $allSkills = array_values(array_unique(array_column($skills, 'skill')));

        $workingExperience = $studyExperience = $selfLearningExperience = [];
        foreach ($skills as $item) {
            switch ($item['type']) {
                case 'werkervaring':
                    $workingExperience[] = $item['years_experience'];
                    break;
                case 'studie':
                    $studyExperience[] = $item['years_experience'];
                    break;
                case 'autodidact':
                    $selfLearningExperience[] = $item['years_experience'];
            }
        }

        return [
            'categories' => $allSkills,
            'workingExperience' => $workingExperience,
            'studyExperience' => $studyExperience,
            'selfLearningExperience' => $selfLearningExperience,
        ];
    }
}
