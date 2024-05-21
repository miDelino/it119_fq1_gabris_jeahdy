<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Jeahdy Gabris - Web Design Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .profile {
            text-align: center;
            margin: 20px 0;
        }
        .profile img {
            width: 150px;
            border-radius: 50%;
        }
        .profile h1 {
            margin: 10px 0;
        }
        .projects {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .project {
            background: #fff;
            margin: 20px;
            padding: 20px;
            width: 30%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .project img {
            width: 100%;
        }
        .project h3 {
            margin-top: 10px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Mark Jeahdy Gabris</h1>
        <p>Web System Designer & Developer</p>
    </header>
    <div class="container">
        <div class="profile">
            <img src="{{ asset ('pics/IMG_4327.png')}}" alt="Picture">
            <h1>Mark Jeahdy Gabris</h1>
            <p>A passionate web system designer and developer with expertise in HTML, CSS, JavaScript, and frameworks like React and Angular. Experienced in creating visually appealing, user-friendly websites and applications. Staying updated with industry trends, I deliver top-notch results for corporate websites, e-commerce platforms, and dynamic web applications. Explore my portfolio for examples.</p>
        </div>
        <section class="projects">
            <div class="project">
                <img src="{{ asset ('pics/e-commerce-icon-vector-4525474.jpg')}}" alt="Project1">
                <h3>E-Commerce Recommendation Engine</h3>
                <p>
                    This system analyzes user behavior and purchase history to suggest products that align with their interests. By leveraging machine learning algorithms, it personalizes the shopping experience, increasing customer satisfaction and boosting sales. The engine continuously learns and adapts to changing user preferences for more accurate recommendations over time.</p>            </div>
            <div class="project">
                <img src="{{ asset ('pics/customer-support-service-vector-2642393.jpg')}}" alt="Project2">
                <h3>Automated Customer Support Chatbot</h3>
                <p>
                    Designed to handle common customer inquiries, this system uses natural language processing to understand and respond to user questions. It provides instant assistance, resolves issues quickly, and reduces the workload on human support agents. The chatbot can be integrated into websites, apps, and messaging platforms to offer round-the-clock support.</p>           
                 </div>
            <div class="project">
                <img src="{{ asset ('pics/images_6.png')}}" alt="Project3">
                <h3>Smart Home Energy Management System</h3>
                <p>
                    This system optimizes energy consumption in homes by intelligently controlling appliances and monitoring energy usage patterns. It integrates with smart meters and devices to automate energy-saving actions, such as adjusting heating or lighting based on occupancy. The system aims to reduce energy costs and enhance sustainability through efficient resource management</p>            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Mark Jeahdy Gabris</p>
    </footer>
</body>
</html>
