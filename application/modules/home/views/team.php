<section class="team-section py-5">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Left Intro Text -->
      <div class="col-lg-4 mb-4 mb-lg-0">
        <span class="fw-bold heading mb-3">Meet Our Team</span>
        <p class="team-intro">
          Our team of professionals is dedicated to delivering reliable, high-quality distribution services.
          At MPR Computers, we believe in teamwork, trust, and transparency to grow together with our partners.
        </p>
        <!-- <a href="#contact" class="btn-one mt-3"><span>Contact Us</span></a> -->
      </div>

      <!-- Right Team Members -->
      <div class="col-lg-8">
        <div class="row g-4">
          <!-- Member 1 -->
          <div class="col-md-6">
            <div class="team-card text-center p-4">
              <span class="team-name d-block">Bhawar Lal Thory</span>
              <p class="team-role">Director</p>
            </div>
          </div>

          <!-- Member 2 -->
          <div class="col-md-6">
            <div class="team-card text-center p-4">
              <span class="team-name d-block">Manish Thory</span>
              <p class="team-role">Director</p>
            </div>
          </div>

          <!-- Member 3 -->
          <div class="col-md-6">
            <div class="team-card text-center p-4">
              <img src="assets/images/teams/member1.jpeg" alt="Team Member" class="team-img mb-3">
              <span class="team-name d-block">Pradip Dhar</span>
              <p class="team-role">Sales & Marketing</p>
            </div>
          </div>

          <!-- Member 4 -->
          <div class="col-md-6">
            <div class="team-card text-center p-4">
              <img src="assets/images/teams/member2.jpeg" alt="Team Member" class="team-img mb-3">
              <span class="team-name d-block">Manoj Ray</span>
              <p class="team-role">Sales & Marketing</p>
            </div>
          </div>

          <!-- Member 5 -->
          <div class="col-md-6">
            <div class="team-card text-center p-4">
              <img src="assets/images/teams/member3.jpeg" alt="Team Member" class="team-img mb-3">
              <span class="team-name d-block">Dipankar Das</span>
              <p class="team-role">Sales & Marketing</p>
            </div>
          </div>

          <!-- Member 6 -->
          <div class="col-md-6">
            <div class="team-card text-center p-4">
              <img src="assets/images/teams/member4.jpeg" alt="Team Member" class="team-img mb-3">
              <span class="team-name d-block">Suraj Basor</span>
              <p class="team-role">Sales & Marketing</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
:root {
  --primary: #14213d;
  --secondary: #fca311;
}

/* Heading */
.heading {
  font-size: 2.2rem;
  color: var(--primary);
  position: relative;
  display: inline-block;
  padding-bottom: 0.5rem;
}
.heading::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 80px;
  height: 4px;
  background-color: var(--secondary);
  border-radius: 2px;
}

/* Layout */
.team-section {
  background-color: #f8f9fa;
}
.team-intro {
  color: #555;
  font-size: 1rem;
  line-height: 1.7;
  max-width: 350px;
}

/* Button */
.btn-one {
  display: inline-block;
  color: var(--primary);
  border: 2px solid var(--primary);
  background: transparent;
  padding: 10px 25px;
  font-weight: 600;
  text-decoration: none;
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
  border-radius: 4px;
}
.btn-one:hover {
  background: var(--primary);
  color: #fff;
}

/* Team Card */
.team-card {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
  transition: 0.3s ease;
}
.team-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}
.team-img {
  width: 110px;
  height: 110px;
  object-fit: cover;
  border-radius: 50%;
  border: 3px solid var(--secondary);
}
.team-name {
  color: var(--primary);
  font-weight: 700;
}
.team-role {
  color: var(--secondary);
  font-size: 0.95rem;
  font-weight: 600;
}
</style>
