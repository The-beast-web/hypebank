<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceRevenue;
use App\Models\Transaction;
use App\Models\User;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        $this->seo()->setTitle('Dashboard');
        $holding = Transaction::all();
        $user = User::all();

        $trend = Trend::model(User::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        $chart['stats'] = $trend->map(fn (TrendValue $value) => $value->aggregate)->toArray();
        $chart['labels'] = $trend->map(fn (TrendValue $value) => $value->date)->toArray();


        return view('admin.index', $chart, compact(['user', 'holding']));
    }
}
