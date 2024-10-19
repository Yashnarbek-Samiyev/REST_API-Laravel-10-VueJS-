<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\V1\SkillCollection;
use App\Http\Resources\V1\SkillResource;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        return new SkillCollection(Skill::all());
    }
    public function show(Skill $skill)
    {
        return new SkillResource($skill);
    }
    public function store(StoreSkillRequest $request, Skill $skill)
    {
        Skill::create($request->validated());
        return response()->json("Store created");
    }
    public function update(StoreSkillRequest $request, Skill $skill)
    {
        $skill->update($request->validated());
        return response()->json("Update method");
    }
   
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return response()->json("Delete method");
    }

}
