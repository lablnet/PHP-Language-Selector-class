<?php

require_once 'core/init.php';

if(isset($_POST['lang'])){
	$lang = new Language;
	$lang->SetLanguage($_POST['language']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= printl('home'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form action='' method="post" >
    <div class="form-group">
      <label for="language"><?= printl('select'); ?>:</label>
      <select class="form-control" id="language" name='language' >
        <option value='en'><?= printl('en'); ?></option>
        <option value='ur'><?= printl('ur'); ?></option>
      </select>
    </div>
    <div class="form-group" >
    	<input type="submit" name="lang" class='btn btn-primary' value='<?= printl('submit'); ?>' />
    </div>	
  </form>
</div>

</body>
</html>
