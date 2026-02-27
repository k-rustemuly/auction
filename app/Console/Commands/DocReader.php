<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use LukeMadhanga\DocumentParser;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;

class DocReader extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:doc-reader';

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
        $this->info(getPurchasePrice('https://etp.adilet.gov.kz/files/get/3WqTGEnMWFtdd2LRqXiz54Aw5n46wnCoFG86SFuDPBkUkTdp1kU7rqJCXHHjgwTqTfJsG7qKc66B5rawoAN3wjgp4Dm8Skpp8MwPGxpqBT8VXxQdReeFYU8cPqmd2/%D0%92%D1%8B%D0%BF%D0%B8%D1%81%D0%BA%D0%B0%20%D0%B8%D0%B7%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%D0%B0%20%D0%B8%D1%82%D0%BE%D0%B3%D0%BE%D0%B2.doc'));
        $this->info(getPurchasePrice('https://etp.adilet.gov.kz/files/get/3WqTGEnMWFtdd2LRqXiz54Aw5n46wnCoFG86SFt5heFSoQTg9CmgdmbQLWWkb5xhGH9iUZJmM1ES4zdejYfT7hCuekr5ASnXb8YTowzNdipWT7nhpJHdVsJxu5cgS/%D0%92%D1%8B%D0%BF%D0%B8%D1%81%D0%BA%D0%B0%20%D0%B8%D0%B7%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%D0%B0%20%D0%B8%D1%82%D0%BE%D0%B3%D0%BE%D0%B2.doc'));
        $this->info(getPurchasePrice('https://etp.adilet.gov.kz/files/get/3WqTGEnMWFtdd2LRqXiz54Aw5n46wnCoFG86SFt4evi1B1D3ZmvNb6Ei6gScnVWdQK9Uuq6u2xDw9nqJwqLSHfUuKQjV3k8hJ1ar3fYsZyLsqHAvBmbMH6ktPDQBJ/%D0%92%D1%8B%D0%BF%D0%B8%D1%81%D0%BA%D0%B0%20%D0%B8%D0%B7%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%D0%B0%20%D0%B8%D1%82%D0%BE%D0%B3%D0%BE%D0%B2.doc'));
        $this->info(getPurchasePrice('https://etp.adilet.gov.kz/files/get/3WqTGEnMWFtdd2LRqXiz54Aw5n46wnCoFG86SFt486QUgSTc5e2zBa3DoDGxcA9Gm6yJJ56Sk5EKysEBetWeFTQfSnrU4Wwo7hjn5ScfDT1xzHY8yG2XAmjiTbkkA/%D0%92%D1%8B%D0%BF%D0%B8%D1%81%D0%BA%D0%B0%20%D0%B8%D0%B7%20%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA%D0%BE%D0%BB%D0%B0%20%D0%B8%D1%82%D0%BE%D0%B3%D0%BE%D0%B2.doc'));
    }
}
