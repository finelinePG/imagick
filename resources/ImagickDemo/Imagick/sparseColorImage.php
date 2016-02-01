<?php

namespace ImagickDemo\Imagick;

//TODO - add sparse inverse

class sparseColorImage extends \ImagickDemo\Example
{
    /**
     * @var \ImagickDemo\Control\SparseColorControl
     */
    protected $control;

    public function __construct(\ImagickDemo\Control\SparseColorControl $sparseControl)
    {
        $this->control = $sparseControl;
    }

    public function render()
    {
        return $this->renderCustomImageURL();
    }

    public function renderCustomImage()
    {
        $methods = [
            'renderImageBarycentric2' => 'renderImageBarycentric2',
            'renderImageBilinear' => 'renderImageBilinear',
            //'renderImagePolynomial' => 'renderImagePolynomial',
            'renderImageShepards' => 'renderImageShepards',
            //'renderImageInverse' => 'renderImageInverse'
            'renderImageVoronoi' => 'renderImageVoronoi',
            'renderImageBarycentric' => 'renderImageBarycentric',
        ];

        $sparseType = $this->control->getSparseColorType();

        if (array_key_exists($sparseType, $methods) == false) {
            throw new \Exception("Unknown composite method $sparseType");
        }

        $method = $methods[$sparseType];
        $this->{$method}();
    }

    public function renderDescription()
    {

        $foo = <<< 'END'

  <p>
  Fill an image with color with the defined sparse color method.
  </p>
  
  <p>
  Barycentric - Maps three colors onto a linear triangle of color. The colors outside this triangle continue as before. This method is useful for creating smooth gradients of color.</p>
  
  <p>
  Bilinear - This method fits an equation to 4 points, over all three color channels to produce a uniform color gradient between the points, and beyond.</p>
  
  <p>Shepards  - The "Shepards" method uses a ratio of the inverse squares of the distances to each of the given points to determine the color of the canvas at each point.</p>
  
  <p>
  Voronoi - Maps each pixel in the image to the color of the closest point point provided. This basically divides the image into a set of polygonal 'cells' around each point.</p>
  
  <p>
  http://www.imagemagick.org/Usage/canvas/#sparse-color
  </p>
  
END;

        return $foo;
    }

    //Example Imagick::sparseColorImage SPARSECOLORMETHOD_BARYCENTRIC
    public function renderImageBarycentric2()
    {
        $points = [
            [0.30, 0.10, 'red'],
            [0.10, 0.80, 'blue'],
            [0.70, 0.60, 'lime'],
            [0.80, 0.20, 'yellow'],
        ];
        $imagick = createGradientImage(
            400, 400,
            $points,
            \Imagick::SPARSECOLORMETHOD_BARYCENTRIC
        );
        header("Content-Type: image/png");
        echo $imagick->getImageBlob();
    }
//Example end

//Example Imagick::sparseColorImage SPARSECOLORMETHOD_BILINEAR
    public function renderImageBilinear()
    {
        $points = [[0.30, 0.10, 'red'], [0.10, 0.80, 'blue'], [0.70, 0.60, 'lime'], [0.80, 0.20, 'yellow'],];
        $imagick = createGradientImage(500, 500, $points, \Imagick::SPARSECOLORMETHOD_BILINEAR);
        header("Content-Type: image/png");
        echo $imagick->getImageBlob();
    }
//Example end

// Example Imagick::sparseColorImage SPARSECOLORMETHOD_POLYNOMIAL
    public function renderImagePolynomial()
    {
        //TODO - this doesn't appear to work correctly.

//        First two coefficents are used to hole global polynomal information
//           c0 = Order of the polynimial being created
//           c1 = number_of_terms in one polynomial equation
//
//         Rest of the coefficients map to the equations....
//            v = c0 + c1*x + c2*y + c3*x*y + c4*x^2 + c5*y^2 + c6*x^3 + ...
//         for each 'value' (number_values of them) given.
//         As such total coefficients =  2 + number_terms * number_values
//
//         Input Arguments are sets of control points...
//         For Distort Images    order  [u,v, x,y] ...
//         For Sparse Gradients  order  [x,y, r,g,b] ...


        //c0 + c1*x + c2*y + c3*x*y

        $points = [
            1, 1,
            0, 0, 0.25, 0, -1, 1,
            0, 250, 0, 0.25, -1, 5,
            100, 500, 0, 0, -1, 5,
        ];


//        $points = [
//            1,
//            2, 1, 2,
//            1, 1, 2,
////            3, 
////            4, 5, 1, 2, 
////            3, 4, 5, 2, 
////            1, 3, 4, 5,
//        ];
//        
//        

        $imagick = new \Imagick();
        //$imagick->newImage(500, 500, "white");
        $imagick->newPseudoImage(500, 500, 'gradient:black-white');
        $imagick->setImageFormat("png");
        $imagick->sparseColorImage(\Imagick::SPARSECOLORMETHOD_POLYNOMIAL, $points);
        header("Content-Type: image/png");
        echo $imagick->getImageBlob();
    }
    // Example end

