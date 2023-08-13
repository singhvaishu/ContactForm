<html>
  <head>
    <title>Contact Form</title>
    <style>
      /* Apply basic styling to the form */
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
      }

      h1 {
        text-align: center;
        padding: 20px 0;
      }

      form {
        width: 80%;
        max-width: 600px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }

      label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
      }

      input[type="text"],
      input[type="email"],
      textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      input[type="submit"] {
        background-color: #007bff;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-weight: bold;
      }

      /* Style the form elements on focus */
      input:focus,
      textarea:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0px 0px 5px rgba(0, 123, 255, 0.5);
      }
    </style>
  </head>
  <body>

    <h1>Contact_form</h1>
    <form action="process_form.php" method="post">
      <label for="fullname">Full Name:</label>
      <input type="text" id="fullname" name="fullname" required /><br /><br />

      <label for="phone">Phone Number:</label>
      <input type="text" id="phone" name="phone" required /><br /><br />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required /><br /><br />

      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" required /><br /><br />

      <label for="message">Message:</label><br />
      <textarea
        id="message"
        name="message"
        rows="4"
        cols="50"
        required
      ></textarea
      ><br /><br />

      <input type="submit" value="Submit" />
    </form>
  </body>
</html>
