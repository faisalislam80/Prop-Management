<?php
/**
 * Package   PropertyController.php
 * @author   Faisal Islam <faisal@nascenia.com>
 * @create   12/15/13
 * @modified 12/15/13 (1:29 PM)
 */

namespace Property\Property;

use BaseController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Property\Property;

class PropertyController extends BaseController {

    public function getIndex() {
        return Redirect::to('property/list');
    }

    public function getList() {
        $property = Property::paginate(10);
        return View::make('Property/property/list')->withProperties($property);
    }

    public function getAdd() {
        return View::make('Property/property/add');
    }

    public function postAdd() {

        $input = Input::all();

        $rules = array(
            'name'      => 'required|max:128',
            'address'   => 'required|max:255',
            'city'      => 'required|max:128',
            'state'     => 'required|max:32',
            'zip'       => 'required|numeric|min:5',
            'phone'     => 'required|max:20',
            'cell'      => 'required|max:20',
        );

        $validator = Validator::make($input,$rules);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        else{

            $property = new Property();

            $property->name     = Input::get('name');
            $property->address  = Input::get('address');
            $property->city     = Input::get('city');
            $property->state    = Input::get('state');
            $property->zip      = Input::get('zip');
            $property->manager  = Session::get('managerId');
            $property->phone    = Input::get('phone');
            $property->cell     = Input::get('cell');

            $property->save();
            return Redirect::to('property/list');
        }
    }

    public function getEdit($id) {

        $validator = Validator::make(
            array('id'=>$id),
            array('id'=>'required|numeric')
        );

        if($validator->passes())
        {
            $property = Property::find($id);
            return View::make('Property.property.edit')->withProperty($property);
        }
        else
        {
            echo '404 Page';
        }

    }

    public function putUpdate() {

        $validator = Validator::make(
            Input::all(),
            array(
                'id'        => 'required|numeric',
                'name'      => 'required|max:128',
                'address'   => 'required|max:255',
                'city'      => 'required|max:128',
                'state'     => 'required|max:32',
                'zip'       => 'required|numeric|min:5',
                'phone'     => 'required|max:20',
                'cell'      => 'required|max:20',
            )
        );

        if($validator->passes()){
            $property = Property::find(Input::get('id'));

            $property->name     = Input::get('name');
            $property->address  = Input::get('address');
            $property->city     = Input::get('city');
            $property->state    = Input::get('state');
            $property->zip      = Input::get('zip');
            $property->manager  = Session::get('managerId');
            $property->phone    = Input::get('phone');
            $property->cell     = Input::get('cell');

            $property->save();
        }
        return Redirect::back()->withErrors($validator)->withInput();
    }
} 