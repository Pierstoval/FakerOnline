<?php

namespace App\Controller;

use App\Form\FakerType;
use Faker\Factory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FakerController extends AbstractController
{
    /**
     * @Route("/", name="faker")
     */
    public function index(): Response
    {
        $form = $this->createForm(FakerType::class, [
            'language' => Factory::DEFAULT_LOCALE,
            'how_many' => 10,
        ]);

        return $this->render('faker/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/fake/", name="fake_submit")
     */
    public function submit(Request $request): Response
    {
        $form = $this->createForm(FakerType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $language = $request->request->get('faker')['language'];

            $faker = Factory::create($language);

            $type = $form->get('type')->getData();

            $data = 'Results:<br>';

            $howMany = $form->get('how_many')->getData();
            if ($howMany < 0) {
                $howMany = 1;
            }

            for ($i = 0; $i < $howMany; $i++) {
                try {
                    $faked = $faker->{$type};
                } catch (\Exception $e) {
                    return new Response(
                        sprintf('Invalid faker type "%s" for language "%s". Maybe try another language?', $type, $language), 400);
                }

                if ($faked instanceof \DateTimeInterface) {
                    $faked = $faked->format('Y-m-d H:i:s');
                } elseif (\is_array($faked)) {
                    $faked = implode(' ', $faked);
                } elseif (\is_bool($faked)) {
                    $faked = $faked ? 'true' : 'false';
                } elseif (null === $faked) {
                    $faked = 'null';
                }

                if (in_array($type, [
                    'hexcolor',
                    'rgbCssColor',
                    'safeColorName',
                    'colorName',
                    'hslColor',
                ])) {
                    $faked = '<span style="background: '.$faked.'; border: solid 1px black; display: inline-block; height: 15px; width: 15px;></span> '.$faked;
                } elseif ('rgbcolor' === $type) {
                    $faked = '<span style="background: rgb('.$faked.'); border: solid 1px black; display: inline-block; height: 15px; width: 15px;></span> '.$faked;
                }

                $data .= '<br>'.$faked;
            }

            return new Response($data);
        }

        return new Response('KO', 400);
    }
}
