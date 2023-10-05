<?php 
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
}
?>

<head>
  <title>Booking Page</title>
  <?php include'../components/nav.php' ?>
  <link rel="stylesheet" href="../css/booking.css?v=<?php echo time(); ?>">
</head>
<body>
  <header class="content-title">
    <h1>Booking</h1>
  </header>

  <main>
    <div id="urModal" class="theModal">
      <div class="the-modal-content">
        <h2>Welcome to The Place Gian & Gaela's Catering Services</h2>
        <div class="terms-intro">
          <p>Welcome to our Catering Management and Reservation System! Before using our services, please read these Terms and Conditions carefully. By signing in and accessing our system, you agree to comply with and be bound by these terms and conditions.</p>
        </div>
        <p class="terms"><strong>1.</strong>&nbsp;Rates are subject to change without prior notice.</p>
        <p class="terms"><strong>2.</strong>&nbsp;Whatever changes/addition or cancellation in the services covered by this contract is forfeited made at least two weeks before the occasion. Other optional items and services must be coordinated with the Account Executive in charge of the function at least a week prior to the event.</p>
        <p class="terms"><strong>3.</strong>&nbsp;Catering Service shall end after the (4) four-hour service from the start of the event and additional fees per hour bases up to the time the last guest left the venue.</p>
        <p class="terms"><strong>4.</strong>&nbsp;Down payment shall be forfeited if there will be cancellation. A <strong>NON-REFUNDABLE</strong> and <strong>NON-TRANSFERRABLE</strong> reservation fee of PHP 10,000.00 is <strong>REQUIRED</strong> and can be paid in cash, check or e-payments (Gcash, Paymaya, or Bank Transfer).</p>
        <p class="terms"><strong>5.</strong>&nbsp;A <strong>50%</strong> deposit of the estimated package cost will be required upon signing of catering contract. Full payment shall be settled two weeks prior to the event. Incidental charges incurred during the event must be settled immediately after the function in cash. No checks will be accepted on the day of the function. Send bill arrangement will not be honored.</p>
        <p class="terms"><strong>6.</strong>&nbsp;Full payment shall be settled immediately after the occasion or on the date of the occasion.</p>
        <p class="terms"><strong>7.</strong>&nbsp;Replacing or removing amenities is not encouraged.</p>
        <div class="terms-outro">
          <p>By signing in and using our Catering Management and Reservation System, you acknowledge that you have read, understood, and agree to abide by these Terms and Conditions. If you do not agree with any of these terms, please refrain from using our services.</p>
        </div>
        <div>
          <input type="checkbox" id="closeModalCheckbox" class="close-checkbox">
          <label for="closeModalCheckbox" class="close-label">I agree to the terms & conditions</label>
          <br>
          <button id="thecloseModalBtn" class="theclose" onclick="closesModal()">Accept</button>
        </div>
      </div>
    </div>
  </main>

  <footer>
    <?php include'../components/footer.php' ?>
  </footer>


  <script>
    // Get modal and close button elements
    var modal = document.getElementById("urModal");
    var closeModalBtn = document.getElementById("thecloseModalBtn");

    // Function to open the modal
    function openModal() {
        modal.style.display = "block";
    }

    // Function to close the modal
    function closesModal() {
        modal.style.display = "none";
    }

    // Automatically open the modal when the page loads
    window.addEventListener("load", openModal);

    // Close the modal if the user clicks outside of it
    window.addEventListener("click", function(event) {
        if (event.target === modal) {
            closesModal();
        }
    });

  </script>
</body>
