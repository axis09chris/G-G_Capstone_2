<title>Career Page</title>
<link rel="stylesheet" href="../css/career.css?v=<?php echo time(); ?>">
<?php include'../components/nav.php' ?>

<body>
  <header class="career-title">
    <h1>Careers</h1>
  </header>
  <main>
    <div class="container">
      <div class="career-intro">
        <p>Join our dedicated team and help us accomplish our aim of being the undisputed option for the elite in exquisite, time-tested culinary skill and luxury experience by 2025. Scroll down to explore what options we have available for you!</p>
      </div>

      <div class="careers">
        <div class="career-box">
          <div><img class="career-img" src="../../img/account-executive.png" alt="account-executive"></div>
          <div class="job" onclick="openJobModal('Accounts Executive')">Accounts Executive</div>
        </div>
        <div class="career-box">
          <div><img class="career-img" src="../../img/florist1.png" alt="florist1"></div>
          <div class="job" onclick="openJobModal('Florist')">Florist</div>
        </div>
        <div class="career-box">
          <div><img class="career-img" src="../../img/catering-manager.jpg" alt="catering-manager"></div>
          <div class="job" onclick="openJobModal('Catering Manager')">Catering Manager</div>
        </div>
        <div class="career-box">
          <div><img class="career-img" src="../../img/cheff.jpg" alt="cheff"></div>
          <div class="job"  onclick="openJobModal('R&D Chef')">R&D Chef</div>
        </div>
        <div class="career-box">
          <div><img class="career-img" src="../../img/marketing-staff.png" alt="marketing-staff"></div>
          <div class="job" onclick="openJobModal('Marketing Staff')">Marketing Staff</div>
          <!-- JOB MODAL -->
          <div id="jobModal">
            <div class="job-content">
              <h2 id="modalTitle"></h2>
              <div id="modalDescription">
                <h4>Job Description</h4>
                <p></p>
                <h4>Qualifications</h4>
                <p></p>
              </div>
              <input type="button" value="Close" onclick="closeJobModal()"  id="closeJobModal">
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </main>

  <script src="../javascript/careers.js">
    // // Open the review modal
    // document.getElementById("openJobModal").onclick = function() {
    //     document.getElementById("jobModal").style.display = "block";
    // }

    // // Close the review modal
    // document.getElementById("closeJobModal").onclick = function() {
    //     document.getElementById("jobModal").style.display = "none";
    // }
  </script>

  <footer>
    <?php include'../components/footer.php' ?>
  </footer>
</body>

<!-- <div class="career-box">
          <div><img class="career-img" src="../../img/account-executive.png" alt=""></div>
          <div class="job" id="openJobModal">Accounts Executive</div>
          <div id="jobModal">
            <div class="job-content">
              <h2>Accounts Executive</h2>
              <p>To build relationships with new clients and manage relationships with existing ones. Account executive jobs exist across industries, serving as point of contact for clients and internal company teams, often interacting with both daily.</p>
              <ul style="text-align: start;">
                <li>Male/Female.</li>
                <li>Graduate of Bachelor’s Degree preferably in Business Administration, Advertising, Marketing, Mass Communication and other related course.</li>
                <li>Analytical, decision-making ang management skills.</li>
                <li>Ability to develop lasting professional relationships with clients.</li>
                <li>Strong communication, both written and verbal skills Experience on sales is a plus.</li>
              </ul>
              <input type="button" value="Close" id="closeJobModal">
            </div>
          </div>
        </div> -->