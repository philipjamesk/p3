  $('input:checkbox').change(
    function(){
      if($('#json:checked').length && $('.options:checked').length) {
        $('#users').attr('target', '_blank');
      }
      else {
        $('#users').attr('target', '_self');
      }
    }
  );