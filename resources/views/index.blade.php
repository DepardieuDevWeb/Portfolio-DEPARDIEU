<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pascal Depardieu | Portfolio</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Depardieu</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__link"><a href="#home">Home</a></li>
                        <li class="nav__link"><a href="#about">About</a></li>
                        <li class="nav__link"><a href="#skills">Skills</a></li>
                        <li class="nav__link">
                            <a href="#services">Services</a>
                        </li>
                        <li class="nav__link">
                            <a href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav__link">
                            <a href="#contact">Contact me</a>
                        </li>
                    </ul>
                    <i class="nav__close" id="nav-close">X</i>
                </div>
                <div class="nav__btns">
                    <i class="change-theme" id="theme-button">Change theme</i>
                    <div class="nav__toggle" id="nav-toggle">
                        <i>O</i>
                    </div>
                </div>
            </nav>
        </header>
        <main class="main container">
            <section class="home section" id="home">
                <div class="home__container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a
                                href="#"
                                class="home__social-icon"
                                target="_blank"
                                ><i></i>Linkdin</a
                            >
                            <a
                                href="#"
                                class="home__social-icon"
                                target="_blank"
                                ><i></i>Github</a
                            >
                        </div>
                    </div>
                    <div class="home__img"></div>
                    <div class="home__data">
                        <h1 class="home__title">Pascal Depardieu</h1>
                        <h3 class="home__subtitle">Fullstack developer</h3>
                        <p class="home__description">
                            I love creating on Twiter, curently working at
                            codeline. Living in Brazzaville
                        </p>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="">
                    <h3 class="badge">Skills</h3>
                    <h2 class="">I love working on...</h2>
                    <div class="skills">
                        <div class="skill">
                            <h2>HTML</h2>
                        </div>
                        <div class="skill">
                            <h2>CSS</h2>
                        </div>
                        <div class="skill">
                            <h2>PHP</h2>
                        </div>
                        <div class="skill">
                            <h2>Javascript</h2>
                        </div>
                        <div class="skill">
                            <h2>Laravel</h2>
                        </div>
                        <div class="skill">
                            <h2>NodeJs</h2>
                        </div>
                        <div class="skill">
                            <h2>React</h2>
                        </div>
                        <div class="skill">
                            <h2>Next</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <h2>Contact me</h2>
                <form action="">
                    <div class="contact_inputs grid">
                        <div class="contact__content">
                            <label for="name" class="contact__label"
                                >Name</label
                            >
                            <input
                                type="text"
                                id="name"
                                class="contact__input"
                            />
                        </div>
                        <div class="contact__content">
                            <label for="email" class="contact__label"
                                >Email</label
                            >
                            <input
                                type="email"
                                id="email"
                                class="contact__input"
                            />
                        </div>
                    </div>
                    <div class="contact__content">
                        <label for="project" class="contact__label"
                            >Project</label
                        >
                        <input
                            type="text"
                            id="project"
                            class="contact__input"
                        />
                    </div>
                    <div class="contact__content">
                        <label for="message" class="contact__label"
                            >Message</label
                        >
                        <textarea
                            name=""
                            id="message"
                            cols="0"
                            rows="7"
                            class="contact__input"
                        ></textarea>
                    </div>
                </form>
            </section>
        </main>
    </body>
</html>
