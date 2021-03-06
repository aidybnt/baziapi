<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Title;
use App\Models\User;

class TitleController extends Controller
{
    public function store(Title $request)
    {
        $user = User::find(\Auth::id());
        $user->storage_3 = $request->title;
        $s = $user->save();

        if ($s) {
            return response()->json([
                'message' => '修改成功。',
                'title' => $request->title,
            ], 200);
        } else {
            return response()->json([
                'message' => '未知错误异常，请重试。',
            ], 403);
        }
    }
}
