<?php


namespace app\controller;


use app\Entity\News;

class NewsController
{
    use EM;

    public function create()
    {
        try {
            $em = $this->getEntityManager();
            $news = $em->getRepository('News')->findAll();

            /** @var News $news */
            $news = new News();
            $news->setId(2);
            $news->setTitle('test');
            $news->setCover('test');
            $news->setSummary('test');
            $news->setContent('test');
            $em->persist($news);
            $em->flush($news);
        } catch (\Exception $e) {
            dump($e->getMessage(), $e->getFile(), $e->getLine());
            die;
        }
    }
}