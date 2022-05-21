<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Str;

class ReadApi extends Command
{
    protected $signature = 'read-api';
    protected $description = 'Command reads data from API';

    public function handle()
    {
        $this->info("Text from command");

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
        }

        dd($nodeValues);


        return 0;
    }
}
