<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function eventsData()
    {
        return [
            [
                'nama' => 'Norebang Battle Vol.1',
                'tanggal' => '2025-10-30',
                'lokasi' => 'Seoul Room, Malang',
                'tema' => '2nd Gen K-Pop Hits',
                'hadiah' => 'Album BTS + Voucher Karaoke'
            ],
            [
                'nama' => 'K-Fan Sing Fest',
                'tanggal' => '2025-11-10',
                'lokasi' => 'SM Tower, Jakarta',
                'tema' => 'NewJeans & Friends',
                'hadiah' => 'Lightstick BLACKPINK'
            ],
            [
                'nama' => 'Norebang Idol Night',
                'tanggal' => '2025-12-05',
                'lokasi' => 'Daegu Room, Surabaya',
                'tema' => 'Boy Group Edition',
                'hadiah' => 'Album SEVENTEEN'
            ],
        ];
    }

    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50',
            'password' => 'required|string'
        ]);

        $username = $request->input('username');

        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        $events = $this->eventsData();
        $nearest = collect($events)->sortBy('tanggal')->first();

        return view('dashboard', compact('username', 'events', 'nearest'));
    }

    public function pengelolaan()
    {
        $events = $this->eventsData();
        return view('pengelolaan', compact('events'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        $profile = [
            'username' => $username ?? 'Desikartikaa',
            'fandom' => 'MULFAN',
            'lagu_favorit' => 'Don’t Go - EXO'
        ];

        return view('profile', compact('profile'));
    }
}
