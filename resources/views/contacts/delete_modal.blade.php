<div class="modal-header bg-danger">
    <h4 class="modal-title"><i class="fa fa-warning"></i> Borrar Cliente</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
{!! Form::open(['route' => ['contact.destroy', $contact->id], 'method' => 'DELETE']) !!}
<div class="modal-body">
    <p>Confirma que deseas borrar al cliente: </p>
    <div class="text-center">
        {!! $contact->company !!}
    </div>
</div>

{!! Form::hidden('id', $contact->id) !!}

<div class="modal-footer">
    <button type="submit" class="btn btn-danger-outline">Si</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
</div>
{!! Form::close() !!}
