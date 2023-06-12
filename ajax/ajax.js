
$(document).ready(function () {
    employeeList();

});

function employeeList() {
    $.ajax({
        type: 'get',
        url: "employee-list.php",
        success: function (data) {
            var response = JSON.parse(data);
            console.log(response);
            var tr = '';
            for (var i = 0; i < response.length; i++) {
                var id = response[i].id;
                var name = response[i].name;
                var email = response[i].email;
                var gender = response[i].gender;
                var phone = response[i].phone;
                var address = response[i].address;
                var position =response[i].position;
                
                tr += '<tr>';
                tr += '<td>' + id + '</td>';
                tr += '<td>' + name + '</td>';
                tr += '<td>' + email + '</td>';
                tr += '<td>' + gender + '</td>';
                tr += '<td>' + phone + '</td>';
                tr += '<td>' + address + '</td>';
                tr += '<td>' + position + '</td>';
                tr += '<td><div class="d-flex">';
                tr +=
                    '<a href="#viewEmployeeModal" class="m-1 view" data-toggle="modal" onclick=viewEmployee("' +
                    id + '")><i class="fa" data-toggle="tooltip" title="view">&#xf06e;</i></a>';
                tr +=
                    '<a href="#editEmployeeModal" class="m-1 edit" data-toggle="modal" onclick=viewEmployee("' +
                    id +
                    '")><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
                tr +=
                    '<a href="#deleteEmployeeModal" class="m-1 delete" data-toggle="modal" onclick=$("#delete_id").val("' +
                    id +
                    '")><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>';
                tr += '</div></td>';
                tr += '</tr>';
            }
            $('.loading').hide();
            $('#employee_data').html(tr);
        }
    });
}

function addEmployee() {
    var name = $('.add_epmployee #name_input').val();
    var email = $('.add_epmployee #email_input').val();
    var gender = $('.add_epmployee #gender_input').val();
    var phone = $('.add_epmployee #phone_input').val();
    var address = $('.add_epmployee #address_input').val();
    var position = $('.add_epmployee #position_input').val();

    $.ajax({
        type: 'post',
        data: {
            name: name,
            email: email,
            gender:gender,
            phone: phone,
            address: address,
            position:position
        },
        url: "employee-add.php",
        success: function (data) {
            var response = JSON.parse(data);
            $('#addEmployeeModal').modal('hide');
            employeeList();
            alert(response.message);
        }

    })
}

function editEmployee() {
    var name = $('.edit_employee #name_input').val();
    var email = $('.edit_employee #email_input').val();
    var gender = $('.edit_employee #gender_input').val();
    var phone = $('.edit_employee #phone_input').val();
    var address = $('.edit_employee #address_input').val();
    var position = $('.edit_employee #position_input').val();
    var employee_id = $('.edit_employee #employee_id').val();

    $.ajax({
        type: 'post',
        data: {
            name: name,
            email: email,
            gender:gender,
            phone: phone,
            address: address,
            position:position,
            employee_id: employee_id,
        },
        url: "employee-edit.php",
        success: function (data) {
            var response = JSON.parse(data);
            $('#editEmployeeModal').modal('hide');
            employeeList();
            alert(response.message);
        }

    })
}

function viewEmployee(id = 2) {
    $.ajax({
        type: 'get',
        data: {
            id: id,
        },
        url: "employee-view.php",
        success: function (data) {
            var response = JSON.parse(data);
            $('.edit_employee #name_input').val(response.name);
            $('.edit_employee #email_input').val(response.email);
            $('.edit_employee #gender_input').val(response.email);
            $('.edit_employee #phone_input').val(response.phone);
            $('.edit_employee #address_input').val(response.address);
            $('.edit_employee #position_input').val(response.address);

            $('.edit_employee #employee_id').val(response.id);
            $('.view_employee #name_input').val(response.name);
            $('.view_employee #email_input').val(response.email);
            $('.view_employee #gender_input').val(response.email);
            $('.view_employee #phone_input').val(response.phone);
            $('.view_employee #position_input').val(response.address);
        }
    })
}

function deleteEmployee() {
    var id = $('#delete_id').val();
    $('#deleteEmployeeModal').modal('hide');
    $.ajax({
        type: 'get',
        data: {
            id: id,
        },
        url: "employee-delete.php",
        success: function (data) {
            var response = JSON.parse(data);
            employeeList();
            alert(response.message);
        }
    })
}
