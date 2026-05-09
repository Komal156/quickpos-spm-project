<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS | Fast &amp; Smart Point of Sale</title>
    <style>
        :root { --primary: #1e5c4b; --primary-dark: #164438; --bg: #faf8f3; --text: #0f0e0b; }
        * { box-sizing: border-box; }
        body { font-family: system-ui, -apple-system, sans-serif; background: var(--bg); color: var(--text); line-height: 1.6; margin: 0; }
        .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }

        /* Header */
        header { padding: 20px 0; display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 1.4rem; }
        nav a { color: var(--text); text-decoration: none; margin: 0 12px; }
        nav a:hover { color: var(--primary); }
        .btn { background: var(--primary); color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; display: inline-block; transition: background 0.2s; }
        .btn:hover { background: var(--primary-dark); }

        /* Hero */
        .hero { padding: 80px 0 60px; text-align: center; }
        .hero h1 { font-size: 2.8rem; margin-bottom: 16px; }
        .hero p { font-size: 1.2rem; color: #555; margin-bottom: 32px; }
        .hero img { display: block; margin: 32px auto 40px; border-radius: 12px; box-shadow: 0 8px 32px rgba(0,0,0,0.1); max-width: 100%; }

        /* Features */
        #features { padding: 72px 0; background: #fff; }
        #features h2 { text-align: center; font-size: 2rem; margin-bottom: 48px; }
        .features-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 24px; }
        .feature-card { background: var(--bg); padding: 28px 24px; border-radius: 12px; text-align: center; }
        .feature-icon { font-size: 2.4rem; margin-bottom: 12px; }
        .feature-card h3 { margin: 0 0 8px; }
        .feature-card p { color: #555; margin: 0; font-size: 0.95rem; }

        /* Pricing */
        #pricing { padding: 72px 0; }
        #pricing h2 { text-align: center; font-size: 2rem; margin-bottom: 48px; }
        .pricing-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px; }
        .plan { background: #fff; border: 2px solid #e8e8e8; border-radius: 12px; padding: 36px 28px; text-align: center; }
        .plan.featured { border-color: var(--primary); }
        .plan h3 { font-size: 1.4rem; margin: 0 0 8px; }
        .plan .price { font-size: 2.4rem; font-weight: 700; color: var(--primary); margin: 16px 0; }
        .plan .price span { font-size: 1rem; font-weight: 400; color: #777; }
        .plan ul { list-style: none; padding: 0; margin: 0 0 28px; text-align: left; }
        .plan ul li { padding: 8px 0; border-bottom: 1px solid #f0f0f0; }
        .plan ul li::before { content: "✓  "; color: var(--primary); font-weight: bold; }

        /* Contact */
        #contact { padding: 72px 0; }
        #contact h2 { text-align: center; font-size: 2rem; margin-bottom: 8px; }
        #contact > p { text-align: center; color: #555; margin-bottom: 40px; }
        .contact-form { max-width: 600px; margin: 0 auto; background: white; padding: 36px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.07); }
        .form-group { margin-bottom: 18px; }
        .form-group label { display: block; margin-bottom: 6px; font-weight: 500; }
        input, textarea { width: 100%; padding: 10px 14px; border: 1px solid #ddd; border-radius: 6px; font-family: inherit; font-size: 1rem; }
        input:focus, textarea:focus { outline: none; border-color: var(--primary); }

        /* Footer */
        footer { background: #0f0e0b; color: #ccc; padding: 40px 0; }
        .footer-inner { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; }
        .footer-inner p { margin: 0; }
        .social-links { display: flex; gap: 20px; }
        .social-links a { color: #ccc; text-decoration: none; transition: color 0.2s; }
        .social-links a:hover { color: #fff; }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <div class="logo"><strong>QuickPOS</strong></div>
            <nav>
                <a href="#features">Features</a>
                <a href="#pricing">Pricing</a>
                <a href="#contact">Contact</a>
            </nav>
            <a href="#contact" class="btn">Sign Up Free</a>
        </header>
    </div>

    <div class="container">
        <section class="hero">
            <h1>The Future of Retail Management</h1>
            <p>Run your entire business from one simple, powerful dashboard.</p>
            <a href="#contact" class="btn" style="font-size:1.1rem; padding:16px 36px;">Start Your Free Trial</a>
            <img src="assets/hero.webp" alt="QuickPOS Dashboard" width="800" height="450" loading="eager">
        </section>
    </div>

    <section id="features">
        <div class="container">
            <h2>Why Teams Choose QuickPOS</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">&#9889;</div>
                    <h3>Lightning Fast</h3>
                    <p>Process transactions in under a second with our optimised payment engine.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128202;</div>
                    <h3>Real-Time Analytics</h3>
                    <p>Live sales dashboards and inventory reports updated every minute.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128274;</div>
                    <h3>Secure Payments</h3>
                    <p>PCI-DSS compliant with end-to-end encryption on every transaction.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#9729;</div>
                    <h3>Cloud Synced</h3>
                    <p>Access your store data from any device, anywhere, at any time.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing">
        <div class="container">
            <h2>Simple, Transparent Pricing</h2>
            <div class="pricing-grid">
                <div class="plan">
                    <h3>Basic</h3>
                    <div class="price">$29<span>/mo</span></div>
                    <ul>
                        <li>1 Register</li>
                        <li>Up to 500 Products</li>
                        <li>Basic Sales Reports</li>
                        <li>Email Support</li>
                    </ul>
                    <a href="#contact" class="btn">Get Started</a>
                </div>
                <div class="plan featured">
                    <h3>Pro &#11088;</h3>
                    <div class="price">$79<span>/mo</span></div>
                    <ul>
                        <li>Up to 5 Registers</li>
                        <li>Unlimited Products</li>
                        <li>Advanced Analytics</li>
                        <li>Priority Support</li>
                    </ul>
                    <a href="#contact" class="btn">Get Started</a>
                </div>
                <div class="plan">
                    <h3>Enterprise</h3>
                    <div class="price">Custom</div>
                    <ul>
                        <li>Unlimited Registers</li>
                        <li>Unlimited Products</li>
                        <li>Custom Integrations</li>
                        <li>Dedicated Account Manager</li>
                    </ul>
                    <a href="#contact" class="btn">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Get in Touch</h2>
            <p>Have questions? Our team is ready to help.</p>
            <div class="contact-form">
                <form action="process.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="you@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="How can we help?" required></textarea>
                    </div>
                    <button type="submit" class="btn" style="border:none; width:100%; cursor:pointer; font-size:1rem;">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-inner">
                <p>&copy; <?php echo date('Y'); ?> QuickPOS. All rights reserved.</p>
                <div class="social-links">
                    <a href="#" aria-label="Twitter">Twitter</a>
                    <a href="#" aria-label="LinkedIn">LinkedIn</a>
                    <a href="#" aria-label="GitHub">GitHub</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
