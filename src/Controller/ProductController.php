<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
// IMPORTED MANUALLY
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;

class ProductController extends AbstractController
{
    // DEFAULT ROUTE
    #[Route('/product', name: 'product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    // // CREATE NEW PRODUCT
    // #[Route('/product', name: 'create_product')]
    // public function createProduct(EntityManagerInterface $entityManager): Response
    // {
    //     $product = new Product();
    //     $product->setName('Windows PC');
    //     $product->setPrice(200000);
    //     $product->setDescription('Core i9 with extraordinary hardwear pack');

    //     // tell Doctrine you want to (eventually) save the Product (no queries yet)
    //     $entityManager->persist($product);

    //     // actually executes the queries (i.e. the INSERT query)
    //     $entityManager->flush();

    //     return new Response('Saved new product with id '.$product->getId());
    // }


    // FETCH DATA FROM DATABASE
    // WAY 1
    // #[Route('/product/{id}', name: 'product_show')]
    // public function show(EntityManagerInterface $entityManager, int $id): Response
    // {
    //     $product = $entityManager->getRepository(Product::class)->find($id);

    //     if (!$product) {
    //         throw $this->createNotFoundException(
    //             'No product found for id '.$id
    //         );
    //     }

    //     return new Response('Check out this great product: '.$product->getName()." with price of ".$product->getPrice()." have speciality of: ".$product->getdescription());

    //     // or render a template
    //     // in the template, print things with {{ product.name }}
    //     // return $this->render('product/show.html.twig', ['product' => $product]);
    // }



    // UPDATE DATA
    // #[Route('/product/edit/{id}', name: 'product_edit')]
    // public function update(EntityManagerInterface $entityManager, int $id): Response
    // {
    //     $product = $entityManager->getRepository(Product::class)->find($id);

    //     if (!$product) {
    //         throw $this->createNotFoundException(
    //             'No product found for id '.$id
    //         );
    //     }

    //     $product->setName('APPLE PC');
    //     $entityManager->flush();

    //     return $this->redirectToRoute('product_show', [
    //         'id' => $product->getId()
    //     ]);
    // }
}
