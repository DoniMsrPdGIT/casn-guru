var table;

$(document).ready(function() {
    ajaxcsrf();

    table = $("#users").DataTable({
        initComplete: function() {
            var api = this.api();
            $("#users_filter input")
                .off(".DT")
                .on("keyup.DT", function(e) {
                    api.search(this.value).draw();
                });
        },
        dom:
            "<'row'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [
            {
                extend: "copy",
                exportOptions: { columns: [1, 2, 3, 4, 5, 6, 7] }
            },
            {
                extend: "print",
                exportOptions: { columns: [1, 2, 3, 4, 5, 6, 7] }
            },
            {
                extend: "excel",
                exportOptions: { columns: [1, 2, 3, 4, 5, 6, 7] }
            },
            {
                extend: "pdf",
                exportOptions: { columns: [1, 2, 3, 4, 5, 6, 7] }
            }
        ],
        oLanguage: {
            sProcessing: "loading..."
        },
        processing: true,
        serverSide: true,
        ajax: {
            url: base_url + "users/data/" + user_id,
            type: "POST"
        },
        columns: [
            {
                data: "id",
                orderable: false,
                searchable: false
            },
            { data: "nama" },
            { data: "no_peserta" },
            { data: "username" },
            { data: "email" },
            { data: "remember_selector" },
            { data: "created_on" }
        ],
        columnDefs: [
            // {
            //     targets: 5,
            //     data: "last_name",
            //     render: function(data, type, row, meta) {
            //         return `<div class="text-center">
            //                 <span class="badge">${data}</span>
            //             </div>`;
            //     }
            // },
            {
                targets: 5,
                orderable: true,
                searchable: false,
                title: "Instansi",
                data: "remember_selector",
                render: function(data, type, row, meta) {
                    if (data === "1") {
                        return `<div class="text-center">
                                <span class="badge bg-green">PPPK Guru - Guru Kelas Ahli Pertama</span>
                            </div>`;
                    }else if (data === "2") {
                        return `<div class="text-center">
                                <span class="badge bg-green">PPPK Guru - Guru Matematika Ahli Pertama</span>
                            </div>`;
                    } else if (data === "3") {
                        return `<div class="text-center">
                                <span class="badge bg-red">CPNS - Guru Kelas Ahli Pertama</span>
                            </div>`;
                    } else if (data === "4") {
                        return `<div class="text-center">
                                <span class="badge bg-red">CPNS - Guru Matematika Ahli Pertama</span>
                            </div>`;
                    }  else if (data === "15") {
                        return `<div class="text-center">
                                <span class="badge bg-yellow">Bimbel Fokus SKD CPNS</span>
                            </div>`;
                    } else {
                        return `<div class="text-center">
                                <span class="badge bg-primary">Formasi Kosong</span>
                            </div>`;
                    }
                }
            },
            {
                targets: 7,
                orderable: true,
                searchable: false,
                title: "Status",
                data: "activation_code",
                render: function(data, type, row, meta) {
                    if (data === "1") {
                        return `<div class="text-center">
                                <span class="badge bg-green">PPPK</span>
                            </div>`;
                    }else if (data === "2") {
                        return `<div class="text-center">
                                <span class="badge bg-warning">SKD</span>
                            </div>`;
                    } else if (data === "3") {
                        return `<div class="text-center">
                                <span class="badge bg-green">CPNS</span>
                            </div>`;
                    } else {
                        return `<div class="text-center">
                                <span class="badge bg-red">Not Active</span>
                            </div>`;
                    }
                }
            },
            {
                targets: 8,
                data: "id",
                render: function(data, type, row, meta) {
                    if (data === user_id) {
                        return `<div class="text-center">
                                <a class="btn btn-xs bg-primary" href="${base_url}users/edit/${data}">
                                    <i class="fa fa-cog fa-spin"></i>
                                </a>
                            </div>`;
                    } else {
                        return `<div class="text-center">
                                <a class="btn btn-xs btn-warning" href="${base_url}users/edit/${data}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <button type="button" class="btn btn-xs btn-danger" onclick="hapus(${data})">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>`;
                    }
                }
            }
        ],
        order: [[1, "asc"]],
        rowId: function(a) {
            return a;
        },
        rowCallback: function(row, data, iDisplayIndex) {
            var info = this.fnPagingInfo();
            var page = info.iPage;
            var length = info.iLength;
            var index = page * length + (iDisplayIndex + 1);
            $("td:eq(0)", row).html(index);
        }
    });

    table
        .buttons()
        .container()
        .appendTo("#users_wrapper .col-md-6:eq(0)");

    $("#show_me").on("change", function() {
        let src = base_url + "users/data";
        let url = $(this).prop("checked") === true ? src : src + "/" + user_id;
        table.ajax.url(url).load();
    });
});

function hapus(id) {
    Swal({
        title: "Anda yakin?",
        text: "Data akan dihapus.",
        type: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Hapus!"
    }).then(result => {
        if (result.value) {
            $.getJSON(base_url + "users/delete/" + id, function(data) {
                Swal({
                    title: data.status ? "Berhasil" : "Gagal",
                    text: data.status
                        ? "User berhasil dihapus"
                        : "User gagal dihapus",
                    type: data.status ? "success" : "error"
                });
                reload_ajax();
            });
        }
    });
}
