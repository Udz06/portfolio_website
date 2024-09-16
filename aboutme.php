<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me - My Portfolio</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #000000; /* Dark background for better contrast */
      color: #ffffff; /* White text for readability */
    }

    .section-title {
      font-size: 2.5rem;
      margin-bottom: 2rem;
      text-align: center;
      color: #ff66cc; /* Heading color */
    }

    .resume-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .resume-image {
      max-width: 80%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 2rem;
    }

    .resume-content p {
      font-size: 1.6rem;
      margin-bottom: 1rem;
      color: #ffffff; /* Text color */
    }

    .skills-list {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      justify-content: center;
    }

    .skill-item {
      background-color: #2a2a2a; /* Dark background for skill items */
      border-radius: 10px;
      padding: 2.5rem;
      color: white; /* Text color */
      width: 100%;
      max-width: 400px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .skill-item:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .progress-bar {
      background-color: #444; /* Progress bar background */
      border-radius: 5px;
      height: 10px;
      margin-top: 0.5rem;
      overflow: hidden;
      width: 100%;
    }

    .progress {
      background-color: #4caf50; /* Progress color */
      height: 100%;
      width: 0; /* Placeholder; actual width set inline */
      transition: width 0.3s ease;
    }

    .experience-list {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .experience-item {
      background-color: #2a2a2a; /* Dark background for experience items */
      border-radius: 8px;
      padding: 2rem;
      color: white; /* Text color */
      font-size: 1.8rem;
      margin-bottom: 2rem;
    }

    .experience-item h3 {
      font-size: 2.2rem;
      margin-bottom: 1rem;
      color: #ff66cc; /* Heading color */
    }

    .experience-item p {
      font-size: 1.6rem;
      color: #ffffff; /* Text color */
    }
  </style>
</head>

<body>
  <section id="resume" class="resume">
    <h2 class="section-title">Resume</h2>
    <div class="resume-content">
      <a href="https://www.facebook.com/photo/?fbid=1164167674663655&set=a.233477284399370" target="_blank">
        <img src="https://scontent.fmnl25-2.fna.fbcdn.net/v/t39.30808-6/459704666_1164167677996988_8518977030727671680_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeHY3H2aJW8J8IrlXX_NlWKWRlzhSbX5xH1GXOFJtfnEfQhpDMHy1M3Qbxaf7DKtvSiS1KpWUxdKriPeM7nJzcji&_nc_ohc=kUYtZhgP0McQ7kNvgH_FQNx&_nc_ht=scontent.fmnl25-2.fna&_nc_gid=Ab54crzRf_UJ5cFfZZpUnND&oh=00_AYCj98E2lTLro2ATZcRNWHph2aeeHDA6u8apDNjHctlDfg&oe=66EAE55F" alt="Resume" class="resume-image">
      </a>
      <p>Click the image above to view my resume:</p>
    </div>
  </section>

  <section id="skills" class="skills">
    <h2 class="section-title">Skills</h2>
    <div class="skills-list">
      <div class="skill-item">
        HTML
        <div class="progress-bar">
          <div class="progress" style="width: 90%;"></div>
        </div>
      </div>
      <div class="skill-item">
        CSS
        <div class="progress-bar">
          <div class="progress" style="width: 80%;"></div>
        </div>
      </div>
      <div class="skill-item">
        JavaScript
        <div class="progress-bar">
          <div class="progress" style="width: 50%;"></div>
        </div>
      </div>
      <div class="skill-item">
        Python
        <div class="progress-bar">
          <div class="progress" style="width: 70%;"></div>
        </div>
      </div>
      <div class="skill-item">
        Photoshop
        <div class="progress-bar">
          <div class="progress" style="width: 60%;"></div>
        </div>
      </div>
      <div class="skill-item">
        Video Editing
        <div class="progress-bar">
          <div class="progress" style="width: 65%;"></div>
        </div>
      </div>
    </div>
  </section>

  <section id="experience" class="experience">
    <h2 class="section-title">Experience</h2>
    <div class="experience-list">
      <div class="experience-item">
        <h3>Student of IT</h3>
        <p>As an IT student, I learn how to program, build websites, manage databases, understand networks and operating systems, ensure software security, and apply project management skills.</p>
      </div>
      <div class="experience-item">
        <h3>Manager</h3>
        <p>As a manager at a water station, I oversee daily operations, ensure water quality, manage staff, handle customer service, maintain equipment, manage inventory, and ensure compliance with regulations.</p>
      </div>
      <div class="experience-item">
        <h3>Video Editor</h3>
        <p>As a video editor, I cut, arrange, and enhance video footage, add effects and sound, and ensure the final product tells a compelling story or meets the project's requirements.</p>
      </div>
      <div class="experience-item">
        <h3>Photo Editor</h3>
        <p>As a photo editor, I adjust and enhance images by correcting colors, removing imperfections, cropping, and applying filters to ensure the photos look their best and align with the desired aesthetic or purpose.</p>
      </div>
    </div>
  </section>
</body>

</html>
