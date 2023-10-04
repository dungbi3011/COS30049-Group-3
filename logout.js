// Clear the user's session
async function logout() {
    const response = await fetch('/logout');
  
    if (response.status === 200) {
      // The user was successfully logged out
      // Redirect the user to the home page
      window.location.href = '/';
    } else {
      // The user failed to log out
      // Display an error message
      alert('Failed to log out.');
    }
  }
  
  // Call the logout function when the page loads
  window.onload = logout;
  