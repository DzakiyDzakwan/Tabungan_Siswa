<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    
    public function index() {

        $id = auth()->user()->id;

        $historySaldo = Transaction::where('siswa', $id)->skip(0)->take(5)->orderBy('transaction_date', 'asc')->paginate(5);

        $saldoKeluar = Transaction::where('keterangan', 'out')->where('siswa', $id)->sum('saldo');

        $saldoMasuk = Transaction::where('keterangan', 'in')->where('siswa', $id)->sum('saldo');

        $totalSaldo = $saldoMasuk - $saldoKeluar;

        /* dd($totalSaldo); */
        return view('user.transaction', [
            'saldoTotal'=>$totalSaldo,
            'saldoKeluar'=>$saldoKeluar,
            'historySaldo'=>$historySaldo
        ]);
    }

}
