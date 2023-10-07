<?php

namespace App\Http\Controllers\Web\Admin\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Organization;
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
        $products = Product::with('organization')->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Create Product
     */
    public function create(){
        $organizations = Organization::all();
        return view('admin.products.create', compact('organizations'));
    }

    /**
     * Store Product In Database
     */
    public function store(Request $request)
    {
        try {
            // Validate the form data
            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'price' => 'required|string|max:255',
                'sku' => 'required|string|max:255',
                'quantity_in_stock' => 'required|numeric',
                'manufacturer' => 'required|string|max:255',
                'manufacture_date' => 'required|string|max:255',
                'is_published' => 'required|numeric'
            ]);

        
        
            // Create and store the product
            $product = new Product([
                'user_id' => Auth::user()->id,
                'organization_id' => $request->input('organization'),
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'sku' => $request->input('sku'),
                'quantity_in_stock' => $request->input('quantity_in_stock'),
                'manufacturer' => $request->input('manufacturer'),
                'manufacture_date' => $request->input('manufacture_date'),
                'is_published' => $request->input('is_published')
            ]);

            $product->save();
            // Redirect to a success page or show a success message
            return redirect()->route('admin.products.index')->with('success', 'Product added successfully!');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     */

     public function edit($id){
        $product = Product::find($id);
        $organizations = Organization::all();
        return view('admin.products.edit',compact(['product','organizations']));
    }
    /**
     * Update the specified resource in storage.
    */
    public function update(Request $request, $id){
        try {
            $request->validate([
                'organization_id' => 'required',
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
                'sku' => 'required',
                'quantity_in_stock' => 'required',
                'manufacturer' => 'required',
                'manufacture_date' => 'required',
                'is_published' => 'required',
            ]);

            // Retrieve the organization record by its ID
            $product = Product::findOrFail($id);

            // Update the organization record with the validated data
            $product->update($request->all());
            return redirect()->route('admin.products.index')->with('success','Product updated successfully');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    /**
     * Remove the specified resource from storage.
    */
    public function destroy($id){
    $product = Product::find($id);
    $product->delete();
    return redirect()->route('admin.products.index')
                    ->with('success','Product deleted successfully');
    }
}
