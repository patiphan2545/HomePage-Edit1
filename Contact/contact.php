<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responsive Contact Us Page</title>
  <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <section>
    
    <div class="section-header">
      <div class="container">
        <h2>Contact Us</h2>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-home"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Address</h4>
              <p>4671 Sugar Camp Road,<br/> Owatonna, Minnesota, <br/>55060</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-phone"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Phone</h4>
              <p>561-456-2321</p>
            </div>
          </div>
          
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            
            <div class="contact-info-content">
              <h4>Email</h4>
              <p>example@email.com</p>
            </div>
          </div>
        </div>
        
        <div class="contact-form">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h2>Send Message</h2>
            <div class="input-box">
              <input type="text" required name="name">
              <span>Full Name</span>
            </div>
            
            <div class="input-box">
              <input type="email" required name="email">
              <span>Email</span>
            </div>
            
            <div class="input-box">
              <textarea required name="message"></textarea>
              <span>Type your Message...</span>
            </div>
            
            <div class="input-box">
              <input type="submit" value="Send" name="send">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
