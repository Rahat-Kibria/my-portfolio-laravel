@extends('progenitor')

@section('content')
    <section id="projects-main">
        <h3 class="project-heading">Projects</h3>
        <div class="tab">
            <button class="tab-links" onclick="openProjectTab(event, 'html_css')" id="defaultOpen">HTML & CSS</button>
            <button class="tab-links" onclick="openProjectTab(event, 'javascript')">JavaScript</button>
            <button class="tab-links" onclick="openProjectTab(event, 'jquery')">jQuery</button>
            <button class="tab-links" onclick="openProjectTab(event, 'vue_js')">Vue JS</button>
            <button class="tab-links" onclick="openProjectTab(event, 'php')">PHP</button>
            <button class="tab-links" onclick="openProjectTab(event, 'laravel')">Laravel</button>
        </div>

        <!-- HTML CSS Tab content -->
        <div id="html_css" class="tab-content">
            <!-- Project 1 -->
            <div class="project-item">
                <div class="column1">
                    <img src="images/html_css/demo_cv.png" alt="Demo CV Webpage">
                </div>
                <div class="column2">
                    <h3>Demo CV</h3>
                    <p>This a demo CV project made with HTML and CSS with the help of YouTuber Anisul Islam.</p>
                    <a class="project-btn" href="https://demo-cv-project-from-anisul.netlify.app/"
                        target="_blank">Netlify</a>
                    <a class="project-btn" href="https://rahat-kibria.github.io/cv-project-using-css/"
                        target="_blank">Github Page</a>
                    <a class="project-btn" href="https://github.com/Rahat-Kibria/cv-project-using-css"
                        target="_blank">Github Code</a>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="project-item">
                <div class="column1">
                    <img src="images/html_css/demo_portfolio.png" alt="Demo Portfolio">
                </div>
                <div class="column2">
                    <h3>Demo Portfolio</h3>
                    <p>This a demo portfolio project made with HTML and CSS with the help of YouTuber Anisul Islam.
                    </p>
                    <a class="project-btn" href="https://rahat-kibria.github.io/portfolio-using-css/" target="_blank">Github
                        Page</a>
                    <a class="project-btn" href="https://github.com/Rahat-Kibria/portfolio-using-css" target="_blank">Github
                        Code</a>
                </div>
            </div>
            <!-- Project 3 -->
            <div class="project-item">
                <div class="column1">
                    <img src="images/html_css/demo_portfolio_linkedin_learnng.png" alt="Demo Portfolio linkedin learning">
                </div>
                <div class="column2">
                    <h3>Demo Portfolio LinkedIn Learning</h3>
                    <p>This a demo portfolio project made with HTML and CSS with the help of LinkedIn Learning.
                    </p>
                    <a class="project-btn" href="https://css-demo-portfolio-linkedin-learning.netlify.app/"
                        target="_blank">Netlify</a>
                    <a class="project-btn" href="https://rahat-kibria.github.io/css-portfolio-linkedin-learning/"
                        target="_blank">Github
                        Page</a>
                    <a class="project-btn" href="https://github.com/Rahat-Kibria/css-portfolio-linkedin-learning"
                        target="_blank">Github
                        Code</a>
                </div>
            </div>
        </div>
        <!-- JavaScript Tab content -->
        <div id="javascript" class="tab-content">
            <!-- Project 1 -->
            <div class="project-item">
                <div class="column1">
                    <img src="images/javascript/my_portfolio.png" alt="My Portfolio">
                </div>
                <div class="column2">
                    <h3>My Portfolio</h3>
                    <p>This is my portfolio project made with HTML, CSS, JavaScript</p>
                    <a class="project-btn" href="https://rahat-kibria-wahy-portfolio.netlify.app/"
                        target="_blank">Netlify</a>
                    <a class="project-btn" href="https://rahat-kibria.github.io/my-portfolio/" target="_blank">Github
                        Page</a>
                    <a class="project-btn" href="https://github.com/Rahat-Kibria/my-portfolio" target="_blank">Github
                        Code</a>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="project-item">
                <div class="column1">
                    <img src="images/javascript/guessing_game.png" alt="Guessing Game JavaScript">
                </div>
                <div class="column2">
                    <h3>Guessing Game</h3>
                    <p>This is a Guessing number game project made with HTML, CSS, JavaScript with the help of YouTuber
                        Anisul Islam</p>
                    <a class="project-btn" href="https://rahat-kibria.github.io/guessing-game-using-javascript/"
                        target="_blank">Github
                        Page</a>
                    <a class="project-btn" href="https://github.com/Rahat-Kibria/guessing-game-using-javascript"
                        target="_blank">Github
                        Code</a>
                </div>
            </div>
        </div>
        <!-- jQuery Tab content -->
        <div id="jquery" class="tab-content">
            <!-- Project 1 -->
            <div class="project-item">
                <div class="column1">
                    <img src="images/jquery/jquery_ui_package.png" alt="jquery jquery ui and packages">
                </div>
                <div class="column2">
                    <h3>jQuery, jQuery UI, jQuery Packages </h3>
                    <p>This is a jQuery project. jQuery UI and packages are used for this project. It is made with HTML,
                        CSS, Bootstrap, JavaScript, jQuery with the help of YouTuber Fiz and Training with Live Project
                    </p>
                    <a class="project-btn" href="https://jquery-project-with-plugins.netlify.app/"
                        target="_blank">Netlify</a>
                    <a class="project-btn" href="https://rahat-kibria.github.io/jquery-project-with-plugins/"
                        target="_blank">Github
                        Page</a>
                    <a class="project-btn" href="https://github.com/Rahat-Kibria/jquery-project-with-plugins"
                        target="_blank">Github
                        Code</a>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="project-item">
                <div class="column1">
                    <img src="images/jquery/calculator.png" alt="jquery calculator">
                </div>
                <div class=" column2">
                    <h3>jQuery Calculator </h3>
                    <p>This is a jQuery calculator project, made with HTML,
                        CSS, jQuery with the help of YouTuber Anisul Islam
                    </p>
                    <a class="project-btn" href="https://jquery-calculator-anisul.netlify.app/"
                        target="_blank">Netlify</a>
                    <a class="project-btn" href="https://rahat-kibria.github.io/jquery-calculator-anisul/"
                        target="_blank">Github
                        Page</a>
                    <a class="project-btn" href="https://github.com/Rahat-Kibria/jquery-calculator-anisul"
                        target="_blank">Github
                        Code</a>
                </div>
            </div>
        </div>
        <!-- Vue JS Tab content -->
        <div id="vue_js" class="tab-content">
            <!-- Project 1 -->
            <div class="project-item">
                <div class="column1">
                    <h3>Vue JS</h3>
                </div>
                <div class=" column2">
                    <p>Nothing added yet.</p>
                </div>
            </div>
        </div>
        <!-- PHP Tab content -->
        <div id="php" class="tab-content">
            <!-- Project 1 -->
            <div class="project-item">
                <div class="column1">
                    <h3>PHP</h3>
                </div>
                <div class=" column2">
                    <p>Nothing added yet.</p>
                </div>
            </div>
        </div>
        <!-- Laravel Tab content -->
        <div id="laravel" class="tab-content">
            <!-- Project 1 -->
            <div class="project-item">
                <div class="column1">
                    <img src="images/laravel/ecommerce_varsity.png" alt="Laravel Single Vendor E-Commerce">
                </div>
                <div class="column2">
                    <h3>Single Vendor E-Commerce </h3>
                    <p>This is an e-commerce project, made with HTML,
                        CSS, Bootstrap, JavaScript, jQuery, PHP, MySql and Laravel
                    </p>
                    <a class="project-btn" href="https://bitbucket.org/rahat-kibria/e-commerce-website-2-repo/src/master/"
                        target="_blank">Bitbucket
                        Code</a>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ url('/js/script.js') }}"></script>
@endsection
