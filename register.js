const createAccountForm = document.getElementById('create-account-form');

createAccountForm.addEventListener('submit', async (event) => {
  event.preventDefault();

  const name = createAccountForm.querySelector('input[name="name"]').value;
  const email = createAccountForm.querySelector('input[name="email"]').value;
  const password = createAccountForm.querySelector('input[name="password"]').value;

  // Validate the name, email, and password

  if (name === '' || email === '' || password === '') {
    // Display an error message
    const errorMessage = document.createElement('div');
    errorMessage.classList.add('error');
    errorMessage.textContent = 'Please enter a name, email, and password.';
    createAccountForm.appendChild(errorMessage);

    return;
  }

  // Send the create account request to the server

  const response = await fetch('/create-account', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ name, email, password }),
  });

  // Handle the response from the server

  if (response.status === 200) {
    // The user account was successfully created
    // Redirect the user to the home page
    window.location.href = '/';
  } else {
    // The user account failed to be created
    // Display an error message
    const errorMessage = document.createElement('div');
    errorMessage.classList.add('error');
    errorMessage.textContent = 'Failed to create account.';
    createAccountForm.appendChild(errorMessage);
  }
});
