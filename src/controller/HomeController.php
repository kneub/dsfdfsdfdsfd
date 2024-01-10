<?php
namespace App\Controller;

use App\Repository\DanseuseRepository;
use Carbon\Carbon;
use Carbon\CarbonInterval;

class HomeController
{
    public function index()
    {
        $now = Carbon::now();
        echo "<br>".$now->sub(CarbonInterval::week());
        echo "<br>".$now->sub(CarbonInterval::month());
        echo "<br>".$now->sub(CarbonInterval::months(3));
        echo "<br>".$now->sub(CarbonInterval::year());
    }
}