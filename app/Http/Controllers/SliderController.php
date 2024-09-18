<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('adminslider', ['sliders' => $sliders]);
    }

    public function add()
    {
        $sliders = Slider::all();
        return view('addslider', ['sliders' => $sliders]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $newName = '';
        if($request->file('image'))
        {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('slider', $newName);
        }

        $request['cover'] = $newName;
        $sliders = Slider::create($request->all());
        return redirect('adminslider');
    }

    public function edit($slug)
    {
        $sliders = Slider::where('slug', $slug)->first();
        return view('editslider', ['sliders' => $sliders]);
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'max:255',
            'description' => 'max:255',
        ]);

        $newName = '';
        if($request->file('image'))
        {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('slider', $newName);
        }

        $sliders = $request['cover'] = $newName;
        $sliders = Slider::where('slug', $slug)->first();
        $slug = null;
        $sliders->update($request->all());

        return redirect('adminslider');
    }
}
