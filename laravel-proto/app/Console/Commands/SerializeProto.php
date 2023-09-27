<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Foo\Bar\MyMessage;

class SerializeProto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:serialize-proto';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $msg = new MyMessage();
        $msg->setName("Ronco");
        $fh = fopen('../hello_proto.bin', "wb");
        fwrite($fh, $msg->serializeToString());
        fclose($fh);
    }
}
