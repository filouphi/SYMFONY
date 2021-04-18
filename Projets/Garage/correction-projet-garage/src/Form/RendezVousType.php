<?php

namespace App\Form;

use App\Entity\RendezVous;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class RendezVousType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
        ->add('creneauxRdv',DateTimeType::class,[
            "date_widget"=>"single_text"
            ])
            ->add('description')
            ;
        }
        public function configureOptions(OptionsResolver $resolver)
    {
            $resolver->setDefaults([
                'data_class' => RendezVous::class,
            ]);
    }
}
          
            

