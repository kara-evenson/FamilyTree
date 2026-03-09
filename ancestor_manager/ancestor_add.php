<!DOCTYPE html>
<html>
<head>
<title>Create New Ancestor</title>

</head>
<body>

<h1>Add New Ancestor</h1>

<form method="POST">

<fieldset>
<legend>Basic Identity</legend>

<label>Prefix</label>
<input type="text" name="prefix">

<label>First Name</label>
<input type="text" name="first_name" required>

<label>Last Name</label>
<input type="text" name="last_name" required>

<label>Suffix</label>
<input type="text" name="suffix">

<label>Gender</label>
<select name="gender">
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Other">Other</option>
</select>

</fieldset>


<fieldset>
<legend>Birth and Death</legend>

<label>Birth Date</label>
<input type="date" name="birth_date">

<label>Birth Place</label>
<input type="text" name="birth_place">

<label>Death Date</label>
<input type="date" name="death_date">

<label>Resting Place</label>
<input type="text" name="resting_place">

</fieldset>


<fieldset>
<legend>Family Relationships</legend>

<label>Family Tree ID</label>
<input type="number" name="family_tree_id">

<label>Relationship ID</label>
<input type="number" name="relationship_id">

<label>Parent 1 ID</label>
<input type="number" name="parent1_id">

<label>Parent 2 ID</label>
<input type="number" name="parent2_id">

</fieldset>


<fieldset>
<legend>Occupation & Education</legend>

<label>Occupation ID</label>
<input type="number" name="occupation_id">

<label>Education ID</label>
<input type="number" name="education_id">

</fieldset>


<fieldset>
<legend>Historical Information</legend>

<label>Military Service</label>
<textarea name="military_service"></textarea>

<label>Census Year</label>
<input type="number" name="census_year">

<label>Census Notes</label>
<textarea name="census_notes"></textarea>

<label>Citizenship</label>
<input type="text" name="citizenship">

<label>Citizenship Notes</label>
<textarea name="citizen_notes"></textarea>

</fieldset>


<fieldset>
<legend>Biography</legend>

<label>Life Description</label>
<textarea name="life_description"></textarea>
</fieldset>


<fieldset>
<legend>Media & Comments</legend>

<label>Lead Image ID</label>
<input type="number" name="image_lead_id">

<label>User Comment ID</label>
<input type="number" name="user_comment_id">

</fieldset>

<button type="submit">Create Ancestor</button>

</form>

</body>
</html>