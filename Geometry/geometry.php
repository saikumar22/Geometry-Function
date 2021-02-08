<?php
class circle{
    public $radius;
    const PIE = 3.14159265;
    function __construct($r){
        $this->radius = $r;
    }
    function area(){
        return self::PIE * ( $this->radius ** 2);
    }
    function diameter(){
        return  $this->radius * 2;
    }
    function circum(){
        return  $this->diameter() * self::PIE;
    }
    function __destruct(){
        echo "the area of given object is :" .$this->area() . "<br>";
        echo "the circumference of the given object is : ". $this->circum()."<br>";   
    }
}

class rectangle{
    public $breadth;
    public $length;
    function area(){
        return ($this->length * $this->breadth);
    }

     function circumference(){
        return 2*($this->length + $this->breadth);
    }

    function __construct( $glength, $gbreadth){
        $this->length = $glength;
        $this->breadth = $gbreadth;
    }

    function __destruct(){
        echo "Area of the rectangle is :".$this->area(). ". <br>";
        echo "the circumference of the rectangle is :  ". $this->circumference().". <br>";   
    }
}

class triangle{
    public $base;
    public $height;
     function area(){
        return (1/2)*($this->base * $this->height);
    }

    function __construct( $gbase, $gheight){
        $this->base = $gbase;
        $this->height = $gheight;
    }

    function __destruct(){
        echo "Area of the triangle is :" . $this->area().".<br>";
    }
}

class rhombus{
    public $d1;
    public $d2;
     function area(){
        return 1/2*($this->d1 * $this->d2);
    }

     function circumference(){
        return 2*(sqrt(($this->d1**2) + ($this->d2**2)));
    }

    function __construct( $gd1, $gd2){
        $this->d1 = $gd1;
        $this->d2 = $gd2;
    }

    function __destruct(){
        echo "Area of the rhombus is :" . $this->area() . ".<br>";
        echo "The circumference of the rhombus is :".$this->circumference().".<br>";   
    }

}

class square{
    public $side;
     function area(){
        return($this->side**2);
    }
     function circumference(){
        return 4*($this->side);
    }

    function __construct( $gside ){
        $this->side = $gside;
    }

    function __destruct(){
        echo "Area of the square is :" . $this->area() . ".<br>";
        echo "The circumference of the square is :".$this->circumference().".<br>";   
    }
}

?>
