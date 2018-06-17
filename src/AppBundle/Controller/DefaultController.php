<?php
/**
 * Created by Vincent.
 * User: Rell
 * Date: 17/06/2018
 * Time: 10:25
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



class DefaultController extends Controller
{
    /**
     * @Route("/home")
     */
    public function indexAction()
    {
        $projects=['Tour du monde 2020', "Voyage en Nouvelle Calédonie", "Naans à Goa", "Snorkeling dans le Pacifique"];


        return $this->render('projects/index.html.twig',
            compact('projects'));
    }

}