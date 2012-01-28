<div>
<table border="1" class="zebra">
<thead>
<tr>
<th>Subject</th>
<th>Level</th>
<th>Hours to date</th>
<th colspan=2>Actions</th>
<tbody>
<?php
foreach ($tasks as $task) {
  echo "<tr id='" . $task['id'] . "'>\n";
  echo "<th>" . $task['name'] . "</th>";
  echo "<td>" . $task['level'] . "</td>";
  echo "<td class='hours'>" . $task['hours'] . "</td>";
  echo "<td class='modifytd'>Modify</td>";
  echo "<td class='deletetd'>Delete</td>\n";
  echo "</tr>\n";
}
?>
   <tr id='newtr'><td class='hiddentd' colspan=4></td><td class='newtd' colspan=2>New</td></tr>
</table>
</div>

