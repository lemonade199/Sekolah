<footer class="bg-brand-cream py-20 text-stone-600 dark:bg-brand-dark dark:text-stone-400">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-12 mb-20 px-4">
            <!-- Brand Info -->
            <div class="col-span-2 lg:col-span-1 space-y-6">
                <h4 class="text-brand-dark dark:text-white font-extrabold text-sm uppercase tracking-widest">About TK HB 2</h4>
                <p class="text-xs leading-relaxed font-medium">
                    TK Harapan Bangsa 2 is a powerful collective of educators. We design quality learning experiences for the ones who play hardest. Clean and mature, that's our way of life.
                </p>
                <a class="inline-block text-[10px] font-bold uppercase tracking-widest border-b border-brand-primary text-brand-dark dark:text-stone-300" href="{{ route('profil.index') }}">Read more</a>
            </div>
            <!-- Links Column -->
            <div class="space-y-4">
                <h4 class="text-brand-dark dark:text-white font-extrabold text-sm uppercase tracking-widest">Address</h4>
                <ul class="text-xs space-y-2 font-medium">
                    <li>Jl. Pendidikan No. 123</li>
                    <li>Kota Pendidikan</li>
                    <li>12345, Indonesia</li>
                </ul>
            </div>
            <!-- Links Column -->
            <div class="space-y-4">
                <h4 class="text-brand-dark dark:text-white font-extrabold text-sm uppercase tracking-widest">Contact</h4>
                <ul class="text-xs space-y-2 font-medium">
                    <li><a class="hover:text-brand-primary transition-colors" href="#">Email us here.</a></li>
                    <li>0812-3456-7890 (mon-fri)</li>
                    <li>WhatsApp: +62 812-3456-7890</li>
                </ul>
            </div>
            <!-- Links Column -->
            <div class="space-y-4">
                <h4 class="text-brand-dark dark:text-white font-extrabold text-sm uppercase tracking-widest">Info</h4>
                <ul class="text-xs space-y-2 font-medium">
                    <li><a class="hover:text-brand-primary transition-colors" href="{{ route('akademik.kurikulum') }}">Curriculum</a></li>
                    <li><a class="hover:text-brand-primary transition-colors" href="{{ route('informasi.index') }}">News & Events</a></li>
                    <li><a class="hover:text-brand-primary transition-colors" href="#">Terms of Service</a></li>
                </ul>
            </div>
            <!-- Social Column -->
            <div class="space-y-4">
                <h4 class="text-brand-dark dark:text-white font-extrabold text-sm uppercase tracking-widest">Follow us</h4>
                <ul class="text-xs space-y-2 font-medium">
                    <li><a class="hover:text-brand-primary transition-colors" href="#">Instagram</a></li>
                    <li><a class="hover:text-brand-primary transition-colors" href="#">Facebook</a></li>
                    <li><a class="hover:text-brand-primary transition-colors" href="#">Tiktok</a></li>
                </ul>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="pt-10 border-t border-stone-200 dark:border-stone-800 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-[10px] font-bold uppercase tracking-widest flex space-x-8">
                <a class="hover:text-brand-primary transition-colors" href="#">Terms & conditions</a>
                <a class="hover:text-brand-primary transition-colors" href="#">Privacy statement</a>
            </div>
            <div class="text-[10px] font-bold uppercase tracking-widest">
                © {{ date('Y') }} TK HARAPAN BANGSA 2. All rights reserved.
            </div>
        </div>
    </div>
</footer>
