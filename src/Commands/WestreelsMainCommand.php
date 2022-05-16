<?php

namespace Westreels\WestreelsMain\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class WestreelsMainCommand extends Command
{
    protected $signature = 'westreels-main {command_id*}';
    public $description = 'My command';
    public function handle(): int
    {

    $arguments = $this->argument('command_id');

    foreach($arguments as $arg) {

        if($arg === 'dbcount-gamelist_pragmatic')
        {
            $count = DB::table('gamelist_pragmatic')->count();
            $this->comment($count.' pragmatic games found');
        }

        if($arg === 'dbtruncate-gamelist_pragmatic')
        {
            $truncate = DB::table('gamelist_pragmatic')->truncate();
            $this->comment('All done');
        }

        if($arg === 'dbimport-pragmaticplay_gamelist_data.sql')
        {
            $import = DB::unprepared(file_get_contents(config('gameconfig.raw_db_storage').'/pragmaticplay_gamelist_data.sql'));
            $this->comment('All done');
        }
}


        return self::SUCCESS;
    }
}
