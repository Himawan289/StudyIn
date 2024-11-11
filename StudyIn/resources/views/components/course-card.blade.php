<div class="course-card">
    <div
        class="course-thumbnail"style="display: flex; align-items: center; justify-content: center; height: 50%;object-fit: cover;">
        <img src="{{ asset($thumbnail) }}" alt="{{ $courseTitle }}">
    </div>
    <div class="course-info" style="display: flex; flex-direction: column; justify-content: space-between; height: 50%;  text-align: left;">
        <p1 class="course-subtitle js-course-title">{{ $courseTitle }}</p1>
        <div style="width: 100%; text-align: left">
            <div class="course-meta">
                <span class="course-lesson">📚 Lesson: {{ $lessonCount }}</span>
                <span class="course-class">🏆 Kelas: {{ $courseClass }}</span>
            </div>
            <button class="start-course-btn">Start Course <i class="fa-solid fa-angle-right"></i></button>
        </div>

    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const maxWords = 10; // Jumlah maksimal kata yang diizinkan

        document.querySelectorAll('.js-course-title').forEach(element => {
            let words = element.innerText.split(' '); // Pisahkan teks menjadi array kata-kata

            if (words.length > maxWords) {
                // Gabungkan kembali kata-kata hingga batas maksimal dan tambahkan '...'
                element.innerText = words.slice(0, maxWords).join(' ') + '...';
            }
        });
    });
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
