<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Session;

use App\User;

use App\Photo;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $getData = DB::table('photos')->where('status','public')->paginate(4);
         return view('Feeds_Photo',['listImg'=>$getData]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $photo = new Photo();
        
        $photo->status = $request->input('status');
        $photo->title = $request->input('title');
        $photo->discript = $request->input('discript');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('image',$filename);
            $photo->link = $filename;
        }else{
            return dd('dsfds');
        }

        $photo->save();
        $a = User::find($id);
        $a->photos()->attach($photo->id);

        return view('AddPhoto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $getData = User::find($id)->photos()->paginate(2);
       return view('MyPhoto',['listImgForUsers'=>$getData]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::find($id);
        return view('UpdatePhoto',['data'=>$photo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $link)
    {
        $photo = Photo::find($id);
        
        $photo->status = $request->input('status');
        $photo->title = $request->input('title');
        $photo->discript = $request->input('discript');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('image',$filename);
            $photo->link = $filename;
        }else{
           $photo->link = $link;
        }

        $photo->save();
        

         return view('AddPhoto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Photo::find($id);
        $image->delete();
        return view('AddPhoto');
    }
}
