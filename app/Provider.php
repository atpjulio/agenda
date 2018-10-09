<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'user_id',
        'company',
        'person',
        'email',
        'phone_1',
        'phone_2',
        'notes',
    ];

    /**
     * Attributes
     */
    public function getPhonesAttribute()
    {
    	if ($this->phone_2) {
    		return $this->phone_1.' - '.$this->phone_2;
    	}

    	return $this->phone_1;
    }

    /**
     * Methods
     */
    protected function storeRecord($request)
    {
        $provider = new Provider();
        
        $provider->user_id = auth()->user()->id;
        $provider->company = ucwords(mb_strtolower($request->get('company')));
        $provider->person = ucwords(mb_strtolower($request->get('person')));
        $provider->email = mb_strtolower($request->get('email'));
        $provider->phone_1 = $request->get('phone_1');
        $provider->phone_2 = $request->get('phone_2');
        $provider->notes = $request->get('notes');

        $provider->save();

        return $provider;
    }

    protected function updateRecord($request, $id)
    {
    	$provider = $this->findOrFail($id);
    	
        if ($provider) {
            $provider->user_id = auth()->user()->id;
            $provider->company = ucwords(mb_strtolower($request->get('company')));
            $provider->person = ucwords(mb_strtolower($request->get('person')));
            $provider->email = mb_strtolower($request->get('email'));
            $provider->phone_1 = $request->get('phone_1');
            $provider->phone_2 = $request->get('phone_2');
            $provider->notes = $request->get('notes');

            $provider->save();            
        }

    	return $provider;

    }
}
