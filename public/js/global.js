function showModal(url) {
    $.get('/' + url, function( data ) {
        // console.log(data);
        $("#show-modal-body").html(data);
        $('#show-modal').modal('show');
    });
};
