<?php

namespace Kanekescom\Siasn\Perencanaan\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Perencanaan\Imports\FormasiK2Import;
use Kanekescom\Siasn\Perencanaan\Models\FormasiK2;

class ImportFormasiK2Command extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-perencanaan:import-formasi-k2
                            {filePath : File path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import formasi k2 to database via csv file from instansi';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $path_file = $this->argument('filePath');

        FormasiK2::truncate();

        (new FormasiK2Import)->withOutput($this->output)->import($path_file);

        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
