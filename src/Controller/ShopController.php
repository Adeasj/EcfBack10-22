<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Image;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    #[Route('/shop', name: 'app_shop')]
    public function index(): Response
    {
        return $this->render('shop/index.html.twig', [
            'controller_name' => 'ShopController',
        ]);
    }
}



// public function index()
// {
//     return $this->render("shop/index.html.twig");
// }


//     #[Route('/Produit
//     /{id}/{url}', name:"Produit
//     _show", requirements: ['id' => "\d+", 'url'=>'.{1,}'])]
//     #[ParamConverter('Produit', class: Produit::class)]
//     public function show(Produit
//      $Produit):Response {
//         return $this->render("blog/lecture.html.twig", ['Produit
//         '=> $Produit]);
//     }


    // #[Route('/edition/{id}', name:"Produit
    // _edit", requirements: ['id' => "\d+"])]
    // #[IsGranted('ROLE_ADMIN')]
    // public function edit(Produit
    //  $Produit
    // , ManagerRegistry $doctrine, Request $request):Response {
    //     $oldImage = $Produit
    //     ->getImage()->getChemin();
    //     $form = $this->createForm(Produit
    //     Type::class,$Produit
    // );

    //     dump($Produit
    // );
    //     //ATTENTION APRES HANDLE REQUEST L'OBJET Produit
    //      EST MODIFIE
    //     $form->handleRequest($request);
    //     dump($Produit
    // );
    //     if($form->isSubmitted() && $form->isValid()){
    //         $Produit
    //         ->setLastUpdateDate(new \DateTime());

    //         if($Produit
    //         ->isPublished()){
    //             $Produit
    //             ->setPublicationDate(new \DateTime());
    //         }

    //         if($Produit
    //         ->getImage()->getChemin() !== null && $Produit
    //         ->getImage()->getChemin() !== $oldImage){
    //             $file = $form->get('image')->get('chemin')->getData();
    //             $fileName = uniqid(). '.'.$file->guessExtension();

    //             try{
    //                 $file->move($this->getParameter('images_directory'),$fileName);
    //                 $Produit
    //                 ->getImage()->setChemin($fileName);
    //             }catch(FileException $e){
    //                 return new Response($e->getMessage());
    //             }
    //         } else {
    //             $Produit
    //             ->getImage()->setChemin($oldImage);
    //         }

    //     $em = $doctrine->getManager();
    //     //PAS DE PERSIST CAR Produit
    //      VIENT DE LA BASE
    //     $em->flush();

    //     $this->addFlash('info', 'Votre Produit
    //      a été modifié!');

    //     return $this->redirectToRoute('homepage');

    //     }
    //     return $this->render("blog/edition.html.twig", ['Produit
    //     ' => $Produit
    //     , 'form' => $form->createView()]);
    // }
