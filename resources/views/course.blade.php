@extends('layouts.app')

@section('content')
<div class="course-page">
    <div class="search-bar">
        <h2>course</h2>
        <input type="text" placeholder="Search..." />
        <button>Filter course</button>
    </div>

    <section class="course-section">
        <h3>Spoken English</h3>
        <p>Learn to speak English naturally through practical dialogues and interactive exercises.</p>
        <div class="course-cards">
            <!-- Card 1 -->
            <div class="card">
                <img src="/image/.png" alt="Student" class="w-full h-full object-cover">
                <p>11+ videos</p>
                <h4>Grammar</h4>
                <span>English</span>
                <div class="meta">
                    <p>2.3k Views</p>
                    <p>⏱ 32 min</p>
                    <p>⭐ 4.5</p>
                </div>
                <div class="actions">
                    <button>Like</button>
                    <button>Start</button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <img src="vocabulary.jpg" alt="Vocabulary">
                <p>12+ videos</p>
                <h4>Vocabulary</h4>
                <span>English</span>
                <div class="meta">
                    <p>2.3k Views</p>
                    <p>⏱ 32 min</p>
                    <p>⭐ 4.5</p>
                </div>
                <div class="actions">
                    <button>Like</button>
                    <button>Start</button>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <img src="/images/img".png" alt="Conjugation">
                <p>16+ videos</p>
                <h4>Conjugation</h4>
                <span>English</span>
                <div class="meta">
                    <p>2.3k Views</p>
                    <p>⏱ 32 min</p>
                    <p>⭐ 4.5</p>
                </div>
                <div class="actions">
                    <button>Like</button>
                    <button>Start</button>
                </div>
            </div>
        </div>
    </section>

    <section class="course-section">
        <h3>Practical Mathematics</h3>
        <p>Turn math into a game: Solve real problems, boost your grades and become unstoppable in class!</p>
        <div class="course-cards">
            <!-- Card 1 -->
            <div class="card">
                <img src="/images/img1.png" alt="Trigonometry">
                <p>19+ videos</p>
                <h4>Trigonometry</h4>
                <span>Maths</span>
                <div class="meta">
                    <p>2.3k Views</p>
                    <p>⏱ 32 min</p>
                    <p>⭐ 4.5</p>
                </div>
                <div class="actions">
                    <button>Like</button>
                    <button>Start</button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <img src="/images/img2.png" alt="Algebra">
                <p>11+ videos</p>
                <h4>Algebra</h4>
                <span>Maths</span>
                <div class="meta">
                    <p>2.3k Views</p>
                    <p>⏱ 32 min</p>
                    <p>⭐ 4.5</p>
                </div>
                <div class="actions">
                    <button>Like</button>
                    <button>Start</button>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <img src=/images/img4.png" alt="Student" class="w-full h-full object-cover">
                <p>12+ videos</p>
                <h4>Geometry</h4>
                <span>Maths</span>
                <div class="meta">
                    <p>2.3k Views</p>
                    <p>⏱ 32 min</p>
                    <p>⭐ 4.5</p>
                </div>
                <div class="actions">
                    <button>Like</button>
                    <button>Start</button>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-links">
            <div>
                <h4>FOLLOW US</h4>
                <p>Facebook | Twitter | LinkedIn</p>
            </div>
            <div>
                <p>Home</p>
                <p>Course</p>
                <p>About</p>
                <p>Blog</p>
                <p>Login</p>
            </div>
            <div>
                <p>Contact</p>
                <p>Terms of Use</p>
                <p>FAQ</p>
            </div>
        </div>
    </footer>
</div>
@endsection
