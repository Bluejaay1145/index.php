<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberSecure Solutions</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #1e3c72, #2a5298);
            color: #fff;
        }
        header {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 2rem 0;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
            animation: fadeIn 2s ease-in-out;
        }
        nav {
            background: rgba(0, 0, 0, 0.8);
            padding: 1rem 0;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        nav a {
            color: #fff;
            margin: 0 1rem;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #00d4ff;
        }
        section {
            padding: 3rem 2rem;
            text-align: center;
        }
        .services {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }
        .service {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            padding: 1.5rem;
            width: 300px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .service:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
        }
        footer {
            background: rgba(0, 0, 0, 0.9);
            color: #fff;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 2rem;
        }
        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
        a {
            color: #00d4ff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>CyberSecure Solutions</h1>
        <p>Your trusted partner for all your cybersecurity needs</p>
    </header>
    <nav>
        <a href="#about">About Us</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>
    <section id="about">
        <h2>About Us</h2>
        <p>At CyberSecure Solutions, we specialize in providing top-notch cybersecurity services to protect your business from digital threats. Our team of experts is dedicated to ensuring your company's safety in the ever-evolving cyber landscape.</p>
    </section>
    <section id="services">
        <h2>Our Services</h2>
        <div class="services">
            <div class="service">
                <h3>Risk Assessment</h3>
                <p>Identify vulnerabilities and mitigate risks with our comprehensive risk assessment services.</p>
            </div>
            <div class="service">
                <h3>Penetration Testing</h3>
                <p>Simulate real-world attacks to uncover weaknesses in your systems before hackers do.</p>
            </div>
            <div class="service">
                <h3>Incident Response</h3>
                <p>Quickly respond to and recover from cyber incidents with our expert support.</p>
            </div>
        </div>
    </section>
    <section id="contact">
        <h2>Contact Us</h2>
        <p>Have questions or need assistance? Reach out to us at <a href="mailto:info@cybersecuresolutions.com">info@cybersecuresolutions.com</a>.</p>
    </section>
    <footer>
        <p>&copy; 2023 CyberSecure Solutions. All rights reserved.</p>
    </footer>
</body>
</html>
