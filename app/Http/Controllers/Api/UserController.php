<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(UserRequest $request)
{
    
    $validated = $request->validated();
    $validated['password'] = Hash::make($validated['password']);
    $userItem = User::create($validated);

    return $userItem;
}

    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return User::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $userItem = User::findOrFail($id);
        $validated = $request->validated();
        $userItem->name = $validated['name'];
        $userItem->save();

        return $userItem;
    }


    
    public function email(UserRequest $request, string $id)
     {
        $userItem=User::findOrFail($id);
        $validated = $request->validated();
        $userItem->email=$validated['email'];
        $userItem->save();

        return $userItem;
    }

    public function password(UserRequest $request, string $id)
    {
        $userItem = User::findOrFail($id);
        $validated = $request->validated();
        $userItem->password = Hash::make($validated['password']);
        $userItem->save();

        return $userItem;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $userItem = User::findOrFail($id);
        $userItem->delete();
        return $userItem;
    }

    /**Update the image of the specified resource from storage*/
    public function image(UserRequest $request, string $id)
    {   
        dd($request->all());
        $user = User::findOrFail($id);

        if (!is_null($user->image)) {
            Storage::disk('public')->delete($user->image);
        }

        $user->image = $request->file('image')->storePublicly('images', 'public');

        $user->save();
        return $user;
    }
    public function login(Request $request)
    {
        // Retrieve user based on email
        $user = User::where('email', $request->input('email'))->first();

        // Check if user exists and password is correct
        if ($user && Hash::check($request->input('password'), $user->password)) {
            // User authenticated successfully
            return response()->json(['message' => 'Login successful', 'user' => $user], 200);
        } else {
            // Invalid credentials
            return response()->json(['message' => 'Invalid email or password'], 401);
        }
    }
}
