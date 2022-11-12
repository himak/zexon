<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * @return array
     */
    public function index(): array
    {
        $users = (new User())->getUsers();

        return  $this->getActiveUsersSortByScore($users, 500);
    }

    /**
     * Filtered only active Users
     *
     * @param array $users
     * @return array
     */
    public function getActiveUsers(array $users): array
    {
        $collection = collect($users);

        $filtered = $collection->where('active', true);

        return $filtered->values()->all();
    }

    /**
     * Filtered Users by Score
     *
     * @param array $users
     * @param int $score
     * @return array
     */
    public function sortUsersByScore(array $users, int $score = 500): array
    {
        $collection = collect($users);

        $filtered = $collection->where('score', '>=', $score)
            ->sortBy('score');

        return $filtered->values()->all();
    }

    /**
     * Filtered only Active Users and sort by Score
     *
     * @param array $users
     * @param int $score
     * @return array
     */
    public function getActiveUsersSortByScore(array $users, int $score): array
    {
        $filtered = $this->sortUsersByScore($this->getActiveUsers($users), $score);

        return $filtered;
    }
}
