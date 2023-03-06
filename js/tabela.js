// $(document).ready(function(){
//     $('#add_button').click(function(){
//         $('#user_form')[0].reset();
//         $('.modal-title').text("Add User");
//         $('#action').val("Add");
//         $('#operation').val("Add");
//         $('#user_uploaded_image').html('');
//     });

//     var datatable = $('#user_table').datatable({
//         "processing":true,
//         "serverSide":true,
//         "order":[],
//         "ajax":{
//             url:"fetch.php",
//             method:"POST"
//         },
//         "columnDefs":[
//             {
//                 "target":[0,3,4],
//                 "orderable":false
//             },
//         ],
//     });
//     $(document).on('submit','#user_form', function(event){
//         event.preventDefault();
//         var Marca = $('#Marca').val();
//         var Modelo = $('#Modelo').val();
//         var extension = $('#imagem').val().split('.').pop().toLowerCase();
//         if(extension != ''){
//             if(JQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1){
//                 alert("Invalid Image File");
//                 $('#imagem').val('');
//                 return false;
//             }
//         }
//         if (Marca != '' && Modelo != ''){
//             $.ajax({
//                 url:"inserto.php",
//                 method:"POST",
//                 data: new File(this),
//                 contentType:false,
//                 processData:false,
//                 sucess:function(data){
//                     alert(data);
//                     $('#user_form')[0].reset();
//                     $('#userModal').modal('hide');
//                     data.ajax.reload();
//                 }

//             });
//         }else {
//             alert("All fields are Required");
//         }

//     });
// });


// Este Funciona !!

$(document).on('click', '.edit-car-btn', function () {
    var carId = $(this).data('car-id');
    $.ajax({
      url: 'php/get-car.php',
      type: 'GET',
      dataType: 'json',
      data: { id: carId },
      success: function (data) {
        $('#car-id').val(data.id);
        $('#make').val(data.make);
        $('#model').val(data.model);
        $('#year').val(data.year);
        $('#mileage').val(data.mileage);
        $('#price').val(data.price);
      }
    });
  });

  $('#edit-car-form').submit(function (event) {
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      url: 'php/edit_car.php',
      type: 'POST',
      dataType: 'json',
      data: formData,
      success: function (data) {
        if (data.success) {
          $('#editCarModal').modal('hide');
          window.location.reload();
        } else {
          $('#edit-car-form .alert-danger').removeClass('d-none').text(data.message);
        }
      }
    });
  });


$(document).ready(function() {
  // Edit Car Button
  $(".edit-car-btn").click(function() {
    var car_id = $(this).data("car-id");
    $.ajax({
      url: "php/get-car.php",
      method: "POST",
      data: {car_id: car_id},
      dataType: "json",
      success: function(data) {
        $("#car_id").val(data.id);
        $("#make").val(data.make);
        $("#model").val(data.model);
        $("#year").val(data.year);
        $("#mileage").val(data.mileage);
        $("#price").val(data.price);
      }
    });
  });
});

document.getElementById('edit-car-submit').addEventListener('click', function(e) {
    e.preventDefault(); // prevent default form submission
    document.getElementById('edit-car-form').submit(); // submit form
  });
  

// // When the edit button is clicked, retrieve the car data and populate the form fields
// $('.edit-btn').on('click', function() {
//     var carId = $(this).data('id');
    
//     $.ajax({
//       url: 'get_car.php',
//       method: 'GET',
//       data: { id: carId },
//       dataType: 'json',
//       success: function(car) {
//         $('#car-id').val(car.id);
//         $('#make').val(car.make);
//         $('#model').val(car.model);
//         $('#year').val(car.year);
//         $('#mileage').val(car.mileage);
//         $('#price').val(car.price);
//         $('#editCarModal').modal('show');
//       }
//     });
//   });
  