    //Example Imagick::sparseColorImage SPARSECOLORMETHOD_SPEPARDS
    public function renderImageShepards()
    {
        $points = [
            [0.30, 0.10, 'red'],
            [0.10, 0.80, 'blue'],
            [0.70, 0.60, 'lime'],
            [0.80, 0.20, 'yellow'],
        ];
        $imagick = createGradientImage(600, 600, $points, \Imagick::SPARSECOLORMETHOD_SPEPARDS);
        header("Content-Type: image/png");
        echo $imagick->getImageBlob();
    }
//Example end


//Example Imagick::sparseColorImage SPARSECOLORMETHOD_VORONOI
    public function renderImageVoronoi()
    {
        $points = [
            [0.30, 0.10, 'red'],
            [0.10, 0.80, 'blue'],
            [0.70, 0.60, 'lime'],
            [0.80, 0.20, 'yellow'],
        ];
        $imagick = createGradientImage(500, 500, $points, \Imagick::SPARSECOLORMETHOD_VORONOI);
        header("Content-Type: image/png");
        echo $imagick->getImageBlob();
    }
//Example end

//Example Imagick::sparseColorImage SPARSECOLORMETHOD_BARYCENTRIC
    public function renderImageBarycentric()
    {
        $points = [
            [0, 0, 'skyblue'],
            [-1, 1, 'skyblue'],
            [1, 1, 'black'],
        ];
        $imagick = createGradientImage(600, 200, $points, \Imagick::SPARSECOLORMETHOD_BARYCENTRIC);
        header("Content-Type: image/png");
        echo $imagick->getImageBlob();
    }

//Example end

    public function renderImageInverse()
    {
        //TODO - add inverse to Imagick
//        convert -size 100x100 xc: -sparse-color  Inverse \
//        '30,10 red  10,80 blue  70,60 lime  80,20 yellow' \
//        -fill white -stroke black \
//        -draw 'circle 30,10 30,12  circle 10,80 10,82' \
//        -draw 'circle 70,60 70,62  circle 80,20 80,22' \
//        sparse_inverse.png
    }


