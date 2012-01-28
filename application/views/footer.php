
<p><br />Page rendered in {elapsed_time} seconds</p>
</div>
<script type="text/javascript">
function removerow(id) {
  $('tr#'+id).remove();
}
function makebutton(element) {  
  $(element).mousedown(function() {
      $(this).css('border-radius', '8px 8px 8px 8px');
    });
  $(element).mouseup(function() {
      $(this).css('border-radius', '5px 5px 5px 5px');
    });
  $(element).mouseout(function() {
      $(this).css('border-radius', '5px 5px 5px 5px');
    });
}

makebutton('.deletetd');
makebutton('.modifytd');
makebutton('.newtd');

$('.deletetd').click(function(e) {
    theid = $(this).parent().attr('id');
    if (confirm("are you sure?")) {
      $.ajax('/app/delete/'+theid,removerow(theid));
      removerow(theid);
    }
  });
$('.modifytd').click(function(e) {
    theid = $(this).parent().attr('id');
    window.location='/app/modify/' + theid;
  });
$('.newtd').click(function(e) {
    window.location='/app/create';
  });
</script>
</body>
</html>