<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/blog")
 */
class BlogController extends AbstractController
{
    /**
     * @Route("/", name="blog_list")
     */
   public function list(){

   }

    /**
     * @Route("/{id}", name"post_by_id")
     */
   public function post($id){

   }

    /**
     * @Route("/{slug}", name="post_by_slug")
     */
   public function postBySlug($slug){

   }
}
