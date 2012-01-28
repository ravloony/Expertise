<form action="/app/modified" method="post">
   <input name=currenthours value=<?php echo $current->hours; ?> type=hidden >
   <input name=id value=<?php echo $current->id; ?> type=hidden >
   <p><label>Add hours: <input name=hours type=number min=0 ></label></p>
   <input type="submit" value="Update">
</form>