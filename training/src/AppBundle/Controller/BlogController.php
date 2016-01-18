<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class BlogController
 * @package AppBundle\Controller
 */
class BlogController extends Controller
{
    /**
     * @Route("/blog/", name="bloghome")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        // get list of most recent blog posts
        // -- QTY comes from parameters by default
        // -- hit up the BlogPostModel for some data

        $recentPosts = [];
        $isAdmin = false;

        return $this->render('AppBundle:Default:index.html.twig', [
            'recent_posts' => $recentPosts,
            'is_admin'     => $isAdmin,
        ]);
    }

    /**
     * @Route("/blog/{id}", name="blog-detail")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function detailAction(Request $request)
    {
        $post = '';

        return $this->render('AppBundle:Blog:detail.html.twig', [
            'post' => $post,
        ]);
    }

    /**
     * @Route("/blog/add/", name="blogpostaddnew")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request)
    {

        return $this->render('AppBundle:Default:index.html.twig', []);
    }

    /**
     *
     * @Route("/blog/edit/{id}", name="blogpostedit")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request)
    {
        return $this->render('AppBundle:Default:index.html.twig');
    }

    /**
     *
     * @Route("/blog/delete/{id}", name="blogpostdelete")
     *
     * @param Request $request
     */
    public function deleteAction(Request $request)
    {

    }

}

