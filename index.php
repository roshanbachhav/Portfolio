<?php 

  include 'assets/db/db_connection.php';

  $messageSent = false;
  $failed = false;

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sqlQuery = "INSERT INTO `contact` (`full_name`, `email`, `message`, `dt`) VALUES ('$fullName', '$email', '$message', current_timestamp())";

    $result = mysqli_query($_conn, $sqlQuery);

    if ($result) {
        $messageSent = true;
    } else {
        $failed = true;
    }
  }

?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Roshan Bachhav</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
 

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>

  <div id="preloader" class="loader-overlay">
    <div id="load" class="loader">
      <div>G</div>
      <div>N</div>
      <div>I</div>
      <div>D</div>
      <div>A</div>
      <div>O</div>
      <div>L</div>
    </div>
  </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="index.html">Roshan</a></h1>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#About">About</a></li>
            <li><a class="nav-link scrollto" href="#Knowledge">Knowledge</a></li>
            <li><a class="nav-link scrollto" href="#Project">Projects</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </header>

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="main-section">
      <div class="container heading">
          <h1 class="heading-title">Hello, I Am</h1>
          <h1 class="heading-name">Roshan Bachhav</h1>
          <p class="heading-subtitle">
              I am also 
              <span class="typed" data-typed-items="Student, Developer, Programmer"></span>
          </p>
          <div class="mouse mt-4">
            <a href="#About">
              <div class="icon-scroll"></div>
            </a>
          </div>
        </div>
      <!-- <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 130" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,104L360,0L720,117L1080,91L1440,117L1800,0L2160,13L2520,52L2880,26L3240,0L3600,13L3960,26L4320,104L4680,39L5040,117L5400,52L5760,26L6120,65L6480,0L6840,117L7200,13L7560,78L7920,91L8280,26L8640,78L8640,130L8280,130L7920,130L7560,130L7200,130L6840,130L6480,130L6120,130L5760,130L5400,130L5040,130L4680,130L4320,130L3960,130L3600,130L3240,130L2880,130L2520,130L2160,130L1800,130L1440,130L1080,130L720,130L360,130L0,130Z"></path></svg> -->
    </div>

    <!-- About Section -->
    <section id="About" class="section-about-me" class="title-box text-center">
          <div class="container">
              <div class="row justify-content-md-center mb-5">
                  <div class="col-sm-5">
                    <div class="image-container">
                      <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1">
                        <defs>
                          <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                            <stop id="stop1" stop-color="rgba(248, 117, 55, 1)" offset="0%"></stop>
                            <stop id="stop2" stop-color="rgba(251, 168, 31, 1)" offset="100%"></stop>
                          </linearGradient>
                        </defs>
                        <mask id="mask1" mask-type="alpha">
                          <path fill="url(#sw-gradient)"
                                d="M29.6,0.9C29.6,16.4,14.8,32.8,-0.3,32.8C-15.4,32.8,-30.8,16.4,-30.8,0.9C-30.8,-14.6,-15.4,-29.3,-0.3,-29.3C14.8,-29.3,29.6,-14.6,29.6,0.9Z"
                                width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;">
                          </path>
                        </mask>
                        <g mask="url(#mask1)">
                          <path fill="url(#sw-gradient)"
                                d="M29.6,0.9C29.6,16.4,14.8,32.8,-0.3,32.8C-15.4,32.8,-30.8,16.4,-30.8,0.9C-30.8,-14.6,-15.4,-29.3,-0.3,-29.3C14.8,-29.3,29.6,-14.6,29.6,0.9Z"
                                width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;">
                          </path>
                          <image href="assets/img/Rhb.png" x="0" y="-40" class="main-image">
                        </g>
                      </svg>
                    </div>                  
                  </div>
                  <div class="col-sm-6 d-flex justify-content-center align-items-center">
                      <div class="about-info">
                        <div class="ml-5 container">
                          <p>
                              <span class="title-s"><b>Name: </b></span>
                              <span>Roshan Hari Bachhav</span>
                          </p>
                          <p>
                              <span class="title-s"><b>Profile: </b></span>
                              <span>Full Stack Developer</span>
                          </p>
                          <p>
                              <span class="title-s"><b>Email: </b></span>
                              <span>bachhavroshan600@gmail.com</span>
                          </p>
                          <p>
                              <span class="title-s"><b>Phone: </b></span>
                              <span>7709638776</span>
                          </p>
                        
                          <div class="social-link1 mb-5">
                              <a href="https://www.facebook.com/profile.php?id=61562021506751"><i class="fab fa-facebook-f"></i></a>
                              <a href="https://twitter.com/RoshanBachhav18"><i class="fab fa-twitter"></i></a>
                              <a href="https://www.instagram.com/mr.roshan_bachhav"><i class="fab fa-instagram"></i></a>
                              <a href="https://www.linkedin.com/in/roshan-bachhav/"><i class="fab fa-linkedin-in"></i></a>
                          </div>
                          <a href="./assets/files/RoshanPortfolio.pdf" download="RoshanPortfolio.pdf">
                            <button class="resume-btn">Check My Resume</button>
                          </a>
                        </div>
                      </div>
                  </div>
              </div>

              <!-- My Self -->
              <div class="container">
                <div class="row">
                    <span>
                        <h1 class="welcome mb-5">WELCOME</h1>
                    </span>
                </div>
                <div class="row">
                    <div class="col-sm-2 d-flex justify-content-end">
                        <hr class="style-one-myself">
                    </div>
                    <div class="col-sm-10 d-flex justify-content-start">
                        <p class="lead">
                          Hello, I'm Roshan Hari Bachhav, a versatile software developer skilled in frontend and backend development. I graduated from Savitribai Phule Pune University. 
                        </p>
                    </div>
                    <div class="col-sm-2 d-flex justify-content-end">
                        <hr class="style-one-myself">
                    </div>
                    <div class="col-sm-10 d-flex justify-content-start">
                        <p class="lead">
                          In addition to my technical expertise, I excel in problem-solving, team collaboration, and project management. I'm dedicated to continuous learning and keeping up with industry trends.
                        </p>
                    </div>
                </div>
                
              </div>

              <!-- Experiance -->
              <div class="conainer">
                <div class="row mt-5">
                    <span>
                        <h1 class="Skills-tag mb-5">Experiance</h1>
                    </span>
                </div>
    
                <div class="row">
                    <div class="col-sm-2 d-flex justify-content-end">
                        <hr class="style-one">
                    </div>
                    <div class="col-sm-8 d-flex justify-content-start">
                        <span class="Skills-lead">
                            <h3>Java SDE</h3>
                        </span>
                        <br>
                    </div>
                </div>
                <div class="row" style="margin-top: -3rem;">
                    <div class="col-sm-2 d-flex justify-content-start"></div>
                    <div class="col-sm-10">
                      <p>
                        We handle diverse projects, from small-scale to university-level, and develop personal projects using Spring Boot. Our work involves integrating frontend and backend, debugging Java projects, and ensuring high code quality. With extensive Java experience, I specialize as a Java SDE, focusing on Java frameworks, efficient coding, and robust software.
                      </p>                
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-sm-2 d-flex justify-content-end">
                        <hr class="style-one">
                    </div>
                    <div class="col-sm-8 d-flex justify-content-start">
                        <span class="Skills-lead">
                            <h3>UI Design</h3>
                        </span>
                        <br>
                    </div>
                </div>
                <div class="row" style="margin-top: -3rem;">
                    <div class="col-sm-2 d-flex justify-content-start"></div>
                    <div class="col-sm-10">
                      <p>
                        I have extensive UI design experience, handling HTML and CSS frameworks, and working with tools like Figma. I create animations and focus on developing user-friendly, visually appealing interfaces. My projects range from small-scale to university-level, ensuring high design quality throughout.
                      </p>                
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-2 d-flex justify-content-end">
                        <hr class="style-one">
                    </div>
                    <div class="col-sm-8 d-flex justify-content-start">
                        <span class="Skills-lead">
                            <h3>Database Management</h3>
                        </span>
                        <br>
                    </div>
                </div>
                <div class="row" style="margin-top: -3rem;">
                    <div class="col-sm-2 d-flex justify-content-start"></div>
                    <div class="col-sm-10">
                      <p>
                        I have extensive experience in Database Management, handling DBMS and SQL queries. I also have knowledge of NoSQL and data integration techniques, ensuring efficient data management and retrieval.We have expertise in integrating connectivity solutions such as Hibernate for relational databases and NoSQL databases like MongoDB.
                      </p>                
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-2 d-flex justify-content-end">
                        <hr class="style-one">
                    </div>
                    <div class="col-sm-8 d-flex justify-content-start">
                        <span class="Skills-lead">
                            <h3>API Fetching</h3>
                        </span>
                        <br>
                    </div>
                </div>
                <div class="row" style="margin-top: -3rem;">
                    <div class="col-sm-2 d-flex justify-content-start"></div>
                    <div class="col-sm-10">
                      <p>
                        I specialize in handling API requests using Spring Boot and Node.js, ensuring efficient data retrieval and integration. Proficient in utilizing tools like Postman for API testing and validation, I ensure robust communication between frontend and backend systems. My experience includes designing scalable APIs.
                      </p>                
                    </div>
                </div>
              </div>

              <!-- Skills -->
              <div class="container mb-5">
                <div class="row mt-5">
                    <span>
                        <h1 class="Skills-tag mb-5">Skills</h1>
                    </span>
                </div>
                <div class="row">
                    <div class="col-sm-2 d-flex justify-content-end">
                        <hr class="style-one">
                    </div>
                    <div class="col-sm-8 d-flex justify-content-start">
                        <span class="Skills-lead">
                            <h3>Frontend Developer</h3>
                        </span>
                        <br>
                    </div>
                </div>
                <div class="row" style="margin-top: -3rem;">
                    <div class="col-sm-2 d-flex justify-content-start">
                    </div>
                    <div class="col-sm-10 mb-5">
                        <div class="d-flex">
                            <img class="html-icons m-2" src="./assets/img/icons/html-5.png" alt="html"><h5 class="m-2 p-1">HTML</h5>
                            <img class="css3-icons m-2" src="./assets/img/icons/css-3.png" alt="css3"><h5 class="m-2 p-1">CSS3</h5>
                            <img class="js-icons m-2" src="./assets/img/icons/js.png" alt="js"><h5 class="m-2 p-1">JS</h5>
                            <img class="bootstrap-icons m-2" src="./assets/img/icons/bootstrap.png" alt="js"><h5 class="m-2 p-1">bootstrap</h5>
                            <img class="js-icons m-2" src="./assets/img/icons/tailwindcss.png" alt="tailwindcss"><h5 class="m-2 p-1">Tailwind CSS</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 d-flex justify-content-end">
                        <hr class="style-one">
                    </div>
                    <div class="col-sm-8 d-flex justify-content-start">
                        <span class="Skills-lead">
                            <h3>Backend Developer</h3>
                        </span>
                        <br>
                    </div>
                </div>
                <div class="row" style="margin-top: -3rem;">
                    <div class="col-sm-2 d-flex justify-content-start">
                    </div>
                    <div class="col-sm-8 mb-5">
                        <div class="d-flex">
                            <img class="java-icons m-2" src="./assets/img/icons/java.png" alt="java"><h5 class="m-2 p-1">Java</h5>
                            <img class="react-icons m-2" src="./assets/img/icons/react.png" alt="React"><h5 class="m-2 p-1">React</h5>
                            <img class="springboot-icons m-2" src="./assets/img/icons/dark-springboot.png" alt="Spring boot"><h5 class="m-2 p-1">Spring Boot</h5>
                            <img class="springboot-icons m-2" src="./assets/img/icons/php.png" alt="Spring boot"><h5 class="m-2 p-1">PHP</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 d-flex justify-content-end">
                        <hr class="style-one">
                    </div>
                    <div class="col-sm-8 d-flex justify-content-start">
                        <span class="Skills-lead">
                            <h3>Currently Working</h3>
                        </span>
                        <br>
                    </div>
                </div>
                <div class="row" style="margin-top: -3rem;">
                    <div class="col-sm-2 d-flex justify-content-start">
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex">
                            <img class="typescript-icons m-2" src="./assets/img/icons/typescript.png" alt="ts"><h5 class="m-2 p-1">Typescript</h5>
                            <img class="nodejs-icons m-2" src="./assets/img/icons/nodejs.png" alt="nodeJS"><h5 class="m-2 p-1">NodeJs</h5>
                            <img class="ux-icons m-2 " src="./assets/img/icons/ux.png" alt="ux-icon"><h5 class="m-2 p-1">UX Design</h5>
                        </div>
                    </div>
                </div>
              </div>
              
              <!-- Qualification -->
              <div class="container">
                <div class="row mt-5">
                    <span>
                        <h1 class="qualification-tag mb-5">Qualification</h1>
                    </span>
                </div>
                
                <div class="row">
                  <div class="col-sm-2 d-flex justify-content-end">
                      <hr class="style-one">
                  </div>
                  <div class="col-sm-8 d-flex justify-content-start">
                      <span class="Skills-lead">
                          <h3>10<sup>th</sup> Secondary School Certificate (SSC)</h3>
                      </span>
                      <br>
                  </div>
                </div>
                <div class="row" style="margin-top: -3rem;">
                  <div class="col-sm-2 d-flex justify-content-start"></div>
                  <div class="col-sm-8 mb-5">
                      <div class="row">
                          <div class="col d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none" class="mx-2">
                              <path d="M17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                              <path d="M14 2.20004C13.3538 2.06886 12.6849 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 11.3151 21.9311 10.6462 21.8 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                              <path d="M12.0303 11.9624L16.5832 7.40948M19.7404 4.3445L19.1872 2.35736C19.0853 2.02999 18.6914 1.89953 18.4259 2.1165C16.9898 3.29006 15.4254 4.87079 16.703 7.36407C19.2771 8.56442 20.7466 6.94572 21.8733 5.58518C22.0975 5.31448 21.9623 4.90755 21.6247 4.80993L19.7404 4.3445Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="text-2xl font-light text-gray-900 mr-5">Marks : 76%</span>
                          </div>
                          <div class="col d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none" class="mx-2">
                              <path d="M18 2V4M6 2V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M10 17L9.99999 13.3472C9.99999 13.1555 9.86325 13 9.69458 13H9M13.6297 17L14.9842 13.3492C15.0475 13.1785 14.9128 13 14.7207 13H13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                              <path d="M2.5 12.2432C2.5 7.88594 2.5 5.70728 3.75212 4.35364C5.00424 3 7.01949 3 11.05 3H12.95C16.9805 3 18.9958 3 20.2479 4.35364C21.5 5.70728 21.5 7.88594 21.5 12.2432V12.7568C21.5 17.1141 21.5 19.2927 20.2479 20.6464C18.9958 22 16.9805 22 12.95 22H11.05C7.01949 22 5.00424 22 3.75212 20.6464C2.5 19.2927 2.5 17.1141 2.5 12.7568V12.2432Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M6 8H18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="text-2xl font-light text-gray-900"> Passing Year : 2019</span>
                          </div>
                      </div>
                  </div>
                </div>
                
                <!-- 12th -->
                <div class="row">
                  <div class="col-sm-2 d-flex justify-content-end">
                      <hr class="style-one">
                  </div>
                  <div class="col-sm-8 d-flex justify-content-start">
                      <span class="Skills-lead">
                          <h3>12<sup>th</sup> Higher Secondary Certificate (HSC)</h3>
                      </span>
                      <br>
                  </div>
                </div>
                <div class="row" style="margin-top: -3rem;">
                  <div class="col-sm-2 d-flex justify-content-start"></div>
                  <div class="col-sm-8 mb-5">
                      <div class="row">
                          <div class="col d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none" class="mx-2">
                              <path d="M17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                              <path d="M14 2.20004C13.3538 2.06886 12.6849 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 11.3151 21.9311 10.6462 21.8 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                              <path d="M12.0303 11.9624L16.5832 7.40948M19.7404 4.3445L19.1872 2.35736C19.0853 2.02999 18.6914 1.89953 18.4259 2.1165C16.9898 3.29006 15.4254 4.87079 16.703 7.36407C19.2771 8.56442 20.7466 6.94572 21.8733 5.58518C22.0975 5.31448 21.9623 4.90755 21.6247 4.80993L19.7404 4.3445Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="text-2xl font-light text-gray-900 mr-5">Marks : 69.17%</span>
                          </div>
                          <div class="col d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none" class="mx-2">
                              <path d="M18 2V4M6 2V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M10 17L9.99999 13.3472C9.99999 13.1555 9.86325 13 9.69458 13H9M13.6297 17L14.9842 13.3492C15.0475 13.1785 14.9128 13 14.7207 13H13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                              <path d="M2.5 12.2432C2.5 7.88594 2.5 5.70728 3.75212 4.35364C5.00424 3 7.01949 3 11.05 3H12.95C16.9805 3 18.9958 3 20.2479 4.35364C21.5 5.70728 21.5 7.88594 21.5 12.2432V12.7568C21.5 17.1141 21.5 19.2927 20.2479 20.6464C18.9958 22 16.9805 22 12.95 22H11.05C7.01949 22 5.00424 22 3.75212 20.6464C2.5 19.2927 2.5 17.1141 2.5 12.7568V12.2432Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M6 8H18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="text-2xl font-light text-gray-900"> Passing Year : 2021</span>
                          </div>
                      </div>
                  </div>
                </div>
                
                <!-- Degree -->
                <div class="row">
                  <div class="col-sm-2 d-flex justify-content-end">
                      <hr class="style-one">
                  </div>
                  <div class="col-sm-8 d-flex justify-content-start">
                      <span class="Skills-lead">
                          <h3>Under Graduation in (BSC.CS)</h3>
                      </span>
                      <br>
                  </div>
                </div>
                <div class="row" style="margin-top: -3rem;">
                  <div class="col-sm-2 d-flex justify-content-start"></div>
                  <div class="col-sm-8 mb-5">
                      <div class="row d-flex align-items-center">
                          <div class="col d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none" class="mx-2">
                              <path d="M17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                              <path d="M14 2.20004C13.3538 2.06886 12.6849 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 11.3151 21.9311 10.6462 21.8 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                              <path d="M12.0303 11.9624L16.5832 7.40948M19.7404 4.3445L19.1872 2.35736C19.0853 2.02999 18.6914 1.89953 18.4259 2.1165C16.9898 3.29006 15.4254 4.87079 16.703 7.36407C19.2771 8.56442 20.7466 6.94572 21.8733 5.58518C22.0975 5.31448 21.9623 4.90755 21.6247 4.80993L19.7404 4.3445Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="text-2xl font-light text-gray-900 mr-5">Marks : 87.21%</span>
                          </div>
                          <div class="col d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none" class="mx-2">
                              <path d="M18 2V4M6 2V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M10 17L9.99999 13.3472C9.99999 13.1555 9.86325 13 9.69458 13H9M13.6297 17L14.9842 13.3492C15.0475 13.1785 14.9128 13 14.7207 13H13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                              <path d="M2.5 12.2432C2.5 7.88594 2.5 5.70728 3.75212 4.35364C5.00424 3 7.01949 3 11.05 3H12.95C16.9805 3 18.9958 3 20.2479 4.35364C21.5 5.70728 21.5 7.88594 21.5 12.2432V12.7568C21.5 17.1141 21.5 19.2927 20.2479 20.6464C18.9958 22 16.9805 22 12.95 22H11.05C7.01949 22 5.00424 22 3.75212 20.6464C2.5 19.2927 2.5 17.1141 2.5 12.7568V12.2432Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              <path d="M6 8H18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="text-2xl font-light text-gray-900"> Passing Year : 2024</span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
    </section>

    <!-- ======= Knowledge Section ======= -->
    <section id="Knowledge" class="Knowledge-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center" data-aos="slide-up" data-aos-duration="800" data-aos-easing="ease-in-out"
              data-aos-offset="3500">
              <h3 class="title-a">Knowledge</h3>
              <div class="containering">
                <div class="line">
                  <div class="diamond"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row" data-aos="slide-up" data-aos-duration="800" data-aos-easing="ease-in-out"
            data-aos-offset="3600">
            <div class="col-md-4">
              <div class="service-box">
                <div class="service-ico">
                  <span class="ico-circle"><i class="fa-sharp fa-solid fa-database"></i></span>
                </div>
                <div class="service-content">
                  <h2 class="s-title">database Working</h2>
                  <p class="s-description text-center">
                    The earliest databases could only handle data formatted in a special way. Over time, the models for
                    database management systems have changed considerably.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-box">
                <div class="service-ico">
                  <span class="ico-circle"><i class="fa-brands fa-phoenix-framework"></i></span>
                </div>
                <div class="service-content">
                  <h2 class="s-title">Web Development</h2>
                  <p class="s-description text-center">
                    Web Application Framework or simply “web framework” is a software framework that is designed to
                    support the development of web applications including web services,resorces.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-box">
                <div class="service-ico">
                  <span class="ico-circle"><i class="fa-solid fa-key"></i></span>
                </div>
                <div class="service-content">
                  <h2 class="s-title"> API</h2>
                  <p class="s-description text-center">
                    API is the acronym for Application Programming Interface, which is software intermediary allows two
                    applications to talk to other. app like FB, send an instant message.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-box">
                <div class="service-ico">
                  <span class="ico-circle"><i class="fa-brands fa-android"></i></span>
                </div>
                <div class="service-content">
                  <h2 class="s-title">Android Development</h2>
                  <p class="s-description text-center">
                    Android is a mobile operating system developed by Google. It is based on a modified version of the
                    Linux kernel and other open source software.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-box">
                <div class="service-ico">
                  <span class="ico-circle"><i class="fa-sharp fa-solid fa-dice-d6"></i></span>
                </div>
                <div class="service-content">
                  <h2 class="s-title">game Developers</h2>
                  <p class="s-description text-center">
                    Game developers typically play a role in several elements of game development, including visuals,
                    artificial intelligence, user interface.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-box">
                <div class="service-ico">
                  <span class="ico-circle"><i class="fa-brands fa-java"></i></i></span>
                </div>
                <div class="service-content">
                  <h2 class="s-title">JAVA Developer</h2>
                  <p class="s-description text-center">
                    Developers use Java to construct applications use as, data centres, game consoles etc.Java is the
                    world's most popular programming language.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    <!-- ======= Projects Section ======= -->
    <section id="Project" class="Knowledge-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div
              class="title-box text-center"
              data-aos="slide-up"
              data-aos-duration="800"
              data-aos-easing="ease-in-out"
              data-aos-offset="4600"
            >
              <h3 class="title-a">Project</h3>
              <div class="containering">
                <div class="line">
                  <div class="diamond"></div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="row"
            data-aos="slide-up"
            data-aos-duration="800"
            data-aos-easing="ease-in-out"
            data-aos-offset="4700"
          >
            <div class="col-md-4">
              <div class="service-box">
                <a href="https://github.com/roshanbachhav/Gamestore-Webapp" target="_blank">
                  <div class="service-ico">
                    <span class="ico-circle"
                      ><i class="fa-solid fa-gamepad"></i></span>
                  </div>
                  <div class="service-content">
                    <h2 class="s-title">RV Gamestore</h2>
                    <p class="s-description text-center">
                      Rv Gamestore is ecommerce web with using Springboot, Mysql, Html Css and Js and other framework of html and css with backend logic. <br> ...
                    </p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-box">
                <a href="https://github.com/roshanbachhav/BookYourShow" target="_blank">
                  <div class="service-ico">
                    <span class="ico-circle"
                      ><i class="fa-solid fa-ticket"></i></span>
                  </div>
                  <div class="service-content">
                    <h2 class="s-title">BookYourShow</h2>
                    <p class="s-description text-center">
                        This project, created using AWT and Swing with MySQL database connectivity, includes login auth and is based on BookMyShow.
                        <br> ...
                    </p>
                  </div>
                </a>
              </div>
            </div>            
            <div class="col-md-4">
              <div class="service-box">
                <a href="https://github.com/roshanbachhav/kharedi" target="_blank">
                  <div class="service-ico">
                    <span class="ico-circle"
                      ><i class="fa-solid fa-shop"></i></span>
                  </div>
                  <div class="service-content">
                    <h2 class="s-title">Kharedi Store</h2>
                    <p class="s-description text-center">
                      This is my degree project, with the team members this is online ecommerce store. We use Springboot, Mysql, Html Css and Js and other frameworks...
                    </p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-box">
                <a href="https://tasking-list.netlify.app/" target="_blank">
                  <div class="service-ico">
                    <span class="ico-circle"
                      ><i class="fa-solid fa-list"></i
                    ></span>
                  </div>
                  <div class="service-content">
                    <h2 class="s-title">Todo List</h2>
                    <p class="s-description text-center">
                        Todo List was my first project using HTML, CSS, and JavaScript, integrated with a clock feature. It's a simple yet fully responsive project. <br> ...
                    </p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-box">
                <a href="https://mrstaticwebs.blogspot.com/2022/12/import-java.html">
                  <div class="service-ico">
                    <span class="ico-circle"
                      ><i class="fa-solid fa-building-columns"></i></span>
                  </div>
                  <div class="service-content">
                    <h2 class="s-title">Atm Machine Program</h2>
                    <p class="s-description text-center">
                        This project was made to improve my logic and practice Java. It demonstrates the working of an ATM mechanism in code format.
                        <br> ...
                    </p>
                  </div>
                </a>
              </div>
            </div>
            <!-- <div class="col-md-4">
              <div class="service-box">
                <a href="">
                  <div class="service-ico">
                    <span class="ico-circle"
                      ><i class="fa-brands fa-java"></i
                    ></span>
                  </div>
                  <div class="service-content">
                    <h2 class="s-title">JAVA Developer</h2>
                    <p class="s-description text-center">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Ullam dolore quibusdam ducimus delectus cum eveniet et
                      illum cupiditate. Sed incidunt
                    </p>
                  </div>
                </a>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>

      <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image">
      <div class="overlay-mf"></div>
      <div class="container position-relative" data-aos="slide-up" data-aos-duration="700"
        data-aos-easing="ease-in-out" data-aos-offset="100">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span> <i class="fa-solid fa-code fa-3x"></i> </span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="80000" data-purecounter-duration="1"
                  class="counter purecounter"></p>
                <span class="counter-text">line of codes</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span> <i class="fa-solid fa-award fa-3x"></i> </span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                  class="counter purecounter"></p>
                <span class="counter-text">Award</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span> <i class="fa-solid fa-thumbs-up fa-3x"></i> </span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
                  class="counter purecounter"></p>
                <span class="counter-text">Like</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span> <i class="fa-solid fa-handshake fa-4x"></i> </span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1"
                  class="counter purecounter"></p>
                <span class="counter-text">Complete Projects</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="testimonials">
      <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-duration="800" data-aos-easing="ease-in-out" data-aos-offset="2650">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-p">Fun Part</h3>
              <div class="containering">
                <div class="line">
                  <div class="diamond"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper mySwiper container">
          <div class="swiper-wrapper">

            <div class="swiper-slide">  
              <div class="swiper-personl-msg">
                <h2>Dealing With Errors</h2>
                <p>I've faced plenty of errors while working on various projects. These errors can be frustrating and seem never-ending. However, I've discovered that dealing with errors teaches me a lot. I often seek help from resources like ChatGPT, Stack Overflow, and many others. One important lesson I've learned is that when errors come, you end up discovering more things</p>
              </div>
            </div>

            <div class="swiper-slide">  
              <div class="swiper-personl-msg">
                <h2>Programming Language </h2>
                <p>I began programming in 2020 with Python. During my BCS degree, I independently delved into C, my first structured programming language. Subsequently, I explored HTML, CSS, JavaScript, Java, and React, expanding my programming repertoire. I not learn we make projects this my jurney </p>
              </div>
            </div>

            <div class="swiper-slide">  
              <div class="swiper-personl-msg">
                <h2>Data Structure And Algorithm</h2>
                <p>In my second year of my BCS degree, I started learning Data Structures and Algorithms (DSA). Through DSA, I gained a deep understanding of concepts like time complexity. We studied various algorithms including searching, sorting, graphs, linked lists, stacks, and queues. I documented my learning journey on GitHub, which you can check out<a class="swiper-git-link" href="https://github.com/roshanbachhav/c/tree/main/Dsa" target="_blank"> here</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contacts -->
    <section id="contact" class="contacts bg-white py-5">
      <div class="container mx-auto">
        <h3 class="title-p text-center mb-6">Talk to Me</h3>
        <div class="containering mb-10">
          <div class="line mx-auto">
            <div class="diamond border-gray-400 border-2 transform rotate-45 w-5 h-5 mx-auto"></div>
          </div>
        </div>
      </div>
      <div class="container-fluid contact">
        <div class="row">
          <div class="col-md-8">
              <?php
              if ($messageSent) {
                  echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
                      <strong>Thank You!</strong> Your message has been successfully sent. We will get back to you shortly..
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
              }

              if ($failed) {
                  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      <strong>Hey!</strong> Unfortunately, the message failed to send.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
              }
            ?>
            <form action="index.php" method="post">
              <div class="row my-5">
                <div class="col-md-6">
                  <input type="text" name="fullName" class="fullName" required placeholder="Full Name">
                </div>
                <div class="col-md-6">
                  <input type="email" name="email" class="email" required placeholder="Enter Email">
                </div>
              </div>
              
              <div class="col-md-12 textarea-message">
                <textarea class="message" name="message" rows="5" required placeholder="Enter Review or Something Else"></textarea>
              </div>
              <button type="submit" class="contact-btn">
                Submit
              </button>
              </form>
            </div>

            <div class="col-md-4 my-5">

              <div class="row mb-5">
                <div class="col-md-12 d-flex justify-content-end align-items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" color="#000000" fill="none">
                        <path d="M15.0001 17C14.2006 17.6224 13.1504 18 12.0001 18C10.8499 18 9.79965 17.6224 9.00012 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M2.35151 13.2135C1.99849 10.9162 1.82198 9.76763 2.25629 8.74938C2.69059 7.73112 3.65415 7.03443 5.58126 5.64106L7.02111 4.6C9.41841 2.86667 10.6171 2 12.0001 2C13.3832 2 14.5818 2.86667 16.9791 4.6L18.419 5.64106C20.3461 7.03443 21.3097 7.73112 21.744 8.74938C22.1783 9.76763 22.0018 10.9162 21.6487 13.2135L21.3477 15.1724C20.8473 18.4289 20.597 20.0572 19.4291 21.0286C18.2612 22 16.5538 22 13.1389 22H10.8613C7.44646 22 5.73903 22 4.57112 21.0286C3.40321 20.0572 3.15299 18.4289 2.65255 15.1724L2.35151 13.2135Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                    </svg>
                    <div class="col-sm-8">
                      <h6 class="mx-3">Siddhatek Nagar Nashik</h6>
                      <p class="mx-3 font-light">Maharastra, India</p>
                    </div>
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-12 d-flex justify-content-end align-items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" color="#000000" fill="none">
                        <path d="M4.74038 14.3685L6.69351 12.9816C7.24445 12.5904 7.80305 12.3282 8.44034 12.1585C9.17201 11.9636 9.5 11.5644 9.5 10.711C9.5 8.54628 14.5 8.31594 14.5 10.711C14.5 11.5644 14.828 11.9636 15.5597 12.1585C16.202 12.3295 16.7599 12.5934 17.3065 12.9816L19.2596 14.3685C20.1434 14.9961 20.5547 15.2995 20.7842 15.7819C21 16.2358 21 16.768 21 17.8324C21 19.7461 21 20.703 20.4642 21.3164C19.8152 22.0593 18.128 21.9955 17.0917 21.9955H6.90833C5.87197 21.9955 4.21909 22.0986 3.5358 21.3164C3 20.703 3 19.7461 3 17.8324C3 16.768 3 16.2358 3.21584 15.7819C3.44526 15.2995 3.85662 14.9961 4.74038 14.3685Z" stroke="currentColor" stroke-width="1.5" />
                        <path d="M14 17C14 18.1046 13.1046 19 12 19C10.8954 19 10 18.1046 10 17C10 15.8954 10.8954 15 12 15C13.1046 15 14 15.8954 14 17Z" stroke="currentColor" stroke-width="1.5" />
                        <path d="M6.96014 3.69772C5.6417 4.07415 4.69384 4.54112 3.82645 5.10455C2.45318 5.9966 1.86443 7.60404 2.02607 9.15513C2.09439 9.81068 2.62064 10.1241 3.23089 9.95455C3.69451 9.82571 4.15888 9.7003 4.61961 9.56364C5.96706 9.16397 6.28399 8.67812 6.47124 7.29885L6.96014 3.69772ZM6.96014 3.69772C10.2186 2.76743 13.7814 2.76743 17.0399 3.69772M17.0399 3.69772C18.3583 4.07415 19.3062 4.54112 20.1735 5.10455C21.5468 5.9966 22.1356 7.60404 21.9739 9.15513C21.9056 9.81068 21.3794 10.1241 20.7691 9.95455C20.3055 9.82571 19.8411 9.7003 19.3804 9.56364C18.0329 9.16397 17.716 8.67812 17.5288 7.29885L17.0399 3.69772Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                      </svg>
                    <div class="col-sm-8">
                      <h6 class="mx-3">+91 77096 38776</h6>
                      <p class="mx-3 font-light"><i class="fa-brands fa-whatsapp mr-2"></i>77096 38776</p>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 d-flex justify-content-end align-items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" color="#000000" fill="none">
                      <path d="M7 7.5L9.94202 9.23943C11.6572 10.2535 12.3428 10.2535 14.058 9.23943L17 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M10.5 19.5C10.0337 19.4939 9.56682 19.485 9.09883 19.4732C5.95033 19.3941 4.37608 19.3545 3.24496 18.2184C2.11383 17.0823 2.08114 15.5487 2.01577 12.4814C1.99475 11.4951 1.99474 10.5147 2.01576 9.52843C2.08114 6.46113 2.11382 4.92748 3.24495 3.79139C4.37608 2.6553 5.95033 2.61573 9.09882 2.53658C11.0393 2.4878 12.9607 2.48781 14.9012 2.53659C18.0497 2.61574 19.6239 2.65532 20.755 3.79141C21.8862 4.92749 21.9189 6.46114 21.9842 9.52844C21.9939 9.98251 21.9991 10.1965 21.9999 10.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M19 17C19 17.8284 18.3284 18.5 17.5 18.5C16.6716 18.5 16 17.8284 16 17C16 16.1716 16.6716 15.5 17.5 15.5C18.3284 15.5 19 16.1716 19 17ZM19 17V17.5C19 18.3284 19.6716 19 20.5 19C21.3284 19 22 18.3284 22 17.5V17C22 14.5147 19.9853 12.5 17.5 12.5C15.0147 12.5 13 14.5147 13 17C13 19.4853 15.0147 21.5 17.5 21.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="col-sm-8">
                      <h6 class="mx-3">bachhavroshan600@gmail.com</h6>
                      <p class="mx-3 font-light">Official</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="rounded-lg shadow">
      <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
          <div class="sm:flex sm:items-center sm:justify-between">
              <a href="https://flowbite.com/" class="flex items-center mb-4 mt-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Roshan</span>
              </a>
              <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                  <li>
                      <a href="#About" class="  me-4 md:me-6">About</a>
                  </li>
                  <li>
                      <a href="#Knowledge" class="  me-4 md:me-6">KNOWLEDGE</a>
                  </li>
                  <li>
                      <a href="#Project" class="  me-4 md:me-6">Projects</a>
                  </li>
                  <li>
                      <a href="#contact" class=" ">Contact</a>
                  </li>
              </ul>
          </div>
          
          <div class="row">
            <div class="col-md-12">
              <span class="d-flex float-end">
                <div class="socialsz">
                  <a class="mx-3" href="https://www.facebook.com/profile.php?id=61562021506751"><i class="fab fa-facebook-f"></i></a>
                  <a class="mx-3" href="https://twitter.com/RoshanBachhav18"><i class="fab fa-twitter"></i></a>
                  <a class="mx-3" href="https://www.instagram.com/mr.roshan_bachhav"><i class="fab fa-instagram"></i></a>
                  <a class="mx-3" href="https://www.linkedin.com/in/roshan-bachhav/"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </span>
            </div>
          </div>
          
          <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
          <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#About" class="">Roshan</a>. All Rights Reserved.</span>
      </div>
    </footer>



    <!-- loder -->
    <!-- <div id="preloader" class="loader"></div> -->
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
      });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script> 

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
      integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  </body>

</html>