    /*
    
    Fill an image with color with the defined sparse color method.
    
    Barycentric - Maps three colors onto a linear triangle of color. The colors outside this triangle continue as before. This method is useful for creating smooth gradients of color.
    
    Bilinear - This method fits an equation to 4 points, over all three color channels to produce a uniform color gradient between the points, and beyond.
    
    Shepards  - The "Shepards" method uses a ratio of the inverse squares of the distances to each of the given points to determine the color of the canvas at each point.
    
    Voronoi - Maps each pixel in the image to the color of the closest point point provided. This basically divides the image into a set of polygonal 'cells' around each point.
    
    
    See also
    http://www.imagemagick.org/Usage/canvas/#sparse-color
    
    For the spare method types that take a set of color points as a parameter, for each color point the array should contain an entries for:
    
    positionX, positiony - The position of the point in the image
    R, G, B, A - A normalised (i.e. 0-255 value) for each of the color channels
    
    
    
    function createGradientImage($width, $height, $colorPoints, $sparseMethod) {
    
        $imagick = new \Imagick();
        $imagick->newImage($width, $height, "white");
        $imagick->setImageFormat("png");
    
        $barycentricPoints = array();
    
        foreach ($colorPoints as $colorPoint) {
            $barycentricPoints[] = $colorPoint[0] * $width;
            $barycentricPoints[] = $colorPoint[1] * $height;
    
            if (is_string($colorPoint[2])) {
                $imagickPixel = new \ImagickPixel($colorPoint[2]);
            }
            else if ($colorPoint[2] instanceof ImagickPixel) {
                $imagickPixel = $colorPoint[2];
            }
            else{
                throw new \InvalidArgumentException("Value ".$colorPoint[2]." is neither a string nor an ImagickPixel class. Cannot use as a color.");
            }
    
            $red = $imagickPixel->getColorValue(\Imagick::COLOR_RED);
            $green = $imagickPixel->getColorValue(\Imagick::COLOR_GREEN);
            $blue = $imagickPixel->getColorValue(\Imagick::COLOR_BLUE);
            $alpha = $imagickPixel->getColorValue(\Imagick::COLOR_ALPHA);
    
            $barycentricPoints[] = $red;
            $barycentricPoints[] = $green;
            $barycentricPoints[] = $blue;
            $barycentricPoints[] = $alpha;
        }
    
        $imagick->sparseColorImage($sparseMethod, $barycentricPoints);
    
        return $imagick;
    }
    
    
    
    $imagick->writeimage(realpath($tempFilename));
    
    $points = [
        [0, 0, 'skyblue'],
        [-1, 1, 'skyblue'],
        [1, 1, 'black'],
    ];
    
    $imagick = createGradientImage(600, 200, $points, \Imagick::SPARSECOLORMETHOD_BARYCENTRIC);
    
    $imagick->writeimage(realpath("./skyblueGradient.png"));
    
    
    $points = [
        [0.30, 0.10, 'red'],
        [0.10, 0.80, 'blue'],
        [0.70, 0.60, 'lime'],
        [0.80, 0.20, 'yellow'],
    ];
    
    
    $imagick = createGradientImage(400, 400, $points, \Imagick::SPARSECOLORMETHOD_BARYCENTRIC);
    $imagick->writeimage(realpath("./colorfulGradient.png"));
    
    
    */
}


//Example Imagick::sparseColorImage createGradientImage is used by other examples.
function createGradientImage($width, $height, $colorPoints, $sparseMethod, $absolute = false)
{
    $imagick = new \Imagick();
    $imagick->newImage($width, $height, "white");
    $imagick->setImageFormat("png");

    $barycentricPoints = array();

    foreach ($colorPoints as $colorPoint) {
        if ($absolute == true) {
            $barycentricPoints[] = $colorPoint[0];
            $barycentricPoints[] = $colorPoint[1];
        } else {
            $barycentricPoints[] = $colorPoint[0] * $width;
            $barycentricPoints[] = $colorPoint[1] * $height;
        }

        if (is_string($colorPoint[2])) {
            $imagickPixel = new \ImagickPixel($colorPoint[2]);
        } else if ($colorPoint[2] instanceof \ImagickPixel) {
            $imagickPixel = $colorPoint[2];
        } else {
            $errorMessage = sprintf(
                "Value %s is neither a string nor an ImagickPixel class. Cannot use as a color.",
                $colorPoint[2]
            );

            throw new \InvalidArgumentException(
                $errorMessage
            );
        }

        $red = $imagickPixel->getColorValue(\Imagick::COLOR_RED);
        $green = $imagickPixel->getColorValue(\Imagick::COLOR_GREEN);
        $blue = $imagickPixel->getColorValue(\Imagick::COLOR_BLUE);
        $alpha = $imagickPixel->getColorValue(\Imagick::COLOR_ALPHA);

        $barycentricPoints[] = $red;
        $barycentricPoints[] = $green;
        $barycentricPoints[] = $blue;
        $barycentricPoints[] = $alpha;
    }

    $imagick->sparseColorImage($sparseMethod, $barycentricPoints);

    return $imagick;
}
//Example end
