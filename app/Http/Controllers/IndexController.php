<?php


namespace App\Http\Controllers;


use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Skills;
use Illuminate\Database\Eloquent\Collection;

class IndexController
{
    public function index()
    {
        return view('welcome', [
            'experiences' => $this->getExperiences(),
            'portfolioItems' => $this->getPortfolioItems(),
            'skills' => $this->getSkills(),
        ]);
    }

    public function getExperiences(): Collection
    {
        return Experience::orderBy('id', 'desc')->get();
    }

    public function getPortfolioItems(): array
    {
        return Portfolio::orderBy('id', 'desc')->get()->toArray();
    }

    public function getSkills(): array
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
                    break;
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
