<h2>Create a new domain<h2>

<?php echo validation_errors(); ?>

<?php echo form_open('app/create  ') ?>

	<label for="name">Name</label> 
	<input type="input" name="name" /><br />

	<label for="level">Level<label>
	<textarea name="level"></textarea><br />
	
        <label for="hours">Hours</label>
        <input type="input" name="hours" /><br />
	<input type="submit" name="submit" value="Create new domain"/> 

</form>