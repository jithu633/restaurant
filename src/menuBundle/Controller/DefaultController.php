<?php

namespace menuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use menuBundle\Entity\menu;

class DefaultController extends Controller
{
    /**
     * @Route("menu")
     */
    public function indexAction()
    {
        echo "<h1>Restuarant";
        $menu = new menu();
        $menu->setItem('dosa');
        $menu->setPrice('dosa');
        echo "</h1>";
        $menu->setCalories('100cal');
        $menu->setCarbs('200carbs');
        $menu->setFats('100');
        $menu->setProteins('300');





        $em = $this->getDoctrine()->getManager();
        $em ->persist($menu);
        $em->flush();
        return $this->render('menu/index.html.twig', array(
            'menus' => $menu,));
    }
}
