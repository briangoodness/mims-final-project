<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CLEAN MARKUP = GOOD KARMA.
      Hi source code lover,

      you're a curious person and a fast learner ;)
      Let's make something beautiful together. Contribute on Github:
      https://github.com/jlantunez/webslides

      Thanks,
      @jlantunez.
      -->

    <!-- SEO -->
    <title>MIMS 2017 Final Project: Project Bhoomi</title>
    <meta name="description" content="Project Bhoomi: MIMS 2017 Final Project on Aerial Imagery with Cristian Garay, Brian Goodness, Eric Hagen, Deepa Kalpathi, Surendran
Subbiah.">

    <!-- URL CANONICAL -->
    <!-- <link rel="canonical" href="http://your-url.com/permalink"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,700,700i%7CMaitree:200,300,400,600,700&amp;subset=latin-ext" rel="stylesheet">

    <!-- CSS Base -->
    <link rel="stylesheet" type="text/css" media="all" href="static/css/base.css">

    <!-- CSS Colors -->
    <link rel="stylesheet" type="text/css" media="all" href="static/css/colors.css">

    <!-- Optional - CSS SVG Icons (Font Awesome) -->
    <link rel="stylesheet" type="text/css" media="all" href="static/css/svg-icons.css">

    <!-- SOCIAL CARDS (ADD YOUR INFO) -->

    <!-- FACEBOOK -->
    <meta property="og:url" content="http://your-url.com/permalink"> <!-- EDIT -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="WebSlides Landings: Create your web presence easily"> <!-- EDIT -->
    <meta property="og:description" content="Create simple, beautiful landing pages with WebSlides. 120+ free slides ready to use."> <!-- EDIT -->
    <meta property="og:updated_time" content="2017-01-04T16:54:27"> <!-- EDIT -->
    <meta property="og:image" content="static/images/share-webslides.jpg" > <!-- EDIT -->

    <!-- TWITTER -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@webslides"> <!-- EDIT -->
    <meta name="twitter:creator" content="@jlantunez"> <!-- EDIT -->
    <meta name="twitter:title" content="WebSlides Landings: Create your web presence easily"> <!-- EDIT -->
    <meta name="twitter:description" content="Create simple, beautiful landing pages with WebSlides. 120+ free slides ready to use."> <!-- EDIT -->
    <meta name="twitter:image" content="static/images/share-webslides.jpg"> <!-- EDIT -->

    <!-- FAVICONS -->
    <link rel="shortcut icon" sizes="16x16" href="static/images/favicons/favicon.png">
    <link rel="shortcut icon" sizes="32x32" href="static/images/favicons/favicon-32.png">
    <link rel="apple-touch-icon icon" sizes="76x76" href="static/images/favicons/favicon-76.png">
    <link rel="apple-touch-icon icon" sizes="120x120" href="static/images/favicons/favicon-120.png">
    <link rel="apple-touch-icon icon" sizes="152x152" href="static/images/favicons/favicon-152.png">
    <link rel="apple-touch-icon icon" sizes="180x180" href="static/images/favicons/favicon-180.png">
    <link rel="apple-touch-icon icon" sizes="192x192" href="static/images/favicons/favicon-192.png">

    <!-- Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#333333">
  </head>
  <body>
    <header role="banner">
      <nav role="navigation">
        <p class="logo"><a href="index.html" title="WebSlides">WebSlides</a></p>
        <ul>
          <li class="github">
            <a rel="external" href="https://github.com/jlantunez/webslides" title="Github">
              <svg class="fa-github">
                <use xlink:href="#fa-github"></use>
              </svg>
              <em>WebSlides</em>
            </a>
          </li>
          <li class="twitter">
            <a rel="external" href="https://twitter.com/webslides" title="Twitter">
              <svg class="fa-twitter">
                <use xlink:href="#fa-twitter"></use>
              </svg>
              <em>@WebSlides</em>
            </a>
          </li>
          <!--  <li class="dribbble"><a rel="external" href="http://dribbble.com/jlantunez" title="Dribbble"><svg class="fa-dribbble"><use xlink:href="#fa-dribbble"></use></svg> <em>jlantunez</em></a></li> -->
        </ul>
      </nav>
    </header>
    <main role="main">
      <article id="webslides">

        <!-- Quick Guide
          - Each parent <section> in the <article id="webslides"> element is an individual slide.
          - Vertical sliding = <article id="webslides" class="vertical">
          - <div class="wrap"> = container 1200px / <div class="wrap size-50"> = 600px;
        -->

        <section class="bg-purple aligncenter fullscreen">
         <span class="background dark" style="background-image:url('https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Mercator-projection.jpg/773px-Mercator-projection.jpg')"></span>
          <!--.wrap = container 1200px -->
          <div class="wrap">
            <h1 class="text-landing">Project Bhoomi</h1>
            <p class="text-symbols">* * * </p>
            <p><a target='_blank' class="button ghost" href="https://github.com/briangoodness/mims-final-project" title="Download Repo"><svg class="fa-github">
                <use xlink:href="#fa-github"></use>
              </svg> Github Repo</a>
            </p>
          </div>
          <!-- .end .wrap -->
        </section>
        <section class="bg-brown fullscreen">
          <div class="wrap">
            <h4 class="text-subtitle">Challenges in Monitoring Development Projects</h4>
            <br><br><br><br>
            <div class="grid">
              <div class="column">
                <svg class="fa-users large">
                  <use xlink:href="#fa-users"></use>
                </svg>
                <h3><strong>Corruption</strong></h3>
                <p>Issues of trust with staff in the field</p>
              </div>
              <div class="column">
                <span style="color:#71945a;">
                  <svg class="fa-globe large">
                    <use xlink:href="#fa-globe"></use>
                  </svg>
                  <h3><strong>Physical distance</strong></h3>
                </span>
                <p>It can prove expensive to travel far distances</p>
              </div>
              <div class="column">
                <span>
                  <svg class="fa-info-circle large">
                    <use xlink:href="#fa-info-circle"></use>
                  </svg>
                </span>
                <h3><strong>Non-Standard Info</strong></h3>
                <p>Data is not Interoperable</p>
              </div>
            </div>
            <!-- end .grid-->
          </div>
          <!-- end .wrap-->
        </section>

        <section class="bg-secondary fullscreen">
          <!--.wrap = container 1200px -->
          <div class="wrap size-50 frame">
            <h2 class="text-serif aligncenter">Why Bhoomi?</h2>
            <p class="text-symbols">* * *</p>
            <p>There is a need for a robust alternative or supplement to <strong>in-the-field monitoring</strong> by governmental agencies and industry.</p>
            <p>The status of projects needs to be tracked and monitored <strong>on a regular basis</strong></p>
          </div>
        </section>

        <section class="fullscreen">
          <!--.wrap = container 1200px -->
          <div class="wrap aligncenter">
            <p class="text-subtitle">Objective</p>
            <h2 style="color:#71945a;">To leverage satellite imagery for social good</h2>
          </div>
          <!-- .end .wrap -->
        </section>

        <section class="bg-black fullscreen">
          <span class="background" style="background-image:url('https://source.unsplash.com/HWIOLU7_O6w/')"></span>
          <div class="wrap" style="margin-bottom:75px;">
            <p class="text-subtitle">Satellite Data</p>
            <h2><strong>Leverage spatial data, deep learning and the power of information visualization</strong></h2>
          </div>
          <div class="wrap" style="margin-top:50px;">
            <p class="text-subtitle">Foundational Work</p>
            <h4><strong>Jean et al.’s 2016 paper, “Combining satellite imagery and machine learning to predict poverty.” Can we build on this foundation and apply the theory to specific projects in other countries?</strong></h4>
          </div>
          <!-- .end .wrap -->
        </section>
        <!-- <section class="bg-black slide-bottom">
          <span class="background" style="background-image:url('https://source.unsplash.com/ulh0cnK0WCE/')"></span>
          <div class="wrap">
            <p class="text-subtitle">Empowering Users</p>
            <h2><strong>Give first-hand access to decision makers on tracking the status of developmental projects</strong></h2>
          </div>
          .end .wrap
        </section> -->
        <section class="bg-black fullscreen">
          <span class="background" style="background-image:url('https://source.unsplash.com/t0GpJ2cdJuo/')"></span>
          <div class="wrap">
            <h4 class="text-subtitle" style="color:#3a4b3b;">Potential Stakeholders:</h4>
            <ul class="flexblock features">
              <li style="background-color:#3a4b3b;">
                <div>
                  <h2>
                    <svg class="fa-users">
                      <use xlink:href="#fa-users"></use>
                    </svg>
                    Management
                  </h2>
                  Industry, Companies
                </div>
              </li>
              <li style="background-color:#3a4b3b;">
                <div>
                  <h2>
                    <svg class="fa-globe">
                      <use xlink:href="#fa-globe"></use>
                    </svg>
                    Aid/Funding Agencies
                  </h2>
                  UN, World Bank, etc.
                </div>
              </li>
              <li style="background-color:#3a4b3b;">
                <div>
                  <h2>
                    <svg class="fa-building-o">
                      <use xlink:href="#fa-building-o"></use>
                    </svg>
                    Governments
                  </h2>
                  Internationally
                </div>
              </li>
            </ul>
          </div>
          <div class="wrap">
            <p class="text-subtitle">Remote Monitoring</p>
            <h2><strong>Enable international development planners and stakeholders to remotely measure and monitor indicators in the developing world</strong></h2>
          </div>
          <!-- .end .wrap -->
        </section>
        <!-- <section> -->
          <!-- <div class="wrap">
            <h2>Potential Stakeholders:</h2>
            <ul class="flexblock features">
              <li>
                <div>
                  <h2>
                    <svg class="fa-users">
                      <use xlink:href="#fa-users"></use>
                    </svg>
                    Management
                  </h2>
                  Industry, Companies
                </div>
              </li>
              <li>
                <div>
                  <h2>
                    <svg class="fa-globe">
                      <use xlink:href="#fa-globe"></use>
                    </svg>
                    Aid/Funding Agencies
                  </h2>
                  UN, World Bank, etc.
                </div>
              </li>
              <li>
                <div>
                  <h2>
                    <svg class="fa-info">
                      <use xlink:href="#fa-info"></use>
                    </svg>
                    Governments
                  </h2>
                  Internationally
                </div>
              </li>
            </ul>
          </div> -->
        <!-- </section> -->
        <section class="fullscreen">
          <div class="wrap">
            <h3>Process</h3>
            <ul class="flexblock blink border">
              <li>
                <a href="#" title="Block Link = .blink">
                  <!--div required = padding li or li>a-->
                  <div>
                    <h3>Literature Review and Secondary Research</h3>
                    Review existing work in using satellite imagery in developing areas & identifying factors impacting development measures
                  </div>
                </a>
              </li>
              <li>
                <a href="#" title="Block Link = .blink">
                  <!--div required = padding li or li>a-->
                  <div>
                    <h3>Contextual Inquiry</h3>
                    Understand what metrics are being used for monitoring and other use cases
                  </div>
                </a>
              </li>
              <li>
                <a href="#" title="Block Link = .blink">
                  <!--div required = padding li or li>a-->
                  <div>
                    <h3>Create Personas</h3>
                    Identify the target user of this tool and to cater to their requirements
                  </div>
                </a>
              </li>
              <li>
                <a href="#" title="Block Link = .blink">
                  <!--div required = padding li or li>a-->
                  <div>
                    <h3>Mental Models & Affordances</h3>
                    Understand the target user’s way of thinking and acting
                  </div>
                </a>
              </li>
              <li>
                <a href="#" title="Block Link = .blink">
                  <!--div required = padding li or li>a-->
                  <div>
                    <h3>Prototyping & Evaluation</h3>
                    Develop and iterate on the design and functionality of the tool
                  </div>
                </a>
              </li>
              <li>
                <a href="#" title="Block Link = .blink">
                  <!--div required = padding li or li>a-->
                  <div>
                    <h3>Usability Testing</h3>
                    Test with the target users on performance
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <!-- .end .wrap -->
        </section>
        <section class="fullscreen">
          <span class="background" style="opacity:0.30; background-image:url('static/images/south-hall.jpg')"></span>
          <div class="wrap">
            <h2>The Team</h2>
            <ul class="flexblock gallery">
              <li style="border:1px solid black;">
                <a target="_blank" href="https://www.ischool.berkeley.edu/people/cristian-garay">
                  <figure>
                    <img alt="Thumbnail " src="static/images/team/cristian-garay.jpg">
                    <figcaption>
                      <h2>Cristian Garay</h2>
                    </figcaption>
                  </figure>
                </a>
              </li>
              <li style="border:1px solid black;">
                <a target="_blank" href="https://www.ischool.berkeley.edu/people/brian-goodness">
                  <figure>
                    <img alt="Thumbnail " src="static/images/team/brian-goodness.jpg">
                    <figcaption>
                      <h2>Brian Goodness</h2>
                    </figcaption>
                  </figure>
                </a>
              </li>
              <li style="border:1px solid black;">
                <a target="_blank" href="https://www.ischool.berkeley.edu/people/deepa-kalpathi">
                  <figure>
                    <img alt="Thumbnail " src="static/images/team/deepa-kalpathi.gif">
                    <figcaption>
                      <h2>Deepa Kalpathi</h2>
                    </figcaption>
                  </figure>
                </a>
              </li>
              <li style="border:1px solid black;">
                <a target="_blank" href="https://www.ischool.berkeley.edu/people/eric-hagen">
                  <figure>
                    <img alt="Thumbnail " src="static/images/team/eric-hagen.jpg">
                    <figcaption>
                      <h2>Eric Hagen</h2>
                    </figcaption>
                  </figure>
                </a>
              </li>
              <li style="border:1px solid black;">
                <a target="_blank" href="https://www.ischool.berkeley.edu/people/surendran-subbiah">
                  <figure>
                    <img alt="Thumbnail " src="static/images/team/surendran-subbiah.png">
                    <figcaption>
                      <h2>Suren Subbiah</h2>
                    </figcaption>
                  </figure>
                </a>
              </li>
            </ul>
          </div>
          <!-- .end .wrap -->
        </section>

        <!-- <section>
          <div class="wrap">
            <ul class="flexblock plans blink">
              <li>
                <span>
                  <h2>MVP</h2>
                  <div>
                    <span class="price">Software Tool</span>
                    <p>Provide an Analytical Tool for users to easily view high-level summaries.</p>
                  </div>
                </span>
              </li>
              <li>
                <span>
                  <h2>If Time Avails</h2>
                  <div>
                    <span class="price">Original Research</span>
                    <p>Train a new deep learning model using data for additional geographies or metrics.</p>
                  </div>
                </span>
              </li>
            </ul>
          </div> -->
          <!-- .end .wrap -->
        <!-- </section> -->

      </article>
    </main>
    <!--main-->

    <!-- jQuery (required for slides to work) -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="static/js/webslides.js"></script>

    <!-- OPTIONAL - svg-icons.js (fontastic.me - Font Awesome as svg icons) -->
    <script defer src="static/js/svg-icons.js"></script>
  </body>
</html>
