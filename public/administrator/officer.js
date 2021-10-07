let cancelAssign = $(".cancelAssign").hide();
let show = () => {
    let loadTableHTML = "";
    let i = 1;
    $.ajax({
        url: `officer/list`,
        type: "GET",
        beforeSend: function () {
            $("#show").html(
                `<tr>
                        <td colspan="5" class="text-center">
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </td>
                    </tr>
                    `
            );
        },
    })
        .done(function (data) {
            if (data.length > 0) {
                data.forEach((val) => {
                    loadTableHTML += `
                    <tr>
                        <td>
                        ${i++}
                        <td>
                        ${val.first_name} ${val.last_name}
                        </td>
                        <td>
                        ${val.email}
                        </td>
                        </td>
                        <td>
                        ${val.username}
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" style="font-size:10px" class="btn btn-info pl-3 pr-3 editAssign editA${
                                    val.id
                                }" id="${val.id}"><i class="nav-icon fas fa-edit"></i></button>
                                <button type="button" style="font-size:10px" class="btn btn-danger pl-3 pr-3 deleteAssign deleteA${
                                    val.id
                                }" id="${val.id}"><i class="nav-icon fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    `;
                });
            } else {
                loadTableHTML = `
                                <tr>
                                    <td colspan="5" class="text-center">No available data</td>
                                </tr>
                                `;
            }

            $("#show").html(loadTableHTML);
        })
        .fail(function (jqxHR, textStatus, errorThrown) {
            console.log(jqxHR, textStatus, errorThrown);
            getToast("error", "Eror", errorThrown);
        });
};

show()

$("#formProceesingOfficer").submit(function (e) {
    e.preventDefault();
    $.ajax({
        url: "officer/store",
        type: "POST",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function () {
            $(".btnSave")
                .html(
                    `Saving ...
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>`
                )
                .attr("disabled", true);
        },
    })
        .done(function (data) {
            $(".btnSave").html("Submit").attr("disabled", false);
                document.getElementById("formProceesingOfficer").reset();
            $("input[name='id']").val("");
            show()
           
        })
        .fail(function (jqxHR, textStatus, errorThrown) {
            $(".btnSave").html("Submit").attr("disabled", false);
        });
});

$(document).on("click", ".deleteAssign", function () {
    let id = $(this).attr("id");
    $.ajax({
        url: `officer/delete/${id}`,
        type: "DELETE",
        data: { _token: $('input[name="_token"]').val() },
        beforeSend: function () {
            $(".deleteA" + id)
                .html(
                    `
            <div class="spinner-border spinner-border-sm" role="status">
                <span class="sr-only">Loading...</span>
            </div>`
                )
                .attr("disabled", true);
        },
    })
        .done(function (response) {
            $(".deleteA" + id)
                .html(`<i class="nav-icon fas fa-trash"></i>`)
                .attr("disabled", false);
            show()
        })
        .fail(function (jqxHR, textStatus, errorThrown) {
            $(".deleteA" + id)
                .html(`<i class="nav-icon fas fa-trash"></i>`)
                .attr("disabled", false);
            console.log(jqxHR, textStatus, errorThrown);
        });
});

$(".cancelAssign").on("click", function (e) {
    e.preventDefault();
    $(this).hide();
    document.getElementById("formProceesingOfficer").reset();
    $(".btnSaveAssign").html("Save");
    $("input[name='id']").val("");
});

$(document).on("click", ".editAssign", function () {
    let id = $(this).attr("id");
    $.ajax({
        url: "officer/edit/" + id,
        type: "GET",
        data: { _token: $('input[name="_token"]').val() },
        beforeSend: function () {
            $(".editA" + id)
                .html(
                    `
            <div class="spinner-border spinner-border-sm" role="status">
                <span class="sr-only">Loading...</span>
            </div>`
                )
                .attr("disabled", true);
        },
    })
        .done(function (data) {
            cancelAssign.show()
            $(".editA" + id)
                .html(`<i class="nav-icon fas fa-edit"></i>`)
                .attr("disabled", false);
            $(".btnSave").html("Update");
            $("input[name='id']").val(data.id);
            $("input[name='first_name']").val(data.first_name);
            $("input[name='last_name']").val(data.last_name);
            $("input[name='username']").val(data.username);
            $("input[name='email']").val(data.email);
        })
        .fail(function (jqxHR, textStatus, errorThrown) {
            console.log(jqxHR, textStatus, errorThrown);
            $(".editA" + id)
                .html(`<i class="nav-icon fas fa-edit"></i>`)
                .attr("disabled", false);
            getToast("error", "Eror", errorThrown);
        });
});