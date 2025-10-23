<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Income;
use App\Models\Expense;
use App\Models\Balance;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    public function render()
    {
        $totalIncome = Income::sum('amount');
        $totalExpense = Expense::sum('amount');
        $balance = optional(Balance::first())->amount ?? 0;

        $monthStart = now()->startOfMonth();
        $monthEnd = now()->endOfMonth();
        $monthIncome = Income::whereBetween('deposit_date', [$monthStart, $monthEnd])->sum('amount');
        $monthExpense = Expense::whereBetween('expense_date', [$monthStart, $monthEnd])->sum('amount');

        $recentIncomes = Income::orderByDesc('deposit_date')->limit(5)->get();
        $recentExpenses = Expense::orderByDesc('expense_date')->limit(5)->get();
        $categoriesById = Category::pluck('name', 'id');

        // Build last 6 months labels and sums
        $chartMonthLabels = [];
        $chartIncomeData = [];
        $chartExpenseData = [];
        for ($i = 5; $i >= 0; $i--) {
            $month = now()->copy()->subMonths($i);
            $start = $month->copy()->startOfMonth();
            $end = $month->copy()->endOfMonth();
            $chartMonthLabels[] = $month->format('M Y');
            $chartIncomeData[] = (int) Income::whereBetween('deposit_date', [$start, $end])->sum('amount');
            $chartExpenseData[] = (float) Expense::whereBetween('expense_date', [$start, $end])->sum('amount');
        }

        // Expense by category totals
        $expenseByCategory = Expense::select('category_id', DB::raw('SUM(amount) as total'))
            ->groupBy('category_id')
            ->orderByDesc('total')
            ->limit(10)
            ->get();
        $chartExpenseByCategoryLabels = $expenseByCategory->map(fn($row) => $categoriesById[$row->category_id] ?? 'Unknown')->values();
        $chartExpenseByCategoryData = $expenseByCategory->map(fn($row) => (float) $row->total)->values();

        return view('livewire.dashboard', [
            'totalIncome' => $totalIncome,
            'totalExpense' => $totalExpense,
            'balance' => $balance,
            'monthIncome' => $monthIncome,
            'monthExpense' => $monthExpense,
            'recentIncomes' => $recentIncomes,
            'recentExpenses' => $recentExpenses,
            'categoriesById' => $categoriesById,
            'chartMonthLabels' => $chartMonthLabels,
            'chartIncomeData' => $chartIncomeData,
            'chartExpenseData' => $chartExpenseData,
            'chartExpenseByCategoryLabels' => $chartExpenseByCategoryLabels,
            'chartExpenseByCategoryData' => $chartExpenseByCategoryData,
        ]);
    }
}

