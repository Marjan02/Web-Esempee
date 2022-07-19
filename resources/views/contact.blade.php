<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MTS Assa'adah</title>
    <script src="https://kit.fontawesome.com/1935d064dd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <link rel="icon" type="image/png" href="./assets/images/cirno.jpg" />
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <!-- LOGO -->
                <h2 class="logo">MTS Assaadah</h2>
                <!-- HAMBURGER ICON -->
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <!-- NAVIGATION -->
                <ul class="nav-ul">
                    <i class="fas fa-times close"></i>
                    <li><a href="/" class="nav-link">Home</a></li>
                    <li><a href="about" class="nav-link">About</a></li>
                    <li><a href="#" class="nav-link current">Contact</a></li>
                    <li><a href="daftarppdb" class="nav-link">PPDB</a></li>
                    <li><a href="students" class="nav-link">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="contacts">
            <div class="container">
                <div class="heading line">
                    <h2>Contact</h2>
                    <p>CONTACT US BY WRITING BELOW</p>
                </div>
                <!-- Left contact page -->
                <form action="https://formspree.io/f/xeqnyjqn" method="POST" id="contact-form" action="contact"
                    class="form" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                            value="" required />
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                            value="" required />
                    </div>
                    <div class="text-area">
                        <textarea class="form-control" rows="10" placeholder="Message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-light">Send</button>
                </form>
            </div>
        </section>

        <!-- contact section -->
        <section id="contact">
            <div class="container">
                <div class="contact">
                    <!-- icons -->
                    <div class="contact-icon">
                        <a href="https://www.instagram.com/__kevnnn_/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/__kevnnn_/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/__kevnnn_/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>2022 &copy; Kevin Yardan. All Rights Reserved</p>
        </div>
    </footer>

    <div class="modal" id="modal">
        <span class="close-modal">&times;</span>
        <div class="modal-content">
            <form action="">
                <input type="text" placeholder="Search" />
                <i class="fas fa-search search"></i>
            </form>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/assets/js/script.js"></script>
</body>

</html>
