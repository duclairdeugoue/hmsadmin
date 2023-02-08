<?php

namespace App\Validation;

use App\Models\UserModel;

class Authrules
{
    public function validateUser(string $str, string $fields, array $data)
    {
        $user_model = new UserModel();
        $user = $user_model->where('user_email', $data['user_email'])->first();

        if (!$user) {
            return false;
        }

        return password_verify($data['user_password'], $user['user_password']);
    }
}
