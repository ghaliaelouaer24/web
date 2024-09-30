<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/author')]

class AuthorController extends AbstractController
{ #[Route('/show',name:'app_Author_show')]
    public function showAuthor(): Response
    {
        $authorName='victor Hugo';
        return $this->render('Author/showAuthor.html.twig',
        array(
            'authorName'=>$authorName,
        ));
    }
}
