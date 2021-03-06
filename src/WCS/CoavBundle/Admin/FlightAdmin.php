<?php
/**
 * Created by PhpStorm.
 * User: m21
 * Date: 18/10/16
 * Time: 10:26
 */

namespace WCS\CoavBundle\Admin;

use Doctrine\ORM\Mapping\Entity;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use WCS\CoavBundle\WCSCoavBundle;

class FlightAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('departure')
            ->add('arrival')
            ->add('freeSeats')
            ->add('pilot')
            ->add('takeofTime', 'datetime')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('departure')
            ->add('arrival')
            ->add('freeSeats')
            ->add('pilot')
            ->add('takeofTime')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('departure')
            ->addIdentifier('arrival')
            ->add('freeSeats')
            ->add('pilot')
            ->add('takeofTime')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('departure')
            ->add('arrival')
            ->add('freeSeats')
            ->add('pilot')
            ->add('takeofTime')
            ->add('plane_model_id')
            ->add('departures_id')
            ->add('arrivals_id')
        ;
    }
}

