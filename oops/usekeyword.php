
<!DOCTYPE html>
<html>
<body>

<?php

trait message1 {
  public function msg1() {
    echo "Python is amazing! "; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();

?>
 
</body>
</html>