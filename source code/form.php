
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blood Donation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1, h2 {
            text-align: center;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="date"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 10px;
        }

        hr {
            margin: 20px 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <table>
            <!-- Your table content here -->
            <tr>
                <td>
                    <img src="blooddonatelogo.png" height="200px">
                </td>
                <td>
                    <h1>Blood Donation Form</h1>
                    <form action="https://formsubmit.co/38beb3a7099dd825f0a32d115d97598c" method="POST">
                    <p>
                        Confidential - Please answer the following questions correctly. This will help doctors to detect your health condition and the patient who receives your blood.
                    </p>
                </td>
            </tr>
        </table>
        <hr>       
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <label for="dob">Birth Date:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <p>Gender:</p>
                <label><input type="radio" name="gender" value="male">Male</label>
                <label><input type="radio" name="gender" value="female">Female</label>
            </div>
            <div class="form-group">
                <label for="occupation">Occupation:</label>
                <textarea id="occupation" name="occupation" cols="30" rows="2" required></textarea>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your valid phone number" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="yourname@gmail.com" required>
            </div>
            <div class="form-group">
                <label for="nation">Nationality:</label>
                <select name="Nationality">
                    <option>Africa</option>
                    <option>Australia</option>
                    <option>Brazil</option>
                    <option>Canada</option>
                    <option>China</option>
                    <option>Egypt</option>
                    <option>France</option>
                    <option>German</option>
                    <option>Indian</option>
                    <option>Japanese</option>
                    <option>Malaysia</option>
                </select>
            <br></br>


            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="2" placeholder="Street Name" required></textarea>
                <textarea id="address2" name="address2" rows="2" placeholder="Street Address Lane 1" required></textarea>
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" placeholder="City" required>
            </div>
            <div class="form-group">
                <label for="state">State Name:</label>
                <input type="text" id="state" name="state" placeholder="State" required>
            </div>
            <div class="form-group">
                <label for="weight">Weight (kg):</label>
                <input type="number" id="weight" name="weight" required>
            </div>
            <div class="form-group">
                <label for="pulse">Pulse:</label>
                <input type="text" id="pulse" name="pulse" required>
            </div>
            <div class="form-group">
                <label for="temperature">Temperature:</label>
                <input type="text" id="temperature" name="temperature" required>
            </div>
            <div class="form-group">
                <p>Have you donated previously?</p>
                <label><input type="radio" name="donate" value="yes">Yes</label>
                <label><input type="radio" name="donate" value="no">No</label>
                <div>
                    <label for="problem">If yes, have you had any problem during or after the donation? If yes, please specify:</label>
                    <input type="text" id="problem" name="problem">
                </div>
            </div>
            <div class="form-group">
                <p>In the last six months, have you had any of the following?</p>
                <label><input type="checkbox" name="recent_issues" value="Tattooing">Tattooing</label><br>
                <label><input type="checkbox" name="recent_issues" value="Dental extraction">Dental extraction</label><br>
                <label><input type="checkbox" name="recent_issues" value="Blood-letting">Blood-letting</label><br>
                <label><input type="checkbox" name="recent_issues" value="Body Piercing">Body Piercing</label>
            </div>
            <div class="form-group">
                <p>Are you suffering from / have ever suffered from / undergoing treatment for / had been treated for any of the following health problems?</p>
                <table>
                    <tr>
                        <td><label><input type="checkbox" name="health_issues" value="Heart Disease">Heart Disease</label></td>
                        <td><label><input type="checkbox" name="health_issues" value="Tuberculosis">Tuberculosis</label></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" name="health_issues" value="Jaundice">Jaundice</label></td>
                        <td><label><input type="checkbox" name="health_issues" value="Diabetes">Diabetes</label></td>
                    </tr>
                    <tr>
                        <td><label><input type="checkbox" name="health_issues" value="Hepatitis B or Hepatitis C">Hepatitis B or Hepatitis C</label></td>
                    </tr>
                </table>
            </div>

        <div class="form-group">
            <p>In the last 6 months, have you:</p>
            <p>a) Undergone any surgical procedure or operation?</p>
            <div class="radio-group">
                <label><input type="radio" name="surgery" value="yes"> Yes</label>
                <label><input type="radio" name="surgery" value="no"> No</label>
            </div>
            <p>b) Received any blood transfusion?</p>
            <div class="radio-group">
                <label><input type="radio" name="blood-transfusion" value="yes"> Yes</label>
                <label><input type="radio" name="blood-transfusion" value="no"> No</label>
            </div>
            <p>c) Had any accidental needle stick injury?</p>
            <div class="radio-group">
                <label><input type="radio" name="needle-injury" value="yes"> Yes</label>
                <label><input type="radio" name="needle-injury" value="no"> No</label>
            </div>
        </div>

        <div class="form-group">
            <p>Have you received any immunisation injection or any type of injection for beauty (e.g., botox, collagen) within the past 4 weeks?</p>
            <div class="radio-group">
                <label><input type="radio" name="beauty-injection" value="yes"> Yes</label>
                <label><input type="radio" name="beauty-injection" value="no"> No</label>
            </div>
            <label>If yes, please specify type and/or purpose:</label>
            <input type="text" name="beauty-injection-details">
        </div>

        <div class="form-group">
            <p>Have you had any dental treatment in the past 24 hours?</p>
            <div class="radio-group">
                <label><input type="radio" name="dental-treatment" value="yes"> Yes</label>
                <label><input type="radio" name="dental-treatment" value="no"> No</label>
            </div>
        </div>

        <div class="form-group">
            <p>Have you had any body piercing, tattooing, blood-letting / cupping (berbekam) or acupuncture done within the past 6 months?</p>
            <div class="radio-group">
                <label><input type="radio" name="piercing-tattoo" value="yes"> Yes</label>
                <label><input type="radio" name="piercing-tattoo" value="no"> No</label>
            </div>
        </div>

        <div class="form-group">
            <p>In the past 24 hours, have you taken any alcoholic drink until you were drunk or intoxicated?</p>
            <div class="radio-group">
                <label><input type="radio" name="alcohol" value="yes"> Yes</label>
                <label><input type="radio" name="alcohol" value="no"> No</label>
            </div>
        </div>

        <div class="form-group">
            <p>Have you ever received:</p>
            <p>a) Injection with human growth hormone?</p>
            <div class="radio-group">
                <label><input type="radio" name="hgh-injection" value="yes"> Yes</label>
                <label><input type="radio" name="hgh-injection" value="no"> No</label>
            </div>
            <p>b) Cornea transplant?</p>
            <div class="radio-group">
                <label><input type="radio" name="cornea-transplant" value="yes"> Yes</label>
                <label><input type="radio" name="cornea-transplant" value="no"> No</label>
            </div>
            <p>c) Brain membrane (dura mater) transplant?</p>
            <div class="radio-group">
                <label><input type="radio" name="dura-mater-transplant" value="yes"> Yes</label>
                <label><input type="radio" name="dura-mater-transplant" value="no"> No</label>
            </div>
            <p>d) Bone marrow or stem cell transplant?</p>
            <div class="radio-group">
                <label><input type="radio" name="bone-marrow-transplant" value="yes"> Yes</label>
                <label><input type="radio" name="bone-marrow-transplant" value="no"> No</label>
            </div>
        </div>

            <button type="submit">Register</button>
        </form>
    </div>
</body>

</html>
