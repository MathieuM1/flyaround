<?php
/**
 * Created by PhpStorm.
 * User: m21
 * Date: 17/10/16
 * Time: 21:28
 */

// src/WCS/CoavBundle/Admin/TerrainAdmin.php

namespace WCS\CoavBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class TerrainAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('icao')
            ->add('latitude')
            ->add('longitude')
            ->add('city')
            ->add('country')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('icao')
            ->add('city')
            ->add('country')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('icao')
            ->add('city')
            ->add('country')
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
            ->add('id')
            ->add('name')
            ->add('icao')
            ->add('latitude')
            ->add('longitude')
            ->add('city')
            ->add('country')
        ;
    }
}