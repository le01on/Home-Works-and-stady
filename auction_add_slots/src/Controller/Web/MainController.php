<?php

namespace App\Controller\Web;

use App\Entity\News;
use App\Entity\Product;
use App\Repository\NewsRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="web_main")
     */
    public function index()
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();

        return $this->render('web/main/index.html.twig', [
            'controller_name' => 'MainController',
            'products' => $products
        ]);
    }

    /**
     * @Route("/news", name="web_news")
     */
    public function news(Request $request, PaginatorInterface $paginator, NewsRepository $repository)
    {
        $queryBuilder = $repository->getWithSearchQueryBuilder();

        $pagination = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );

        $pages = $request->get('pages', 1);
        /** @var NewsRepository $newsRepository */
        $newsRepository = $this->getDoctrine()->getRepository(News::class);

        $dateTime = $this->getDateTime($request);

        $news = $newsRepository->findPages($pages, $dateTime);
        $archive = $newsRepository->archive();

        return $this->render('web/main/news.html.twig', [
            'news' => $news,
            'archive' => $archive,
            'pagination' => $pagination,

        ]);
    }

    /**
     * @Route("/contact-us", name="web_contact_us")
     */
    public function contactUs()
    {
        return $this->render('web/main/contact_us.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/faq", name="web_faq")
     */
    public function faq()
    {
        return $this->render('web/main/faq.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @param Request $request
     * @return \DateTime|null
     * @throws \Exception
     */
    private function getDateTime(Request $request): ?\DateTime
    {
        $month = $request->get('month');
        $year = $request->get('year');
        $dateTime = null;

        if (!empty($month) && !empty($year))  {
            $dateTime = new \DateTime();
            $dateTime->setDate($year, $month, 1);
        }

        return $dateTime;
    }
    /**
     * @Route("/news/{id}", name="web_news_item")
     */
    public function itemNews($id)
    {
        $item = $this->getDoctrine()->getRepository(News::class)->findBy([
                'id' => $id]
        );

        return $this->render('web/main/news_item.html.twig', [
            'item' => $item,
        ]);
    }
}
