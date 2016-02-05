$(function(){
        displaydata();

        $('body').delegate('.edit', 'click', function(){
          var id=  $(this).data('id');
            $.ajax({
                url : "<?= URL::to('editrow') ?>",
                type : "POST",
                async : false,
                data: {
                    'id' : id
                },
                success : function(e){
                    $('#id').val(e.id);
                    $('#studentname').val(e.student_name);
                    $('#gender').val(e.gender);
                    $('#phone').val(e.phone);
                      }


            });

        });



        $('body').delegate('.delete', 'click', function(){
          var id=  $(this).data('id');
            $.ajax({
                url : "<?= URL::to('deleterow') ?>",
                type : "POST",
                async : false,
                data: {
                    'id' : id
                },
                success : function(d){

                      if (d==0)
                      {
                        alert('delete success');
                        displaydata();
                      }
                      else {
                        alert('error');
                      }

                      }


            });

        });

        $('.updaterecord').click(function(){
            var id          =$('#id').val();
            var studentname = $('#studentname').val();
            var gender = $('#gender').val();
            var phone = $('#phone').val();

            $.ajax({
                url : "<?= URL::to('update'); ?>",
                type : "POST",
                async : false,
                data : {
                    'id'        : id,
                    'studentname' : studentname,
                    'gender': gender,
                    'phone' : phone,
               },

                success: function(re){
                    if ( re == 0){
                      alert('Registro actualizado');
                      displaydata();

                    }
                    else {
                      alert('Error al actualizar registro');
                    }

                }

            });

        });




        $('.saverecord').click(function(){
            var studentname = $('#studentname').val();
            var gender = $('#gender').val();
            var phone = $('#phone').val();

            $.ajax({
                url : "<?= URL::to('save'); ?>",
                type : "POST",
                async : false,
                data : {
                    'studentname' : studentname,
                    'gender': gender,
                    'phone' : phone,
               },

                success: function(re){
                    if ( re == 0){
                      alert('Registro insertado');
                      displaydata();

                    }
                    else {
                      alert('Error al insertar registro');
                    }

                }

            });

        });


    });
