index.php

public class index {
    double $radius;
    final double $PI = 3.14159;

    public function index($double r) 
    { 
        $radius = r;
    }

    public function index() 
    {
        $radius = 0.0;
    }

    public void set_Radius($double r)
    {
        $radius = r;
    }

    public function double get_Radius()
    {
        return $radius;
    }

    public function double get_Area() {
        double $area;
        $area = PI * radius * radius;
        return $area;
    }

    public function double get_Circumference() {
        double $circumference;
        $circumference = 2 * PI * radius;
        return $circumference;
    }
}

public class IndexMain {
        echo ("Radius = ");

        $cr = new index();
        $cr->set_Radius($radius);
        echo "$Radius " + "$cr->get_Radius()";
        echo "$Area " + "$cr->get_Area()";
        echo "$Circumference " + "$cr->get_Circumference()";
}
}
