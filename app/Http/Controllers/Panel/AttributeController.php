<?php

namespace App\Http\Controllers\Panel;

use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttributeController extends Controller
{
    private $redirectTo;
    /**
     * @var Attribute
     */
    private $attribute;

    /**
     * AttributeController constructor.
     * @param Attribute $attribute
     */
    public function __construct(Attribute $attribute)
    {
        $this->redirectTo = route('attributes.index');
        $this->attribute = $attribute;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.attributes.index' , [
            'attributes' => $this->attribute->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.attributes.create');
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
            'description' => 'required' ,
            'icon' => 'required' ,
        ]);

        $fields = $this->renameRequest($request->except(['_token' , '_method']));

        $this->attribute->create($fields);

        return redirect($this->redirectTo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function show(Attribute $attribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function edit(Attribute $attribute)
    {
        return view('panel.attributes.edit' , [
           'attribute' => $attribute
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attribute $attribute)
    {
        $this->validate($request , [
            'name' => 'required' ,
            'description' => 'required' ,
            'icon' => 'required' ,
        ]);

        $fields = $this->renameRequest($request->except(['_token' , '_method']));

        $attribute->update($fields);

        return redirect($this->redirectTo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribute $attribute)
    {
        try {
            $attribute->delete();
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
            'icon' => $request['icon'] ,
        ];
    }
}
