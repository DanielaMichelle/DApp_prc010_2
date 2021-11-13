<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController 
{
	public function number(): Response
	{
        $number = random_int(0, 100);

        return new Response (
            '<html><body>Lucky number: '.$number. '</body></html>'
        );
		
	}

    public function miNombre(): Response
	{
        $nombre = 'Daniela Michelle';   
        return new Response (
            '<html><body>' . $nombre .'</body></html>'
        );
	}
}