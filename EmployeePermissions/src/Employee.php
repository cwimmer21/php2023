<?php
namespace Cwimmer25\EmployeePermissions;

class Employee implements IEmployeePermission{
    public function level1(): string
    {
       return "Hallo";
    }
}