<?php

namespace ssstrz\ZakladnikBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
     //   $request->setLocale('p');
        return $this->render('ssstrzZakladnikBundle:Default:index.html.twig');
    }
}
