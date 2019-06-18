<?php


    namespace App\Controller;


    class NotFoundController extends BaseController
    {
public function render(string $viewName, array $params = [])
{
    extract($params);
    $subView = sprintf('%s.html', $viewName);

    require_once sprintf('%s/../../view/not_found.html', __DIR__);
}
public function notFound()
{
    $this->render('not_found');
}
    }