<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Properties;
use App\User;
use Illuminate\Support\Facades\Session;
use Image;
use App\NotifyMe;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;


class PropertiesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $trac_list = array('Lease','Sale','Rent');

        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        Validate post fields to ensure none empty fields
        $this->validate($request,[
            'name' => 'required',
//           'images' => 'image|nullable|max:1999',
            'price' => 'required',
            'address' => 'required',
            'access' => 'required',
            'floor_space' => 'required',
            'utility' => 'required',
            'description' => 'required',
            'transaction_type' => 'required',


        ]);

//Handle file upload
        if($request->hasFile('images'))
        {
            $fileNameCombine = array();
            foreach ($request->images as $image)
            {

                $fileNameWithExt = $image->getClientOriginalName();

                //Get just filename
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

                //Get just extension
                $extension = $image->getClientOriginalExtension();

                //Filename to store
                $fileNameToJoin = $fileName.'_'.time().'.'.$extension;

                //resize image

                //upload file

                $path = $image->storeAs('public/images/properties', $fileNameToJoin);
                 array_push($fileNameCombine, $fileNameToJoin);
                 $imagePath = public_path('/storage/images/properties/'.$fileNameToJoin);
                $img = Image::make($imagePath)->resize(450,300)->save($imagePath);

                }



//            foreach ($fileNameCombine as $test){
//                echo $test.'<br>';
//
//            }

            $fileNameToStore = implode(',', $fileNameCombine);
//            echo $fileNameToStore;
//            dd($fileNameToStore);
        }
        else
        {
            $fileNameToStore = 'noimage.jpg';
        }
//generating property ID starts
        $countProperties = Properties::get()->count();

        if($countProperties == 0){
            $expNum = 1;
            $p_id = 'LGR/'.substr(date('Y'), 2).'/'.$expNum;
        }
        else
        {
            $record = Properties::latest()->first();
            if(substr($record->p_id, 4, 2) !== substr(date('Y'), 2))
            {
                $expNum = 1;
                $p_id = 'LGR/'.substr(date('Y'), 2).'/'.$expNum;
            }
            else
                {
                    $expNum = intval(substr($record->p_id, 7));
                    $expNum += 1;
                    $p_id = 'LGR/'.substr(date('Y'), 2).'/'.$expNum;
                }
        }
//generating property ID ends
        $properties = new Properties;

        $properties->p_id = $p_id;
        $properties->name = $request->input('name');
        $properties->images = $fileNameToStore;
        $properties->price = $request->input('price');
        $properties->address = $request->input('address');
        $properties->access = $request->input('access');
        $properties->floor_space = $request->input('floor_space');
        $properties->utility = $request->input('utility');
        $properties->description = $request->input('description');
        $properties->transaction_type = $request->input('transaction_type');
        $properties->property_type = $request->input('property_type');
        $properties->structure_type = $request->input('structure_type');
        $properties->user_id = auth()->user()->id;
        $properties->available = 1;
        $properties->class = 0;
        $properties->save();



//        if($properties->save())
//        {
//            $notifyme = NotifyMe::all('email');
//
//
//        }

        return redirect('/dashboard')->with('success', 'Property Added Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {


        //show details of single property
        $property = Properties::find($id);
        $image = explode(',', $property->images);
        $imageCount=count($image);
        $imageIndex = 0;
        $i= 0;

        //get user name for the selected post
        $user_id = $property->user_id;
        $single_user = User::find($user_id);
        $name = $single_user->name;
        $phone = $single_user->phone_number;
        return view('properties.show')->with('property', $property)
                                           ->with('imageCount', $imageCount)
                                           ->with('imageIndex', $imageIndex)
                                           ->with('i', $i)
                                           ->with('image', $image)
                                           ->with('name',$name)
                                           ->with('phone',$phone);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //Edit Property
        $properties = Properties::find($id);

        //check for correct user
        if(auth()->user()->id !== $properties->user_id)
        {
            return redirect('properties.index')->with('error', 'Unauthorised Access');
        }

        return view('properties.edit')->with('properties', $properties);
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
        //Validate post fields to ensure none empty fields
        $this->validate($request,[
            'name' => 'required',
//           'images' => 'image|nullable|max:1999',
            'price' => 'required',
            'address' => 'required',
            'access' => 'required',
            'floor_space' => 'required',
            'utility' => 'required',
            'description' => 'required',
            'transaction_type' => 'required',


        ]);

//Handle file upload
        if($request->hasFile('images'))
        {
            $fileNameCombine = array();
            foreach ($request->images as $image)
            {

                $fileNameWithExt = $image->getClientOriginalName();

                //Get just filename
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

                //Get just extension
                $extension = $image->getClientOriginalExtension();

                //Filename to store
                $fileNameToJoin = $fileName.'_'.time().'.'.$extension;

                //resize image

                //upload file

                $path = $image->storeAs('public/images/properties', $fileNameToJoin);
                array_push($fileNameCombine, $fileNameToJoin);
                $imagePath = public_path('/storage/images/properties/'.$fileNameToJoin);
                $img = Image::make($imagePath)->resize(450,300)->save($imagePath);

            }



//            foreach ($fileNameCombine as $test){
//                echo $test.'<br>';
//
//            }

            $fileNameToStore = implode(',', $fileNameCombine);


        }
//        else
//        {
//            $fileNameToStore = 'noimage.jpg';
//        }

        $properties = Properties::find($id);


        if(auth()->user()->admin == 0)
        {
            $properties->name = $request->input('name');
            if($request->hasFile('images'))
            {
                $properties->images = $fileNameToStore;
            }
            $properties->price = $request->input('price');
            $properties->address = $request->input('address');
            $properties->access = $request->input('access');
            $properties->floor_space = $request->input('floor_space');
            $properties->utility = $request->input('utility');
            $properties->description = $request->input('description');
            $properties->transaction_type = $request->input('transaction_type');
            $properties->property_type = $request->input('property_type');
            $properties->structure_type = $request->input('structure_type');
            $properties->user_id = auth()->user()->id;

            if($request->input('available') == 'Yes')
            {
                $properties->available = 1;
            }
            else
            {
                $properties->available = 0;
            }



        }

        else
            {
                $properties->name = $request->input('name');
                if($request->hasFile('images'))
                {
                    $properties->images = $fileNameToStore;
                }
                $properties->price = $request->input('price');
                $properties->address = $request->input('address');
                $properties->access = $request->input('access');
                $properties->floor_space = $request->input('floor_space');
                $properties->utility = $request->input('utility');
                $properties->description = $request->input('description');
                $properties->transaction_type = $request->input('transaction_type');
                $properties->property_type = $request->input('property_type');
                $properties->structure_type = $request->input('structure_type');


                if($request->input('available') == 'Yes')
                {
                    $properties->available = 1;
                }
                else
                {
                    $properties->available = 0;
                }

                if($request->input('class') == 'Yes')
                {
                    $properties->class = 1;
                }
                else
                {
                    $properties->class = 0;
                }
            }

        $properties->save();
        return redirect('/dashboard')->with('success', 'Property Updated Successfully.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete single post
        $properties = Properties::find($id);

        //check for correct user
        if(auth()->user()->id === $properties->uers_id)
        {
            $properties->delete();
            return redirect('/dashboard')->with('success', 'Property Deleted Successfully');
        }
        elseif (auth()->user()->admin === 1)
        {
            $properties->delete();
            return redirect('/admin')->with('success', 'Property Deleted Successfully');
        }

        else {
            return redirect('/dashboard')->with('error', 'Unauthorized Access');
        }
    }




}
