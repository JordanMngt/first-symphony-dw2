<?php

namespace App\Controller;

use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TagController extends AbstractController
{
    #[Route('/tag', name: 'app_tag_index')]
    public function index(TagRepository $tagRepository): Response
    {
    // Récupération des articles
        $tags = $tagRepository->findAll();

        return $this->render('tag/index.html.twig', [
            'tags' => $tags,
        ]);
    }
    #[Route('/tag/{id}', name: 'app_tag_show')]
    public function show(string $id, TagRepository $tagRepository): Response 
    {
        $tag = $tagRepository->find(intval($id));
        return $this->render('tag/show.html.twig', [
            'tag' => $tag,
        ]);
    }
}
