<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MainBundle\Block;

use Sonata\BlockBundle\Block\Service\BlockServiceInterface;
use Sonata\CoreBundle\Model\Metadata;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\BlockBundle\Block\BlockContextInterface;


use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Validator\ErrorElement;
use Sonata\BlockBundle\Block\Service\AbstractBlockService;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Sonata\BlockBundle\Block\BaseBlockService;

/**
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
class StatsBlockService extends AbstractBlockService
{
    /**
     * {@inheritdoc}
     */
    public function configureSettings(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'title' => 'Insert the rss title',
            'template' => 'MainBundle:Block:block_core_stats.html.twig',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function buildEditForm(FormMapper $formMapper, BlockInterface $block)
    {
        $formMapper->add('settings', 'sonata_type_immutable_array', array(
            'keys' => array(
                array('title', 'text', array('required' => false)),
            ),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
    {
        $errorElement
            ->with('settings[title]')
            ->assertNotNull(array())
            ->assertNotBlank()
            ->assertLength(array('max' => 50))
            ->end();
    }
    public function __construct($type,$templating,$em,$authChecker,$secureToken)
    {
        $this->type = $type;
        $this->templating = $templating;
        $this->em = $em;
        $this->authChecker = $authChecker;
        $this->secureToken = $secureToken;

    }

    /**
     * {@inheritdoc}
     */
    public function execute(BlockContextInterface $blockContext, Response $response = null)
    {
        // RECUPERATION DE L'UTILISATEUR COURANT
        $user = $this->secureToken->getToken()->getUser();
        // REQUETE POUR STATISTIQUES DASHBOARD EN FONCTION DU ROLE DE L'UTILISATEUR
        if($this->authChecker->isGranted('ROLE_VISITEUR')){
            $settings = $blockContext->getSettings();
            $date=date("Y-m-d");
            $data = $this->em->getRepository("MainBundle:RapportVisite")->findByUserYearToNow($date,$user->getId());
        }
        if($this->authChecker->isGranted('ROLE_DELEGUE')){
            $settings = $blockContext->getSettings();
            $date=date("Y-m-d");
            $data = $this->em->getRepository("MainBundle:RapportVisite")->findByRegionYearToNow($date,$user->getUsrREGION());
        }
        if($this->authChecker->isGranted('ROLE_RESPONSABLE')){
            $settings = $blockContext->getSettings();
            $date=date("Y-m-d");
            $data = $this->em->getRepository("MainBundle:RapportVisite")->findBySecteurYearToNow($date,$user->getUsrSECTEUR());
        }
        // TRAITEMENT DU RESULTAT
        $count=array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($data as $rap ){
            $dateRap=$rap->getRapDate();
            $dateRap=$dateRap->format('Y-m-d');
            $dateExplode=explode("-",$dateRap);
            $mois=ltrim($dateExplode[1],'0')-1;
            $count[$mois]=$count[$mois]+1;
        }
        // PARAMETRAGE DU GRAPHIQUE
        $series = array(
            array("name" => "Nombre de rapport",    "data" => $count)
        );
        $categories = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Statistiques annuel :');
        $ob->xAxis->title(array('text'  => "Mois"));
        $ob->xAxis->categories($categories);
        $ob->yAxis->title(array('text'  => "Nombre de rapports"));
        $ob->series($series);
        // RENDER TEMPLATE AVEC GRAPHIQUE
        return $this->renderResponse($blockContext->getTemplate(), array(
            'user'=>$user,
            'ob' => $ob,
            'block' => $blockContext->getBlock(),
            'settings' => $settings,
        ), $response);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockMetadata($code = null)
    {
        return new Metadata($this->getName(), (!is_null($code) ? $code : $this->getName()), false, 'SonataBlockBundle', array(
            'class' => 'fa fa-rss-square',
        ));
    }
}
