	<?php

    class Rectangle
    {
        private $length;
        private $width;

        function __construct ($length, $width){
            $this->length=$length;
            $this->width=$width;
        }

        function setLength($newLength)
        {
            $this->length = $newLength;
        }

        function getLength()
        {
            return $this->length;
        }

        function setWidth($newWidth)
        {
            $this->width=$newWidth;
        }
        function getWidth()
        {
            return $this->width;
        }


        function getArea()
        {
            return $this->length*$this->width;
        }

        function isSquare()
        {
            if ($this->length == $this->width)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

    }

    $Rectangle1 = new Rectangle(5,5);
    $Rectangle1->getLength();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>
        <p><?php $Rectangle1->isSquare();?>

        </p>
    </body>
</html>
