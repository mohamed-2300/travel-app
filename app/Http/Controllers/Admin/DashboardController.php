<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Activity;
use Carbon\Carbon;  // if you used Carbon


class DashboardController extends Controller
{
    public function index()
    {
        // Récupère le nombre par mois (1=janvier … 12=décembre)
        $agencyData = Agency::selectRaw('MONTH(created_at) as m, count(*) as c')
            ->groupBy('m')
            ->pluck('c','m')
            ->toArray();
        $productData = Product::selectRaw('MONTH(created_at) as m, count(*) as c')
            ->groupBy('m')
            ->pluck('c','m')
            ->toArray();

        // Labels (mois abrégés)
        $months = collect(range(1,12))
            ->map(fn($m)=>\Carbon\Carbon::create()->month($m)->format('M'))
            ->toArray();

        // Remplit zéro pour les mois sans données
        $agencyCounts  = array_map(fn($m)=> $agencyData[$m]  ?? 0, range(1,12));
        $productCounts = array_map(fn($m)=> $productData[$m] ?? 0, range(1,12));

        // Comptages pour les cartes
        $agenciesCount = Agency::count();
        $productsCount = Product::count();

        // recent 5 activities
        $recentActivities = Activity::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'agenciesCount','productsCount',
            'months','agencyCounts','productCounts',
            'recentActivities'       // ← add this
        ));
    }
}
