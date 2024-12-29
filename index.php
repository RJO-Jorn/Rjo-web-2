<!DOCTYPE html>
<html lang="nl">
<?php include_once './head.php'; ?>
<body>
    <header class="header">
        <div class="logo gradient-text">RJO</div>
        <ul class="nav-links text-shadow">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Services</a>
                <ul class="dropdown">
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Consulting</a></li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </header>
    <div class="section-1 section">
        <img src="./img/phoenix-pfp_enhanced.png">
        <div class="intro section-text">
            <h1>Hello,</h1>
            <h2>
                my name is Jorn .O, I'm known under many names like Rocky, RJO and Jorn.
                I'm a dutch programmer, gamer, Volunteer and technology enthousiast.
                But thats just the cover of my book, the book I call my life story.
            </h2>
        </div>
    </div>
    <div class="section-2 section">
        <div class="section-2-text section-text">
            <h1>Jorn .O</h1>
            <h2>
                We know what he does, but who is he? Where does he
                come from? Lets talk about it, I'm a student Software
                Development. I'm <span id="age"></span> years old, And love to game online.
                I also love some Freerunning, mountainbiking and 
                singing in my free time. I'm member of my local scouting 
                and I do volunteers work at CoderDojo-Baarle.
            </h2>
            <a href="#" class="a-button text-shadow">Learn more about Rocky</a>
        </div>
        <img src="./img/file.png">
    </div>
    <div class="section-3 section">
        <img src="./img/skill-2-1.png">
        <div class="section-3-text section-text">
            <h1>Skills</h1>
            <h2>
                While i'm not extremely sufficient at one skill, I make up for it with the 
                quantity of skills i posses. I program in over 10 programming languages in
                different enviorements as for: Java, Javascript, C#, C++, PHP, HTML, CSS, 
                Python, Jython, Lua, SQL, Blade, Batch etc... Ive learned to work and 
                develop for several system OS like Windows, Linux and Android. I've also 
                worked with different types of Databases and done different projects. From
                making Lua scripts, to hosting gaming/development servers to creating scripts
                to train AI or to run Discord bots, Creating C# or Python 
                applications, Websites, Android apps and much more!  
            </h2>
            <a href="#" class="a-button text-shadow">Learn more about my skills & Projects!</a>
        </div>
    </div>
    <div class="section-4 section">
        <img src="./img/sendmail.png">
        <div class="section-4-text section-text">
            <h1>Questions? Contact me!</h1>
            <h2>Fill in the form below and I will get back to you as soon as possible.</h2>
        </div>
    </div>
    <?php include './footer.php' ?>
</body>
</html>


<script>
        function calculateAge(birthDate) {
            const today = new Date();
            const birth = new Date(birthDate);
            let age = today.getFullYear() - birth.getFullYear();
            const m = today.getMonth() - birth.getMonth();
            
            // Adjust age if the birthday hasn't occurred yet this year
            if (m < 0 || (m === 0 && today.getDate() < birth.getDate())) {
                age--;
            }
            return age;
        }

        // Replace with your birthdate (YYYY-MM-DD format)
        const birthDate = '2005-12-04';
        const age = calculateAge(birthDate);

        // Update the age in the HTML
        document.getElementById('age').textContent = age;
    </script>