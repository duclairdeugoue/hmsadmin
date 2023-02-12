<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'user_email' => 'required|min_length[6]|max_length[50]|valid_email',
                'user_password' => 'required|min_length[8]|max_length[255]|validateUser[user_email,user_password]',
            ];

            $errors = [
                'user_password' => [
                    'validateUser' => "Email or Password didn't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                return view('auth/login', [
                    "validation" => $this->validator,
                ]);
            } else {
                try {
                    $model = new UserModel();
                    $user = $model->where('user_email', $this->request->getVar('user_email'))
                        ->first();
                } catch (\Throwable $th) {
                    echo $th;
                    // return view('auth/login', [
                    //     "validation" => "No connnection to the DB"
                    // ]);
                }

                // Stroing session values
                $this->setUserSession($user);

                // Redirecting to dashboard after login
                if ($user['user_role'] == "admin") {

                    return redirect()->to(base_url('/dashboard'));
                } elseif ($user['user_role'] == "customer") {

                    return redirect()->to(base_url('/index'));
                }
            }
        }

        return view('auth/login');
    }

    private function setUserSession($user)
    {
        $data = [
            'user_id' => $user['user_id'],
            'user_name' => $user['user_name'],
            'user_email' => $user['user_email'],
            'isLoggedIn' => true,
            "user_role" => $user['user_role'],
        ];

        session()->set($data);
        return true;
    }

    public function register()
    {
        echo view('auth/register');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('auth');
    }

    public function forgetPassword()
    {
        echo view('auth/forget_password');
    }
}
