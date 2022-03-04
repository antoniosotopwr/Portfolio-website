<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oxygen&family=Oxygen+Mono&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/97098226a0.js"
      crossorigin="anonymous"
    ></script>
    <title>José Antonio's portfolio website</title>
  </head>
  <body>
    <nav>
      <ul>
        <li>
          <h1>
            <a href="index.php">
              <span class="fa-solid fa-code" aria-hidden="true"></span>
              <span>José Antonio</span>
            </a>
          </h1>
        </li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li>
          <a href="https://www.linkedin.com/in/antoniosotopwr/" target="_blank"
            ><i class="fa-brands fa-linkedin" aria-hidden="true"></i
            ><span class="sr-only">LinkedIn</span></a
          >
        </li>
        <li>
          <a href="https://github.com/antoniosotopwr" target="_blank"
            ><i class="fa-brands fa-github-square" aria-hidden="true"></i
            ><span class="sr-only">GitHub</span></a
          >
        </li>
        <li>
          <a href="https://www.hackerrank.com/snakepower0199" target="_blank"
            ><i class="fa-brands fa-hackerrank" aria-hidden="true"></i
            ><span class="sr-only">HackerRank</span></a
          >
        </li>
        <li>
          <a href="https://www.behance.net/antoniosotopwr" target="_blank"
            ><i class="fa-brands fa-behance-square" aria-hidden="true"></i
            ><span class="sr-only">Behance</span></a
          >
        </li>
        <li>
          <a href="#" target="_blank" class="button">Resume</a>
        </li>
      </ul>
    </nav>

    <section id="intro">
      <p class="name">Hi, my name is <span>José Antonio.</span></p>
      <h2>I design and develop <br />the front end of websites.</h2>
      <p>
        I'm a student, Front end developer Jr and UX/UI designer Jr with
        knowledge in: <br />HTML, CSS, SQL, Python, C#, Blazor, Bootstrap and
        Figma.
      </p>
      <p>
        Currently, I'm working at
        <a href="https://www.tenaris.com/en" target="_blank">Tenaris Tamsa </a
        >as Trainee in IT.
      </p>
    </section>
    <div class="gradient"></div>
    <div class="projects-section">
      <section id="projects">
        <h2>Projects I'm proud of</h2>
        <article>
          <div class="text">
            <h4>Latest Project</h4>
            <h3>Eco-Search</h3>
            <p class="blackbox">
              As a result of a 3 months course of UX/UI design, I made a project
              about shopping mobile app using whimsical, canvas and Figma.  
              <a href="https://frontendmasters.github.io/grid-flexbox-v2/"
                >Link to the design</a
              >
            </p>
            <h4>Technologies used include:</h4>
            <ul>
              <li>UX/UI</li>
              <li>UX Research</li>
              <li>Figma</li>
            </ul>
          </div>
          <img
            src="https://assets.codepen.io/296057/fem-gettingstartedcss-ch5-1.png"
            alt="Screenshot of the Wall of Wonder."
          />
        </article>
      </section>
    </div>

    <div class="gradient"></div>
    <div class="contact-section">
      <section id="contact">
        <h2>Contact me</h2>
        <p>
          I'm always interested in hearing about new designing or developing
          opportunities.
        </p>
        <p>
          <a href="mailto:antoniosotopwr@gmail.com" class="button">Email me</a>
        </p>
      </section>
    </div>
    <div class="gradient"></div>
  </body>
  <!-- footer -->
  <footer>
    <h2>José Antonio &middot; Developer and designer Jr</h2>
    <ul>
      <li>
        <a href="https://www.linkedin.com/in/antoniosotopwr/" target="_blank">
          <span class="fab fa-linkedin" aria-hidden="true"></span>
          <span class="sr-only">LinkedIn</span>
        </a>
      </li>
      <li>
        <a href="https://github.com/antoniosotopwr" target="_blank">
          <span class="fab fa-github-square" aria-hidden="true"></span>
          <span class="sr-only">Github</span>
        </a>
      </li>
      <li>
        <a href="https://www.hackerrank.com/snakepower0199" target="_blank"
          ><i class="fa-brands fa-hackerrank" aria-hidden="true"></i
          ><span class="sr-only">HackerRank</span></a
        >
      </li>
      <li>
        <a href="https://www.behance.net/antoniosotopwr" target="_blank"
          ><i class="fa-brands fa-behance-square" aria-hidden="true"></i
          ><span class="sr-only">Behance</span></a
        >
      </li>
      <li>
        <a href="mailto:antoniosotopwr@gmail.com">
          <span class="fas fa-envelope" aria-hidden="true"></span>
          <span class="sr-only">Email</span>
        </a>
      </li>
    </ul>
    <script
      type="text/javascript"
      src="https://storage.ko-fi.com/cdn/widget/Widget_2.js"
    ></script>
    <script type="text/javascript">
      kofiwidget2.init("Buy Me a Coffee", "#3a38aa", "T6T5AYS6W");
      kofiwidget2.draw();
    </script>
    <p><small>&copy; 2022 José Antonio. All rights reserved.</small></p>
  </footer>
</html>
