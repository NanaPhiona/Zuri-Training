<!DOCTYPE html>
<html>

<head>
    <title>Working with files and forms</title>
</head>

<body>
    //Form for capturing the data
    <form method='POST'>
        <label for='first_name'>
            First Name:<input type='text' name='first_name' required><br>
        </label><br>
        <label for='last_name'>
            Last Name:<input type='text' name='last_name' required><br>
        </label><br>
        <label for='other_names'>
            Other Names:<input type='text' name='other_names'><br>
        </label><br>
        <label for='email'>
            Email:<input type='email' name='email' required><br>
        </label><br>
        <label for='phone'>
            Phone: <input type='tel' name='phone' required><br>
        </label><br>
        <label>
            Gender:
            <select name='gender' required>
                <option>Male</option>
                <option>Female</option>
            </select><br>
        </label><br>
        <button type='submit'>Submit</button>
    </form>

    <?php
    //Checking for the request method and handling the user input
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $other_names = $_POST['other_names'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];

        //Error handler for any in captured error
        $errors = [];

        //Checking for errors in the inputs so as to meet the required data
        if (!preg_match("/^[a-zA-Z-' ]*$/", $first_name)) {
            $errors[] = "Only letters and white space allowed for the first name.";
        }
        if (!preg_match("/^[a-zA-Z-' ]*$/", $last_name)) {
            $errors[] = "Only letters and white space allowed for the last name.";
        }
        if ($other_names && !preg_match("/^[a-zA-Z-' ]*$/", $other_names)) {
            $errors[] = "Only letters and white space allowed for other names.";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid Email format.";
        }
        $phone = trim($phone);  // Trim any whitespace
        if (!preg_match('/^\+256\d+|0783\d+$/', $phone)) {
            $errors[] = "Enter a valid phone number.";
        }

        //Writing the captured user inputs to database.json if there is no errors in the user inputs
        if (count($errors) == 0) {
            $filename = './bio.json';
            $handle = fopen($filename, 'w');
            fwrite($handle, "First Name: " . $first_name . "\n");
            fwrite($handle, "Last Name: " . $last_name . "\n");
            fwrite($handle, "Other Names: " . $other_names . "\n");
            fwrite($handle, "Email: " . $email . "\n");
            fwrite($handle, "Phone: " . $phone . "\n");
            fwrite($handle, "Gender: " . $gender . "\n");
            fclose($handle);

            echo "Data successfully written to file.<br>";
            echo "First Name: " . $first_name . "<br>";
            echo "Last Name: " . $last_name . "<br>";
            echo "Other Names: " . $other_names . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Phone: " . $phone . "<br>";
            echo "Gender: " . $gender . "<br>";
        } else {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        }
    }
    ?>
</body>

</html>