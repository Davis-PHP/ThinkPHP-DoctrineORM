<?php


namespace app\controller;


class News extends EM
{
    public function create()
    {
        try {
            $em = $this->getEntityManager();
            $news = $em->getRepository('News')->findAll();
            dump($news);
        } catch (\Exception $e) {
            dump($e->getMessage(), $e->getFile(), $e->getLine());
        }
    }
}