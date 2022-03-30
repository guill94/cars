<?php

namespace App\Controller\Admin;

use App\Entity\Car;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;

class CarCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Car::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('id_model'),
            AssociationField::new('id_energy_type'),
            AssociationField::new('id_color'),
            TextField::new('fiscal_power'),
            TextField::new('real_power'),
            TextField::new('registration'),
            MoneyField::new('price')->setCurrency('EUR'),
            BooleanField::new('booking')->renderAsSwitch(true)
        ];
    }
    
}
