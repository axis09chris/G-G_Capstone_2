// Get the modal and close button elements
var modal = document.getElementById("jobModal");
var closeModalBtn = document.getElementById("closeModalBtn");
var modalTitle = document.getElementById("modalTitle");
var modalContent = document.getElementById("modalDescription");

// Event listener for Close button
closeJobModal.addEventListener("click", function() {
    closeModal();
});

// Function to open the job modal with dynamic content
function openJobModal(jobTitle) {
    modal.style.display = "block";
    modalTitle.textContent = jobTitle;

    // Define job descriptions and qualifications (customize as needed)
    var jobDescriptions = {
        'Catering Manager': 'A Catering Manager is a professional who is responsible for monitoring the quality of food and service at their outlets. They ensure that all operations run smoothly, from cooking to serving customers, in order to achieve peak performance every day.',
        'Florist': 'To ensure success as a florist, should demonstrate accurate, updated knowledge about flowers nutritional requirements. Invariably, a terrific florist will craft robust packaging solutions to avoid preventable breakages.',
        'Marketing Staff': 'Coordinating and producing all materials representing the business. It is the Marketing Departments job to reach out to prospects, customers, investors and/or the community, while creating an overarching image that represents your company in a positive light.',
        'R&D Chef': 'The Research and Development (R&D) Chef creates new recipes to improve food product from the organisation. He/She designs new recipes in consideration of ideas and market demand for new products. He/She improves his/her recipes and preparation methods to meet mass production and regulatory needs.',
        'Accounts Executive': 'To build relationships with new clients and manage relationships with existing ones. Account executive jobs exist across industries, serving as point of contact for clients and internal company teams, often interacting with both daily.'
    };

    var jobQualifications = {
        'Catering Manager': ['Male or Female', 'Graduate of Bachelor’s Degree preferably in Business Administration, Advertising, Marketing, Mass Communication and other related course', 'At least 5 years working experience in sales', 'With leadership, auditing and reportorial skills'],
        'Florist': ['Male or Female', 'At least High School Graduate', 'Knowledge in making reports (inventories, receiving incidents)', 'Atleast one year experience as Florist'],
        'Marketing Staff': ['Male or Female', 'Graduate of Bachelor’s Degree preferably in Business Administration, Advertising, Marketing, Mass Communication and other related course', 'Knowledge in using Adobe Photoshop', 'Photography Skills'],
        'R&D Chef': ['Male or Female', 'College graduate preferably HRM or any related course', 'Work experience as Hot Kitchen Cook is an advantage', 'At least 23 years old', 'Team Player', 'Good communication skills'],
        'Accounts Executive': ['Male or Female', 'Graduate of Bachelor’s Degree preferably in Business Administration, Advertising, Marketing, Mass Communication and other related course', 'Analytical, decision-making ang management skills', 'Ability to develop lasting professional relationships with clients', 'Strong communication, both written and verbal skills Experience on sales is a plus']
    };

    // Set job description and qualifications based on the jobTitle
    var description = jobDescriptions[jobTitle];
    var qualifications = jobQualifications[jobTitle];

    modalContent.innerHTML = `
        <h4>Job Description</h4>
        <p>${description}</p>
        <h4>Qualifications</h4>
        <p>${qualifications.map(item => `- ${item}`).join("<br>")}</p>`;
}

// Function to close the job modal
function closeModal() {
    modal.style.display = "none";
}

// Close the modal if the user clicks outside of it
window.addEventListener("click", function(event) {
    if (event.target === modal) {
        closeModal();
    }
});