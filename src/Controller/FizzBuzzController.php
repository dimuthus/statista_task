<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class FizzBuzzController extends AbstractController
{

    public  $arrFizzBuzz = [15 => "FizzBuzz", 5 => "Buzz", 3 => "Fizz"];
    /**
     * @Route("/")
     */
    public  function index()
    {
        $result = "";
        for ($i = 1; $i <= 100; $i++) {
            $result .= $this->printFizzBuzz($i) . '</br>';
        }

        return new Response($result);
    }

    public function printFizzBuzz($number)
    {
        $output = $number;
        foreach (array_keys($this->arrFizzBuzz) as $multi) {

            if (($number % $multi) === 0) {
                $output = $this->arrFizzBuzz[$multi];
                break;
            }
        }
        return $output;
    }
}
