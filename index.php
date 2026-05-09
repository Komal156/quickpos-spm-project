<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS | Fast & Smart Point of Sale</title>
    <style>
        /* CRITICAL CSS for Speed */
        :root { --primary: #1e5c4b; --bg: #faf8f3; --text: #0f0e0b; }
        body { font-family: system-ui, -apple-system, sans-serif; background: var(--bg); color: var(--text); line-height: 1.6; }
        .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }
        header { padding: 20px 0; display: flex; justify-content: space-between; align-items: center; }
        .hero { padding: 80px 0; text-align: center; }
        .btn { background: var(--primary); color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; display: inline-block; }
        /* Form Styling */
        .contact-form { max-width: 600px; margin: 40px auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .form-group { margin-bottom: 15px; text-align: left; }
        input, textarea { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 6px; }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo"><strong>QuickPOS</strong></div>
            <nav><a href="#features">Features</a> | <a href="#pricing">Pricing</a></nav>
            <a href="#contact" class="btn">Get Started</a>
        </header>

        <section class="hero">
            <h1>The Future of Retail Management</h1>
            <p>Run your entire business from one simple dashboard.</p>
            <img src="assets/hero.webp" alt="POS Dashboard" width="600" height="400" loading="eager">
        </section>

        <section id="contact" class="contact-form">
            <h2>Contact Our Team</h2>
            <form action="process.php" method="POST">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn" style="border:none; width:100%; cursor:pointer;">Send Message</button>
            </form>
        </section>
    </div>
</body>
</html>
 /* test */
