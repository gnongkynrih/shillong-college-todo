<div>
      {{-- Close your eyes. Count to one. That is how long forever feels. --}}
      <div class="max-w-7xl mx-auto p-6 space-y-6">
          <div class="flex items-center justify-between">
              <h1 class="text-2xl font-semibold tracking-tight text-gray-900">Dashboard</h1>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
              <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm">
                  <div class="flex items-start gap-3">
                      <div class="inline-flex h-10 w-10 items-center justify-center rounded-md bg-indigo-50 text-indigo-600 ring-1 ring-inset ring-indigo-100">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                              <path d="M12 3a9 9 0 100 18 9 9 0 000-18zm.75 4.5a.75.75 0 00-1.5 0v1.06a3.751 3.751 0 00-2.69 2.69H7.5a.75.75 0 000 1.5h1.06a3.751 3.751 0 002.69 2.69V18a.75.75 0 001.5 0v-1.06a3.751 3.751 0 002.69-2.69H16.5a.75.75 0 000-1.5h-1.06a3.751 3.751 0 00-2.69-2.69V7.5z"/>
                          </svg>
                      </div>
                      <div>
                          <div class="text-sm text-gray-500">Current Balance</div>
                          <div class="mt-1 text-2xl font-semibold text-gray-900">
                            ₹{{ number_format($balance, 2) }}
                        </div>
                      </div>
                  </div>
              </div>
              <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm">
                  <div class="flex items-start gap-3">
                      <div class="inline-flex h-10 w-10 items-center justify-center rounded-md bg-green-50 text-green-600 ring-1 ring-inset ring-green-100">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                              <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75S21.75 6.615 21.75 12 17.385 21.75 12 21.75 2.25 17.385 2.25 12zm13.28-2.03a.75.75 0 10-1.06-1.06L11.25 12.13l-1.72-1.72a.75.75 0 10-1.06 1.06l2.25 2.25a.75.75 0 001.06 0l3.75-3.75z" clip-rule="evenodd" />
                          </svg>
                      </div>
                      <div>
                          <div class="text-sm text-gray-500">Total Income</div>
                          <div class="mt-1 text-2xl font-semibold text-gray-900">₹{{ number_format($totalIncome, 2) }}</div>
                      </div>
                  </div>
              </div>
              <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm">
                  <div class="flex items-start gap-3">
                      <div class="inline-flex h-10 w-10 items-center justify-center rounded-md bg-red-50 text-red-600 ring-1 ring-inset ring-red-100">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                              <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3.53 6.97a.75.75 0 00-1.06-1.06L12 10.62 9.53 8.16a.75.75 0 00-1.06 1.06L10.94 12l-2.47 2.47a.75.75 0 001.06 1.06L12 13.38l2.47 2.47a.75.75 0 001.06-1.06L13.06 12l2.47-2.47z" clip-rule="evenodd" />
                          </svg>
                      </div>
                      <div>
                          <div class="text-sm text-gray-500">Total Expense</div>
                          <div class="mt-1 text-2xl font-semibold text-gray-900">₹{{ number_format($totalExpense, 2) }}</div>
                      </div>
                  </div>
              </div>
              <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm">
                  <div class="flex items-start gap-3">
                      <div class="inline-flex h-10 w-10 items-center justify-center rounded-md bg-blue-50 text-blue-600 ring-1 ring-inset ring-blue-100">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                              <path d="M12 6.75a.75.75 0 01.75.75v2.25h2.25a.75.75 0 010 1.5H12.75v2.25a.75.75 0 01-1.5 0V11.25H9a.75.75 0 010-1.5h2.25V7.5a.75.75 0 01.75-.75z"/>
                              <path fill-rule="evenodd" d="M4.5 4.5a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15zm0 1.5h15a.75.75 0 01.75.75v1.09l-7.44 4.26a2.25 2.25 0 01-2.12 0L3.75 7.84V6.75a.75.75 0 01.75-.75z" clip-rule="evenodd"/>
                          </svg>
                      </div>
                      <div class="flex-1">
                          <div class="text-sm text-gray-500">Net This Month</div>
                          <div class="mt-1 text-2xl font-semibold text-gray-900">₹{{ number_format($monthIncome - $monthExpense, 2) }}</div>
                          <div class="mt-1 text-xs text-gray-500">Income: ₹{{ number_format($monthIncome, 2) }} • Expense: ₹{{ number_format($monthExpense, 2) }}</div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
              <div class="rounded-lg border border-gray-200 bg-white shadow-sm">
                  <div class="px-4 py-3 border-b border-gray-200">
                      <h2 class="text-sm font-medium text-gray-900">Income vs Expense (Last 6 Months)</h2>
                  </div>
                  <div class="p-4" wire:ignore>
                      <canvas id="incomeExpenseChart" height="140"></canvas>
                  </div>
              </div>

              <div class="rounded-lg border border-gray-200 bg-white shadow-sm">
                  <div class="px-4 py-3 border-b border-gray-200">
                      <h2 class="text-sm font-medium text-gray-900">Expenses by Category</h2>
                  </div>
                  <div class="p-4" wire:ignore>
                      <canvas id="expenseByCategoryChart" height="100"></canvas>
                  </div>
              </div>
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
              <div class="rounded-lg border border-gray-200 bg-white shadow-sm">
                  <div class="px-4 py-3 border-b border-gray-200">
                      <h2 class="text-sm font-medium text-gray-900">Recent Incomes</h2>
                  </div>
                  <div class="overflow-x-auto">
                      <table class="min-w-full divide-y divide-gray-200 text-sm">
                          <thead class="bg-gray-50">
                              <tr>
                                  <th class="px-4 py-2 text-left font-medium text-gray-500">Date</th>
                                  <th class="px-4 py-2 text-right font-medium text-gray-500">Amount</th>
                              </tr>
                          </thead>
                          <tbody class="divide-y divide-gray-100">
                              @forelse ($recentIncomes as $income)
                                  <tr class="hover:bg-gray-50">
                                      <td class="px-4 py-2 text-gray-900">{{ \Illuminate\Support\Carbon::parse($income->deposit_date)->format('d M Y') }}</td>
                                      <td class="px-4 py-2 text-right text-gray-900">₹{{ number_format($income->amount, 2) }}</td>
                                  </tr>
                              @empty
                                  <tr>
                                      <td colspan="2" class="px-4 py-6 text-center text-gray-500">No incomes yet</td>
                                  </tr>
                              @endforelse
                          </tbody>
                      </table>
                  </div>
              </div>

              <div class="rounded-lg border border-gray-200 bg-white shadow-sm">
                  <div class="px-4 py-3 border-b border-gray-200">
                      <h2 class="text-sm font-medium text-gray-900">Recent Expenses</h2>
                  </div>
                  <div class="overflow-x-auto">
                      <table class="min-w-full divide-y divide-gray-200 text-sm">
                          <thead class="bg-gray-50">
                              <tr>
                                  <th class="px-4 py-2 text-left font-medium text-gray-500">Date</th>
                                  <th class="px-4 py-2 text-left font-medium text-gray-500">Category</th>
                                  <th class="px-4 py-2 text-left font-medium text-gray-500">Description</th>
                                  <th class="px-4 py-2 text-right font-medium text-gray-500">Amount</th>
                              </tr>
                          </thead>
                          <tbody class="divide-y divide-gray-100">
                              @forelse ($recentExpenses as $expense)
                                  <tr class="hover:bg-gray-50">
                                      <td class="px-4 py-2 text-gray-900">{{ \Illuminate\Support\Carbon::parse($expense->expense_date)->format('d M Y') }}</td>
                                      <td class="px-4 py-2 text-gray-900">{{ $categoriesById[$expense->category_id] ?? '—' }}</td>
                                      <td class="px-4 py-2 text-gray-700">{{ $expense->description ?? '—' }}</td>
                                      <td class="px-4 py-2 text-right text-gray-900">₹{{ number_format($expense->amount, 2) }}</td>
                                  </tr>
                              @empty
                                  <tr>
                                      <td colspan="4" class="px-4 py-6 text-center text-gray-500">No expenses yet</td>
                                  </tr>
                              @endforelse
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const monthLabels = @json($chartMonthLabels ?? []);
            const incomeData = @json($chartIncomeData ?? []);
            const expenseData = @json($chartExpenseData ?? []);
            
            // Line: Income vs Expense
            const lineCtx = document.getElementById('incomeExpenseChart');
            if (lineCtx) {
                new window.Chart(lineCtx, {
                    type: 'line',
                    data: {
                        labels: monthLabels,
                        datasets: [
                            {
                                label: 'Income',
                                data: incomeData,
                                borderColor: '#16a34a',
                                backgroundColor: 'rgba(22, 163, 74, 0.15)',
                                tension: 0.35,
                                fill: true,
                            },
                            {
                                label: 'Expense',
                                data: expenseData,
                                borderColor: '#ef4444',
                                backgroundColor: 'rgba(239, 68, 68, 0.15)',
                                tension: 0.35,
                                fill: true,
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: { position: 'top' },
                            tooltip: { mode: 'index', intersect: false }
                        },
                        interaction: { mode: 'index', intersect: false },
                        scales: {
                            y: {
                                ticks: {
                                    callback: (value) => `₹${Number(value).toLocaleString()}`
                                }
                            }
                        }
                    }
                });
            }

            // Doughnut: Expenses by Category
            const catLabels = @json($chartExpenseByCategoryLabels ?? []);
            const catData = @json($chartExpenseByCategoryData ?? []);

            const doughnutCtx = document.getElementById('expenseByCategoryChart');
            if (doughnutCtx) {
                const palette = ['#2361F1','#02C55E','#EF4444','#F59E0B','#06B6D4','#84CC16','#D946EF','#10B981','#3B82F6','#F97316'];
                new window.Chart(doughnutCtx, {
                    type: 'doughnut',
                    data: {
                        labels: catLabels,
                        datasets: [{
                            data: catData,
                            backgroundColor: palette.slice(0, Math.max(catData.length, 1)),
                            borderWidth: 0
                        }]
                    },
                    options: {
                        plugins: {
                            legend: { position: 'right' }
                        }
                    }
                });
            }
        });
    </script>
</div>
