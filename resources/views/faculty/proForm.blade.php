<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
    <link rel="stylesheet" href="{{asset('cssfile/faculty/proForm.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!--Card Header -->
    <header>
        <div class="card3" style="width: 45rem;">
            <div class="card-header">
                <a href="#" class="logo3"><img src="image/logoo.png" alt=""></a>
                <p>Hi there, welcome to Portfol-Eu!
                    May we know some of your information</p>
            </div>
    </header>
    <!-- User Information -->
    <div class="card6" style="width: 45rem; height: 35rem;">
        <div class="card-body">
            <h1>Your Name and User ID</h1>
        </div>
    <!-- User Information First Name -->
    <form method="POST" action="{{ route('proFormPost') }}">
        @csrf
        <div class="label-h">
            <h3>First name</h3>
            <p class="card-text">*</p>
        </div>
        <div class="input-container">
            <input type="text" name="fname" autocomplete="off" placeholder="Enter your name" required class="text-input">
            <label for="fname" class="label">Enter your name</label>
        </div>
    
     <!-- User Information Middle Name -->
    
        <div class="label-h1">
            <h3>Middle name</h3>
            <p class="card-text1">*</p>
        </div>
        <div class="input-container1">
            <input type="text" name="midname" autocomplete="off" placeholder="Enter your middle name" required class="text-input1">
            <label for="midname" class="label1">Enter your middle name</label>
        </div>
    
     <!-- User Information Last Name -->
     
        <div class="label-h2">
            <h3>Last name</h3>
            <p class="card-text2">*</p>
        </div>
        <div class="input-container2">
            <input type="text" name="lname" autocomplete="off" placeholder="Enter your last name" required class="text-input2">
            <label for="lname" class="label2">Enter your last name</label>
        </div>
    
    <!-- Dropdowns for Month, Date, and Year -->
        <!-- Months Dropdown -->
        <div class="label-h3">
            <h3>Birthday</h3>
            <p class="card-text3">*</p>
        </div>
        <div class="dropdown">
            <div class="select">
                <span class="selected">Month</span>
                <div class="caret"></div>
            </div>
            <ul class="menu">
                <li class="active"></li>
                <li>January</li>
                <li>February</li>
                <li>March</li>
                <li>April</li>
                <li>May</li>
                <li>June</li>
                <li>July</li>
                <li>August</li>
                <li>September</li>
                <li>October</li>
                <li>November</li>
                <li>December</li>
            </ul>
        </div>

    <!-- Dropdowns for Date -->
        <div class="dropdown1">
            <div class="select1">
                <span class="selected1">Date</span>
                <div class="caret1"></div>
            </div>
            <ul class="menu1">
                <li class="active1"></li>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li>10</li>
                <li>11</li>
                <li>12</li>
                <li>13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li>17</li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29</li>
                <li>30</li>
                <li>31</li>
            </ul>
        </div>

    <!-- Dropdowns for Year -->
         <div class="dropdown2">
            <div class="select2">
                <span class="selected2">Year</span>
                <div class="caret2"></div>
            </div>
            <ul class="menu2">
                <li class="active2"></li>
                <li>2023</li>
                <li>2022</li>
                <li>2021</li>
                <li>2020</li>
                <li>2019</li>
                <li>2018</li>
                <li>2017</li>
                <li>2016</li>
                <li>2015</li>
                <li>2014</li>
                <li>2013</li>
                <li>2012</li>
                <li>2011</li>
                <li>2010</li>
                <li>2009</li>
                <li>2008</li>
                <li>2007</li>
                <li>2006</li>
                <li>2005</li>
                <li>2004</li>
                <li>2003</li>
                <li>2002</li>
                <li>2001</li>
                <li>2000</li>
                <li>1999</li>
                <li>1998</li>
                <li>1997</li>
                <li>1996</li>
                <li>1995</li>
                <li>1994</li>
                <li>1993</li>
                <li>1992</li>
                <li>1991</li>
                <li>1990</li>
            </ul>
        </div>
    <!-- User Information User ID -->
        
            <div class="label-h4">
                <h3>User ID</h3>
                <p class="card-text4">*</p>
            </div>
            <div class="input-container4">
                <input type="text" name="userid" autocomplete="off" placeholder="Enter your User ID" required class="text-input4">
                <label for="userid" class="label4">Enter your User ID</label>
            </div>
    

    <!-- User Information -->
    <div class="card7" style="width: 45rem; height: 27rem;">
        <div class="card-body">
            <h1>Your Department and Course</h1>
        </div>
    
    <!-- Dropdowns for Department, Course, & Prof -->
        <!-- Department Dropdown -->
        <div class="label-h5">
            <h3>Department</h3>
            <p class="card-text5">*</p>
        </div>
        <div class="dropdown3">
            <div class="select3">
                <span class="selected3">Select Department</span>
                <div class="caret3"></div>
            </div>
            <ul class="menu3">
                <li class="active3"></li>
                <li>College of Architecture and Fine Arts</li>
                <li>College of Arts and Sciences</li>
                <li>College of Business and Accountancy</li>
                <li>College of Computing and Multimedia Studies</li>
                <li>College of Criminal Justice and Criminology</li>
                <li>College of Education</li>
                <li>College of Engineering</li>
                <li>College of International Hospitality and Tourism Management</li>
                <li>College of Maritime Education</li>
                <li>College of Nursing and Allied Health Sciences</li>
                <li>Enverga Law School</li>
                <li>Institute of Graduate Studies and Research</li>
                <li>MSEUF ETEEAP Center</li>
            </ul>
        </div>

         <!-- Course Dropdown -->
         <div class="label-h6">
            <h3>Handled Subject</h3>
            <p class="card-text6">*</p>
        </div>
        <div class="dropdown4">
            <div class="select4">
                <span class="selected4">Select Handled Subject</span>
                <div class="caret4"></div>
            </div>
            <ul class="menu4">
                <li class="active4"></li>
                <li>BACHELOR OF SCIENCE IN ARCHITECTURE AND FINE ARTS</li>
                <li>BACHELOR OF SCIENCE IN ARCHITECTURE ARTS AND SCIENCES</li>
                <li>BACHELOR OF SCIENCE IN BUSINESS AND ACCOUNTANCY</li>
                <li>BACHELOR OF SCIENCE IN COMPUTING IN MULTIMEDIA STUDIES</li>
                <li>BACHELOR OF SCIENCE IN CRIMINAL JUSTICE AND CIMINOLOGY</li>
                <li>BACHELOR OF SCIENCE IN BASIC EDUCATION</li>
                <li>BACHELOR OF SCIENCE IN ENGINEERING</li>
                <li>BACHELOR OF SCIENCE IN INTERNATIONAL HOSPITALITY AND TOURISM MANAGEMENT</li>
                <li>BACHELOR OF SCIENCE IN mARITIME EDUCATION</li>
                <li>Bachelor of NURSING AND ALLIED HEALTH SCIENCES</li>
                <li>Enverga Law School</li>
                <li>Institute of Graduate Studies and Research</li>
                <li>MSEUF ETEEAP Center</li>
            </ul>
        </div>
     <!-- Button -->
     <div class="main">
                <button type="submit" class="button">
                    <a href="{{ route('dashboardPage') }}" id="login">Save</a>
                </button>
                <button>
                    <a href="{{ route('faculty') }}">Discard</a>
                </button>
        </div>
        </form>
   
        <script src="jsfile/faculty/proForm.js"></script>
</body>
</html>


        