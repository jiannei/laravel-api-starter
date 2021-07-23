<?php

namespace App\Console\Commands;


use App\Repositories\Enums\ScheduleEnum;
use App\Repositories\Models\User;

class GithubTrending extends \Jiannei\Schedule\Laravel\Commands\Command
{
    protected $name = ScheduleEnum::GITHUB_TRENDING;

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("爬取 Github Trending 成功");

        User::query()->create([
            'name' => '美特斯',
            'email' => '123456789@qq.com',
            'password' => bcrypt('password'),
        ]);

        return 0;
    }
}
