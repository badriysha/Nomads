<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Transaction;
use App\TransactionDetail;
use App\TravelPackage;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['details', 'travel_package', 'user'])->findOrFail($id);
        return view('pages.checkout', [
            'item' => $item
        ]);
    }

    public function process(Request $request, $id) {
        $travel_package = TravelPackage::findOrFail($id);
        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transaction_total' => $travel_package->price,
            'transaction_status' => 'IN_CART'
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => false,
            'doe_passport' => Carbon::now()->addYear(5)
        ]);

        return redirect()->route('checkout', $transaction->id);
    }

    public function create(Request $request, $id) {
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required'
        ]);
        $data = $request->all();
        $data['transactions_id'] = $id;
        TransactionDetail::create($data);

        $transaction = Transaction::with(['travel_package'])->findOrFail($id);
        if($request->is_visa) {
            $transaction->transaction_total += 89;
            $transaction->additional_visa += 89;
        }
        $transaction->transaction_total += $transaction->travel_package->price;
        $transaction->save();

        return redirect()->route('checkout', $id);
    }

    public function remove(Request $request, $detail_id) {
        $item = TransactionDetail::findOrFail($detail_id);

        $transaction = Transaction::with(['travel_package', 'details'])->findOrFail($item->transactions_id);
        if($item->is_visa) {
            $transaction->transaction_total -= 89;
            $transaction->additional_visa -= 89;
        }
        $transaction->transaction_total -= $transaction->travel_package->price;
        $transaction->save();
        $item->delete();

        return redirect()->route('checkout', $item->transactions_id);
    }

    public function success(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = 'PENDING';
        $transaction->save();
        
        return view('pages.success');
    }
}
