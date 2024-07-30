<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>H&G</h1>
        </div>
        <div class="navigation">
            <nav>
                <ul>
                    <li>Home</li>
                    <a href="service.html"><li>Service</li></a>
                    <li>Blog</li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="hero-img"><img src="images/hero.jpg" width="100%"></div>
            <div class="hero-centered">
                <div class="hero-background"></div>
                <h1>Welcome to Homes & Gardens</h1>
                <p>Lorem ipsum</p>
            </div>
        </section>
        <section class="subheading">
            <h1>Engage in the real logging experience <br> be one with nature</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Harum consequatur nam quaerat, placeat dolorum eaque consequuntur laborum minus natus adipisci
                nemo repellat aliquid neque libero minima saepe provident labore perferendis?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores earum facilis ex nesciunt, 
                laudantium provident ab praesentium ullam doloribus libero necessitatibus eius, accusamus cum aspernatur omnis magnam ipsam, dolorum sapiente.</p>
        </section>
        <section class="filler">
            <img src="images/mountain.jpg">
        </section>
        <section class="introduction">
            <h1>About us</h1>
            <div class="about-us">
                <div>
                    <img src="images/hiker.jpg" height="500">
                    <p style="text-align: center; color: lightgray;"><i>"sheesh"</i></p>
                </div>
                <div class="text">
                    <p>At Homes and Gardens, we are passionate about the great outdoors and committed to helping you experience the beauty and serenity of nature. Founded by a group of avid campers and nature enthusiasts, 
                        our company offers top-quality camping gear, expert advice, and unforgettable adventure experiences. Whether you're a seasoned camper or just beginning your journey into the wilderness, our 
                        mission is to equip you with the best tools and knowledge to make every trip safe, enjoyable, and memorable. From tents and sleeping bags to hiking boots and outdoor cooking equipment, we have everything you need to embrace the call of the wild. Join us in exploring the natural world
                        , creating lasting memories, and fostering a love for the outdoors that will last a lifetime. Welcome to Camperslog - your trusted companion in every adventure.</p>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="contact-us">
                <h1>Contact</h1>
                <form action="includes/formhandler.inc.php" method="post">
                    <label for="username">Name:</label>
                    <input type="text" id="username" name="username" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="msg">Message:</label>
                    <textarea id="msg" name="msg" required></textarea>
                    
                    <button type="submit">Send</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p>
            Copyright© 2024 All rights reserved to Mateo
        </p>
    </footer>
</body>
</html>