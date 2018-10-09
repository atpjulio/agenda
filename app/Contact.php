<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'user_id',
        'company',
        'person',
        'email',
        'phone_1',
        'phone_2',
        'address_1',
        'address_2',
        'state_code',
        'notes',
    ];

    /**
     * Relationships
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    
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

    public function getAddressesAttribute()
    {
    	if ($this->address_2) {
    		return $this->address_1.' '.$this->address_2;
    	}

    	return $this->address_1;
    }

    /**
     * Methods
     */
    protected function storeRecord($request)
    {
        $contact = new Contact();
        
        $contact->user_id = auth()->user()->id;
        $contact->company = ucwords(mb_strtolower($request->get('company')));
        $contact->person = ucwords(mb_strtolower($request->get('person')));
        $contact->email = mb_strtolower($request->get('email'));
        $contact->phone_1 = $request->get('phone_1');
        $contact->phone_2 = $request->get('phone_2');
        $contact->address_1 = ucwords(mb_strtolower($request->get('address_1')));
        $contact->address_2 = ucwords(mb_strtolower($request->get('address_2')));
        $contact->state_code = $request->get('state');
        $contact->notes = $request->get('notes');

        $contact->save();

        return $contact;
    }

    protected function updateRecord($request, $id)
    {
    	$contact = $this->findOrFail($id);
    	
        if ($contact) {
            $contact->user_id = auth()->user()->id;
            $contact->company = ucwords(mb_strtolower($request->get('company')));
            $contact->person = ucwords(mb_strtolower($request->get('person')));
            $contact->email = mb_strtolower($request->get('email'));
            $contact->phone_1 = $request->get('phone_1');
            $contact->phone_2 = $request->get('phone_2');
            $contact->address_1 = ucwords(mb_strtolower($request->get('address_1')));
            $contact->address_2 = ucwords(mb_strtolower($request->get('address_2')));
            $contact->state_code = $request->get('state');
            $contact->notes = $request->get('notes');

            $contact->save();            
        }

    	return $contact;
    }

    protected function myContacts()
    {
        return $this->where('user_id', auth()->user()->id)
            ->get();
    }
}
