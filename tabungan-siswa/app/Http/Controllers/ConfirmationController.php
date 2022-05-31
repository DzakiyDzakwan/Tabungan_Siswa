<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Confirmation;
use App\Models\Siswa;
use App\Models\Admin;
use App\Models\Transaction;

class ConfirmationController extends Controller
{
    public function index() {

        $id = auth()->user()->id;

        if(auth()->user()->role === 'admin') {

            $history = Confirmation::join('siswas', 'confirmations.siswa', '=', 'siswas.NIS')->paginate(5);

            return view('admin.adminConfirmation', [
                'history'=>$history
            ]);
            
        } else {

            $history = Confirmation::join('siswas', 'confirmations.siswa', '=', 'siswas.NIS')->join('users', 'siswas.user', '=', 'users.id')->crossJoin('admins', 'confirmations.admin', 'admins.admin_id')->select('confirmations.confirmation_id', 'confirmations.transfer_date', 'confirmations.transfer_date', 'confirmations.saldo' ,'confirmations.jenis_transaksi', 'confirmations.bukti', 'confirmations.status', 'admins.nama')->where('users.id', $id)->paginate(5);
            $total = Confirmation::join('siswas', 'confirmations.siswa', '=', 'siswas.NIS')->join('users', 'siswas.user', '=', 'users.id')->where('users.id', $id)->count();
            $accepted = Confirmation::where('status', 'accepted')->count();
            $rejected = Confirmation::where('status', 'rejected')->count();
            $pending = Confirmation::where('status', 'pending')->count();

            /* dd($history); */

            return view('user.confirmation', [
                'total' => $total,
                'accepted' => $accepted,
                'rejected' => $rejected,
                'pending' => $pending,
                'history' => $history
            ]);
        }
    }

    public function store(Request $request) {


        $id = auth()->user()->id;

        $nis = Siswa::join('users', 'siswas.user', '=', 'users.id')->select('siswas.NIS')->where('users.id', $id)->get()[0]['NIS'];

        /* dd($request->file('bukti')); */
        
        $validatedData = $request->validate([
            'bukti' => 'mimes:png,jpg,jpeg|max:10240',
        ]);

        if($request->hasFile('bukti')){
            $fileName = $request->file('bukti')->getClientOriginalName();
            $path = $request->file('bukti')->storeAs('bukti-transaksi',   $fileName, 'public');
            $validatedData['bukti'] = '/storage/' . $path;
        }

        Confirmation::create([

            'saldo'=>$request->saldo,
            'transfer_date'=>$request->transfer_date,
            'status'=>'pending',
            'jenis_transaksi'=>$request->jenis,
            'bukti'=>$validatedData['bukti'],
            'siswa'=>$nis,

        ]);

        return back()->with('success', 'Data Berhasil dibuat');

        
    }

    public function update() {

    }

    public function destroy($id) {

        Confirmation::where('confirmation_id', $id)->delete();

        return back()->with('success', 'Data Berhasil dihapus');

    }

    public function accept($id) {

        $userId = auth()->user()->id;

        $adminId = Admin::select('admin_id')->where('user', $userId)->get()[0]['admin_id'];

        Confirmation::where('confirmation_id', $id)->update([

            'status'=>'accepted',
            'admin'=>$adminId

        ]);

        $confirm = Confirmation::where('confirmation_id', $id)->get()[0];

        Transaction::create([

            'saldo'=>$confirm->saldo,
            'transaction_date'=>$confirm->transfer_date,
            'keterangan'=>'in',
            'siswa'=>$confirm->siswa,
            'admin'=>$adminId

        ]);

        return back()->with('toast_success', 'Confirmation Accepted');

    }

    public function reject($id) {

        $userId = auth()->user()->id;

        $adminId = Admin::select('admin_id')->where('user', $userId)->get()[0]['admin_id'];

        Confirmation::where('confirmation_id', $id)->update([

            'status'=>'rejected',
            'admin'=>$adminId

        ]);

        return back()->with('toast_error', 'Confirmation Rejected');

        /* dd($adminId); */

    }
}
