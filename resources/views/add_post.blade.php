<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload New Pic</title>
    <link rel="stylesheet" href="css/add.css">
</head>
<body>
<div class="container">
  <form class="form" method="POST" action="{{'add'}}" >
    @csrf
    <div class="file-upload-wrapper" data-text="Select your file!">
    <input type="text" class="file-upload-field" name="url" id="url" />
      <div>
      <label for="desc"  class="file-upload-field">Describe your picture</label>
      
</div>
    </div>
    <input type="text" class="file-upload-field" name="desc" id="desc" />
    <div class="form-group">
        <input type="submit" name="submit" id="submit" class="file-upload-field" value="POST"/>
                        </div>
  </form>
</div>
</body>
</html>