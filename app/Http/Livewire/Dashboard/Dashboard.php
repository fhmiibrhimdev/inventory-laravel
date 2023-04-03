<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\DataBarang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function render()
    {
        if( Auth::user()->hasRole('admin') ){
            
            $tersedia = DataBarang::select(DB::raw('COUNT(id) AS tersedia'))->first()->tersedia;
            $stok_sedikit = DataBarang::select(DB::raw('COUNT(id) AS stok_sedikit'))->where('stock', '<=', '5')->where('stock', '>=', '1')->first()->stok_sedikit;
            $stok_tersedia = DataBarang::select(DB::raw('COUNT(id) AS stok_tersedia'))->where('stock', '>', '5')->first()->stok_tersedia;
            $stok_habis = DataBarang::select(DB::raw('COUNT(id) AS stok_habis'))->where('stock', '0')->first()->stok_habis;

            return view('livewire.dashboard.dashboard-admin', compact('tersedia', 'stok_sedikit', 'stok_tersedia', 'stok_habis'))
            ->extends('layouts.apps', ['title' => 'Dashboard']);
        } else if ( Auth::user()->hasRole('user') ) {
            return view('livewire.dashboard.dashboard-user')
            ->extends('layouts.apps', ['title' => 'Dashboard']);
        }

    }
}
