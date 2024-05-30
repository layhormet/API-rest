<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PromotionListResource;
use App\Http\Resources\PromotionShowResource;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionConttroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotions = Promotion::list();
        $promotions = PromotionListResource::collection($promotions);
        return response(['sucess' => true, 'data' =>$promotions], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $promotions = Promotion::find($id);
        $promotions = new PromotionShowResource($promotions);
        return ['sucess' => true, 'data' =>$promotions];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Promotion::store($request,$id);
        return ["success" => true, "Message" =>"Promotion updated successfully"];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
