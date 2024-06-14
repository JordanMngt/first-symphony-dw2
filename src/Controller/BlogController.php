<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog_index')]
    public function index(PostRepository $postRepository): Response
    {
        // Récupération des articles
        $posts = $postRepository->findAllWithTags();

        return $this->render('blog/index.html.twig', [
            'posts' => $posts,
        ]);
    }

    #[Route('/blog/{id}', name: 'app_blog_show')]
    public function show(int $id, PostRepository $postRepository): Response 
    {
        $post = $postRepository->find($id);
        return $this->render('blog/show.html.twig', [
            'post' => $post,
        ]);
    }
}
