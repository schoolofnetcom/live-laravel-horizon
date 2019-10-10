<?php

namespace App\Console\Commands;

use App\Jobs\RenderVideo;
use App\Jobs\SendMailJob;
use App\Video;
use Illuminate\Console\Command;

class StartJobsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start:jobs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dispatch job on queues';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        foreach (range(1, 10) as $v) {
            SendMailJob::dispatch()->onQueue('emails');
            RenderVideo::dispatch(Video::find(rand(1, 3)))->onQueue('videos');
            RenderVideo::dispatch(Video::find(rand(1, 3)))->onQueue('videos');
        }
    }
}
