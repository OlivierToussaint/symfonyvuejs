<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Entity\Post;
use App\Entity\User;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class PostController extends AbstractController
{
    /**
     * @Route("/api/posts", name="getAllPost")
     */
    public function all(PostRepository $postRepository)
    {
        return $this->json($postRepository->findAll());
    }

    /**
     * @Route("/api/post/get/{id}", name="getPost")
     */
    public function show(Post $post)
    {
        return $this->json($post);
    }

    /**
     * @Route("/api/post/new", name="addPost")
     */
    public function new(Request $request)
    {
        $content = json_decode($request->getContent(), true);
        if ($content['title']) {
            $post = new Post();
            $post->setTitle($content['title']);
            $post->setContent($content['content']);
            $post->setPublishAt(new \DateTime('now'));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($post);
            $entityManager->flush();

            return $this->json($post);
        }
        return new Response('Error', Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}