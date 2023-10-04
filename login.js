const loginForm = document.getElementById('login-form');

loginForm.addEventListener('submit', async (event) => {
  event.preventDefault();

  const username = loginForm.querySelector('input[name="username"]').value;
  const password = loginForm.querySelector('input[name="password"]').value;

  // Validate the username and password

  if (username === '' || password === '') {
    // Display an error message
    const errorMessage = document.createElement('div');
    errorMessage.classList.add('error');
    errorMessage.textContent = 'Please enter a username and password.';
    loginForm.appendChild(errorMessage);

    return;
  }

  // Send the login request to the server

  const response = await fetch('/login', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ username, password }),
  });

  // Handle the response from the server

  if (response.status === 200) {
    // The user was successfully logged in
    // Redirect the user to the home page
    window.location.href = '/';
  } else {
    // The user failed to log in
    // Display an error message
    const errorMessage = document.createElement('div');
    errorMessage.classList.add('error');
    errorMessage.textContent = 'Invalid username or password.';
    loginForm.appendChild(errorMessage);
  }
});
