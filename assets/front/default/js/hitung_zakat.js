function hitung_zakat() {
    $('#my-modal-dialog').css("z-index", "10000");
    $('#my-modal-dialog .modal-dialog').css("height", "98%");
    $('#my-modal-dialog .modal-dialog .modal-content').css("height", "98%");
    $('#my-modal-dialog .modal-dialog .modal-content').css("height", "98%");
    $('#my-modal-dialog .modal-dialog .modal-body').css("padding", "0 10px");
    $('#my-modal-dialog .modal-dialog .modal-body').css("overflow-y", "scroll");
    $('#my-modal-dialog .modal-dialog .modal-body').css("overflow-x", "hidden");

    let htmlCtrl = '<button type="button" class="btn btn-outline-success btn-reset" >Reset</button>';
    htmlCtrl += '<button type="button" class="btn btn-outline-primary" >Bayar Zakat</button>';
    htmlCtrl += '<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>';

    $('#my-modal-dialog .modal-dialog .modal-content .modal-footer').html(htmlCtrl);

    var base_url = $('#my-base-url').val();
    var url = base_url + "component/hitung_zakat";
    $('#my-modal-dialog .modal-dialog .modal-body').load(url, function (response, status, xhr) {
        if (status === "success") {

        }
    });
}

