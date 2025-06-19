<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaystackController extends Controller
{
    public function redirectToGateway(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'amount' => 'required|numeric|min:1',
        ]);

        $amount = $validated['amount'] * 100; // convert to Kobo
        $email = $validated['email'];

         $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))->post(env('PAYSTACK_PAYMENT_URL') . '/transaction/initialize', [
        'email' => $request->email,
        'amount' => $amount,
        'callback_url' => route('paystack.callback'),
        'metadata' => [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'campaign' => $request->campaign,
        ],
    ]);
        if ($response->successful()) {
            return redirect($response->json()['data']['authorization_url']);
        } else {
            return back()->with('error', 'Paystack initialization failed.');
        }
    }

    public function handleGatewayCallback(Request $request)
    {
        $reference = $request->query('reference');

        $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))->get(env('PAYSTACK_PAYMENT_URL') . '/transaction/verify/' . $reference);

        if ($response->successful() && $response['data']['status'] === 'success') {
            // You can log or save the transaction
            return redirect('/')->with('success', 'Payment successful!');
        }

        return redirect('/')->with('error', 'Payment failed or canceled.');
    }
}
