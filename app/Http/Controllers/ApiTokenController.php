<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiTokenController extends Controller
{
    /**
     * Update the authenticated user's API token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function update(Request $request)
    {
        $token = Str::random(80);

        //$request->user()->forceFill(['api_token' => hash('sha256', $token),])->save(); // Not today
        $request->user()->forceFill(['api_token' => $token,])->save();

        return ['token' => $token];
    }
}
