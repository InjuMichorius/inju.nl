<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
    <title>Inju Michorius | TWY</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <main>
        <img src=" ../img/bannerTWY.jpg" alt="" class="project_banner">
        <dl>
            <dt>Project</dt>
            <dd>TWY</dd>
            <dt>Expertise</dt>
            <dd>Web Development</dd>
            <dt>Client</dt>
            <dd>Thunderboom Records</dd>
            <dt>Year</dt>
            <dd>2021</dd>
        </dl>

        <section class="section_project">
            <article>
                <h2>Project</h2>
                <p>The Thunderboom foundation develops digital pop artists using artificial intelligence that generates the lyrics and music. These artists also get an appearance through CGI. Joost de Boo and Max Tiel are the founders and clients. Joost is a graphic designer and works at CMD Avans University of Applied Sciences. Max is a musician and Joost and he have been friends for a long time. Because they both love new technology, they started Thunderboom to make music using artificial intelligence.</p>
                <p>It is up to us to give one of these digital artists a ‘voice’. We should first investigate whether it could be an instagram chatbot. That is preferable because instagram is the most popular among real pop artists of today. If that is not possible, we will build our own chat environment. There we can determine our own rules and use APIs to read the text messages and create a database with comments or words and that are attached to the chat environment.</p>
                <p>The end product is a prototype of a chat environment in which you can have a conversation with one of the Thunderboom artists.</p>
            </article>
            <img src="../img/projects/twy/twy1.png" alt="">
            <article>
                <h2>Problem</h2>
                <p>Joost and Max want to be able to present the concept of their digital artists to people from the music industry and companies that they might want to work with in the future. The music and the visuals are already there. The only thing missing is a personality. That’s why they thought they could convey this through a chatbot with its own personality with which you can have conversations. After all, the advantage of a digital artist compared to a real artist is that he can be in several places at the same time. Or in this case can have multiple conversations with fans at the same time.</p>
            </article>
            <img src="../img/projects/twy/twy2.png" alt="">
            <article>
            <h2>Solution</h2>
            <p>The chatbot can be controlled entirely with your voice. There are no input fields. By pressing the microphone button you activate the microphone of your computer or telephone. When you start talking, the words appear on the screen. The code looks at which keyword is said and based on that, TWY sends a message back and the music is played. You can always pause the music by pressing the pause button. It changes back to a play button as soon as you click on it. You can also resume listening after pausing. When all layers of the music have been added and there are no more commands left after the effect input a message will appear with a button to reload the page and start the process again. The application works completely on desktop, mobile and everything in between.</p>
            <img src="../img/projects/twy/twy3.png" alt="">
            </article>
            <h2>Explanation</h2>
            <p>Joost first had the idea to create an Instagram bot for one of their digital artists called TWY (pronounced twaai), but after we did some research it turned out that Instagram doesn’t allow chatbots. However, it was possible to create a Facebook (messenger) bot or whatsapp bot. With these findings we went to Vasilis and in our coaching conversation we explained that this idea could in any case not go ahead. We had also researched the possibility of creating our own chatbot, but this would work too much with AI and that is outside our expertise and also does not match what we learned during the minor. Vasilis then came up with the idea of having Yuri give us a workshop. Yuri is a lecturer in the minor visual and the theme semester emerging technologies. In this he would explain Flow AI to us. This enabled us to create our own chatbot and place it in our own environment. Yuri had also thought of giving the chatbot a goal, namely making a song with TWY. After working with Flow AI for a while, we found out that it was difficult to add packages and make adjustments. We wanted that for the concept we had come up with.</p>
            <img src="../img/projects/twy/twy4.png" alt="">
            <h2>Result</h2>
            <p>After the research and concept phases, we started building ourselves and dropped a number of things. For example, we did start making a chatbot, but without Artificial Intelligence. TWY’s answers are therefore static but editable. But the main functionality is that by talking to TWY you can create your own unique music. There are a number of voice commands you can say to TWY. You can start by making a beat, which you can play slower or faster later. Then you can add a melody, it can also be slower or faster and finally you can add an effect over the melody. Every time you reload the page, the combination of the beat and the melody is unique. A random drum pattern and samples are loaded and the melody is also random every time. For now, the effect that can be put over the melody is the same every time.</p>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>