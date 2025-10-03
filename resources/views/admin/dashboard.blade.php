@extends('layouts.app')
@section('title','Admin Dashboard')

@section('content')
<div class="space-y-10">
    <header class="flex flex-col gap-2">
        <p class="text-sm uppercase tracking-[0.3em] text-brand-500">Admin Panel</p>
        <h1 class="text-3xl font-black text-slate-900 dark:text-white">Ringkasan Hari Ini</h1>
        <p class="text-sm text-slate-500 dark:text-slate-300">Pantau performa platform dan buka modul manajemen konten melalui pintasan di bawah.</p>
    </header>

    <div class="grid gap-6 lg:grid-cols-2">
        <div class="rounded-3xl border border-slate-200/80 bg-white/95 p-6 shadow-sm dark:border-slate-800/80 dark:bg-slate-900/70">
            <div class="mb-4 flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-slate-900 dark:text-white">Kunjungan 14 Hari Terakhir</h2>
                    <p class="text-xs text-slate-500 dark:text-slate-300">Data dari middleware tracking</p>
                </div>
                <span class="rounded-full bg-brand-500/10 px-3 py-1 text-xs font-semibold tracking-wide text-brand-600">Traffic</span>
            </div>
            <canvas id="visitorsChart"></canvas>
        </div>

        <div class="rounded-3xl border border-slate-200/80 bg-white/95 p-6 shadow-sm dark:border-slate-800/80 dark:bg-slate-900/70">
            <div class="mb-4 flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-slate-900 dark:text-white">Posting Populer</h2>
                    <p class="text-xs text-slate-500 dark:text-slate-300">Berdasarkan total view</p>
                </div>
                <span class="rounded-full bg-amber-500/10 px-3 py-1 text-xs font-semibold tracking-wide text-amber-600">Konten</span>
            </div>
            <canvas id="topPostsChart"></canvas>
        </div>
    </div>

    <section class="rounded-3xl border border-slate-200/80 bg-white/95 p-6 shadow-sm dark:border-slate-800/80 dark:bg-slate-900/70">
        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h2 class="text-lg font-semibold text-slate-900 dark:text-white">Pintasan Manajemen</h2>
                <p class="text-sm text-slate-500 dark:text-slate-300">Kelola konten dan pengguna dari satu tempat.</p>
            </div>
            <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">Refresh</a>
        </div>

        <div class="mt-6 grid gap-4 md:grid-cols-2 xl:grid-cols-4">
            <a href="{{ route('posts.index') }}" class="group rounded-2xl border border-slate-200/80 bg-slate-50/80 px-5 py-4 transition hover:border-brand-500 hover:bg-brand-500/5 dark:border-slate-700/80 dark:bg-slate-900/70">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-slate-900 transition group-hover:text-brand-600 dark:text-white dark:group-hover:text-brand-300">Kelola Postingan</h3>
                    <span class="rounded-full bg-brand-500/10 px-3 py-1 text-xs font-semibold text-brand-600">Author</span>
                </div>
                <p class="mt-2 text-xs text-slate-500 dark:text-slate-300">Buat, sunting, dan jadwalkan berita.</p>
            </a>

            <a href="{{ route('categories.index') }}" class="group rounded-2xl border border-slate-200/80 bg-slate-50/80 px-5 py-4 transition hover:border-brand-500 hover:bg-brand-500/5 dark:border-slate-700/80 dark:bg-slate-900/70">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-slate-900 transition group-hover:text-brand-600 dark:text-white dark:group-hover:text-brand-300">Kategori</h3>
                    <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-600">Struktur</span>
                </div>
                <p class="mt-2 text-xs text-slate-500 dark:text-slate-300">Atur rubrik supaya navigasi rapi.</p>
            </a>

            <a href="{{ route('admin.menus.index') }}" class="group rounded-2xl border border-slate-200/80 bg-slate-50/80 px-5 py-4 transition hover:border-brand-500 hover:bg-brand-500/5 dark:border-slate-700/80 dark:bg-slate-900/70">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-slate-900 transition group-hover:text-brand-600 dark:text-white dark:group-hover:text-brand-300">Menu Navigasi</h3>
                    <span class="rounded-full bg-sky-500/10 px-3 py-1 text-xs font-semibold text-sky-600">UI</span>
                </div>
                <p class="mt-2 text-xs text-slate-500 dark:text-slate-300">Susun item menu utama dan footer.</p>
            </a>

            <a href="{{ route('admin.users.index') }}" class="group rounded-2xl border border-slate-200/80 bg-slate-50/80 px-5 py-4 transition hover:border-brand-500 hover:bg-brand-500/5 dark:border-slate-700/80 dark:bg-slate-900/70">
                <div class="flex items-center justify-between">
                    <h3 class="font-semibold text-slate-900 transition group-hover:text-brand-600 dark:text-white dark:group-hover:text-brand-300">Pengguna & Peran</h3>
                    <span class="rounded-full bg-rose-500/10 px-3 py-1 text-xs font-semibold text-rose-600">Akses</span>
                </div>
                <p class="mt-2 text-xs text-slate-500 dark:text-slate-300">Promosikan author baru atau batasi akses.</p>
            </a>
        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const vLabels = @json($vLabels);
const vData = @json($vData);
new Chart(document.getElementById('visitorsChart'), {
    type: 'line',
    data: {
        labels: vLabels,
        datasets: [{
            label: 'Visitors',
            data: vData,
            borderColor: 'rgba(52, 103, 255, 0.8)',
            backgroundColor: 'rgba(52, 103, 255, 0.2)',
            tension: 0.35,
            fill: true,
        }]
    },
    options: {
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } }
    }
});

const tpLabels = @json($tpLabels);
const tpData = @json($tpData);
new Chart(document.getElementById('topPostsChart'), {
    type: 'bar',
    data: {
        labels: tpLabels,
        datasets: [{
            label: 'Views',
            data: tpData,
            backgroundColor: 'rgba(244, 114, 182, 0.7)',
            borderRadius: 8,
        }]
    },
    options: {
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } }
    }
});
</script>
@endsection
