<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Uploade Document</title>
  </head>
  <body>
    <form class="upload" action="upload.php" method="post" enctype="multipart/form-data" >
      <div class="form-group">
        <label for="">Select Document to upload</label>
        <div class="form-control">
          <input type="file" name="fileUpload" value="">
        </div>
        <div class="btn btn-primary">
          <button type="submit" name="button">Upload</button>
        </div>
      </div>
    </form>
  </body>
</html>
