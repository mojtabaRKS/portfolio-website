<?php

namespace App\Http\Controllers\Panel;

use App\Models\Attribute;
use App\Models\Portfolio;
use App\Traits\Fileable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    // use fileable trait for upload files
    use Fileable;
    /**
     * @var Portfolio
     */
    private $portfolio;

    /**
     * @var $redirectTo
     */
    private $redirectTo;

    /**
     * PortfolioController constructor.
     * @param Portfolio $portfolio
     */
    public function __construct(Portfolio $portfolio)
    {
        $this->portfolio = $portfolio;
        $this->redirectTo = route('portfolios.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = $this->portfolio->with('attributes')->latest()->get();

        return view('panel.portfolios.index' , [
            'portfolios' => $portfolios
        ]);
    }

    private function setAttributes($portfolio, $attributes)
    {
        if (!empty($attributes)) {
            $filteredKeywords = array_filter($attributes, 'is_numeric');
            $portfolio->attributes()->sync($filteredKeywords);
        } else {
            $portfolio->attributes()->detach();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.portfolios.create' , [
            'attributes' => Attribute::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => 'required' ,
            'link' => 'required|url'
        ]);

        $fields = $this->renameRequest($request->except(['_token' , '_method']));

        $portfolio = new Portfolio($fields);
        $this->setAttributes($portfolio, $request->get('attributes'));
        $portfolio->save();

        return redirect($this->redirectTo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('panel.portfolios.edit' , [
            'portfolio' => $portfolio->with(['file' , 'attributes'])->first() ,
            'attributes' => Attribute::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $this->validate($request , [
            'name' => 'required' ,
            'link' => 'required|url'
        ]);

        $fields = $this->renameRequest($request->except(['_token' , '_method']));

        $portfolio->update($fields);

        return redirect($this->redirectTo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio $portfolio
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Portfolio $portfolio)
    {
        try {

            $portfolio->delete();

        } catch (\Exception $e) {

        }
        return redirect($this->redirectTo);
    }

    /**
     * @param $request
     * @return array
     */
    private function renameRequest($request)
    {
        return [
            'name' => $request['name'] ,
            'description' => $request['description'] ,
            'link' => $request['link'] ,
            'file_id' => $this->saveFile($request['filepath'] ?? null)
        ];
    }
}
