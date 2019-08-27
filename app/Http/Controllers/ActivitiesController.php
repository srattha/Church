<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activites;
class ActivitiesController extends Controller
{

    public $path = "assets/uploads/img";
    public function index()
    {
        $data = Activites::get();
       return view('admin.activities.activities',['data' => $data]);
    }


    public function create()
    {
        //
    }



    public function store(Request $request)
    {
        if($request->hasFile('files')){

            $files = $request->file('files');
            foreach ($files as $key => $file) {
                $file_name = time().'-'.str_replace(" ", "-", $file->getClientOriginalName());
                $data['name'] = $file->getClientOriginalName();
                $data['path'] = $this->path."/".$file_name;
                $file->move($this->path, $file_name);
                $result = Activites::insert($data);

            }
            return redirect()->back();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
