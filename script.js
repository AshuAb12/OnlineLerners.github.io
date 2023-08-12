function submitForm(event) {
    event.preventDefault();
  
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
  
    // Validate input (add your own validation rules if needed)
    if (username.trim() === '' || password.trim() === '') {
      alert('Please fill in all fields.');
      return;
    }
  
    // Simulate server-side login check (replace this with real server-side validation)
    const validUsername = 'Admin'; // Replace with your valid username
    const validPassword = 'Test@123'; // Replace with your valid password
  
    if (username === validUsername && password === validPassword) {
      // Redirect to the new HTML page on successful login
      window.location.href = 'open.php';
    } else {
      alert('Invalid username or password.');
    }
}