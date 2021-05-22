@extends ('layout/template')

@section('title','article')

@section('konten')
    <br>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">

        </div>
        <div class="col">
          <article>
            <h1>Pengenalan Apa Itu Framework dan Jenisnya</h1>
            <br>
            <img src="{{asset('gambar/framework3.jpg')}}" class="rounded d-block" alt="...">
            <br>
            <br>
            <p>
              Secara sederhana, framework disebut sebagai kerangka kerja. Para developer menggunakan framework untuk memudahkan mereka dalam membuat dan mengembangkan aplikasi atau software. Pada framework itu sendiri berisi kumpulan fungsi-fungsi dasar atau perintah yang biasa digunakan dalam mengembangkan suatu software, dengan harapan agar software yang dibangun menjadi lebih cepat dan terstruktur.
            </p>
            <p>
              Selain itu, ada juga yang mengatakan bahwa framework adalah komponen-komponen yang sudah siap dipakai oleh developer untuk menangani berbagai permasalahan dalam pemrograman, seperti pemanggilan variabel, file, koneksi ke database dan sebagainya. Dengan begitu, developer akan lebih fokus dan mampu menyelesaikan software menjadi lebih cepat dan efektif.
            </p>
            <br>
            <h3>Fungsi dan Kelebihan Framework</h3>
            <p>
              Berdasarkan pengertian framework diatas, sudah tampak bahwa framework memiliki fungsi utama untuk membantu dan memudahkan para developer dalam menyelesaikan suatu proyek pengembangan software atau aplikasi. Selain itu, ada beberapa kelebihan framework yang bisa Anda ketahui dibawah ini.
            </p>
            <h4>1. Menghemat Waktu Pengembangan</h4>
            <p>
              Penggunaan framework dalam pengembangan suatu software akan mengurangi beban kerja developer, sehingga tidak ada waktu yang terbuang untuk memikirkan fungsi-fungsi umum yang akan digunakan.
            </p>
            <p>
              Selain itu, developer akan lebih fokus pada alur cerita pada aplikasi seperti yang dibutuhkan oleh pengguna. Dengan begitu, waktu pengembangan software akan berjalan lebih cepat dan dapat diserahkan kepada pengguna sesuai dengan waktu yang telah disepakati bersama.
            </p>
            <h4>2. Pemrograman menjadi Lebih Terstruktur</h4>
            <p>
              Ketika developer menghadapi suatu proyek pengembangan software yang besar, maka akan terdapat banyak program yang ditulis didalamnya. Terkadang, semakin banyaknya program akan menjadikan proses debugging semakin lambat. Selain itu, untuk mengecek kode program yang menjadi penyebab terjadinya error akan semakin sulit karena program tidak terstruktur dengan baik.
            </p>
            <p>
              Oleh karena itu, penggunaan framework dapat menjadikan pemrograman menjadi lebih terstruktur sehingga Anda dapat dengan mudah menemukan bagian-bagian dari kode yang perlu diperbaiki. Apalagi, ada framework yang menerapkan konsep MVC (Model View Control) yang memudahkan developer untuk memisahkan dan menyusun program berdasarkan bagiannya, yaitu Model, View ataupun Control.
            </p>
            <h4>3. Pengulangan Kode</h4>
            <p>
              Seperti yang sudah disinggung pada poin pertama bahwa pembuatan software membutuhkan waktu yang lama, apalagi Anda berperan sebagai programmer tunggal. Maka Anda dapat menggunakan framework untuk mengurangi beban tersebut.
            </p>
            <p>
              Sebab, framework sudah menanamkan berbagai fungsi-fungsi umum yang bisa Anda gunakan tanpa harus mengulangi pembuatan kode dari awal. Pastinya, akan memudahkan Anda juga untuk menggunakannya kembali di proyek-proyek berikutnya.
            </p>
            <h4>4. Meningkatkan Keamanan</h4>
            <p>
              Keamanan menjadi suatu hal yang sangat vital dalam pengembangan software atau aplikasi. Apalagi, software yang memuat data pengguna yang privasinya harus dilindungi. Disini, framework terus memperbarui versinya yaitu menawarkan fitur yang handal dalam menangani berbagai jenis ancaman yang menyerang sistem keamanan.
            </p>
            <br>
            <br>
            <h3>Kelemahan Framework</h3>
            <br>
            <h4>1. Kurangnya pemahaman bahasa pemrograman</h4>
            <p>
              Jika Anda bekerja menggunakan kerangka kerja dan hanya mengetahui sedikit tentang bahasa pemrograman yang digunakan dibaliknya, maka Anda hanya mempelajari mengenai kerangka tersebut. Sehingga pemahaman mengenai bahasa pemrograman menjadi tidak berkembang.
            </p>
            <h4>2. Memiliki batasan</h4>
            <p>
              Dalam penggunaannya, kerangka ini juga memiliki beberapa batasan yang tidak dapat Anda modifikasi. Sehingga Anda harus bekerja sesuai dengan standar yang digunakan di dalamnya. Oleh karena itu, ketika mengembangkan sebuah aplikasi, Anda harus menggunakan kerangka kerja yang sesuai dengan kebutuhan Anda.
            </p>
            <h4>3. Kode Publik</h4>
            <p>
              Karena bersifat publik, maka kode dapat digunakan siapa saja termasuk pihak-pihak yang mempunyai niat buruk. Mereka dapat mempelajari cara kerja kode untuk menemukan kelemahan untuk menyerang Anda.
            </p>
            <br>
            <br>
            <h3>Jenis-Jenis Framework</h3>
            <p>
              Pada umumnya, terdapat dua jenis framework yaitu Desktop Framework dan Web Framework. Kedua jenis framework tersebut memiliki kegunaannya masing-masing. Desktop framework merupakan framework yang digunakan untuk membangun aplikasi berbasis desktop, sedangkan web framework merupakan framework yang digunakan untuk membangun aplikasi berbasis web. Berikut ini akan dijelaskan mengenai contoh-contoh dari kedua jenis framework.
            </p>
            <br>
            <h3>1. Desktop Framework</h3>
            <p>
              Dibawah ini merupakan beberapa framework yang termasuk kedalam kategori desktop framework.
            </p>
            <h4>A. Electron</h4>
            <p>
              Electron merupakan suatu framework JavaScript yang digunakan untuk mengembangkan aplikasi berbasis desktop. Pada umumnya, JavaScript identik dengan pembuatan website. Oleh karena itu, JavaScript yang digunakan electron ini dirancang dengan menggunakan teknologi HTML, CSS dan JavaScript. Padahal sebenarnya, electron juga dapat ditulis dengan menggunakan bahasa C++. Beberapa aplikasi desktop populer yang dibangun oleh Electron seperti Atom, Slack, WordPress, Skype dan Github desktop.
            </p>
            <h4>B. Proton Native</h4>
            <p>
              Proton Native merupakan framework JavaScript yang dikembangkan oleh Gustav Hansen untuk merancang aplikasi berbasis desktop. Proton Native memiliki fitur native tools yang mempunyai ukuran yang kecil dan penggunaan sumber kekuatan yang lebih sedikit.
            </p>
            <br>
            <h3>2. Web Framework</h3>
            <p>
              Saat ini, terdapat beberapa daftar web framework yang sengaja dirancang untuk mendukung pengembangan aplikasi berbasis web yang akan dijelaskan berikut ini.
            </p>
            <h4>A. Django</h4>
            <p>
              Django merupakan suatu framework yang berbasis Python dengan menggunakan pola MTV, yaitu Model, Template dan View. Django menawarkan berbagai fitur untuk mengembangkan aplikasi web yang berkualitas, terutama bagian keamanan yang digunakan untuk mencegah terjadinya eksekusi program dilapisan Template. Web framework ini sudah banyak digunakan oleh perusahaan besar seperti Disqus, Pinterest, Instagram dan Quora.
            </p>
            <h4>B. Angular JS</h4>
            <p>
              Angular JS merupakan framework JavaScript yang sengaja dirilis oleh Google dalam mengembangkan aplikasi web. Bahkan, angular dapat membangun halaman web di sisi client dengan kinerja yang tinggi. Framework ini memiliki konsep MVC (Model, View, Controller). Web framework ini sudah banyak digunakan oleh perusahaan besar seperti Youtube on PS3, Weather dan Netflix.
            </p>
            <h4>C. Laravel</h4>
            <p>
              Laravel merupakan framework MVC yang dibuat oleh Taylor Otwell pada 2011 dengan menggunakan PHP. Framework ini adalah pengembangan website berbasis MVP yang dirancang untuk meningkatkan kualitas perangkat lunak, yaitu dengan mengurangi biaya pengembangan awal dan biaya pemeliharaan, meningkatkan pengalaman bekerja dengan aplikasi yang menyediakan sintaks ekspresif, jelas dan menghemat waktu. Web framework ini sudah banyak digunakan oleh perusahaan seperti Deltanet Travel dan Neighbourhood Lender.
            </p>
            <h4>D. Rails</h4>
            <p>
              Rails adalah web framework Model-View-Controller yang ditulis oleh David Heinemeier Hansson. Selain itu, Rails mencakup semua yang diperlukan untuk membuat aplikasi web berbasis database menggunakan Ruby. Web framework ini sudah banyak digunakan oleh perusahaan seperti AirBnB, GitHub, UrbanDictionary, GroupOn dan Shopify.
            </p>
            <h4>E. Spring</h4>
            <p>
              Spring adalah web framework Model-View-Controller yang dikembangkan oleh Pivotal Software. Framework ini dirancang untuk menciptakan aplikasi web berbasis JVM yang sederhana, portabel, cepat dan fleksibel. Web framework ini sudah banyak digunakan oleh perusahaan seperti Mascus dan Allocine.
            </p>
            <h4>F. CodeIgniter</h4>
            <p>
              CodeIgniter merupakan framework yang memiliki konsep MVC (Model, View, Controller) untuk membangun sebuah website yang dinamis menggunakan PHP. Dengan menggunakan codeIgniter, developer akan semakin cepat dalam membangun aplikasi web, walaupun memulainya dari awal. Web framework ini sudah banyak digunakan oleh perusahaan seperti Bufferapp dan The Mail and Guardian.
            </p>

          </article>
        </div>
        <div class="col">

        </div>
      </div>
    </div>
@endsection

@section('style')
    <style>
        p{
            font-size: 20px;
        }
        h4{
            font-size: 23px;
        }
  </style>
@endsection