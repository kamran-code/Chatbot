<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SourceOpen - AI Chatbots for Business</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header {
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        #hero {
            height: 100vh;
            background: linear-gradient(to right, #007bff, #00c6ff);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .feature-card, .pricing-card {
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .pricing-card:nth-child(2) {
            background-color: #ffc107;
        }
        footer {
            background: #222;
            padding: 20px;
        }
        footer a {
            transition: 0.3s;
        }
        footer a:hover {
            color: #ffc107;
        }
    </style>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand fs-4" href="#">SourceOpen - AI Chatbot</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>
    
    <section id="hero">
        <h1 class="display-4 fw-bold">Custom AI-Powered Chatbots</h1>
        <p class="lead">Enhance customer support and automate tasks effortlessly.</p>
        <a href="#contact" class="btn btn-warning btn-lg">Get Started</a>
    </section>
    
    <section id="features" class="container py-5 text-center">
        <h2 class="fw-bold mb-4">Why Choose Our Chatbots?</h2>
        <div class="row">
            <div class="col-md-4 feature-card">
                <i class="fas fa-comments fa-3x text-primary"></i>
                <h3 class="mt-3">24/7 Support</h3>
                <p>Never leave your customers unanswered.</p>
            </div>
            <div class="col-md-4 feature-card">
                <i class="fas fa-cogs fa-3x text-danger"></i>
                <h3 class="mt-3">Easy Integration</h3>
                <p>Connect with your favorite tools effortlessly.</p>
            </div>
            <div class="col-md-4 feature-card">
                <i class="fas fa-brain fa-3x text-success"></i>
                <h3 class="mt-3">AI-Powered</h3>
                <p>Engage in meaningful conversations with AI.</p>
            </div>
        </div>
    </section>
    
    <section id="pricing" class="container py-5 text-center">
        <h2 class="fw-bold">Pricing Plans</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="pricing-card card p-4">
                    <h3>Basic</h3>
                    <p class="fw-bold">$29/month</p>
                    <button class="btn btn-primary">Choose Plan</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-card card p-4">
                    <h3>Pro</h3>
                    <p class="fw-bold">$59/month</p>
                    <button class="btn btn-dark">Choose Plan</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-card card p-4">
                    <h3>Enterprise</h3>
                    <p class="fw-bold">Contact Us</p>
                    <button class="btn btn-secondary">Contact</button>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact" class="container py-5 text-center">
        <h2 class="fw-bold">Contact Us</h2>
        <form class="mt-4">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control mb-3" placeholder="Your Name" required>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control mb-3" placeholder="Your Email" required>
                </div>
            </div>
            <textarea class="form-control mb-3" placeholder="Your Message" required></textarea>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </section>
    
    <footer class="text-white text-center py-4">
        <p>&copy; 2025 SourceOpen. All Rights Reserved.</p>
        <div>
            <a href="#" class="text-white mx-2"><i class="fab fa-facebook fa-lg"></i></a>
            <a href="#" class="text-white mx-2"><i class="fab fa-twitter fa-lg"></i></a>
            <a href="#" class="text-white mx-2"><i class="fab fa-linkedin fa-lg"></i></a>
        </div>
    </footer>
    
    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Message sent successfully!");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.min.js"></script>
<script>
    var botmanWidget = {
        title: "💳 Custom Virtual Assistant",
        introMessage: "👋 Welcome to CBMgarh! This Demo for a Bank?",
        mainColor: "#0A3D62",  
        bubbleBackground: "#000000",  
        aboutText: "🚀 Powered by CBMgarh Bank",
        bubbleAvatarUrl: "https://img.icons8.com/?size=100&id=8dViXhX9K4du&format=png&color=000000",  
        headerTextColor: "#FFFFFF", 
        textColor: "#2C3E50",  
        placeholderTextColor: "#7F8C8D",
        desktopHeight: 500, 
        desktopWidth: 400,  
        chatServer: "https://sourceopen.in/botman"
    };
</script>
    
</body>
</html>
