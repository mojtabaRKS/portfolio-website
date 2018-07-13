<?php
/**
 * Created by PhpStorm.
 * User: mojtabarks
 * Date: 7/9/18
 * Time: 9:57 PM
 */

namespace AppBundle\Controller\Panel;

use AppBundle\Entity\Skill;
use DateTime;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @property \Doctrine\Common\Persistence\ObjectManager entityManager
 */
class SkillsController extends Controller
{
    /**
     * SkillsController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $skills = $entityManager->getRepository(Skill::class)->findAll();

        return $this->render('panel/skills/index.html.twig' , [
            'skills' => $skills
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction()
    {
        return $this->render('panel/skills/create.html.twig');
    }

    /**
     * @param Request $request
     * @param ValidatorInterface $validator
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function storeAction(Request $request , ValidatorInterface $validator)
    {

        $entityManager = $this->getDoctrine()->getManager();
        $fields = $this->renameField($request->request->all());
        $skill = new Skill();
        $skill->name = $fields['name'];
        $skill->description = $fields['description'];
        $skill->tools = $fields['tools'];

        $now = new DateTime();
        $skill->updated_at = $now;
        $skill->created_at = $now;

        $entityManager->persist($skill);
        $entityManager->flush();

        return $this->redirectToRoute('panel.get.skills');
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $skill = $entityManager->getRepository(Skill::class)->find($id);

        return $this->render('panel/skills/edit.html.twig' , [
            'skill' => $skill
        ]);
    }

    /**
     * @param Request $request
     * @param Skill $skill
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function updateAction(Request $request , Skill $skill)
    {
        $validator = $this->get('validator');
        $errors = $validator->validate($skill);
        $entityManager = $this->getDoctrine()->getManager();
        $fields = $this->renameField($request->request->all());
        $skill->name = $fields['name'];
        $skill->description = $fields['description'];
        $skill->tools = $fields['tools'];
        $skill->updated_at = new DateTime();

        $entityManager->persist($skill);
        $entityManager->flush();

        if (count($errors) > 0) {
            /*
             * Uses a __toString method on the $errors variable which is a
             * ConstraintViolationList object. This gives us a nice string
             * for debugging.
             */
            $errorsString = (string) $errors;

            return new Response($errorsString);
        }

        return $this->redirectToRoute('panel.get.skills');
    }

    /**
     * @param Skill $skill
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Skill $skill)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($skill);
        $entityManager->flush();

        return $this->redirectToRoute('panel.get.skills');
    }

    /**
     * @param $request
     * @return array
     */
    private function renameField($request)
    {
        return [
            'name' => $request['name'] ,
            'is_active' => $request['is_active'] ?? false ,
            'description' => $request['description'] ,
            'tools' => $request['tools'] ,
        ];
    }
}