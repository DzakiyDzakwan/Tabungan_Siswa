<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Siswa;
use App\Models\User;

class TransactionController extends Controller
{
    
    public function index() {

        $id = auth()->user()->id;

        if(auth()->user()->role === "siswa") {

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

        } else {

            $siswa = Siswa::join('users', 'users.id', '=', 'siswas.user')->get();

            $historySaldo = Transaction::join('siswas', 'transactions.siswa', '=', 'siswas.NIS')->join('admins', 'transactions.admin', '=', 'admins.admin_id')->join('users', 'siswas.user', '=', 'users.id')->skip(0)->take(5)->orderBy('transaction_date', 'asc')->paginate(5);
            $saldoKeluar = Transaction::where('keterangan', 'out')->sum('saldo');
            $saldoMasuk = Transaction::where('keterangan', 'in')->sum('saldo');

            $totalSaldo = $saldoMasuk - $saldoKeluar;

            /* dd($totalSaldo); */
            return view('admin.transaction', [
                'saldoTotal'=>$totalSaldo,
                'saldoKeluar'=>$saldoKeluar,
                'historySaldo'=>$historySaldo,
                'siswa' => $siswa
            ]);

        }

        
    }

    public function store(Request $request) {

        $id = auth()->user()->id;

        $admin = User::select('admins.admin_id')->join('admins', 'admins.user', '=', 'users.id')->where('admins.user', $id)->get()[0]['admin_id'];

        $validate = $request->validate([

            'saldo'=> "required",

        ]);

        Transaction::create([

            'saldo'=>$request->saldo,
            'transaction_date'=>$request->transaction_date,
            'keterangan'=>$request->keterangan,
            'siswa'=>$request->siswa,
            'admin'=>$admin

        ]);

        return back()->with('success', 'Transaksi Berhasil');

    }

}
