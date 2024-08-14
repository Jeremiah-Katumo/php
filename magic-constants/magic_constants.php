<?php 

namespace myArea;

function myValue(){
  return __NAMESPACE__;
}
?>

<!DOCTYPE html>
<html>
    <body>

    <?php
        echo myValue();

        class Fruits {
            public function myValue() {
                return __METHOD__;
            }
        }
        $mango = new Fruits();
        echo $mango->myValue();
    ?>

    </body>
</html>



<!-- __CLASS__	If used inside a class, the class name is returned.	
__DIR__	The directory of the file.	
__FILE__	The file name including the full path.	
__FUNCTION__	If inside a function, the function name is returned.	
__LINE__	The current line number.	
__METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
__NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
__TRAIT__	If used inside a trait, the trait name is returned. -->
