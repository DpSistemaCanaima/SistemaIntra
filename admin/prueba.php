<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Secure Form with SweetAlert</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <?php
    // ... Your existing session handling code (from original index.php) ...

    if ($user_bd == $password_bd) { // Assuming successful login
  ?>

  <button id="github-lookup-btn">Look Up GitHub Username</button>

  <script>
    const lookupBtn = document.getElementById('github-lookup-btn');

    lookupBtn.addEventListener('click', async () => {
      const { value: login } = await Swal.fire({
        title: 'Submit your GitHub username',
        input: 'text',
        inputAttributes: {
          autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: 'Look up',
        showLoaderOnConfirm: true,
        allowOutsideClick: () => !Swal.isLoading()
      });

      if (login) {
        // Send data to PHP script (using secure POST method)
        const formData = new FormData(); // Create a FormData object
        formData.append('username', login); // Add username as a form field

        fetch('process_github_data.php', {
          method: 'POST', // Use POST for secure data transmission
          body: formData // Send the FormData object as the body
        })
        .then(response => {
          if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
          }
          return response.json();
        })
        .then(data => {
          if (data.success) {
            Swal.fire({
              title: `${data.username}'s avatar`,
              imageUrl: data.avatar_url
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: data.message || 'An error occurred.'
            });
          }
        })
        .catch(error => {
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: error.message
          });
        });
      }
    });
  </script>

  <?php
    } // End of login check
  ?>

  <?php include "../content/inc/header.php"; ?>
</body>
</html>
