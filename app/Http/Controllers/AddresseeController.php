<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Addressee;
use Illuminate\Http\Request;

class AddresseeController extends Controller{
    
    
    /**
     * 
     * @return type
     */
    public function showAll(){
        return response()->json(Addressee::all());
    }
    
    /**
     * 
     * @param type $id
     * @return type
     */
    public function showOne($id){
        return response()->json(Addressee::find($id));
    }
    
    /**
     * 
     * @param Request $request
     * @return type
     * 
     */
    public function create(Request $request)
    {
        /**
         * Beefed up validation
         */
        $this->validate($request,[
            'first_name' => 'required',
            'last_name'  => 'required',
            'phone'      => 'required|regex:/(01)[0-9]{9}/',
            'email'      => 'required|email'
            ]);
        
        $addressee = Addressee::create($request->all());

        return response()->json($addressee, 201);
    }
    
    /**
     * 
     * @param type $id
     * @param Request $request
     * @return type
     */
    public function update($id, Request $request)
    {
        $addressee = Addressee::findOrFail($id);
        $addressee->update($request->all());

        return response()->json($addressee, 200);
    }
    
    /**
     * 
     * @param type $id
     * @return type
     */
    public function delete($id)
    {
        Addressee::findOrFail($id)->delete();
        return response('Addressee Deleted Successfully', 200);
    }
    
    
}
