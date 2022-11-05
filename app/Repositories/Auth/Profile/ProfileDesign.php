<?php

namespace App\Repositories\Auth\Profile;

use LaravelEasyRepository\Repository;

interface ProfileDesign extends Repository {
    public function index();
    public function CurrentPassword($param);
    public function updatePassword($param, $id);
}