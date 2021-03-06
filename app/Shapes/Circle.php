<?php

declare(strict_types=1);

namespace App\Shapes;

/* 
You can use dd() instead of dump() to stop the PHP at a specific point. This can be useful if later lines are causing errors.

Create a ShapeInterface with an area() method in the App\Shapes namespace. Then create three further classes which implement the interface: Square, Circle, and Rectangle. Square should be given a side length on construction, Circle should be given a radius, and Rectangle should be give a width and height.

Hint: PHP has a pi function

public function shapes()
{
    echo "\n01) Shapes\n";

    // create new shapes
    $square = new Shapes\Square(4);
    $circle = new Shapes\Circle(4);
    $rectangle = new Shapes\Rectangle(4, 5);

    // log the areas of each
    dump(
        $square->area(), // 16
        $circle->area(), // 50.265482457437
        $rectangle->area() // 20
    );
} */

class Circle 
{
    private $radius;
    private $pi = 3.14159265359;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }


    public function area()
    {
        $radiusSq = $this->radius * $this->radius;
        $areaSum = $this->pi * $radiusSq;
        return $areaSum;
    }

};

//Correct Answer with using pi()
/* 
<?php

namespace App\Shapes;

class Circle implements ShapeInterface
{
    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function area() : float
    {
        return pi() * $this->radius * $this->radius;
    }
}
 */