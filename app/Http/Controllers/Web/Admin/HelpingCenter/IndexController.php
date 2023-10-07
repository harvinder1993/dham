<?php

namespace App\Http\Controllers\Web\Admin\HelpingCenter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HelpingCenter;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Instantiate a new controller instance.
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Index Function
     */
    public function index(){
        $helping_centers = HelpingCenter::all();
        return view('admin.helping_center.index', compact('helping_centers'));
    }

    /**
     * Create Organization
     */
    public function create(){
        return view('admin.helping_center.create');
    }

    /**
     * Store Helping Center in database
     */
    public function store(Request $request) {
        try {
            // Validate the form data
            $request->validate([
                'name' => 'required|string|max:255',
                'address' => 'nullable|string',
                'phone' => 'required|string|max:255',
                'description' => 'required|string|max:255'
            ]);

        
        
            // Create and store the helping center
            $helping_center = new HelpingCenter([
                'user_id' => Auth::user()->id,
                'name' => $request->input('name'),
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'description' => $request->input('description')
            ]);

            $helping_center->save();
            // Redirect to a success page or show a success message
            return redirect()->route('admin.helping-centers.index')->with('success', 'Center added successfully!');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
     public function edit($id){
        $helping_center = HelpingCenter::find($id);
        return view('admin.helping_center.edit',compact('helping_center'));
    }

         /**
      * Update the specified resource in storage.
      */
      public function update(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'description' => 'required'
        ]);

        // Retrieve the organization record by its ID
        $helping_center = HelpingCenter::findOrFail($id);

        // Update the organization record with the validated data
        $helping_center->update($request->all());
        return redirect()->route('admin.helping-centers.index')->with('success','Center updated successfully');
 
     }
 
     /**
      * Remove the specified resource from storage.
      */
     public function destroy($id){
         $helping_center = HelpingCenter::find($id);
         $helping_center->delete();
         return redirect()->route('admin.helping-centers.index')
                         ->with('success','Center deleted successfully');
     }
}
