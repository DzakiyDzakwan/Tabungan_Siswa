<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Siswa;
use App\Models\User;

class TransactionController extends Controller
{
    
    public function admin() {

            $id = auth()->user()->id;

            $siswa = Siswa::join('users', 'users.id', '=', 'siswas.user')->get();

            $historySaldo = Transaction::join('siswas', 'transactions.siswa', '=', 'siswas.NIS')->join('admins', 'transactions.admin', '=', 'admins.admin_id')->select('transactions.transaction_date', 'siswas.nama AS siswa', 'transactions.saldo', 'admins.nama AS admin', 'transactions.keterangan')->orderBy('transaction_date', 'desc')->paginate(5);
            $saldoKeluar = Transaction::where('keterangan', 'out')->sum('saldo');
            $saldoMasuk = Transaction::where('keterangan', 'in')->sum('saldo');

            $totalSaldo = $saldoMasuk - $saldoKeluar;

            /* dd($historySaldo->link()); */

            /* dd($historySaldo); */
            return view('admin.transaction', [
                'saldoTotal'=>$totalSaldo,
                'saldoKeluar'=>$saldoKeluar,
                'saldoMasuk'=>$saldoMasuk,
                'historySaldo'=>$historySaldo,
                'siswa' => $siswa
            ]);

        
    }

    public function siswa() {

            $id = auth()->user()->id;

            $NIS = Siswa::select('NIS')->where('user', $id)->get()[0]["NIS"];

            $historySaldo = Transaction::where('siswa', $NIS)->join('admins', 'transactions.admin', '=', 'admins.admin_id')->orderBy('transaction_date', 'asc')->paginate(5);

            $saldoKeluar = Transaction::where('keterangan', 'out')->where('siswa', $NIS)->sum('saldo');

            $saldoMasuk = Transaction::where('keterangan', 'in')->where('siswa', $NIS)->sum('saldo');

            $totalSaldo = $saldoMasuk - $saldoKeluar;

            /* dd($historySaldo); */

            return view('user.transaction', [
                'saldoTotal'=>$totalSaldo,
                'saldoKeluar'=>$saldoKeluar,
                'historySaldo'=>$historySaldo,
            ]);
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
