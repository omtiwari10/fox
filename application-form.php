<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Application Form</title>
</head>

<body>

  <div class="container mt-5">



    <form method="post" action="">

      <h2 class="mb-4">Application Form</h2>

      <!-- Step 1: Select Course -->
      <div class="form-group">
        <label for="course">Step 1: Select Course*</label>
        <select class="form-control" id="course" name="course">
          <option value="dns">DNS</option>
          <option value="gme">GME</option>
          <option value="eto">ETO</option>
          <option value="gpRating">GP Rating (Fitters/Pumpman)</option>
        </select>
      </div>

      <!-- Step 2: Upload Photo -->
      <div class="form-group">
        <label for="photo">Step 2: Upload Photo*</label>
        <input type="file" class="form-control-file" id="photo" name="photo">
      </div>

      <!-- Step 3: Fill Application Form -->
      <div class="form-group">
        <label>Step 3: Fill Application Form</label>

        <!-- Personal Information -->
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="firstName">Name*</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
          </div>
          <div class="form-group col-md-4">
            <label for="middleName">Middle Name</label>
            <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name">
          </div>
          <div class="form-group col-md-4">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="dob">Date of Birth*</label>
            <input type="date" class="form-control" id="dob" name="dob">
          </div>
          <div class="form-group col-md-4">
            <label for="age">Age*</label>
            <input type="text" class="form-control" id="age" name="age" placeholder="Age">
          </div>
          <div class="form-group col-md-4">
            <label for="mobile">Mobile*</label>
            <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="gender">Gender*</label>
            <select class="form-control" id="gender" name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="email">Email Id*</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Id">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="bloodGroup">Blood Group*</label>
            <select class="form-control" id="bloodGroup" name="bloodGroup">
              <option value="A+">A+</option>
              <option value="B+">B+</option>
              <option value="O+">O+</option>
              <option value="AB+">AB+</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="maritalStatus">Marital Status*</label>
            <select class="form-control" id="maritalStatus" name="maritalStatus">
              <option value="single">Single</option>
              <option value="married">Married</option>
              <option value="divorced">Divorced</option>
              <option value="other">Other</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="aadharCard">Aadhar Card No*</label>
            <input type="text" class="form-control" id="aadharCard" name="aadharCard" placeholder="Aadhar Card No">
          </div>
          <div class="form-group col-md-4">
            <label for="panCard">PAN Card No*</label>
            <input type="text" class="form-control" id="panCard" name="panCard" placeholder="PAN Card No">
          </div>
        </div>

        <div class="form-group">
          <label for="placeOfBirth">Place of Birth*</label>
          <input type="text" class="form-control" id="placeOfBirth" name="placeOfBirth" placeholder="Place of Birth">
        </div>

        <!-- Physical Details -->
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="physicalFitness">Physical Fitness*</label>
            <select class="form-control" id="physicalFitness" name="physicalFitness">
              <option value="fit">Fit</option>
              <option value="unfit">Unfit</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="height">Height (Cms)</label>
            <input type="text" class="form-control" id="height" name="height" placeholder="Height">
          </div>
          <div class="form-group col-md-4">
            <label for="weight">Weight (Kgs)</label>
            <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight">
          </div>
        </div>

        <!-- Other Details -->
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="expenses">I Intend to meet the Expenses of the course through*</label>
            <select class="form-control" id="expenses" name="expenses">
              <option value="sponsorship">Sponsorship</option>
              <option value="selfFunding">Self Funding</option>
              <option value="scholarship">Scholarship</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="hearingAbout">Where did you hear about The Great Eastern Institute of Maritime Studies*</label>
            <select class="form-control" id="hearingAbout" name="hearingAbout">
              <option value="internet">Internet</option>
              <option value="friend">Friend</option>
              <option value="advertisement">Advertisement</option>
              <option value="other">Other</option>
            </select>
          </div>
        </div>

        <!-- Reference Information -->
        <div class="form-group">
          <label>Reference</label>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="referenceName">Name Of Person</label>
              <input type="text" class="form-control" id="referenceName" name="referenceName" placeholder="Name Of Person">
            </div>
            <div class="form-group col-md-4">
              <label for="designation">Designation</label>
              <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">
            </div>
            <div class="form-group col-md-4">
              <label for="companyName">Company Name</label>
              <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Company Name">
            </div>
          </div>
        </div>

        <!-- Online Payment Details -->
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="onlinePayment">Online payment*</label>
            <select class="form-control" id="onlinePayment" name="onlinePayment">
              <option value="paymentMade">Payment made</option>
              <option value="paymentPending">Payment pending</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="amount">Amount*</label>
            <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
          </div>
        </div>

      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>