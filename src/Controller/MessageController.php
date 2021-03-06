<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\User;
use App\Form\MessageFormType;
use App\Repository\MessageRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    #[Route('/{_locale<%app.supported_locales%>}/contact', name: 'contact')]
    public function message(Request $request, EntityManagerInterface $entityManager): Response
    {

		$msg = new Message();
		$form = $this->createForm(MessageFormType::class);
	    $form->handleRequest($request);


	    if($form->isSubmitted()){
		    $msg->setObject($form->get('object')->getData());
		    $msg->setMessage($form->get('message')->getData());
		    $msg->setCreatedAt(new \DateTimeImmutable());
		    $msg->setIdUser($this->getUser());
		    $msg->setStatus('Being processed');
		    $entityManager->persist($msg);
		    $entityManager->flush();
		    $this->addFlash('success', 'Your message has been sent !');
		    return $this->redirectToRoute('userMessages');
	    }

        return $this ->render('user/contact.html.twig', [
			'formMsg' => $form->createView()
        ]);
    }

	#[Route('/{_locale<%app.supported_locales%>}/user/message', name: 'userMessages')]

	public function mesMessages(MessageRepository $messageRepository) {

		$id = ($this->getUser())->getId();
		return $this->render("user/userMessages.html.twig", [
			"messages" => $messageRepository->findBy(array('id_user' => $id))
		]);

	}

	#[Route('/{_locale<%app.supported_locales%>}/user/delMessage', name: 'delMessage')]

	public function delMessage(MessageRepository $messageRepository, EntityManagerInterface $entityManager) {
		$idMsg = $_GET["idMsg"];
		$msg = $messageRepository->find($idMsg);
		$entityManager -> remove($msg);
		$entityManager -> flush();
		$this->addFlash('success', 'Your message has been deleted !');

		return $this->mesMessages($messageRepository);
	}

	#[Route('/{_locale<%app.supported_locales%>}/admin/message', name: 'adminMessages')]

	public function getMessages(MessageRepository $messageRepository, UserRepository $userRepository) {
		$msg = $messageRepository->findAll();
		$nameArray = array();
		foreach ($msg as $value) {
			$nameArray[] = ($userRepository->findBy(array('id' => $value->getIdUser())))[0]->getIdUser();
		}
		
		return $this->render("admin/adminMessages.html.twig", [
			"messages" => $messageRepository->findAll(), "username" => $nameArray
		]);
	}
	#[Route('/{_locale<%app.supported_locales%>}/admin/checkMessage', name: 'checkMessage')]
	public function checkMessage(MessageRepository $messageRepository, EntityManagerInterface $entityManager) {
		
		$idMsg = $_GET["idMsg"];
		$msg = $messageRepository->find($idMsg);
		$msg ->setStatus('Processed');
		$entityManager->persist($msg);
		$entityManager->flush();
		$this->addFlash('success', 'The message has been processed !');
		return $this->redirectToRoute('adminMessages');
	}
}
