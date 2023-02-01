$(function () {
    var tabela;
  
    tabela = $("#tba").DataTable({
      drawCallback: function (settings) {
        $("[name='btdel']").click(function(evt){
            evt=evt?evt:window.event;
            evt.preventDefault();
            let id=$(evt.target).data("Idcliente");
            //alert($(evt.target).data('idcar'));
            alert(id);
            $.ajax({
                url: 'lojas.php',
                type: 'post',
                dataType: 'json',
                data: {'id': id},
                success:function(data){
                    confirm.log(data);
                    if(data.msg){
                        $(evt.target).closest('tr').remove();
                    }
                },
                error:function(erro){
                    arguments(erro);
                }

            })

        });

        $("[name='btedit']").click(function(evt){
            evt = evt ? evt : window.event;
            evt.preventDefault();
            alert("edit:" +  $(evt.target))
        });
    },
      ordering: true,
      bInfo: false,
      serverSide: true,
      processing: true,
      paging: true,
      ajax: {
        url: "faztable.php",
        type: "post",
      },
      fnCreateRow: function (nRow, aData, iDataIndex) {
        $(nRow).attr("Idcliente", aData[0]);
      },
      columnDefs: [
        {
          //"target:": [0, 4],
          //orderable: true,
        },
      ],
    }); //DataTable>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
  });