<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = [
		'user_id',
		'title',
		'contact',
		'notes',
	];


    /**
     * Relationships
     */
    public function contact()
    {
    	return $this->hasOne(Contact::class);
    }

    /**
     * Methods
     */
    protected function storeRecord($request)
    {
        $project = new Project();
        
        $project->user_id = auth()->user()->id;
        $project->title = ucwords(mb_strtolower($request->get('title')));
        $project->contact = ucwords(mb_strtolower($request->get('contact')));
        $project->notes = $request->get('notes');

        $project->save();

        return $project;
    }

    protected function updateRecord($request, $id)
    {
    	$project = $this->findOrFail($id);
    	
        if ($project) {
            $project->user_id = auth()->user()->id;
            $project->title = ucwords(mb_strtolower($request->get('title')));
            $project->contact = ucwords(mb_strtolower($request->get('contact')));
            $project->notes = $request->get('notes');

            $project->save();            
        }

    	return $project;

    }
}
