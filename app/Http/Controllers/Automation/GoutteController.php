<?php
namespace App\Http\Controllers\Automation;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Goutte\Client as GoutteClient;
use GuzzleHttp\Client as GuzzleClient;
use Symfony\Component\DomCrawler\Crawler;

class GoutteController extends Controller
{
    protected $baseUrl;

    public function test()
    {
        $nodes=[];
        $goutteClient = new GoutteClient();
        $guzzleClient = new GuzzleClient(array('timeout' => 60));
        $goutteClient->setClient($guzzleClient);
        $crawler = $goutteClient->request('GET', 'http://localhost/');
        $html = $crawler->filter('a')->each(function(Crawler $crawl, $i)
        {
            return $crawl->getNode(0);
        });

        var_dump('html', $html);

        $text = $crawler->filter('a')->each(function(Crawler $crawl, $i)
        {
            return $crawl->text();
        });

        var_dump('text', $text);

        echo $crawler->filter('li')->text();
        echo $crawler->filter('div')->text();
        echo $crawler->filter('span')->text();
        echo $crawler->filter('strong')->text();




    }

    public function printNodeText($element)
    {
        if (!empty($element->text()))
        {
            echo $element->text();
            return;
        }

        if (is_array($element)) {
            $this->printNodeText($element);
        }

        return;
    }

    public function setupPage($case)
    {

    }
}