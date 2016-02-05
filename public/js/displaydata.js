function displaydata(){

  $.ajax({
   type: 'POST',
   url:  "<?= URL::to('showdata'); ?>",

   success: function (data) {
     //$('.preload_users').html('');
     $('.load_ajax').html(students)
     var students = '';
       for(datos in data.students){
           students += '<tr><td>'+ data.students[datos].id + '</td>';
           students += '<td>' + data.students[datos].student_name + '</td>';
           students += '<td>' + data.students[datos].gender + '</td>';
           students += '<td>' + data.students[datos].phone + '</td>';
           students += '<td><a data-id='+data.students[datos].id+' href="#" class="edit">Edit</a>| <a data-id='+data.students[datos].id+' href="#" class="delete">Delete</a></td></tr>';

       }
       $('.load_ajax').html(students)
      }
 });

}
