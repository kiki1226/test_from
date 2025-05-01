<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(Request $request)
    {
        // 管理者ダッシュボードの表示
        return view('admin.dashboard');
    }
    public function show(Request $request, $id)
    {
        // 特定の管理者ダッシュボードの詳細表示
        return view('admin.dashboard.show', ['id' => $id]);
    }
    public function edit(Request $request, $id)
    {
        // 管理者ダッシュボードの編集
        return view('admin.dashboard.edit', ['id' => $id]);
    }
}
