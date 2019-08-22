<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Portfolio;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index() {
        $experiences = $this->getExperiences();
        $portfolioItems = $this->getPortfolioItems();
        return view('pages.welcome', ['experiences' => $experiences, 'portfolioItems' => $portfolioItems]);
    }

    public function getExperiences() {
        return $experiences = Experience::orderBy('id', 'desc')->get();
    }

    public function getPortfolioItems() {
        return $portfolioItems = Portfolio::orderBy('id', 'desc')->get();
    }
}
