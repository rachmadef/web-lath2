<footer class="relative bg-white pt-12">
    <div class="container mx-auto px-4">
        <!-- Bagian utama footer -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-10">
            <!-- Informasi Pesantren -->
            <div class="lg:col-span-4">
                <div class="mb-8">
                    <div class="mb-5">
                        <h3 class="text-3xl font-bold text-secondary leading-tight">
                            PP. Al Wahabiyyah 1<br>& Al Lathifiyyah 2
                        </h3>
                        <p class="text-lg text-primary font-medium mt-2">
                            Bahrul Ulum Tambakberas Jombang
                        </p>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Mengembangkan pendidikan Islam yang berkualitas serta 
                        mencetak generasi Qur'ani yang berakhlak mulia dan berwawasan luas.
                    </p>
                </div>

                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-secondary mb-4 pb-2 border-b border-gold/30">
                        Kontak
                    </h3>
                    
                    <div class="space-y-3">
                        <!-- Email -->
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-gold mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            <p class="text-secondary">alwahabiyyahallathifiyyah@gmail.com</p>
                        </div>
                        
                        <!-- Telepon -->
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gold mt-0.5 mr-3 flex-shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                            </svg>
                            <p class="text-secondary">+62 857-9980-4432</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media Sidebar -->
                <div class="bg-gray-100 py-2 px-4 rounded-full">
					<ul class="flex flex-row items-center gap-2 sm:gap-3 lg:gap-4 flex-wrap sm:flex-nowrap justify-center">
						<li>
							<a class="text-secondary hover:text-primary text-xs sm:text-sm font-medium transition-colors duration-300 flex items-center group px-2 py-1" 
							href="https://www.instagram.com" target="_blank" aria-label="Instagram">
								<i class="fa-brands fa-instagram text-sm sm:text-base mr-1 sm:mr-2 group-hover:text-primary transition-colors duration-300"></i>
								<span class="hidden xs:inline">Instagram</span>
							</a>
						</li>
						<li>
							<a class="text-secondary hover:text-primary text-xs sm:text-sm font-medium transition-colors duration-300 flex items-center group px-2 py-1" 
							href="https://www.facebook.com" target="_blank" aria-label="Facebook">
								<i class="fa-brands fa-facebook-f text-sm sm:text-base mr-1 sm:mr-2 group-hover:text-primary transition-colors duration-300"></i>
								<span class="hidden xs:inline">Facebook</span>
							</a>
						</li>
						<li>
							<a class="text-secondary hover:text-primary text-xs sm:text-sm font-medium transition-colors duration-300 flex items-center group px-2 py-1" 
							href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn">
								<i class="fa-brands fa-linkedin-in text-sm sm:text-base mr-1 sm:mr-2 group-hover:text-primary transition-colors duration-300"></i>
								<span class="hidden xs:inline">LinkedIn</span>
							</a>
						</li>
						<li>
							<a class="text-secondary hover:text-primary text-xs sm:text-sm font-medium transition-colors duration-300 flex items-center group px-2 py-1" 
							href="https://www.x.com" target="_blank" aria-label="Twitter">
								<i class="fa-brands fa-x-twitter text-sm sm:text-base mr-1 sm:mr-2 group-hover:text-primary transition-colors duration-300"></i>
								<span class="hidden xs:inline">Twitter</span>
							</a>
						</li>
					</ul>
				</div>
            </div>

            <!-- Menu Navigasi -->
            <div class="lg:col-span-2 lg:col-start-6">
                <h3 class="text-lg font-semibold text-secondary mb-4 pb-2 border-b border-gold/30">
                    Link
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#" 
                           class="text-secondary hover:text-primary text-sm transition-colors duration-300 block py-1">
                            NU Online
                        </a>
                    </li>
                    <li>
                        <a href="#" 
                           class="text-secondary hover:text-primary text-sm transition-colors duration-300 block py-1">
                            Tambakberas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gallery.index') }}" 
                           class="text-secondary hover:text-primary text-sm transition-colors duration-300 block py-1">
                            MA Unggulan KH. A. Wahab Hasbullah
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Kontak & Alamat -->
            <div class="lg:col-span-5 lg:col-start-8">
                <h3 class="text-lg font-semibold text-secondary mb-4 pb-2 border-b border-gold/30">
                    Alamat
                </h3>
                
                <!-- Peta -->
                <div class="w-full h-63 rounded-lg overflow-hidden border border-gray-200 shadow-sm">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d494.4396047677414!2d112.23372208317411!3d-7.518464442060574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e783fe13d1e7747%3A0x9323e301e5563948!2sPondok%20Pesantren%20Putra%20Al%20-%20Wahabiyyah%201%20%2F%20Putri%20Al%20-%20Lathifiyyah%202%20Bahrul%20&#39;Ulum!5e0!3m2!1sid!2sid!4v1768758223561!5m2!1sid!2sid" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Peta Lokasi Pondok Pesantren">
                    </iframe>
                </div>
                
                <p class="text-gray-600 text-sm mt-3">
                    Jl. KH. Abdul Wahab Hasbullah No. 62, Tambakberas, Jombang, Jawa Timur 61419
                </p>
            </div>
        </div>

        <!-- Copyright -->
        <div class="bg-gray-200 py-6 rounded-t-lg text-center">
            <p class="text-gray-600 text-sm">
                © 2025 PP. Al Wahabiyyah 1 & Al Lathifiyyah 2 Bahrul Ulum Tambakberas. All Rights Reserved
            </p>
            <div class="mt-2">
                <a href="#" class="text-gold hover:text-primary text-xs transition-colors duration-300 mx-2">
                    Kebijakan Privasi
                </a>
                <span class="text-gray-300">|</span>
                <a href="#" class="text-gold hover:text-primary text-xs transition-colors duration-300 mx-2">
                    Syarat & Ketentuan
                </a>
            </div>
        </div>
    </div>
</footer>