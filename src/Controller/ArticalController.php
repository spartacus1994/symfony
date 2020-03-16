<?php 
namespace App\Controller;

Use Symfony\Component\HttpFoundation\Response;
//Use Symfony\Component\Routing\Annotation\Route;
//Use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
Use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
// use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * 
 */
class ArticalController
{
	
	/*@Route("/")
	@Method({"GET"})*/
	


	public function index()
	{
	//echo "ok"; exit();
		$article = ['Artical 1' ,'Article 2'];
		//return new Response

		//return $this->render('artical/actical.html.twig', array('artical' => $article));
		echo "ok"; exit();
	}
}