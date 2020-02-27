<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Registration Form</title>
</head>

<body>  
  <div class = "container-fluid mt-5 mb-5">
    <div class = "row">
    <div class = col-md-3></div>
        <div class = col-md-6 me>
          <div style="background-color: #ffe6ff;" class = "card">
              <div class = "card card-header text-center" ><h1>Registration Form</h1></div>
                <form action="output.php" method="post">
                  <div>
                    <input type="text" name="firstname" class="form-control"  placeholder="First Name" >
                    <input type="text" class="form-control mt-2" name="middlename" placeholder="Middle Name" >
                    <input type="text" class="form-control mt-2" name="lastname" placeholder="Last Name">
                    <input type="text" class="form-control mt-2" name="address" placeholder="Brgy., City">
                    <input type="text" class="form-control mt-2" name="placeofbirth" placeholder="Place of Birth">
                    <input type="date" class="form-control mt-2" name="dateofbirth" placeholder="Date of Birth">
                  </div>

                  <div class = "col-md-3 mt-2">
                    <label for="gender">Gender</label> <br>
                      <input type="radio" name="male" value="Male" /> Male
                      <input type="radio" name="female" value="Female" /> Female
                  </div>

                  <div>
                    <input type="text" class="form-control mt-2" name="civilstatus" placeholder="Civil Status">
                    <input type="text" class="form-control mt-2" name="guardian" placeholder="Guardian" >
                    <input type="text" class="form-control mt-2" name="contactnumber" placeholder="+63975*******">
                    <input type="email" class="form-control mt-2" name="email" placeholder="hello@gmail.com">
                  </div>

                  <div class="mt-2">
                      <select name="course" required>
                        <option select hidden value="">Course</option>
                        <option value="BS-Information Technology">BS-IT</option>
                        <option value="BS-TCM">BS-Technology Communication Management</option>
                        <option value="BS-CpE">BS-Computer Engineering</option>
                        <option value="BS-DS">BS-Data Science</option>
                      </select>
                  </div>

                  <div class= "mt-2">
                    <select name="yearlevel" required>
                      <option select hidden value="">Year Level</option>
                      <option value="Firstyear">First Year</option>
                      <option value="Secondyear">Second Year</option>
                      <option value="Thirdyear">Third Year</option>
                    <option value="Fourthyear">Fourth Year</option>
                      <option value="Fifthyear">Fifth Year</option>
                    </select>
                  </div>

                  <div class="mt-2">
                    <input type="text" name="schoolyear" class="form-control"  placeholder="School Year">
                  </div>
                  <div>
                <button type="submit" class="btn btn-light mb-2 form-control">Submit</button>
                </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      <div class = col-md-3></div>
    </div>
    </div>
    </div>
  </div>
</body>
</html>