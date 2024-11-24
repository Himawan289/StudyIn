<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invoice</title>
    <link rel="stylesheet" href="{{ asset('css/jadwalbelajar.css') }}">
</head>
<body>
<nav class="navbar">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="StudyIn Logo">
        </div>
        <div class="nav-links">
            <div>HOME</div>
            <div>MATERI</div>
            <div>JADWAL</div>
        </div>
        <div class="search-container">
            <input type="text" placeholder="Belajar apa hari ini?" class="search-bar">
            <img src="{{ asset('img/dimas.png') }}" alt="User Avatar">
        </div>
    </nav>

    <main class="container">
        <section class="schedule-section">
            <h1>Jadwal Belajar Kamu</h1>
            
            <div class="class-card">
                <div class="class-indicator"></div>
                <div class="class-info">
                    <div class="class-title">English classes</div>
                    <div class="class-subtitle">Tika sarak s.pd</div>
                </div>
                <div>→</div>
            </div>

            <div class="class-card">
                <div class="class-indicator"></div>
                <div class="class-info">
                    <div class="class-title">Mathematic classes</div>
                    <div class="class-subtitle">Tika sarak s.pd</div>
                </div>
                <div>→</div>
            </div>

            <div class="class-card">
                <div class="class-indicator"></div>
                <div class="class-info">
                    <div class="class-title">Physical classes</div>
                    <div class="class-subtitle">Tika sarak s.pd</div>
                </div>
                <div>→</div>
            </div>
        </section>

        <aside>
            <div class="calendar">
                <div class="calendar-header">
                    <h2>July, 2021</h2>
                    <div class="calendar-navigation">
                        <span>←</span>
                        <span>→</span>
                    </div>
                </div>
                <div class="calendar-grid">
                    <!-- Calendar headers -->
                    <div class="calendar-day-header">Mo</div>
                    <div class="calendar-day-header">Tu</div>
                    <div class="calendar-day-header">We</div>
                    <div class="calendar-day-header">Th</div>
                    <div class="calendar-day-header">Fr</div>
                    <div class="calendar-day-header">Sa</div>
                    <div class="calendar-day-header">Su</div>
                    
                    <!-- Calendar days -->
                    <div class="calendar-day other-month">28</div>
                    <div class="calendar-day other-month">29</div>
                    <div class="calendar-day other-month">30</div>
                    <div class="calendar-day">1</div>
                    <div class="calendar-day">2</div>
                    <div class="calendar-day">3</div>
                    <div class="calendar-day">4</div>
                    
                    <div class="calendar-day">5</div>
                    <div class="calendar-day">6</div>
                    <div class="calendar-day">7</div>
                    <div class="calendar-day">8</div>
                    <div class="calendar-day">9</div>
                    <div class="calendar-day">10</div>
                    <div class="calendar-day">11</div>
                    
                    <div class="calendar-day">12</div>
                    <div class="calendar-day">13</div>
                    <div class="calendar-day">14</div>
                    <div class="calendar-day">15</div>
                    <div class="calendar-day">16</div>
                    <div class="calendar-day">17</div>
                    <div class="calendar-day">18</div>
                    
                    <div class="calendar-day">19</div>
                    <div class="calendar-day">20</div>
                    <div class="calendar-day">21</div>
                    <div class="calendar-day">22</div>
                    <div class="calendar-day">23</div>
                    <div class="calendar-day">24</div>
                    <div class="calendar-day">25</div>
                    
                    <div class="calendar-day">26</div>
                    <div class="calendar-day">27</div>
                    <div class="calendar-day">28</div>
                    <div class="calendar-day">29</div>
                    <div class="calendar-day">30</div>
                    <div class="calendar-day">31</div>
                    <div class="calendar-day other-month">1</div>
                </div>
            </div>

            <div class="recommendations">
                <h2>REKOMENDASI MATERI HARI INI</h2>
                
                <div class="recommendation-card">
                    <img src="{{ asset('img/othercourse.png') }}" alt="Adobe Illustrator" class="recommendation-image">
                    <div class="recommendation-info">
                        <h3>Adobe Illustrator for all beginner artist</h3>
                        <div class="recommendation-details">
                            <div>Samule Doe</div>
                            <div>Lesson: 6 | Kelas: 1 SMA</div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h2>Learn Today<br>Lead Tomorrow</h2>
            </div>
            <div class="footer-section">
                <h2>KATEGORI</h2>
                <ul class="footer-links">
                    <li>Materi</li>
                    <li>Promo</li>
                    <li>E-Library</li>
                </ul>
            </div>
            <div class="footer-section">
                <h2>QUICK ACCESS</h2>
                <ul class="footer-links">
                    <li>Jadwal</li>
                    <li>Video Pembelajaran</li>
                    <li>Latihan Soal</li>
                    <li>Diskusi</li>
                </ul>
            </div>
        </div>
    </footer>
</body>