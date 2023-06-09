<?php

namespace App\Artists\Infrastructure\Symfony\Controller;

use App\Artists\Domain\Entity\Artist;
use App\Artists\Domain\Entity\Song;
use App\Artists\Domain\Repository\SongRepository;
use App\Artists\Infrastructure\Symfony\Form\SongType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/song')]
class SongController extends AbstractController
{
    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
    }

    #[Route('/', name: 'app_song_index', methods: ['GET'])]
    public function index(SongRepository $songRepository): Response
    {
        return $this->render('song/index.html.twig', [
            'songs' => $this->getArtistUser()->getSongs(),
        ]);
    }

    #[Route('/new', name: 'app_song_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ARTIST')]
    public function new(Request $request, SongRepository $songRepository): Response
    {
        $song = new Song();

        $form = $this->createForm(SongType::class, $song, [
            'label' => $this->getArtistUser(),
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $songRepository->save($song, true);
            $song->addArtist($this->getArtistUser());
            $song->addAlbum($form->get('albums')->getData());
            $this->entityManager->persist($song);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_homepage', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('song/new.html.twig', [
            'song' => $song,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_song_show', methods: ['GET'])]
    public function show(Song $song): Response
    {
        return $this->render('song/show.html.twig', [
            'song' => $song,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_song_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ARTIST')]
    public function edit(Request $request, Song $song, SongRepository $songRepository): Response
    {
        $form = $this->createForm(SongType::class, $song);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $songRepository->save($song, true);

            return $this->redirectToRoute('app_homepage', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('song/edit.html.twig', [
            'song' => $song,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_song_delete', methods: ['POST'])]
    #[IsGranted('ROLE_ARTIST')]
    public function delete(Request $request, Song $song, SongRepository $songRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$song->getId(), $request->request->get('_token'))) {
            $songRepository->remove($song, true);
        }

        return $this->redirectToRoute('app_homepage', [], Response::HTTP_SEE_OTHER);
    }

    private function getArtistUser()
    {
        $artistRepo = $this->entityManager->getRepository(Artist::class);
        $user = $this->getUser();
        return $artistRepo->findOneBy(['user' => $user]);
    }
}