// Obtención de datos - Read
firebase.database().ref('Employees/').on('value', function(snapshot) {
    var value = snapshot.val();
    var htmls = [];
    $.each(value, function(index, value){

        if(value) {

        htmls.push('<tr>\
        <td>'+ value.empName +'</td>\
        <td>'+ value.empAge +'</td>\
        <td>'+ value.empSalary +'</td>\
        <td><a data-toggle="modal" data-target="#update-modal" class="btn btn-outline-success updateData" data-id="'+index+'">Editar</a>\
        <a data-toggle="modal" data-target="#remove-modal" class="btn btn-outline-danger removeData" data-id="'+index+'">Eliminar</a></td>\
        </tr>');
        }

        lastIndex = index;
    });
    $('#tbody').html(htmls);
    $("#submitUser").removeClass('disabled');
});
$('#submitUser').on('click', function(){
var values = $("#addUser").serializeArray();
var empName = values[0].value;
var empAge = values[1].value;
var empSalary = values[2].value;
var userID = lastIndex+1;

firebase.database().ref('Employees/' + userID).set({
    empName: empName,
    empAge: empAge,
    empSalary: empSalary,
});

// Reassign lastID value
lastIndex = userID;
$("#addUser input").val("");
});
// Actualización de datos - Update
var updateID = 0;
$('body').on('click', '.updateData', function() {
updateID = $(this).attr('data-id');
firebase.database().ref('Employees/' + updateID).on('value', function(snapshot) {
    var values = snapshot.val();
    var updateData =
'<div class="form-group">\
    <label for="empName" class="col-md-12 col-form-label">Nombre</label>\
    <div class="col-md-12">\
    <input id="empName" type="text" class="form-control" name="empName" value="'+values.empName+'" required autofocus>\
</div>\
</div>\
<div class="form-group">\
<label for="empAge" class="col-md-12 col-form-label">Apellidos</label>\
<div class="col-md-12">\
<input id="empAge" type="text" class="form-control" name="empAge" value="'+values.empAge+'" required autofocus>\
</div>\
</div>\
<div class="form-group">\
    <label for="empSalary" class="col-md-12 col-form-label">Dirreccion</label>\
    <div class="col-md-12">\
    <input id="empSalary" type="text" class="form-control" name="empSalary" value="'+values.empSalary+'" required autofocus>\
</div>\
</div>';

$('#updateBody').html(updateData);
});
});

$('.updateUserRecord').on('click', function() {
var values = $(".Employees-update-record-model").serializeArray();
var postData = {
empName : values[0].value,
empAge : values[1].value,
empSalary : values[2].value,
};

var updates = {};
updates['/Employees/' + updateID] = postData;

firebase.database().ref().update(updates);

$("#update-modal").modal('hide');
});
// Borrado de datos - Delete
$("body").on('click', '.removeData', function() {
var id = $(this).attr('data-id');
    $('body').find('.Employees-remove-record-model').append('<input name="id" type="hidden" value="'+ id +'">');
});

$('.deleteMatchRecord').on('click', function(){
var values = $(".Employees-remove-record-model").serializeArray();
var id = values[0].value;
firebase.database().ref('Employees/' + id).remove();
$('body').find('.Employees-remove-record-model').find( "input" ).remove();
$("#remove-modal").modal('hide');
});

$('.remove-data-from-delete-form').click(function() {
$('body').find('.Employees-remove-record-model').find( "input" ).remove();
});
