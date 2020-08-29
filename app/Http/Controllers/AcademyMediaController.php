<?php

namespace App\Http\Controllers;

use App\Building;
use App\Conference;
use App\Graduation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AcademyMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::all();
        $graduations = Graduation::all();
        $conferences = Conference::all();
        return view('dashboard.media.index', compact('buildings','graduations', 'conferences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


    public function addNewBuilding(Request $request) {

        $validatedData = Validator::make($request->all(), [
            'image[]' => 'array',
            'image.*' => 'required|image|mimes:jpg,png,jpeg'
        ], [
            'image.required' => 'قم بأدخال صورة',
            'image.mimes' => 'قم برفع صورة بأي من الأمتدادات : jpg , png , jpeg'
        ]);

        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        $data = $request->all();
        $c = 0;
        while(isset($data['image'][$c])) {
            $building = new Building;
            if($file = $request->file('image')[$c]) {
                $name = time() . $file->getClientOriginalName();
                $file->move('buildings' , $name);
                $building->image = $name;
            }
            $building->save();
            $c++;
        }

        return redirect()->back()->with('created_successfully', 'created_successfully');


    }


    public function addNewGraduation(Request $request) {

        $validatedData = Validator::make($request->all(), [
            'image[]' => 'array',
            'image.*' => 'required|image|mimes:jpg,png,jpeg'
        ], [
            'image.required' => 'قم بأدخال صورة',
            'image.mimes' => 'قم برفع صورة بأي من الأمتدادات : jpg , png , jpeg'
        ]);

        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        $data = $request->all();
        $c = 0;
        while(isset($data['image'][$c])) {
            $graduation = new Graduation;
            if($file = $request->file('image')[$c]) {
                $name = time() . $file->getClientOriginalName();
                $file->move('graduations' , $name);
                $graduation->image = $name;
            }
            $graduation->save();
            $c++;
        }

        return redirect()->back()->with('created_successfully', 'created_successfully');



    }



    public function addNewConference(Request $request) {

        $validatedData = Validator::make($request->all(), [
            'image' => 'bail|required|image|mimes:png,jpg,jpeg',
            'video' => 'nullable|mimes:mp4',
            'name' => 'bail|required|max:255',
            'date' => 'bail|required|date',
            'description' => 'bail|required'
        ], [
            'image.required' => 'قم بأدخال صورة',
            'image.mimes' => 'قم برفع صورة بأي من الأمتدادات : jpg , png , jpeg',

            'video.mimes' => 'قم بأختيار ملفات بالأمتداد mp4',

            'name.required' => 'قم بأدخال اسم المؤتمر',
            'date.required' => 'قم بتحديد تاريخ المؤتمر',
            'description.required' => 'قم بأدخال وصف المؤتمر'
        ]);


        if($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }
        

        $conference = new Conference;
        $conference->name = $request->name;
        $conference->description = $request->description;
        $conference->conference_date = $request->date;
    
        if($image = $request->file('image')) {
            $img_name = time() . $image->getClientOriginalName();
            $image->move('conferences', $img_name);
            $conference->image = $img_name;
        }
        
        if($video = $request->file('video')) {
            $video_name = time() . $video->getClientOriginalName();
            $video->move('conferences', $video_name);
            $conference->video = $video_name;
        }


        $conference->save();
        return redirect()->back()->with('created_successfully', 'created_successfully');
    }

}
