<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Diri Saya</title>
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

        .profile-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            align-items: center;
            margin-bottom: 40px;
        }

        .profile-photo {
            text-align: center;
        }

        .profile-photo img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            border: 5px solid #667eea;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
            object-fit: cover;
        }

        .profile-info h2 {
            font-size: 2em;
            color: #333;
            margin-bottom: 15px;
        }

        .profile-info p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 15px;
            font-size: 1.1em;
        }

        .info-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .info-item strong {
            color: #667eea;
            display: block;
            margin-bottom: 5px;
        }

        .info-item span {
            color: #666;
        }

        .skills {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            margin-top: 30px;
        }

        .skills h3 {
            color: #333;
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        .skill-item {
            margin-bottom: 20px;
        }

        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .skill-bar {
            width: 100%;
            height: 10px;
            background-color: #ddd;
            border-radius: 5px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            transition: width 0.3s ease;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #666;
            border-top: 2px solid #667eea;
        }

        @media (max-width: 768px) {
            .profile-section {
                grid-template-columns: 1fr;
            }

            header h1 {
                font-size: 1.8em;
            }

            nav a {
                display: block;
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>👋 Tentang Saya</h1>
            <p>Pelajar Kelas 10 RPL</p>
        </header>

        <nav>
            <a href="index.php" class="active">Profil</a>
            <a href="tugas.php">Tugas & Portofolio</a>
        </nav>

        <main>
            <section class="profile-section">
                <div class="profile-photo">
                    <img src="https://via.placeholder.com/250?text=Foto+Saya" alt="Foto Profil">
                </div>

                <div class="profile-info">
                    <h2>Nama Saya</h2>
                    <p>Saya adalah seorang pelajar kelas 10 Rekayasa Perangkat Lunak (RPL) yang antusias dalam dunia pemrograman dan teknologi. Saya memiliki minat khusus dalam web development dan terus belajar untuk meningkatkan skill saya.</p>
                    
                    <div class="info-item">
                        <strong>📚 Kelas</strong>
                        <span>10 RPL (Rekayasa Perangkat Lunak)</span>
                    </div>

                    <div class="info-item">
                        <strong>🎓 Sekolah</strong>
                        <span>SMK / SMA</span>
                    </div>

                    <div class="info-item">
                        <strong>💻 Fokus</strong>
                        <span>Web Development & Programming</span>
                    </div>

                    <div class="info-item">
                        <strong>🎯 Hobi</strong>
                        <span>Coding, Gaming, Membaca Teknologi</span>
                    </div>
                </div>
            </section>

            <section class="skills">
                <h3>⚡ Skill Saya</h3>

                <div class="skill-item">
                    <div class="skill-name">
                        <span>HTML & CSS</span>
                        <span>80%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 80%"></div>
                    </div>
                </div>

                <div class="skill-item">
                    <div class="skill-name">
                        <span>PHP</span>
                        <span>70%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 70%"></div>
                    </div>
                </div>

                <div class="skill-item">
                    <div class="skill-name">
                        <span>JavaScript</span>
                        <span>60%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 60%"></div>
                    </div>
                </div>

                <div class="skill-item">
                    <div class="skill-name">
                        <span>Database (MySQL)</span>
                        <span>65%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 65%"></div>
                    </div>
                </div>

                <div class="skill-item">
                    <div class="skill-name">
                        <span>Desain UI/UX</span>
                        <span>55%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 55%"></div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <p>&copy; 2025 Profil Saya | Dibuat dengan ❤️ untuk Tugas Kelas 10 RPL</p>
        </footer>
    </div>
</body>
</html>
