$('.show_users').on('click', function(e){
    e.preventDefault();
    $.ajax({
      type: 'GET',
      url: 'content_ajax',

      success: function (data) {
        //$('.preload_users').html('');
        $('.load_ajax').html(students)
        var students = '';
          for(datos in data.students){
              students += '<tr><td>'+ data.students[datos].id + '</td>';
              students += '<td>' + data.students[datos].student_name + '</td>';
              students += '<td>' + data.students[datos].gender + '</td>';
              students += '<td>' + data.students[datos].phone + '</td></tr>';

          }
          $('.load_ajax').html(students)
      }
    })
  });
