<!DOCTYPE html>
<html lang="ka">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" href="./assets/logo.png" type="image/png">
    <link rel="apple-touch-icon" href="./assets/logo.png">

    <title>Clicks.ge - IT სერვისები და გადაწყვეტილებები</title>
    <meta name="description" content="Clicks.ge გთავაზობთ პროფესიონალურ IT აუთსორსინგს, ვებგვერდების დამზადებას, SEO ოპტიმიზაციას და სხვა. გააუმჯობესეთ თქვენი ბიზნესი ჩვენი მაღალი ხარისხის ტექნოლოგიური გადაწყვეტილებებით.">
    <meta name="keywords" content="IT აუთსორსინგი, ვებგვერდების დამზადება, SEO ოპტიმიზაცია, IT სერვისები, ქართული IT გადაწყვეტილებები">
    <meta name="author" content="Clicks.ge">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="Clicks.ge - IT სერვისები და გადაწყვეტილებები">
    <meta property="og:description" content="აღმოაჩინეთ ჩვენი IT სერვისების რანგი, მათ შორის აუთსორსინგი, ვებგვერდების დამზადება და SEO ოპტიმიზაცია. დაეხმარეთ თქვენს ბიზნესს ჩვენი მაღალი ხარისხის გადაწყვეტილებებით.">
    <meta property="og:image" content="https://clicks.ge/assets/og-image.png">
    <meta property="og:url" content="https://clicks.ge">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Clicks.ge - IT სერვისები და გადაწყვეტილებები">
    <meta name="twitter:description" content="IT სერვისები, რომლებიც აიყვანენ თქვენს ბიზნესს მომდევნო დონეზე. შეისწავლეთ ჩვენი IT აუთსორსინგი, ვებგვერდების დამზადება და SEO ოპტიმიზაცია.">
    <meta name="twitter:image" content="https://clicks.ge/assets/twitter-image.png">
    <meta name="twitter:site" content="@clicksge">
    <meta name="twitter:creator" content="@clicksge">

    <link rel="canonical" href="https://clicks.ge">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <meta name="theme-color" content="#000000">

    <script src="https://static.elfsight.com/platform/platform.js" async></script>

</head>

<body class="">

    <!-- live chat -->
    <div class="elfsight-app-9938ab94-1306-4e69-895b-2d3392c29c39" data-elfsight-app-lazy></div>

    <!--fixed icons -->
    <div class="controls">
        <?php include "./components/control.html" ?>
    </div>

    <!-- scroll to top btn -->
    <button id="scrollToTopBtn">↑</button>

    <header class="header">
        <?php include 'components/navbar.html' ?>
    </header>

    <main>

        <section class="home">
            <?php include "./components/home.html" ?>
        </section>

        <section class="service">
            <?php include "./components/service.html" ?>
        </section>

        <section class="completed-projects">
            <?php include "./components/complete-project.html" ?>
        </section>

        <section class="my-service">
            <?php include "./components/my-service.html" ?>
        </section>

        <section class="calculator">
            <?php include "./components/calculator.html" ?>
        </section>

        <section class="project">
            <?php include "./components/project.html" ?>
        </section>

    </main>

    <footer class="footer">
        <?php include "./components/footer.html" ?>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const prices = {
            computers: 25.00,
            printers: 30.00,
            servers: 100.00
        };

        document.getElementById('comp-price').textContent = `კომპიუტერის ფასი: ${prices.computers} დოლარი`;
        document.getElementById('print-price').textContent = `პრინტერის ფასი: ${prices.printers} დოლარი`;
        document.getElementById('server-price').textContent = `სერვერის ფასი: ${prices.servers} დოლარი`;

        function calculatePrice() {
            const compQuantity = parseInt(document.getElementById('computers').value) || 0;
            const printQuantity = parseInt(document.getElementById('printers').value) || 0;
            const serverQuantity = parseInt(document.getElementById('servers').value) || 0;

            const totalPrice = (compQuantity * prices.computers) +
                (printQuantity * prices.printers) +
                (serverQuantity * prices.servers);

            document.getElementById('total-price').textContent = `${totalPrice.toFixed(2)} დოლარი`;
        }
    </script>
    <script src="javascript/main.js"></script>
</body>

</html>