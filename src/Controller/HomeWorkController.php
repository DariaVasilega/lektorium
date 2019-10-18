<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeWorkController
{
    public function index()
    {

        try {
            $number = random_int(0, 100);
        } catch (\Exception $e) {
        }

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>');
    }
    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        try {
            $number = random_int(0, 100);
        } catch (\Exception $e) {
        }

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>');
    }

    /**
     * @Route("/home/{page}", name="home_list", requirements={"page"="\d+"})
     * @param int $page
     * @return Response
     */
    public function list(int $page = 1)
    {
        return new Response(
            '<html><body>Optional Parameter</body></html>');
    }
}