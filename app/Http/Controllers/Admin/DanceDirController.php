<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Dancedirection;
use Image;

class DanceDirController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $DanceDir = Dancedirection::All();
        return view('admin.directionList', compact('DanceDir'));
    }

    public function create()
    {
        return view('admin.createDirection');
    }

    public function save(Request $request)
    {
        $model = new Dancedirection();
        $model->title_ua = $request->title_ua;
        $model->title_ru = $request->title_ru;

        if($request->text_short_ua) $model->text_short_ua = $request->text_short_ua;
        else $model->text_short_ua ='';

        if($request->text_short_ru) $model->text_short_ru = $request->text_short_ru;
        else $model->text_short_ru ='';
        $model->text_ua = $request->text_ua;
        $model->text_ru = $request->text_ru;

        //dd($request->text_short_ru);

        if($request->is_show) $model->is_show = true;
        else $model->is_show = false;

        if($request->file('path_image'))
        {
            $logo = $request->file('path_image');
            $filename = random_int(10000000, 99999999).time().".".$logo->getClientOriginalExtension();
            Image::make($logo)->save(public_path('images/direction/'.$filename));
            $model->path_image = 'images/direction/'.$filename;
        } else $model->path_image = '';

        $model->save();
        return redirect()->route('admin.dancedirections');
    }

    public function edit($id)
    {
        $model = Dancedirection::find($id);

        return view('admin.editDirection', compact('model'));
    }

    public function update(Request $request, $id)
    {
        $model = Dancedirection::find($id);

        //$model = new Dancedirection();
        $model->title_ua = $request->title_ua;
        $model->title_ru = $request->title_ru;

        if($request->text_short_ua) $model->text_short_ua = $request->text_short_ua;
        else $model->text_short_ua ='';

        if($request->text_short_ru) $model->text_short_ru = $request->text_short_ru;
        else $model->text_short_ru ='';
        $model->text_ua = $request->text_ua;
        $model->text_ru = $request->text_ru;

        //dd($request->text_short_ru);

        if($request->is_show) $model->is_show = true;
        else $model->is_show = false;

        if($request->file('path_image'))
        {
            $logo = $request->file('path_image');
            $filename = random_int(10000000, 99999999).time().".".$logo->getClientOriginalExtension();
            Image::make($logo)->save(public_path('images/direction/'.$filename));
            $model->path_image = 'images/direction/'.$filename;
        }
        //dd($model->path_image);
        $model->update();
        return redirect()->route('admin.dancedirections');
    }

    public function delete($id)
    {
        //
        Dancedirection::destroy($id);
        return redirect()->route('admin.dancedirections');
    }
}
