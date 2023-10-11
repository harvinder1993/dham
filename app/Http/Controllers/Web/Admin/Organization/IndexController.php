<?php

namespace App\Http\Controllers\Web\Admin\Organization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\OrganizationFormValidationRequest;
use App\Models\Organization;
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
        $organizations = Organization::get();
        return view('admin.organizations.index', compact('organizations'));
    }

    /**
     * Create Organization
     */
    public function create(){
        $helping_centers = HelpingCenter::all();
        return view('admin.organizations.create',compact('helping_centers'));
    }

    /**
     * Store Organization in database
     */
    public function store(OrganizationFormValidationRequest $request) {
        // Validation passed; you can access validated data using $request->validated()
        $validatedData = $request->validated();
        
        // Process the form data, e.g., save it to the database
        Organization::create([
            'user_id' => Auth::user()->id,
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'estd' => $validatedData['estd'],
            'contact_person' => $validatedData['contact_person'],
            'helping_center_id' => $validatedData['helping_center']
        ]);
        
        // Redirect to a success page or return a response
        return redirect()->route('admin.organization.index')->with('success', 'Organization added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id){
        $organization = Organization::find($id);
        $helping_centers = HelpingCenter::all();
        return view('admin.organizations.edit',compact(['organization','helping_centers']));
    }

     /**
      * Update the specified resource in storage.
      */
     public function update(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'estd' => 'required',
            'contact_person' => 'required'
        ]);

        // Retrieve the organization record by its ID
        $organization = Organization::findOrFail($id);

        // Update the organization record with the validated data
        $organization->update($request->all());
        return redirect()->route('admin.organization.index')->with('success','Organization updated successfully');
 
     }
 
     /**
      * Remove the specified resource from storage.
      */
     public function destroy($id){
         $organization = Organization::find($id);
         $organization->delete();
         return redirect()->route('admin.organization.index')
                         ->with('success','Organization deleted successfully');
     }
}
