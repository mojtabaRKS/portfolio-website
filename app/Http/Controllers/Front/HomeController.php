<?php

namespace App\Http\Controllers\Front;

use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * @var Portfolio
     */
    private $portfolio;
    /**
     * @var Skill
     */
    private $skill;

    /**
     * Create a new controller instance.
     *
     * @param Portfolio $portfolio
     * @param Skill $skill
     */
    public function __construct(Portfolio $portfolio , Skill $skill)
    {
        $this->portfolio = $portfolio;
        $this->skill = $skill;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = $this->portfolio->with(['file' , 'attributes'])->latest()->get();

        $skills = $this->skill->with('file')->latest()->get()->chunk(6);

        return view('front.index' , [
            'skills' => $skills ,
            'portfolios' => $portfolios
        ]);
    }
}
