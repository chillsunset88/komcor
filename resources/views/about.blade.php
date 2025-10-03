@extends('layouts.app')
@section('title','About | Kompas Corner')
@section('meta_description','Tentang Kompas Corner - jurnalisme perspektif untuk pembaca kritis Indonesia')

@section('content')
<div class="space-y-16">
    <section class="glass-card overflow-hidden p-10 lg:p-14">
        <div class="grid gap-10 lg:grid-cols-[1.4fr_1fr]">
            <div class="space-y-6">
                <span class="inline-flex items-center gap-2 rounded-full bg-slate-900 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-white dark:bg-white dark:text-slate-900">Our Mission</span>
                <h1 class="text-4xl font-extrabold leading-tight text-slate-900 dark:text-white lg:text-5xl">
                    Memperluas sudut pandang Anda terhadap peristiwa dunia.
                </h1>
                <p class="text-lg text-slate-600 dark:text-slate-300">
                    Kompas Corner hadir untuk pembaca yang ingin memahami cerita lebih dalam dari sekadar berita utama. Kami menyajikan rangkuman, perbandingan perspektif, serta analisis ringkas agar Anda dapat mengambil keputusan dengan informasi yang jernih.
                </p>
                <div class="grid gap-4 sm:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200/70 bg-white/80 p-4 text-center dark:border-white/10 dark:bg-white/5">
                        <p class="text-3xl font-bold text-slate-900 dark:text-white">150+</p>
                        <p class="text-xs uppercase tracking-[0.3em] text-slate-500">Kontributor</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200/70 bg-white/80 p-4 text-center dark:border-white/10 dark:bg-white/5">
                        <p class="text-3xl font-bold text-slate-900 dark:text-white">40K</p>
                        <p class="text-xs uppercase tracking-[0.3em] text-slate-500">Pembaca harian</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200/70 bg-white/80 p-4 text-center dark:border-white/10 dark:bg-white/5">
                        <p class="text-3xl font-bold text-slate-900 dark:text-white">98%</p>
                        <p class="text-xs uppercase tracking-[0.3em] text-slate-500">Kepuasan komunitas</p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -inset-6 rounded-[32px] bg-gradient-to-br from-blue-500/20 via-blue-500/5 to-transparent blur-3xl"></div>
                <div class="relative overflow-hidden rounded-[32px] border border-slate-200/70 bg-slate-900 text-white shadow-xl dark:border-white/10">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=900&q=80" alt="Kompas Corner newsroom" class="h-64 w-full object-cover">
                    <div class="space-y-4 px-6 py-8">
                        <p class="text-sm uppercase tracking-[0.3em] text-white/60">Edit desk</p>
                        <p class="text-lg font-semibold text-white">“Kami percaya setiap isu memiliki lebih dari satu sudut pandang. Tugas kami adalah menautkannya bagi Anda.”</p>
                        <p class="text-sm text-white/70">— Tim Redaksi Kompas Corner</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="glass-card p-10 lg:p-14">
        <div class="grid gap-10 lg:grid-cols-[1fr_1.2fr]">
            <div class="space-y-5">
                <p class="section-label">Bagaimana kami bekerja</p>
                <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Metodologi redaksi yang transparan</h2>
                <p class="text-base text-slate-600 dark:text-slate-300">
                    Kami memadukan teknologi kurasi otomatis dengan verifikasi manual dari editor senior. Setiap berita diberi label konteks, sumber rujukan silang, dan analisis cepat untuk memastikan akurasi dan relevansi.
                </p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-2xl border border-slate-200/70 bg-white/90 p-5 dark:border-white/10 dark:bg-white/5">
                    <h3 class="font-semibold text-slate-900 dark:text-white">Katalog sumber</h3>
                    <p class="mt-2 text-sm text-slate-500 dark:text-slate-300">Lebih dari 200 media lokal & global kami bandingkan setiap hari untuk menangkap bias dan pola pemberitaan.</p>
                </div>
                <div class="rounded-2xl border border-slate-200/70 bg-white/90 p-5 dark:border-white/10 dark:bg-white/5">
                    <h3 class="font-semibold text-slate-900 dark:text-white">Tim riset</h3>
                    <p class="mt-2 text-sm text-slate-500 dark:text-slate-300">Data journalist kami memvisualisasikan isu kompleks menjadi insight grafis yang mudah dipahami.</p>
                </div>
                <div class="rounded-2xl border border-slate-200/70 bg-white/90 p-5 dark:border-white/10 dark:bg-white/5">
                    <h3 class="font-semibold text-slate-900 dark:text-white">Verifikasi berlapis</h3>
                    <p class="mt-2 text-sm text-slate-500 dark:text-slate-300">Setiap artikel melewati dua editor independen sebelum tayang untuk menjaga standar etik jurnalistik.</p>
                </div>
                <div class="rounded-2xl border border-slate-200/70 bg-white/90 p-5 dark:border-white/10 dark:bg-white/5">
                    <h3 class="font-semibold text-slate-900 dark:text-white">Suara komunitas</h3>
                    <p class="mt-2 text-sm text-slate-500 dark:text-slate-300">Feedback pembaca kami integrasikan ke dalam agenda liputan mingguan melalui sesi townhall daring.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="grid gap-8 lg:grid-cols-[1.1fr_1fr]">
        <div class="glass-card p-10">
            <p class="section-label">Jejak perjalanan</p>
            <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Tonggak Kompas Corner</h2>
            <ol class="mt-6 space-y-4 border-l border-slate-200 pl-6 dark:border-white/10">
                <li>
                    <div class="-ml-[27px] flex items-start gap-3">
                        <span class="inline-flex size-10 items-center justify-center rounded-full border border-slate-200 bg-white text-sm font-semibold text-slate-600 dark:border-white/10 dark:bg-white/5 dark:text-slate-200">2016</span>
                        <div class="space-y-1">
                            <p class="font-semibold text-slate-900 dark:text-white">Soft launch edisi newsletter</p>
                            <p class="text-sm text-slate-500 dark:text-slate-300">Diluncurkan sebagai email mingguan yang merangkum fenomena sosial-politik.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="-ml-[27px] flex items-start gap-3">
                        <span class="inline-flex size-10 items-center justify-center rounded-full border border-slate-200 bg-white text-sm font-semibold text-slate-600 dark:border-white/10 dark:bg-white/5 dark:text-slate-200">2019</span>
                        <div class="space-y-1">
                            <p class="font-semibold text-slate-900 dark:text-white">Peluncuran aplikasi mobile</p>
                            <p class="text-sm text-slate-500 dark:text-slate-300">Pengalaman membaca dipersonalisasi dengan mode ringkasan dan perspektif kontra.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="-ml-[27px] flex items-start gap-3">
                        <span class="inline-flex size-10 items-center justify-center rounded-full border border-slate-200 bg-white text-sm font-semibold text-slate-600 dark:border-white/10 dark:bg-white/5 dark:text-slate-200">2023</span>
                        <div class="space-y-1">
                            <p class="font-semibold text-slate-900 dark:text-white">Integrasi AI summarizer</p>
                            <p class="text-sm text-slate-500 dark:text-slate-300">Menggabungkan machine learning dan kurasi editor untuk merangkum isu kompleks dalam 90 detik.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="-ml-[27px] flex items-start gap-3">
                        <span class="inline-flex size-10 items-center justify-center rounded-full border border-slate-200 bg-white text-sm font-semibold text-slate-600 dark:border-white/10 dark:bg-white/5 dark:text-slate-200">2025</span>
                        <div class="space-y-1">
                            <p class="font-semibold text-slate-900 dark:text-white">Kolaborasi Komunitas</p>
                            <p class="text-sm text-slate-500 dark:text-slate-300">Program “Readers Desk” membantu pembaca mengusulkan isu prioritas untuk diliput.</p>
                        </div>
                    </div>
                </li>
            </ol>
        </div>

        <div class="glass-card p-10">
            <p class="section-label">Bergabung</p>
            <h2 class="text-2xl font-semibold text-slate-900 dark:text-white">Ingin bekerja sama?</h2>
            <p class="mt-4 text-sm text-slate-600 dark:text-slate-300">Kami membuka peluang bagi media partner, peneliti data, dan jurnalis independen untuk menghadirkan laporan mendalam bersama Kompas Corner.</p>
            <div class="mt-6 space-y-3 text-sm text-slate-500 dark:text-slate-300">
                <div>
                    <p class="font-semibold text-slate-700 dark:text-slate-200">Press & Partnership</p>
                    <a href="mailto:press@kompascorner.id" class="text-blue-600 hover:underline dark:text-blue-300">press@kompascorner.id</a>
                </div>
                <div>
                    <p class="font-semibold text-slate-700 dark:text-slate-200">Karier Editorial</p>
                    <a href="mailto:careers@kompascorner.id" class="text-blue-600 hover:underline dark:text-blue-300">careers@kompascorner.id</a>
                </div>
            </div>
            <a href="mailto:hello@kompascorner.id" class="mt-6 inline-flex items-center gap-2 rounded-full bg-slate-900 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-slate-700 dark:bg-white dark:text-slate-900">Hubungi Kami ?</a>
        </div>
    </section>
</div>
@endsection