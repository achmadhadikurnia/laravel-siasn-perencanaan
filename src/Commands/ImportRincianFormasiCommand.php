<?php

namespace Kanekescom\Siasn\Perencanaan\Commands;

use Illuminate\Console\Command;
use Kanekescom\Siasn\Perencanaan\Imports\RincianFormasiImport;
use Kanekescom\Siasn\Perencanaan\Models\RincianFormasi;

class ImportRincianFormasiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'siasn-perencanaan:import-rincian-formasi
                            {filePath : File path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import rincian formasi to database via csv file exported from SIASN Perencanaan';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $start = now();
        $path_file = $this->argument('filePath');

        RincianFormasi::truncate();

        (new RincianFormasiImport)->withOutput($this->output)->import($path_file);

        $this->comment("Processed in {$start->shortAbsoluteDiffForHumans(now(), 1)}");

        return self::SUCCESS;
    }
}
