@extends('base') @section('content')
<section class="home section" id="home">
    <div class="grid home__container">
        <div class="grid home__content fade-in-up">
            <div class="home__data">
                <h1 class="home__title">Pascal Depardieu</h1>
                <h3 class="home__subtitle">Full-stack developer</h3>
                <p class="home__description">
                    <strong>Autodidacte</strong> passionné, j'ai appris le
                    développement web via Youtube après un parcours scolaire en
                    comptabilité. Je aujourd'hui conçois des applications
                    <strong>perfomantes</strong> en
                    <strong>front-end et back-end</strong>, en m'adaptant aux
                    besions réels des utilisateurs. Mon objectif est de livrer
                    des projets intuitifs et robustes pour mes clients
                    freelance. Je suis disponible pour des missions freelance,
                    que ce soit pour des startups, des entreprises ou des
                    projets personnels
                </p>
            </div>
            <div class="home__img">
                <!-- <img src="images/dsn.jpg" alt="" /> -->
                <div class="profile-container">
                    <svg
                        viewBox="0 0 200 200"
                        class="profile-bg"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill="#7E57C2"
                            d="M50,-60C65,-50,75,-30,77,-
                    10C79,10,73,30,60,45C47,60,27,70,7,70C-13,70,-27,60,-43,50C-59,40,-77,30,-80,12C-83,-7,-72,-
                    35,-55,-50C-38,-65,-19,-67,1,-67C21,-67,41,-65,50,-60Z"
                            transform="translate(100 100)"
                        />
                    </svg>
                    <img
                        src="images/1.png"
                        alt="photo de profil"
                        class="profile-img"
                        loading="lazy"
                    />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section fade-in-up">
    <div class="">
        <h3 class="badge">Compétences</h3>
        <p class="skills-description">
            Voici les langages et technologies que je maitrise et avec
            lesquelles je travaille quotidiennement pour créer des projets web
            robustes et dynamiques
        </p>
        <div class="skills">
            <div class="skill scroll-animate">
                <svg
                    role="img"
                    class="icon-lang html"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <title>HTML5</title>
                    <path
                        fill="currentColor"
                        d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"
                    />
                </svg>
                <h3>HTML</h3>
                <p>Solide expérience, utilisé au quotidien avec blade.</p>
            </div>
            <div class="skill scroll-animate">
                <svg
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon-lang css"
                >
                    <title>CSS</title>
                    <path
                        fill="currentColor"
                        d="M0 0v20.16A3.84 3.84 0 0 0 3.84 24h16.32A3.84 3.84 0 0 0 24 20.16V3.84A3.84 3.84 0 0 0 20.16 0Zm14.256 13.08c1.56 0 2.28 1.08 2.304 2.64h-1.608c.024-.288-.048-.6-.144-.84-.096-.192-.288-.264-.552-.264-.456 0-.696.264-.696.84-.024.576.288.888.768 1.08.72.288 1.608.744 1.92 1.296q.432.648.432 1.656c0 1.608-.912 2.592-2.496 2.592-1.656 0-2.4-1.032-2.424-2.688h1.68c0 .792.264 1.176.792 1.176.264 0 .456-.072.552-.24.192-.312.24-1.176-.048-1.512-.312-.408-.912-.6-1.32-.816q-.828-.396-1.224-.936c-.24-.36-.36-.888-.36-1.536 0-1.44.936-2.472 2.424-2.448m5.4 0c1.584 0 2.304 1.08 2.328 2.64h-1.608c0-.288-.048-.6-.168-.84-.096-.192-.264-.264-.528-.264-.48 0-.72.264-.72.84s.288.888.792 1.08c.696.288 1.608.744 1.92 1.296.264.432.408.984.408 1.656.024 1.608-.888 2.592-2.472 2.592-1.68 0-2.424-1.056-2.448-2.688h1.68c0 .744.264 1.176.792 1.176.264 0 .456-.072.552-.24.216-.312.264-1.176-.048-1.512-.288-.408-.888-.6-1.32-.816-.552-.264-.96-.576-1.2-.936s-.36-.888-.36-1.536c-.024-1.44.912-2.472 2.4-2.448m-11.031.018c.711-.006 1.419.198 1.839.63.432.432.672 1.128.648 1.992H9.336c.024-.456-.096-.792-.432-.96-.312-.144-.768-.048-.888.24-.12.264-.192.576-.168.864v3.504c0 .744.264 1.128.768 1.128a.65.65 0 0 0 .552-.264c.168-.24.192-.552.168-.84h1.776c.096 1.632-.984 2.712-2.568 2.688-1.536 0-2.496-.864-2.472-2.472v-4.032c0-.816.24-1.44.696-1.848.432-.408 1.146-.624 1.857-.63"
                    />
                </svg>
                <h3>CSS</h3>
                <p>Maitrise approfondie, intégré dans tous mes projets.</p>
            </div>
            <div class="skill scroll-animate">
                <svg
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon-lang php"
                >
                    <title>PHP</title>
                    <path
                        fill="currentColor"
                        d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z"
                    />
                </svg>
                <h3>PHP</h3>
                <p>
                    Solide base avec plusieurs projets réalisés, puis transition
                    naturelle vers Laravel.
                </p>
            </div>
            <div class="skill scroll-animate">
                <svg
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon-lang javaScript"
                >
                    <title>JavaScript</title>
                    <path
                        fill="currentColor"
                        d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"
                    />
                </svg>
                <h3>JavaScript</h3>
                <p>
                    Bonne comprehension avec des compétences pratiques en
                    constante évolution.
                </p>
            </div>
            <div class="skill scroll-animate">
                <svg
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon-lang laravel"
                >
                    <title>Laravel</title>
                    <path
                        fill="currentColor"
                        d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z"
                    />
                </svg>
                <h3>Laravel</h3>
                <p>
                    Expertise confirmée, utilisé comme socle principal de les
                    projets (API & full stack).
                </p>
            </div>
            <div class="skill scroll-animate">
                <svg
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon-lang node"
                >
                    <title>Node.js</title>
                    <path
                        fill="currentColor"
                        d="M11.998,24c-0.321,0-0.641-0.084-0.922-0.247l-2.936-1.737c-0.438-0.245-0.224-0.332-0.08-0.383 c0.585-0.203,0.703-0.25,1.328-0.604c0.065-0.037,0.151-0.023,0.218,0.017l2.256,1.339c0.082,0.045,0.197,0.045,0.272,0l8.795-5.076 c0.082-0.047,0.134-0.141,0.134-0.238V6.921c0-0.099-0.053-0.192-0.137-0.242l-8.791-5.072c-0.081-0.047-0.189-0.047-0.271,0 L3.075,6.68C2.99,6.729,2.936,6.825,2.936,6.921v10.15c0,0.097,0.054,0.189,0.139,0.235l2.409,1.392 c1.307,0.654,2.108-0.116,2.108-0.89V7.787c0-0.142,0.114-0.253,0.256-0.253h1.115c0.139,0,0.255,0.112,0.255,0.253v10.021 c0,1.745-0.95,2.745-2.604,2.745c-0.508,0-0.909,0-2.026-0.551L2.28,18.675c-0.57-0.329-0.922-0.945-0.922-1.604V6.921 c0-0.659,0.353-1.275,0.922-1.603l8.795-5.082c0.557-0.315,1.296-0.315,1.848,0l8.794,5.082c0.57,0.329,0.924,0.944,0.924,1.603 v10.15c0,0.659-0.354,1.273-0.924,1.604l-8.794,5.078C12.643,23.916,12.324,24,11.998,24z M19.099,13.993 c0-1.9-1.284-2.406-3.987-2.763c-2.731-0.361-3.009-0.548-3.009-1.187c0-0.528,0.235-1.233,2.258-1.233 c1.807,0,2.473,0.389,2.747,1.607c0.024,0.115,0.129,0.199,0.247,0.199h1.141c0.071,0,0.138-0.031,0.186-0.081 c0.048-0.054,0.074-0.123,0.067-0.196c-0.177-2.098-1.571-3.076-4.388-3.076c-2.508,0-4.004,1.058-4.004,2.833 c0,1.925,1.488,2.457,3.895,2.695c2.88,0.282,3.103,0.703,3.103,1.269c0,0.983-0.789,1.402-2.642,1.402 c-2.327,0-2.839-0.584-3.011-1.742c-0.02-0.124-0.126-0.215-0.253-0.215h-1.137c-0.141,0-0.254,0.112-0.254,0.253 c0,1.482,0.806,3.248,4.655,3.248C17.501,17.007,19.099,15.91,19.099,13.993z"
                    />
                </svg>
                <h3>Node.js</h3>
                <p>
                    Familiarité avec l'environement, utilisé pour des outils
                    backend légers et en cours d'approfondissement.
                </p>
            </div>
            <div class="skill scroll-animate">
                <svg
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon-lang react"
                >
                    <title>React</title>
                    <path
                        fill="currentColor"
                        d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z"
                    />
                </svg>
                <h3>React</h3>
                <p>
                    Bonne connaissance des fondamentaux, en cours de mise en
                    pratique dans les projets personnels.
                </p>
            </div>
            <div class="skill scroll-animate">
                <svg
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon-lang next"
                >
                    <title>Next.js</title>
                    <path
                        fill="currentColor"
                        d="M18.665 21.978C16.758 23.255 14.465 24 12 24 5.377 24 0 18.623 0 12S5.377 0 12 0s12 5.377 12 12c0 3.583-1.574 6.801-4.067 9.001L9.219 7.2H7.2v9.596h1.615V9.251l9.85 12.727Zm-3.332-8.533 1.6 2.061V7.2h-1.6v6.245Z"
                    />
                </svg>
                <h3>Next.js</h3>
                <p>
                    Utilisé pour explorer le rendu serveur coté serveur et les
                    perfomances web modernes.
                </p>
            </div>
            <div class="skill scroll-animate">
                <svg
                    role="img"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon-lang tailwind"
                >
                    <title>Tailwind CSS</title>
                    <path
                        fill="currentColor"
                        d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"
                    />
                </svg>
                <h3>Tailwind</h3>
                <p>
                    Intégré dans plusieurs projets pour créer des interfaces
                    modernes et responsives.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section fade-in-up">
    <div class="">
        <h3 class="badge">Environement de travail</h3>
        <p class="skills-description">
            Voici les outils que j'utilise quotidiennement pour organiser, coder
            et déployer mes projets. Ils m'accompagnent dans l'ensemble du
            processus de développement, du versionnage à la mise en production
        </p>
        <div class="skills">
            <div class="skill scroll-animate">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 128 128"
                    class="icon-lang"
                >
                    <path
                        fill="#F34F29"
                        d="M124.737 58.378L69.621 3.264c-3.172-3.174-8.32-3.174-11.497 0L46.68 14.71l14.518 14.518c3.375-1.139 7.243-.375 9.932 2.314 2.703 2.706 3.461 6.607 2.294 9.993l13.992 13.993c3.385-1.167 7.292-.413 9.994 2.295 3.78 3.777 3.78 9.9 0 13.679a9.673 9.673 0 01-13.683 0 9.677 9.677 0 01-2.105-10.521L68.574 47.933l-.002 34.341a9.708 9.708 0 012.559 1.828c3.778 3.777 3.778 9.898 0 13.683-3.779 3.777-9.904 3.777-13.679 0-3.778-3.784-3.778-9.905 0-13.683a9.65 9.65 0 013.167-2.11V47.333a9.581 9.581 0 01-3.167-2.111c-2.862-2.86-3.551-7.06-2.083-10.576L41.056 20.333 3.264 58.123a8.133 8.133 0 000 11.5l55.117 55.114c3.174 3.174 8.32 3.174 11.499 0l54.858-54.858a8.135 8.135 0 00-.001-11.501z"
                    />
                </svg>
                <h3>Git</h3>
                <p>
                    Outil indispensable de gestion de version utilisé pour
                    suivre l'évolution des projets, collaborer efficacement et
                    déployer en toute sécurité.
                </p>
            </div>
            <div class="skill scroll-animate">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 128 128"
                    class="icon-lang"
                >
                    <mask
                        id="a"
                        width="128"
                        height="128"
                        x="0"
                        y="0"
                        maskUnits="userSpaceOnUse"
                        style="mask-type: alpha"
                    >
                        <path
                            fill="#fff"
                            fill-rule="evenodd"
                            d="M90.767 127.126a7.968 7.968 0 0 0 6.35-.244l26.353-12.681a8 8 0 0 0 4.53-7.209V21.009a8 8 0 0 0-4.53-7.21L97.117 1.12a7.97 7.97 0 0 0-9.093 1.548l-50.45 46.026L15.6 32.013a5.328 5.328 0 0 0-6.807.302l-7.048 6.411a5.335 5.335 0 0 0-.006 7.888L20.796 64 1.74 81.387a5.336 5.336 0 0 0 .006 7.887l7.048 6.411a5.327 5.327 0 0 0 6.807.303l21.974-16.68 50.45 46.025a7.96 7.96 0 0 0 2.743 1.793Zm5.252-92.183L57.74 64l38.28 29.058V34.943Z"
                            clip-rule="evenodd"
                        />
                    </mask>
                    <g mask="url(#a)">
                        <path
                            fill="#0065A9"
                            d="M123.471 13.82 97.097 1.12A7.973 7.973 0 0 0 88 2.668L1.662 81.387a5.333 5.333 0 0 0 .006 7.887l7.052 6.411a5.333 5.333 0 0 0 6.811.303l103.971-78.875c3.488-2.646 8.498-.158 8.498 4.22v-.306a8.001 8.001 0 0 0-4.529-7.208Z"
                        />
                        <g filter="url(#b)">
                            <path
                                fill="#007ACC"
                                d="m123.471 114.181-26.374 12.698A7.973 7.973 0 0 1 88 125.333L1.662 46.613a5.333 5.333 0 0 1 .006-7.887l7.052-6.411a5.333 5.333 0 0 1 6.811-.303l103.971 78.874c3.488 2.647 8.498.159 8.498-4.219v.306a8.001 8.001 0 0 1-4.529 7.208Z"
                            />
                        </g>
                        <g filter="url(#c)">
                            <path
                                fill="#1F9CF0"
                                d="M97.098 126.882A7.977 7.977 0 0 1 88 125.333c2.952 2.952 8 .861 8-3.314V5.98c0-4.175-5.048-6.266-8-3.313a7.977 7.977 0 0 1 9.098-1.549L123.467 13.8A8 8 0 0 1 128 21.01v85.982a8 8 0 0 1-4.533 7.21l-26.369 12.681Z"
                            />
                        </g>
                        <path
                            fill="url(#d)"
                            fill-rule="evenodd"
                            d="M90.69 127.126a7.968 7.968 0 0 0 6.349-.244l26.353-12.681a8 8 0 0 0 4.53-7.21V21.009a8 8 0 0 0-4.53-7.21L97.039 1.12a7.97 7.97 0 0 0-9.093 1.548l-50.45 46.026-21.974-16.68a5.328 5.328 0 0 0-6.807.302l-7.048 6.411a5.336 5.336 0 0 0-.006 7.888L20.718 64 1.662 81.386a5.335 5.335 0 0 0 .006 7.888l7.048 6.411a5.328 5.328 0 0 0 6.807.303l21.975-16.681 50.45 46.026a7.959 7.959 0 0 0 2.742 1.793Zm5.252-92.184L57.662 64l38.28 29.057V34.943Z"
                            clip-rule="evenodd"
                            opacity="0.25"
                            style="mix-blend-mode: overlay"
                        />
                    </g>
                    <defs>
                        <filter
                            id="b"
                            width="144.744"
                            height="113.408"
                            x="-8.41115"
                            y="22.5944"
                            color-interpolation-filters="sRGB"
                            filterUnits="userSpaceOnUse"
                        >
                            <feFlood
                                flood-opacity="0"
                                result="BackgroundImageFix"
                            />
                            <feColorMatrix
                                in="SourceAlpha"
                                result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            />
                            <feOffset />
                            <feGaussianBlur stdDeviation="4.16667" />
                            <feColorMatrix
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"
                            />
                            <feBlend
                                in2="BackgroundImageFix"
                                mode="overlay"
                                result="effect1_dropShadow_1_36"
                            />
                            <feBlend
                                in="SourceGraphic"
                                in2="effect1_dropShadow_1_36"
                                result="shape"
                            />
                        </filter>
                        <filter
                            id="c"
                            width="56.6667"
                            height="144.007"
                            x="79.6667"
                            y="-8.0035"
                            color-interpolation-filters="sRGB"
                            filterUnits="userSpaceOnUse"
                        >
                            <feFlood
                                flood-opacity="0"
                                result="BackgroundImageFix"
                            />
                            <feColorMatrix
                                in="SourceAlpha"
                                result="hardAlpha"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            />
                            <feOffset />
                            <feGaussianBlur stdDeviation="4.16667" />
                            <feColorMatrix
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"
                            />
                            <feBlend
                                in2="BackgroundImageFix"
                                mode="overlay"
                                result="effect1_dropShadow_1_36"
                            />
                            <feBlend
                                in="SourceGraphic"
                                in2="effect1_dropShadow_1_36"
                                result="shape"
                            />
                        </filter>
                        <linearGradient
                            id="d"
                            x1="63.9222"
                            x2="63.9222"
                            y1="0.329902"
                            y2="127.67"
                            gradientUnits="userSpaceOnUse"
                        >
                            <stop stop-color="#fff" />
                            <stop
                                offset="1"
                                stop-color="#fff"
                                stop-opacity="0"
                            />
                        </linearGradient>
                    </defs>
                </svg>

                <h3>Visual Studio Code</h3>
                <p>
                    Editeur de code moderne et perfomant, configurée avec des
                    extensions adaptées pour un développement fluide et
                    productif.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section projects">
    <div class="scroll-animate">
        <h2>Projets réalisés</h2>
        <div class="projects-container">
            @foreach($projects as $project)
            <div class="project-card">
                <img
                    src="{{ $project->featuredPicture()?->getImageUrl() }}"
                    alt=""
                    loading="lazy"
                />
                <div class="card-info">
                    <div>
                        <h3>{{ $project->title }}</h3>
                        <p>
                            {{ $project->meta_description }}
                        </p>
                        <a href="{{ $project->guithub_url }}" target="_blank"
                            >Voir le code</a
                        >
                        <a href="{{ route('project', $project) }}">Détails</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section contact">
    <div class="scroll-animate">
        <h2>Me contactez</h2>
        @include('shared.flash')
        <form action="{{ route('contact.mail') }}" method="post">
            @csrf
            <div class="grid contact_inputs">
                <div class="contact__content">
                    <label for="username" class="contact__label">Name</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        class="contact__input"
                        required
                    />
                </div>
                <div class="contact__content">
                    <label for="email" class="contact__label">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="contact__input"
                        required
                    />
                </div>
            </div>
            <div class="contact__content">
                <label for="project" class="contact__label">Projet</label>
                <input
                    type="text"
                    id="project"
                    name="project"
                    class="contact__input"
                    required
                />
            </div>
            <div class="contact__content">
                <label for="message" class="contact__label">Message</label>
                <textarea
                    name="message"
                    id="message"
                    name="message"
                    cols="0"
                    rows="7"
                    class="contact__input"
                    required
                ></textarea>
            </div>
            <button type="submit" class="btn-primary">Envoyer</button>
        </form>
    </div>
</section>

@endsection
