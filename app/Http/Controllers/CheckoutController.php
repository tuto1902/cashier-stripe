<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $plan = 'price_1P0Rl4BP5icTBuiejLMD4n0h')
    {
        return $request->user()
            ->newSubscription('prod_Pq81bnOLuxncmP', $plan)
            ->checkout([
                'success_url' => route('success'),
                'cancel_url' => route('dashboard'),
            ]);
    }
}
