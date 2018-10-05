<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>File Download Error</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897"></script>
</head>
<body>

   <p>There was an error downloading "<?php echo htmlentities($_GET['fileName']) ?>"</p>
   <p><?php echo htmlentities($errorMsg) ?></p>
    <?php
        
    
    ?>
</body>
</html>