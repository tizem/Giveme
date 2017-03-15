<?php

namespace Test\FrontBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

Class SheetController extends Controller
{
   public function sheetListAction(){


   }


    public function sheetAction($id,Request $request){

      // var_dump($request->isMethod('GET')); die;

       return $this->render('TestFrontBundle:sheet:sheet.html.twig',array('id'=>$id));
    }


}