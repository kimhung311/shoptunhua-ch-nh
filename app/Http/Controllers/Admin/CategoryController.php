<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $categories = Category::paginate(5);
        $data['categories'] =  $categories;
        return view('admin.categories.index',$data);
        
    }

    public function create()
    {
        // Method: GET
        $data = [];

        return view('admin.categories.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        // Method: POST
        // insert to DB
    //     if ($request->hasFile('thumbnail') 
    //     && $request->file('thumbnail')->isValid()) {
    //     // Nếu có thì thục hiện lưu trữ file vào public/avatar
    //     $image = $request->file('thumbnail');
    //     $extension = $request->thumbnail->extension();
    //     $fileName = 'thumbnail' . time() . '.' . $extension;
    //     $image->move('thumbnail/', $fileName);
    // }
    $imagesPath = null;
    if ($request->hasFile('thumbnail') 
        && $request->file('thumbnail')->isValid()) {
        // Nếu có thì thục hiện lưu trữ file vào public/images
        $image = $request->file('thumbnail');
        $extension = $request->thumbnail->extension();
        $fileName = 'thumbnail_' . time() . '.' . $extension;
        // dd($image);

        $image->move('thumbnail', $fileName);
        $imagesPath = 'thumbnail/' . $fileName;
    }
        $categoryInsert = [
            'name' => $request->category_name,
            'thumbnail'=>$imagesPath,

        ];

        DB::beginTransaction();

        try {
            Category::create($categoryInsert);
            // insert into data to table category (successful)
            DB::commit();

            return redirect()->route('admin.category.index')->with('sucess', 'Insert into data to Category Sucessful.');
        } catch (\Exception $ex) {
            // insert into data to table category (fail)
            DB::rollBack();
            Log::error($ex->getMessage());
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Method: GET

        $data = [];
        
        $category = Category::findOrFail($id);

        $data['category'] = $category;

        return view('admin.categories.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        // Method: PUT

        DB::beginTransaction();

        try {
            // create $category
            $category = Category::find($id);
            $thumbnailOld = $category->thumbnail;

            // set value for field name
            $category->name = $request->category_name;
            if ($request->hasFile('thumbnail') 
            && $request->file('thumbnail')->isValid()) {
            // Nếu có thì thục hiện lưu trữ file vào public/thumbnail
            $image = $request->file('thumbnail');
            $extension = $request->thumbnail->extension();
            $fileName = 'thumbnail_' . time() . '.' . $extension;
            $thumbnailPath = $image->move('thumbnail', $fileName);
            $category->thumbnail = $thumbnailPath;
            Log::info('thumbnailPath: ' . $thumbnailPath);

            //  SAVE OK then delete OLD file
                 if (File::exists(public_path($thumbnailOld))) {
                    File::delete(public_path($thumbnailOld));
        }
        }
            $category->save();
            
            DB::commit();

            return redirect()->route('admin.category.index')
                ->with('success', 'Update Category successful!');
        } catch (\Exception $ex) {
            DB::rollBack();
            // have error so will show error message
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id){
        
    //     // $category = Category::find($id);

    //     // check xem category ID nay co ton tai trong table products
    //     $category = Category::find($id)
    //     ->whereHas('products', function (Builder $query) use ($id) {
    //         $query->where('category_id', $id);
    //     })->first();

    //     dd($category);
    //     if(!empty($category) && sizeof($category) > 0){
    //         dd($category->products);

    //         return redirect()->route('admin.category.index')
    //           ->with('error', 'Delete Category error!');
    //     }else{
    //         $category->delete();
    //         return redirect()->route('admin.category.index')
    //           ->with('success', 'Delete Category successful!');
    //     }
    // }
}

