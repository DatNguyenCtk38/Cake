function addcart(id) {

        $.ajax({

            url: "{{ route('Addcartajax') }}",
            type: "get",
            dataType: "text",
            data: {
                id : id
            },
            success: function (data) {
              //alert(data);
              
                $('.gio-hang-tb').html(" ("+ data+")");
               
        alert("Đã thêm vào giỏ hàng");
                
            }
        });
    }


  