$(document).ready(function(){
  
  $("#select_all").on('click', function(){
     if(this.checked){
              $('.check').each(function(){
                this.checked = true;
              })
    }else{
              $('.check').each(function(){
                this.checked = false;
              })
    }
  });

  $('.check').on('click', function() {
      if( $('.check:checked').length == $('.check').length ) {
          $('#select_all').prop('checked', true)
      }else{
          $('#select_all').prop('checked', false)
      }
  })



})