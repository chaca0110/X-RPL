<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas & Portofolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2em;
            opacity: 0.9;
        }

        nav {
            background-color: #f8f9fa;
            padding: 15px;
            text-align: center;
            border-bottom: 2px solid #667eea;
        }

        nav a {
            display: inline-block;
            margin: 0 15px;
            padding: 10px 20px;
            background-color: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        nav a:hover {
            background-color: #764ba2;
            transform: translateY(-2px);
        }

        nav a.active {
            background-color: #764ba2;
        }

        main {
            padding: 40px;
        }

        h2 {
            color: #333;
            margin-bottom: 25px;
            font-size: 2em;
            border-bottom: 3px solid #667eea;
            padding-bottom: 10px;
        }

        .tab-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .tab-btn {
            padding: 10px 20px;
            background-color: #f0f0f0;
            border: 2px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: bold;
            color: #333;
        }

        .tab-btn:hover {
            background-color: #667eea;
            color: white;
            border-color: #667eea;
        }

        .tab-btn.active {
            background-color: #667eea;
            color: white;
            border-color: #667eea;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .tugas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .tugas-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tugas-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .tugas-card h3 {
            margin-bottom: 10px;
            font-size: 1.3em;
        }

        .tugas-card .nomor {
            font-size: 0.9em;
            opacity: 0.8;
            margin-bottom: 10px;
        }

        .tugas-card p {
            font-size: 0.95em;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .tugas-status {
            display: inline-block;
            padding: 5px 10px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            font-size: 0.85em;
            font-weight: bold;
        }

        .tugas-status.selesai {
            background-color: #4caf50;
        }

        .tugas-status.proses {
            background-color: #ff9800;
        }

        .portfolio-item {
            background-color: #f8f9fa;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 10px;
            border-left: 5px solid #667eea;
            transition: all 0.3s ease;
        }

        .portfolio-item:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transform: translateX(5px);
        }

        .portfolio-item h3 {
            color: #667eea;
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        .portfolio-item .deskripsi {
            color: #666;
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .portfolio-item .teknologi {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .teknologi-tag {
            background-color: #667eea;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.85em;
            font-weight: bold;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-box {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .stat-number {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.95em;
            opacity: 0.9;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #666;
            border-top: 2px solid #667eea;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 1.8em;
            }

            nav a {
                display: block;
                margin: 5px 0;
            }

            .tab-buttons {
                flex-direction: column;
            }

            .tab-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>📋 Tugas & Portofolio</h1>
            <p>Daftar Tugas dan Karya Saya</p>
        </header>

        <nav>
            <a href="index.php">Profil</a>
            <a href="tugas.php" class="active">Tugas & Portofolio</a>
        </nav>

        <main>
            <div class="tab-buttons">
                <button class="tab-btn active" onclick="showTab('tugas')">📝 Tugas Kelas</button>
                <button class="tab-btn" onclick="showTab('portofolio')">💼 Portofolio</button>
                <button class="tab-btn" onclick="showTab('statistik')">📊 Statistik</button>
            </div>

            <!-- Tab Tugas Kelas -->
            <div id="tugas" class="tab-content active">
                <h2>📝 Daftar Tugas Kelas</h2>
                
                <div class="tugas-grid">
                    <div class="tugas-card">
                        <div class="nomor">Tugas 1</div>
                        <h3>Buat Website Profil</h3>
                        <p>Membuat website profil pribadi menggunakan HTML, CSS, dan PHP dengan tampilan responsif.</p>
                        <span class="tugas-status selesai">✓ Selesai</span>
                    </div>

                    <div class="tugas-card">
                        <div class="nomor">Tugas 2</div>
                        <h3>Form Login & Register</h3>
                        <p>Mengimplementasikan sistem login dan registrasi user dengan validasi dan keamanan dasar.</p>
                        <span class="tugas-status selesai">✓ Selesai</span>
                    </div>

                    <div class="tugas-card">
                        <div class="nomor">Tugas 3</div>
                        <h3>Database Management</h3>
                        <p>Membuat aplikasi CRUD (Create, Read, Update, Delete) dengan database MySQL.</p>
                        <span class="tugas-status selesai">✓ Selesai</span>
                    </div>

                    <div class="tugas-card">
                        <div class="nomor">Tugas 4</div>
                        <h3>OOP dalam PHP</h3>
                        <p>Mempelajari dan membuat kalkulator menggunakan konsep OOP (Kelas dan Objek).</p>
                        <span class="tugas-status selesai">✓ Selesai</span>
                    </div>

                    <div class="tugas-card">
                        <div class="nomor">Tugas 5</div>
                        <h3>Responsive Web Design</h3>
                        <p>Membuat website yang responsif dan mobile-friendly menggunakan CSS Grid dan Flexbox.</p>
                        <span class="tugas-status selesai">✓ Selesai</span>
                    </div>

                    <div class="tugas-card">
                        <div class="nomor">Tugas 6</div>
                        <h3>JavaScript Interaktif</h3>
                        <p>Menambahkan fitur interaktif menggunakan JavaScript vanilla untuk meningkatkan UX.</p>
                        <span class="tugas-status proses">⏳ Sedang Dikerjakan</span>
                    </div>
                </div>
            </div>

            <!-- Tab Portofolio -->
            <div id="portofolio" class="tab-content">
                <h2>💼 Portofolio Proyek</h2>

                <div class="portfolio-item">
                    <h3>🌐 Website Sekolah</h3>
                    <p class="deskripsi">Website informasi sekolah dengan navigasi menu, halaman profil, kegiatan, dan prestasi. Dioptimalkan untuk responsif di berbagai perangkat.</p>
                    <div class="teknologi">
                        <span class="teknologi-tag">HTML</span>
                        <span class="teknologi-tag">CSS</span>
                        <span class="teknologi-tag">PHP</span>
                        <span class="teknologi-tag">Responsive</span>
                    </div>
                </div>

                <div class="portfolio-item">
                    <h3>🔐 Sistem Login User</h3>
                    <p class="deskripsi">Aplikasi login dan registrasi dengan fitur validasi form, keamanan password, dan session management untuk user authentication.</p>
                    <div class="teknologi">
                        <span class="teknologi-tag">PHP</span>
                        <span class="teknologi-tag">MySQL</span>
                        <span class="teknologi-tag">Session</span>
                        <span class="teknologi-tag">Security</span>
                    </div>
                </div>

                <div class="portfolio-item">
                    <h3>📊 Aplikasi Manajemen Data</h3>
                    <p class="deskripsi">Aplikasi CRUD lengkap untuk manajemen data dengan fitur tambah, edit, hapus, dan pencarian data dari database MySQL.</p>
                    <div class="teknologi">
                        <span class="teknologi-tag">PHP</span>
                        <span class="teknologi-tag">MySQL</span>
                        <span class="teknologi-tag">CRUD</span>
                        <span class="teknologi-tag">Database</span>
                    </div>
                </div>

                <div class="portfolio-item">
                    <h3>🧮 Kalkulator OOP</h3>
                    <p class="deskripsi">Implementasi kalkulator menggunakan Object-Oriented Programming dengan konsep class, object, method, dan property.</p>
                    <div class="teknologi">
                        <span class="teknologi-tag">PHP</span>
                        <span class="teknologi-tag">OOP</span>
                        <span class="teknologi-tag">Class</span>
                        <span class="teknologi-tag">Method</span>
                    </div>
                </div>

                <div class="portfolio-item">
                    <h3>🎨 Website Portfolio Responsif</h3>
                    <p class="deskripsi">Website portfolio pribadi yang fully responsive menggunakan Flexbox dan CSS Grid, kompatibel dengan semua device.</p>
                    <div class="teknologi">
                        <span class="teknologi-tag">HTML5</span>
                        <span class="teknologi-tag">CSS3</span>
                        <span class="teknologi-tag">Flexbox</span>
                        <span class="teknologi-tag">Grid</span>
                    </div>
                </div>
            </div>

            <!-- Tab Statistik -->
            <div id="statistik" class="tab-content">
                <h2>📊 Statistik Pembelajaran</h2>

                <div class="stats">
                    <div class="stat-box">
                        <div class="stat-number">12</div>
                        <div class="stat-label">Tugas Diselesaikan</div>
                    </div>

                    <div class="stat-box">
                        <div class="stat-number">5</div>
                        <div class="stat-label">Proyek Portofolio</div>
                    </div>

                    <div class="stat-box">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Kehadiran</div>
                    </div>

                    <div class="stat-box">
                        <div class="stat-number">4.2</div>
                        <div class="stat-label">Rating Rata-rata</div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <h3>📈 Progress Pembelajaran</h3>
                    <p class="deskripsi">
                        Saya telah menyelesaikan berbagai tugas kelas yang mencakup:<br><br>
                        ✓ Dasar-dasar HTML & CSS<br>
                        ✓ JavaScript dan DOM Manipulation<br>
                        ✓ PHP dan Backend Development<br>
                        ✓ MySQL dan Database Design<br>
                        ✓ Object-Oriented Programming<br>
                        ✓ Responsive Web Design<br>
                        ✓ Form Validation & Security<br>
                        ✓ Session Management<br>
                    </p>
                </div>

                <div class="portfolio-item">
                    <h3>🎯 Target Ke Depan</h3>
                    <p class="deskripsi">
                        Rencana pembelajaran saya untuk masa depan:<br><br>
                        ➤ Mendalami Framework PHP (Laravel)<br>
                        ➤ Belajar React atau Vue.js<br>
                        ➤ API Development & RESTful Services<br>
                        ➤ Cloud Deployment (Heroku, AWS)<br>
                        ➤ Mobile Development<br>
                        ➤ Machine Learning Basics<br>
                    </p>
                </div>
            </div>
        </main>

        <footer>
            <p>&copy; 2025 Tugas & Portofolio | Dibuat dengan ❤️ untuk Kelas 10 RPL</p>
        </footer>
    </div>

    <script>
        function showTab(tabName) {
            // Hide all tabs
            const tabs = document.querySelectorAll('.tab-content');
            tabs.forEach(tab => {
                tab.classList.remove('active');
            });

            // Remove active class from all buttons
            const buttons = document.querySelectorAll('.tab-btn');
            buttons.forEach(btn => {
                btn.classList.remove('active');
            });

            // Show selected tab
            document.getElementById(tabName).classList.add('active');

            // Add active class to clicked button
            event.target.classList.add('active');
        }
    </script>
</body>
</html>
