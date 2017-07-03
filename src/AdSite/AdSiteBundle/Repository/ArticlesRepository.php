<?php

namespace AdSite\AdSiteBundle\Repository;

/**
 * ArticlesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticlesRepository extends \Doctrine\ORM\EntityRepository
{
    public function getArticlesByCategory($category)
    {
        $articles = $this->getEntityManager()->createQuery('
        SELECT a FROM AdSiteBundle:Articles a
        WHERE a.category LIKE :category
        ')->setParameter('category', '%' . $category . '%')->getResult();

        return $articles;
    }


    public function getArticlesByUserId($userId)
    {
        $articles = $this->getEntityManager()->createQuery('
        SELECT a FROM AdSiteBundle:Articles a
        WHERE EXISTS ( SELECT b FROM AdSiteBundle:User b 
        WHERE b.id = :userId)
        ')->setParameters(array('userId' => $userId))->getResult();

        return $articles;
    }


    public function getArticleById($id)
    {
        $article = $this->getEntityManager()->createQuery('
        SELECT a FROM AdSiteBundle:Articles a
        WHERE a.id LIKE :id
        ')->setParameters(array('id' => $id))->getResult();

        return $article;
    }

    public function getArticlesFiltered($keywords, $category, $city, $distance)
    {
        $keywords_tab = explode(' ', $keywords);
        $array_tmp = array(0 => 'vvvvvvvvv', 1 => 'vvvvvvvvvv');
        for ($i = 4 - count($keywords_tab); $i >= count($keywords_tab); $i--) {
            $keywords_tab = array_merge($keywords_tab, $array_tmp);
        }

        if (strcmp($category, "Tous") == 0) {
            $articles = $this->getEntityManager()->createQuery('
        SELECT a FROM AdSiteBundle:Articles a
        WHERE (a.description LIKE :keywords0 OR
        a.title LIKE :keywords0 OR 
        a.description LIKE :keywords1 OR
        a.title LIKE :keywords1 OR
        a.description LIKE :keywords2 OR
        a.title LIKE :keywords2)
        ')->setParameters(array('keywords0' => '%' . $keywords_tab[0] . '%',
                'keywords1' => '%' . $keywords_tab[1] . '%',
                'keywords2' => '%' . $keywords_tab[2] . '%'))->getResult();
        } else {
            $articles = $this->getEntityManager()->createQuery('
        SELECT a FROM AdSiteBundle:Articles a
        WHERE (a.description LIKE :keywords0 OR
        a.title LIKE :keywords0 OR 
        a.description LIKE :keywords1 OR
        a.title LIKE :keywords1 OR
        a.description LIKE :keywords2 OR
        a.title LIKE :keywords2) AND 
        a.category = :category
        ')->setParameters(array('keywords0' => '%' . $keywords_tab[0] . '%',
                'keywords1' => '%' . $keywords_tab[1] . '%',
                'keywords2' => '%' . $keywords_tab[2] . '%',
                'category' => $category))->getResult();
        }

        if ($city != null)
            return $this->getArticlesDistance($articles, $distance, $city);
        else
            return $articles;
    }


    public function getArticlesDistance($articles, $distanceMax, $city)
    {
        $arrayRes = [];

        foreach ($articles as $article) {
            $result = $this->getDistance($city, $article->getPlace());
            $distance = floatval(substr($result, 0, strlen($result) - 2));
            echo $city . " et " . $article->getPlace() . " === " . $distance * 1.60934 . "KM --------";
            if ($distance * 1.60934 <= $distanceMax) {
                array_push($arrayRes, $article);
            }
        }
        return $arrayRes;
    }


    public function getDistance($origin, $dest)
    {
        $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=';
        $url = $url . $dest . ',France';
        $url = $url . '&destinations=' . $origin . ',France';
        $url = $url . '&key=AIzaSyBbhRzlEDXRc4yTsfKyod_USIbggYUN918';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($result);
        return ($obj->{'rows'}[0]->{'elements'}[0]->{'distance'}->{'text'});
    }
}
