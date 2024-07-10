<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array

    {
        return  [
            [
                'id' => 1,
                'title' => 'Web Developer',
                'salary' => '$50,000',
            ], [
                'id' => 2,
                'title' => 'Web Designer',
                'salary' => '$40,000',
            ], [
                'id' => 3,
                'title' => 'Programmer',
                'salary' => '$50,000',
            ], [
                'id' => 4,
                'title' => 'Teacher',
                'salary' => '$40,000',
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job =  Arr::first(Job::all(), fn ($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        } else {
            return $job;
        }
    }
}
