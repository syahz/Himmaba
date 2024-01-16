<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class AccountController extends Controller
{
    public function profile(Request $request)
    {
        $method = $request->method();

        if ($request->isMethod('get')) {
            return view('Admin.pages.account.profile');
        } else {
            $request->isMethod('put');

            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string|max:255',
                    'checkPassword' => 'required|string|max:255',
                    'email' => 'unique:users,email,' . $request->input('id'),
                ],
                [
                    'email.unique' => 'Email sudah digunakan oleh pengguna lain.',
                ],
            );

            // Cek apakah validasi gagal
            if ($validator->fails()) {
                dd($validator->errors()->all());
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $id = $request->input('id');
            $user = User::findOrFail($id);
            $oldPassword = $user->password;

            $checkPassword = $request->input('checkPassword');

            if (Hash::check($checkPassword, $oldPassword)) {
                $data = $request->except(['id', 'checkPassword']);
                $user->fill($data);
                $user->save();
                $user->refresh();

                return redirect()
                    ->route('profile')
                    ->with(['success' => 'Berhasil Mengubah Data']);
            } else {
                return redirect()
                    ->back()
                    ->with('error', 'Password tidak sesuai.');
            }
        }
    }
    public function settings(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Admin.pages.account.setting');
        } else {
            $currentPassword = $request->input('currentPassword');
            $newPassword = $request->input('newPassword');
            $confirmPassword = $request->input('confirmPassword');
            if ($newPassword == $confirmPassword) {
                $userAuth = Auth::user();
                $oldPassword = $userAuth->password;
                $id = $userAuth->id;

                $user = User::findOrFail($id);

                // Periksa apakah password lama sesuai
                $passwordMatch = Hash::check($currentPassword, $oldPassword);

                if ($passwordMatch) {
                    // Update password di dalam model dan simpan ke dalam database
                    $user->update(['password' => bcrypt($newPassword)]);

                    return redirect()
                        ->route('settings')
                        ->with('success', 'Password berhasil diperbarui.');
                } else {
                    return redirect()
                        ->back()
                        ->with('error', 'Password lama tidak sesuai.');
                }
            } else {
                return redirect()
                    ->back()
                    ->with('error', 'Password tidak sama.');
            }
        }
    }
}
