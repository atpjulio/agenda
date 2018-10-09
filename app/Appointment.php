<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
	protected $fillable = [
        'user_id',
        'description',
        'date',
        'importance',
        'notes',
	];

    /**
     * Attributes
     */
    public function getFormatedDateAttribute()
    {
        return \Carbon\Carbon::parse($this->date)->format("d/m/Y");
    }

    /**
     * Methods
     */
    protected function storeRecord($request)
    {
        $appointment = new Appointment();
        
        $appointment->user_id = auth()->user()->id;
        $appointment->description = ucwords(mb_strtolower($request->get('description')));
        $appointment->date = $request->get('date');
        $appointment->importance = $request->get('importance');
        $appointment->notes = $request->get('notes');

        $appointment->save();

        return $appointment;
    }

    protected function updateRecord($request, $id)
    {
    	$appointment = $this->findOrFail($id);
    	
        if ($appointment) {
            $appointment->user_id = auth()->user()->id;
            $appointment->description = ucwords(mb_strtolower($request->get('description')));
            $appointment->date = $request->get('date');
	        $appointment->importance = $request->get('importance');
            $appointment->notes = $request->get('notes');

            $appointment->save();            
        }

    	return $appointment;

    }

    protected function myAppointments()
    {
        return $this->where('user_id', auth()->user()->id)
            ->get();
    }

}
