$(document).ready(function(){
    $('#add_button').click(function(){
        $('#user_form')[0].reset();
        $('.modal-title').text("Add User");
        $('#action').val("Add");
        $('#operation').val("Add");
        $('#user_uploaded_image').html('');
    });

    var datatable = $('#user_table').datatable({
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
            url:"fetch.php",
            method:"POST"
        },
        "columnDefs":[
            {
                "target":[0,3,4],
                "orderable":false
            },
        ],
    });
    $(document).on('submit','#user_form', function(event){
        event.preventDefault();
        var Marca = $('#Marca').val();
        var Modelo = $('#Modelo').val();
        var extension = $('#imagem').val().split('.').pop().toLowerCase();
        if(extension != ''){
            if(JQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1){
                alert("Invalid Image File");
                $('#imagem').val('');
                return false;
            }
        }
        if (Marca != '' && Modelo != ''){
            $.ajax({
                url:"inserto.php",
                method:"POST",
                data: new File(this),
                contentType:false,
                processData:false,
                sucess:function(data){
                    alert(data);
                    $('#user_form')[0].reset();
                    $('#userModal').modal('hide');
                    data.ajax.reload();
                }

            });
        }else {
            alert("All fields are Required");
        }

    });
});

