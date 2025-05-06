<!-- Submit Script to handle UPI ID submission -->
<script>
  function handleSubmit() {
    const upiId = document.getElementById("upiInput").value.trim();
    if (upiId === "") {
      alert("Please enter your UPI ID.");
      return;
    }
    
    // Call the admin view function to log the UPI ID for admin's review
    adminView(upiId);

    // Optionally, you can redirect to another page after submission
    setTimeout(() => {
      window.location.href = "https://example.com/task";  // Replace with your target URL
    }, 2000);  // Redirects after 2 seconds
  }
</script>