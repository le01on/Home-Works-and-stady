<?php

namespace App\Controller\Web;

use App\Entity\BidHistory;
use App\Entity\Product;
use App\Entity\User;
use App\Repository\ProductRepository;
use App\Services\CreateBid;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @var CreateBid
     */
    private $createBid;
    /**
     * ProductController constructor.
     * @param CreateBid $createBid
     */
    public function __construct(CreateBid $createBid)
    {
        $this->createBid = $createBid;
    }

    /**
     * @Route("/slot/{id}", name="show_product")
     */
    public function getProduct($id)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        $bidHistory = $this->getDoctrine()->getRepository(BidHistory::class)->find($id);
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        return $this->render('web/main/product.html.twig', [
            'product' => $product,
            'user' => $user,
            'bidHistory' => $bidHistory
        ]);
    }

    /**
     * @Route("/slots", name="show_all_products")
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @param ProductRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAllProducts(Request $request, PaginatorInterface $paginator, ProductRepository $repository)
    {
        $queryBuilder = $repository->getWithSearchQueryBuilder();

        $pagination = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            2/*limit per page*/
        );


        /** @var ProductRepository $productRepository */
        $productRepository = $this->getDoctrine()->getRepository(Product::class);
        $products = $productRepository->findAll();
        $bidHistory = $this->getDoctrine()->getRepository(BidHistory::class)->findAll();
        return $this->render('web/main/all_products.html.twig', [
            'products' => $products,
            'pagination' => $pagination,
        ]);

    }

    /**
     * @Route("/slot/{id}/take/bid", name="take_bid_product", methods={"post"})
     */
    public function takeBid($id, Request $request)
    {
        $amount = $request->request->get('amount');
        /** @var Product $product */
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        $date = new \DateTime();
        $finishdate = $product->getFinishAt();
        if ($date < $finishdate) {
            /** @var User $user */
            $user = $this->getUser();
            $res = $this->createBid->create($user, $product, $amount);
            if (!$res) {
                return $this->json(['error' => 'Not create bid!', 'eror' => 'eror']);
            }
            $bids = $this->getDoctrine()->getRepository(BidHistory::class)->findBy(['product' => $product]);
            $res = [];
            foreach ($bids as $bid) {
                $res[] = [
                    'user_name' => $bid->getUser()->getUsername(),
                    'amount' => $bid->getBidAmount(),
                    'timebid' => $bid->getBidTime()->format("d F Y"),
                ];
            }
            $res = array_slice($res, -3, 3);
            return $this->json(['bids' => $res, 'count' => count($bids)]);
        }
    }
}