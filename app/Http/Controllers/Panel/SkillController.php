<?php

namespace App\Http\Controllers\Panel;

use App\Models\Skill;
use App\Traits\Fileable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    use Fileable;

    private $redirectTo;
    /**
     * @var Skill
     */
    private $skill;

    /**
     * SkillController constructor.
     * @param Skill $skill
     */
    public function __construct(Skill $skill)
    {
        $this->redirectTo = route('skills.index');
        $this->skill = $skill;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = $this->skill->with('image')->latest()->get();
        return view('panel.skills.index' , [
            'skills' => $skills
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.skills.create');
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
            'name'=> 'required' ,
            'percent' => 'numeric|nullable'
        ]);

        $fields = $this->renameRequest($request->except(['_method' , '_token']));
        Skill::create($fields);

        return redirect($this->redirectTo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('panel.skills.edit' , [
            'skill' => $skill->with('image')->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $this->validate($request , [
            'name'=> 'required' ,
            'percent' => 'numeric|nullable'
        ]);

        $fields = $this->renameRequest($request->except(['_method' , '_token']));
        $skill->update($fields);

        return redirect($this->redirectTo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill $skill
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect($this->redirectTo);
    }

    private function renameRequest(array $request)
    {
        return [
            'name' => $request['name'] ,
            'description' => $request['description'] ,
            'tools' => $request['tools'] ,
            'is_active' => (isset($request['is_active'])) ? true : false ,
            'percent' => $request['percent'] ,
            'file_id' => $this->saveFile($request['filepath'] ?? null)
        ];
    }

    /**
     * @param Skill $skill
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function changeSkillActivation(Skill $skill)
    {
        $skill->is_active = !$skill->is_active;
        $skill->save();
        return redirect($this->redirectTo);
    }
}
