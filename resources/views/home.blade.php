<x-app-layout>

<div class="bg-white min-h-screen text-gray-800">
    <nav class="container mx-auto px-4 py-6 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <svg class="w-8 h-8 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
        </svg>
        <span class="text-2xl font-bold">FoodShare</span>
      </div>
      <div class="hidden md:flex space-x-6">
        <a href="#" class="hover:text-green-500 transition-colors">Tentang Kami</a>
        <a href="#" class="hover:text-green-500 transition-colors">Cara Kerja</a>
        <a href="#" class="hover:text-green-500 transition-colors">Bergabung</a>
        <a href="#" class="hover:text-green-500 transition-colors">Kontak</a>
      </div>
      <div class="flex space-x-4">
        <button class="hidden md:inline-flex border border-green-500 text-green-500 px-4 py-2 rounded hover:bg-green-500 hover:text-white transition-colors">Login</button>
        <a href="{{ route('toko.index') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Donasi sekarang</a>
      </div>
    </nav>

    <main class="container mx-auto px-4 py-20 text-center w-full flex flex-col items-center">
      <div class="inline-block bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
        BARU <span class="ml-2">Bantu Indonesia dengan mengurangi limbah makanan</span>
      </div>

      <h1 class="text-3xl md:text-5xl font-bold mb-6 max-w-[45rem] text-center">
        Sumbangkan <span class="text-green-500">makanan berlebih</span> untuk membantu sesama
      </h1>

      <p class="text-xl md:text-xl text-gray-600 max-w-3xl mx-auto mb-12">
        Bergabunglah dengan FoodShare, sebuah platform yang menghubungkan restoran dengan masyarakat yang membutuhkan makanan. Dengan cara ini, kita bersama-sama mengurangi limbah makanan dan membantu masyarakat yang kekurangan.
      </p>

      <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4 mb-12">
        <a href="{{ route('toko.index') }}" class="bg-green-500 hover:bg-green-600 text-white text-lg px-8 py-4 rounded">Donasi sekarang</a>
        <button class="border border-green-500 text-green-500 flex items-center text-lg px-8 py-4 rounded hover:bg-green-500 hover:text-white transition-colors">
          Cara Kerja
          <svg class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </button>
      </div>

      <div class="flex justify-center items-center space-x-4 text-gray-400">
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
          <circle cx="12" cy="12" r="10" />
          <path d="M12 6v6l4 2" />
        </svg>
        <span>Coba gratis selama 14 hari</span>
        <span>•</span>
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
          <rect x="1" y="4" width="22" height="16" rx="2" ry="2" />
          <line x1="1" y1="10" x2="23" y2="10" />
        </svg>
        <span>Tidak perlu kartu kredit</span>
      </div>
    </main>
  </div>

  <section class="bg-white py-20">
    <div class="container mx-auto px-4 text-center w-full flex flex-col items-center">
      <div class="inline-block bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
        INFO PENTING <span class="ml-2">Bagaimana FoodShare Membantu Masyarakat</span>
      </div>

      <h2 class="text-3xl md:text-4xl font-bold mb-6 max-w-2xl text-center">
        Kenali <span class="text-green-500">cara kerja dan dampak positif</span> FoodShare dalam kehidupan masyarakat
      </h2>

      <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto mb-12">
        Setiap hari, jutaan ton makanan terbuang sia-sia, sementara masih banyak orang yang mengalami kelaparan. FoodShare hadir untuk menjadi solusi efektif dalam mendistribusikan makanan berlebih kepada masyarakat yang membutuhkan. Pelajari lebih lanjut bagaimana kita bekerja sama dengan berbagai restoran, toko, dan relawan dalam mengurangi limbah makanan serta meningkatkan kesejahteraan masyarakat.
      </p>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-6xl">
        <!-- Card 1 -->
        <div class="bg-white p-8 rounded-lg shadow-md">
          <div class="w-16 h-16 bg-green-100 text-green-500 rounded-full flex items-center justify-center mb-6">
            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-4">Menghubungkan Donor dan Penerima</h3>
          <p class="text-gray-600">
            FoodShare menggunakan teknologi berbasis web yang memungkinkan restoran, toko, dan perorangan menyumbangkan makanan dengan mudah. Kami menghubungkan donatur dengan lembaga atau individu yang membutuhkan, memastikan tidak ada makanan yang terbuang sia-sia.
          </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-8 rounded-lg shadow-md">
          <div class="w-16 h-16 bg-blue-100 text-blue-500 rounded-full flex items-center justify-center mb-6">
            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
              <circle cx="12" cy="12" r="10" />
              <path d="M12 6v6l4 2" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-4">Proses yang Cepat dan Mudah</h3>
          <p class="text-gray-600">
            Kami memastikan bahwa donasi makanan dilakukan dengan proses yang cepat dan efisien. Semua donasi di FoodShare dicatat dengan baik, dan pengambilan makanan dilakukan oleh relawan dalam waktu sesingkat mungkin untuk menjaga kualitas makanan tetap terjaga.
          </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-8 rounded-lg shadow-md">
          <div class="w-16 h-16 bg-red-100 text-red-500 rounded-full flex items-center justify-center mb-6">
            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
              <path d="M20 21v-2a4 4 0 0 0-3-3.87V10a5 5 0 0 0-5-5 5 5 0 0 0-5 5v5.13A4 4 0 0 0 4 19v2" />
              <circle cx="12" cy="23" r="1" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-4">Keamanan dan Kualitas Terjamin</h3>
          <p class="text-gray-600">
            Keamanan dan kualitas makanan adalah prioritas kami. Kami memastikan bahwa semua makanan yang disumbangkan masih dalam kondisi baik dan layak untuk dikonsumsi. Relawan kami juga dilatih untuk menangani makanan dengan cara yang higienis.
          </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white p-8 rounded-lg shadow-md">
          <div class="w-16 h-16 bg-purple-100 text-purple-500 rounded-full flex items-center justify-center mb-6">
            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
              <path d="M21 15a2 2 0 0 0 1-1.732V5a2 2 0 0 0-1-1.732L12 1 3 3.268A2 2 0 0 0 2 5v8.268a2 2 0 0 0 1 1.732l9 5 9-5z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-4">Kerjasama dengan Berbagai Pihak</h3>
          <p class="text-gray-600">
            Kami bekerja sama dengan berbagai organisasi, restoran, dan supermarket untuk memastikan distribusi makanan dapat menjangkau daerah-daerah yang paling membutuhkan. Kami juga membuka peluang bagi Anda untuk bergabung sebagai relawan.
          </p>
        </div>

        <!-- Card 5 -->
        <div class="bg-white p-8 rounded-lg shadow-md">
          <div class="w-16 h-16 bg-yellow-100 text-yellow-500 rounded-full flex items-center justify-center mb-6">
            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
              <path d="M3 3v18h18V3H3zm3 6h12M3 12h18" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-4">Transparansi dan Akuntabilitas</h3>
          <p class="text-gray-600">
            Kami sangat menghargai kepercayaan yang diberikan kepada kami. Semua donasi dan proses distribusi dicatat dengan baik dan dapat diakses oleh para donatur untuk melihat ke mana makanan mereka disalurkan.
          </p>
        </div>

        <!-- Card 6 -->
        <div class="bg-white p-8 rounded-lg shadow-md">
          <div class="w-16 h-16 bg-teal-100 text-teal-500 rounded-full flex items-center justify-center mb-6">
            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-4">Dampak Sosial Positif</h3>
          <p class="text-gray-600">
            Selain mengurangi limbah makanan, FoodShare juga berfokus pada menciptakan dampak sosial positif. Kami percaya bahwa setiap orang berhak untuk mendapatkan akses pada makanan yang layak, dan melalui FoodShare kita bisa membuat perbedaan nyata.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2: Keunggulan FoodShare -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4 text-center w-full flex flex-col items-center">
      <div class="inline-block bg-indigo-100 text-indigo-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
        KEUNGGULAN <span class="ml-2">Kenapa Memilih FoodShare?</span>
      </div>

      <h2 class="text-3xl md:text-4xl font-bold mb-6 max-w-2xl text-center">
        Keunggulan <span class="text-green-500">yang kami tawarkan</span> untuk donatur dan penerima manfaat
      </h2>

      <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto mb-12">
        FoodShare dirancang untuk menjadi lebih dari sekadar platform distribusi makanan. Kami memberikan keunggulan bagi para pengguna kami melalui teknologi, kemudahan akses, dan kemitraan strategis.
      </p>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-6xl">
        <!-- Feature 1 -->
        <div class="bg-white p-8 rounded-lg shadow-md">
          <div class="w-16 h-16 bg-green-100 text-green-500 rounded-full flex items-center justify-center mb-6">
            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
              <path d="M3 3h18v18H3zM3 12h18M12 3v18" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-4">Platform User-Friendly</h3>
          <p class="text-gray-600">
            Kami menciptakan platform yang mudah digunakan untuk siapa saja, dari pemilik restoran hingga masyarakat yang membutuhkan. Semua orang dapat mendaftar, berdonasi, atau menerima makanan dengan proses yang cepat dan sederhana.
          </p>
        </div>

        <!-- Feature 2 -->
        <div class="bg-white p-8 rounded-lg shadow-md">
          <div class="w-16 h-16 bg-blue-100 text-blue-500 rounded-full flex items-center justify-center mb-6">
            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
              <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
              <polyline points="7 10 12 15 17 10" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-4">Pengambilan Mudah dan Terjadwal</h3>
          <p class="text-gray-600">
            Pengambilan makanan dijadwalkan secara optimal sehingga donatur tidak terganggu aktivitasnya, dan penerima manfaat tetap mendapatkan makanan pada waktu yang tepat dengan kualitas yang terjaga.
          </p>
        </div>

        <!-- Feature 3 -->
        <div class="bg-white p-8 rounded-lg shadow-md">
          <div class="w-16 h-16 bg-red-100 text-red-500 rounded-full flex items-center justify-center mb-6">
            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
              <circle cx="12" cy="12" r="10" />
              <path d="M12 8v4h4" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-4">Pengukuran Dampak Sosial</h3>
          <p class="text-gray-600">
            FoodShare menggunakan sistem pengukuran dampak untuk mengetahui seberapa banyak makanan yang berhasil didistribusikan dan berapa banyak orang yang terbantu. Hal ini memberi rasa puas kepada donatur bahwa kontribusinya memberi manfaat nyata.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Testimoni Pengguna -->
  <section class="bg-white py-20">
    <div class="container mx-auto px-4 text-center w-full flex flex-col items-center">
      <div class="inline-block bg-pink-100 text-pink-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
        TESTIMONI <span class="ml-2">Apa Kata Mereka Tentang FoodShare?</span>
      </div>

      <h2 class="text-3xl md:text-4xl font-bold mb-6 max-w-2xl text-center">
        Cerita <span class="text-green-500">pengalaman nyata</span> dari pengguna FoodShare
      </h2>

      <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto mb-12">
        Kami bangga dapat membantu menghubungkan masyarakat dengan makanan yang layak konsumsi. Berikut beberapa cerita dari mereka yang telah merasakan dampak positif menggunakan FoodShare.
      </p>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-6xl">
        <!-- Testimonial 1 -->
        <div class="bg-white p-8 rounded-lg shadow-md">
          <p class="text-gray-600 mb-4">
            "FoodShare telah menjadi penyelamat bagi saya dan keluarga. Dengan adanya platform ini, kami tidak perlu khawatir lagi mengenai makanan sehari-hari."
          </p>
          <div class="flex items-center space-x-4">
            <img src="https://via.placeholder.com/50" alt="User photo" class="w-12 h-12 rounded-full">
            <div>
              <p class="text-lg font-semibold">Rahma</p>
              <p class="text-sm text-gray-500">Penerima Manfaat</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="bg-white p-8 rounded-lg shadow-md">
          <p class="text-gray-600 mb-4">
            "Sebagai pemilik restoran, saya merasa sangat lega karena makanan yang berlebih bisa bermanfaat bagi orang lain, daripada terbuang begitu saja."
          </p>
          <div class="flex items-center space-x-4">
            <img src="https://via.placeholder.com/50" alt="User photo" class="w-12 h-12 rounded-full">
            <div>
              <p class="text-lg font-semibold">Andi</p>
              <p class="text-sm text-gray-500">Pemilik Restoran</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="bg-white border p-8 rounded-lg shadow-md">
          <p class="text-gray-600 mb-4">
            "Saya senang bisa menjadi bagian dari FoodShare sebagai relawan. Rasanya sangat memuaskan bisa membantu orang lain, dan prosesnya sangat teratur."
          </p>
          <div class="flex items-center space-x-4">
            <img src="https://via.placeholder.com/50" alt="User photo" class="w-12 h-12 rounded-full">
            <div>
              <p class="text-lg font-semibold">Budi</p>
              <p class="text-sm text-gray-500">Relawan</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: FAQ -->
  <section class="bg-white py-20">
    <div class="container mx-auto px-4 text-center w-full flex flex-col items-center">
      <div class="inline-block bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
        PERTANYAAN UMUM <span class="ml-2">Jawaban untuk semua pertanyaan Anda</span>
      </div>

      <h2 class="text-3xl md:text-4xl font-bold mb-6 max-w-2xl text-center">
        Pertanyaan yang sering <span class="text-green-500">ditanyakan</span> tentang FoodShare
      </h2>

      <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto mb-12">
        Apakah Anda memiliki pertanyaan mengenai bagaimana cara kerja FoodShare? Berikut ini adalah beberapa pertanyaan yang sering diajukan oleh pengguna baru kami.
      </p>

      <div class="w-full max-w-4xl">
        <details class="mb-4">
          <summary class="font-semibold text-lg bg-gray-100 px-6 py-4 rounded cursor-pointer">
            Bagaimana cara menjadi donatur di FoodShare?
          </summary>
          <div class="px-6 py-4">
            Untuk menjadi donatur, Anda cukup mendaftar di platform kami dan mengisi data terkait donasi makanan yang ingin diberikan. Relawan kami akan segera menghubungi Anda untuk proses pengambilan.
          </div>
        </details>
        <details class="mb-4">
          <summary class="font-semibold text-lg bg-gray-100 px-6 py-4 rounded cursor-pointer">
            Apakah ada biaya yang dikenakan untuk menggunakan layanan FoodShare?
          </summary>
          <div class="px-6 py-4">
            Tidak, semua layanan kami sepenuhnya gratis baik bagi donatur maupun penerima manfaat. Kami bekerja dengan dukungan dari mitra dan donasi untuk menutupi biaya operasional.
          </div>
        </details>
        <details class="mb-4">
          <summary class="font-semibold text-lg bg-gray-100 px-6 py-4 rounded cursor-pointer">
            Apakah kualitas makanan yang didonasikan terjamin?
          </summary>
          <div class="px-6 py-4">
            Ya, kami melakukan seleksi ketat terhadap makanan yang didonasikan untuk memastikan semua makanan masih layak konsumsi dan aman bagi penerima manfaat.
          </div>
        </details>
      </div>
    </div>
  </section>


</x-app-layout>
