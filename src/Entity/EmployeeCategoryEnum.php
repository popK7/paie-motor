<?php

namespace App\Entity;

enum EmployeeCategoryEnum: string
{
    case EXECUTIVE = 'Cadre';
    case WORKER = 'Ouvrier';
}
