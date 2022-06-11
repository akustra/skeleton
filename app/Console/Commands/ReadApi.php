<?php

namespace App\Console\Commands;

use App\Models\Link;
use Illuminate\Console\Command;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Str;

class ReadApi extends Command
{
    protected $signature = 'read-api';
    protected $description = 'Command reads data from API';

    public function handle()
    {
        $this->info("Running command read-api");

        $response = \Http::get('https://onet.pl');

        if ($response->failed())
            return 1;

        $body = $response->body();

        $crawler = new Crawler($body);

        $nodeValues = $crawler->filter('a')
            ->each(function (Crawler $node, $i) {
                return $node->extract(['_name', '_text', 'href']);
            });

        $filtered = [];
        foreach ($nodeValues as $nodeValue) {
            $filtered[] = [Str::squish($nodeValue[0][1]), Str::squish($nodeValue[0][2])];
        } // ~474 linków

        // $fileteredInner = [];
        // foreach($filtered as $array) {
        //     if(Str::startsWith($array[1], 'https://www.onet.pl')) {
        //         $fileteredInner[] = [$array[0], $array[1]];
        //     }
        // } // ~145 linków

        $filteredInner = \array_filter($filtered, function ($item) {
            return Str::startsWith($item[1], 'https://www.onet.pl');
        });

        foreach ($filteredInner as $item) {
            Link::firstOrCreate([
                'url' => $item[1],
                'title' => $item[0]
            ]);
        }

        return 0;
    }
}
