<?php

namespace App\Actions\DavStarterProject;

trait PasswordValidationRules
{
    /**
     * Gunakan Password Validaton Rules 
     * agar semua validasi password sama
     *
     * @return array
     */
    protected function passwordValidation()
    {
        return ['required', 'string', 'confirmed', 'min:8'];
    }
}
