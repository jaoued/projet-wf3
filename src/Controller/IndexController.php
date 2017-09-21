<?php
namespace Controller;


class IndexController extends ControllerAbstract
{
    public function indexAction()
    {  
        $categories = $this->app['category.repository']->findAllChronique();
        $annonces = $this->app['annonce.repository']->findLastThree(6);
     
       return $this->render('index.html.twig', [
           
           'categories' => $categories,
           'annonces' => $annonces
               
               ] );
         //return $this->render('user/register.html.twig' );
    }
}
